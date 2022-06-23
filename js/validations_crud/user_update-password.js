const form = document.getElementById('form__edit');
const inputs = document.querySelectorAll('#form__edit input');

const input_name = document.getElementById('name');

// regular expressions
const expressions = {
    username: /^[a-zA-Z0-9\_\-]{6,16}$/
}

const field = {
    username: false
}

const validarForm = (e) => {
    switch(e.target.name) {
        case "name":
            if (expressions.username.test(e.target.value)) {
                field.username = true;
            } else {
                field.username = false;
            }
        break;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarForm);
    input.addEventListener('blur', validarForm);
});

form.addEventListener('submit', (e) => {
    
    if (field.username) { 
    } else {
        e.preventDefault();
        document.getElementById('register__message').classList.add('register__message-active');
        setTimeout(() => {
            document.getElementById('register__message').classList.remove('register__message-active');
        }, 3000);
    }
});