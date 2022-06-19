const register = document.getElementById('register');
const inputs = document.querySelectorAll('#register input');
const input_id = document.getElementById('id');
const input_username = document.getElementById('username');
const input_password = document.getElementById('password');
const input_email = document.getElementById('email');
const input_birth = document.getElementById('birth')
const input_gender = document.getElementById('gender');

/* |---- PHP Inputs----|*/

const form_hidden = document.querySelector('.form__hidden'); //-> form

const user_id = document.querySelector('#user_id');
const user_username = document.querySelector('#user_username');
const user_password = document.querySelector('#user_password');
const user_email = document.querySelector('#user_email');
const user_birth = document.querySelector('#user_birth');
const user_gender = document.querySelector('#user_gender');

/* |---- Function id ----|*/

const GenerateID = () => {

    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    let id = '';

    for (let i = 0; i < 12; i++) {
        id += characters.charAt(Math.floor(Math.random() * characters.length))
    }
    
    return id;

}

let id_user = GenerateID();

input_id.value = id_user;

// regular expressions
const expressions = {
    username: /^[a-zA-Z0-9\_\-]{6,16}$/,
    email: /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/,
    password: /^.{8,20}$/
}

const fields = {
    username: false,
    birth: false,
    gender: true,
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

// validate Date
const dateOfBirth = document.getElementById('birth');
const age = document.getElementById('edad');

const calculateAge = (dateOfBirth) => {
    const currentDate = new Date();
    const currentYear = parseInt(currentDate.getFullYear());
    const currentMonth = parseInt(currentDate.getMonth()) + 1;
    const currentDay = parseInt(currentDate.getDate());

    // YYYY-MM-DD
    const yearOfBirth = parseInt(String(dateOfBirth).substring(0,4))
    const monthOfBirth = parseInt(String(dateOfBirth).substring(5,7))
    const dayOfBirth = parseInt(String(dateOfBirth).substring(8,10))

    let age = currentYear - yearOfBirth;
    if(currentMonth < monthOfBirth) {
        age--;
    } else if(currentMonth == monthOfBirth) {
        if(currentDay < dayOfBirth) {
            age--;
        }
    }
    return age;
}

window.addEventListener('load', function () {
    dateOfBirth.addEventListener('change', function () {
        if(this.value) {
            if(calculateAge(this.value) >= 18) {
                document.querySelector('#register__birth .register__input--error').classList.remove('register__input--error-active');
    
                fields.birth = true;
            } else {
                document.querySelector('#register__birth .register__input--error').classList.add('register__input--error-active');
    
                fields.birth = false;
            }
        }
    });
});

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

// show messages
register.addEventListener('submit', (event) => {
    event.preventDefault();

    if(fields.username && fields.birth && fields.gender && fields.email && fields.password) {

        document.getElementById('register__complete').classList.add('register__complete-active');
        setTimeout(() => {
            document.getElementById('register__complete').classList.remove('register__complete-active');
        }, 3000);

        document.querySelectorAll('.register__group--correct').forEach((icon) => {
            icon.classList.remove('register__group--correct');
        });

        user_id.value = input_id.value;
        user_username.value = input_username.value;
        user_password.value = input_password.value;
        user_email.value = input_email.value;
        user_birth.value = input_birth.value;
        user_gender.value = input_gender.value;

        setTimeout(() => { 

            document.querySelector('.form__hidden').submit();
        
        },3000)

    } else {
        document.getElementById('register__message').classList.add('register__message-active');
        setTimeout(() => {
            document.getElementById('register__message').classList.remove('register__message-active');
            
        }, 3000);
    }
});
