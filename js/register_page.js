const register = document.getElementById('register');
const inputs = document.querySelectorAll('#register input');

const expressions = {
    username: /^[a-zA-Z0-9\_\-]{4,15}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    password: /^.{4,12}$/
}

const fields = {
    username: false,
    birth: true,
    gender: true,
    email: false,
    password: false,
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

inputs.forEach((input) => {
    input.addEventListener('keyup', validateForm);
    input.addEventListener('blur', validateForm);
});

register.addEventListener('submit', (event) => {
    event.preventDefault();

    if(fields.username && fields.birth && fields.gender && fields.email && fields.password) {
        register.reset();

        document.getElementById('register__complete').classList.add('register__complete-active');
        setTimeout(() => {
            document.getElementById('register__complete').classList.remove('register__complete-active');
        }, 3000);

        document.querySelectorAll('.register__group--correct').forEach((icon) => {
            icon.classList.remove('register__group--correct');
        });
    } else {
        document.getElementById('register__message').classList.add('register__message-active');
        setTimeout(() => {
            document.getElementById('register__message').classList.remove('register__message-active');
        }, 3000);
    }
});

var registerData = function () {
    var usernameData = document.getElementById('username').value;
    var genderData = document.getElementById('gender').value;
    var birthData = document.getElementById('birth').value;
    var emailData = document.getElementById('email').value;
    var passwordData = document.getElementById('password').value;
    console.log(usernameData+" "+genderData+" "+birthData+" "+emailData+" "+passwordData+".");
}