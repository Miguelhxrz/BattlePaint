const login = document.getElementById('login__container');
const inputs = document.querySelectorAll('#login__container input');

const fieldsInit = {
    username: false,
    password: false
}

const validateLogin = (event) => {
    switch (event.target.name) {
        case "username":
            validateFieldsLogin(event.target, event.target.name);
        break;
        case "password":
            validateFieldsLogin(event.target, event.target.name);
        break;
    }
}

const validateFieldsLogin = (inputLogin, fieldLogin) => {
    if(inputLogin.value) {
        document.querySelector(`#register__${fieldLogin} .register__input--error`).classList.remove('register__input--error-active');

        fieldsInit[fieldLogin] = true;
    } else {
        document.querySelector(`#register__${fieldLogin} .register__input--error`).classList.add('register__input--error-active');

        fieldsInit[fieldLogin] = false;
    }
}

login.addEventListener('submit', (event) => {
    event.preventDefault();

    if(fieldsInit.username && fieldsInit.password) {
        login.reset();

    } else {
        login.reset();

        document.getElementById('register__message').classList.add('register__message-active');
        setTimeout(() => {
            document.getElementById('register__message').classList.remove('register__message-active');
        }, 3000);
    }
});