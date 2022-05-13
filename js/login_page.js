const login = document.getElementById('login__container');
const inputs = document.querySelectorAll('#login__container input');

const expressionsLogin = {
    username: /^[a-zA-Z0-9\_\-]{4,15}$/,
    password: /^.{4,12}$/
}

const fieldsInit = {
    username: false,
    password: false
}

const validateLogin = (event) => {
    switch (event.target.name) {
        case "username":
            validateFieldsLogin(expressionsLogin.username, event.target, event.target.name);
        break;
        case "password":
            validateFieldsLogin(expressionsLogin.password, event.target, event.target.name);
        break;
    }
}

const validateFieldsLogin = (expresionLogin, inputLogin, fieldLogin) => {
    if(expresionLogin.test(inputLogin.value)) {
        document.getElementById(`register__${fieldLogin}`).classList.remove('register__group--incorrect');
        document.getElementById(`register__${fieldLogin}`).classList.add('register__group--correct');
        document.querySelector(`#register__${fieldLogin} i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#register__${fieldLogin} i`).classList.add('fa-circle-check');

        document.querySelector(`#register__${fieldLogin} .register__input--error`).classList.remove('register__input--error-active');

        fieldsInit[fieldLogin] = true;
    } else {
        document.getElementById(`register__${fieldLogin}`).classList.add('register__group--incorrect');
        document.getElementById(`register__${fieldLogin}`).classList.remove('register__group--correct');
        document.querySelector(`#register__${fieldLogin} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#register__${fieldLogin} i`).classList.remove('fa-circle-check');

        document.querySelector(`#register__${fieldLogin} .register__input--error`).classList.add('register__input--error-active');

        fieldsInit[fieldLogin] = false;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validateLogin);
    input.addEventListener('blur', validateLogin);
});

login.addEventListener('submit', (event) => {
    event.preventDefault();

    if(fieldsInit.username && fieldsInit.password) {
        login.reset();

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