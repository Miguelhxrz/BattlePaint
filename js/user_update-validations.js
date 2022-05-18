const register = document.getElementById('update');
const inputs = document.querySelectorAll('#update input');

const input_username = document.getElementById('username');
const input_email = document.getElementById('email');
const input_password = document.getElementById('password');

/* |---- for php ----|*/
const new_username = document.querySelector('#new_username');
const new_email = document.querySelector('#new_email');
const new_password = document.querySelector('#new_password');


const expressions = {
    username: /^[a-zA-Z0-9\_\-]{6,16}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    password: /^.{8,20}$/ 
}

const fields = {
    username: false,
    email: false,
    password: false,
}

const validateFields = (expression, input, field) => {
    if(expression.test(input.value)) {
        document.getElementById(`register__${field}`).classList.remove('register__group--incorrect');
        document.getElementById(`register__${field}`).classList.add('register__group--correct');
        document.querySelector(`#register__${field} i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#register__${field} i`).classList.add('fa-circle-check');

        document.querySelector(`#register__${field} .register__input--error`).classList.remove('register__input--error-active');
    
        fields[field] = true;
    } else {
        document.getElementById(`register__${field}`).classList.add('register__group--incorrect');
        document.getElementById(`register__${field}`).classList.remove('register__group--correct');
        document.querySelector(`#register__${field} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#register__${field} i`).classList.remove('fa-circle-check');

        document.querySelector(`#register__${field} .register__input--error`).classList.add('register__input--error-active');
    
        fields[field] = false;
    }
}

const validateForm = (event) => {
    switch (event.target.name) {
        case "username":
            validateFields(expressions.username, event.target, event.target.name);
        break;

        case "email":
            validateFields(expressions.email, event.target, event.target.name);
        break;

        case "password":
            validateFields(expressions.password, event.target, event.target.name);
        break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validateForm);
    input.addEventListener('blur', validateForm);
});

register.addEventListener('submit', (event) => {
    event.preventDefault();

    if (fields.username && fields.email && fields.password) {

        document.getElementById('register__complete').classList.add('register__complete-active');
        setTimeout(() => {
            document.getElementById('register__complete').classList.remove('register__complete-active');
        }, 3000);

        document.querySelectorAll('.register__group--correct').forEach((icon) => {
            icon.classList.remove('register__group--correct');
        });

        new_username.value = input_username.value;
        new_email.value = input_email.value;
        new_password.value = input_password.value;

        console.log(new_username.value);
        console.log(new_email.value);
        console.log(new_password.value);

        setTimeout( () => {
            
            document.querySelector('.form__hidden').submit();


        }, 3000);



    } else {
        document.getElementById('register__message').classList.add('register__message-active');
        setTimeout(() => {
            document.getElementById('register__message').classList.remove('register__message-active');
        }, 3000);
    }
});