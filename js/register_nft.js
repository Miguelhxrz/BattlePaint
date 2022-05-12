const registerNft = document.getElementById('register');
const inputsNft = document.querySelectorAll('#register input');

const expressionsNFT = {
    name: /^[a-zA-Z]{4,15}$/,
    power: /^[a-zA-Z]{4,15}$/,
    price: /^[0-9].+$/,
    owner: /^[a-zA-Z0-9\_\-]{4,15}$/
}

const fieldsInitial = {
    name: false,
    power: false,
    rank: true,
    class: true,
    price: false,
    owner: false
}

const validateFormNfts = (event) => {
    switch (event.target.name) {
        case "name":
            validateFieldsNFT(expressionsNFT.name, event.target, event.target.name);
        break;
        case "power":
            validateFieldsNFT(expressionsNFT.power, event.target, event.target.name);
        break;
        case "price":
        validateFieldsNFT(expressionsNFT.price, event.target, event.target.name);
        break;
        case "owner":
        validateFieldsNFT(expressionsNFT.owner, event.target, event.target.name);
        break;
    }
}

const validateFieldsNFT = (expressionNFT, inputNFT, fieldNFT) => {
    if(expressionNFT.test(inputNFT.value)) {
        document.getElementById(`register__${fieldNFT}`).classList.remove('register__group--incorrect');
        document.getElementById(`register__${fieldNFT}`).classList.add('register__group--correct');
        document.querySelector(`#register__${fieldNFT} i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#register__${fieldNFT} i`).classList.add('fa-circle-check');

        document.querySelector(`#register__${fieldNFT} .register__input--error`).classList.remove('register__input--error-active');
    
        fieldsInitial[fieldNFT] = true;
    } else {
        document.getElementById(`register__${fieldNFT}`).classList.add('register__group--incorrect');
        document.getElementById(`register__${fieldNFT}`).classList.remove('register__group--correct');
        document.querySelector(`#register__${fieldNFT} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#register__${fieldNFT} i`).classList.remove('fa-circle-check');

        document.querySelector(`#register__${fieldNFT} .register__input--error`).classList.add('register__input--error-active');
    
        fieldsInitial[fieldNFT] = false;
    }
}

function validateImage() {
    let archive = document.getElementById('nft_image').value,
        extension = archive.substring(archive.lastIndexOf('.'), archivo.length);

    if(document.getElementById('nft_image').getAttribute('accept').split(',').indexOf(extension) < 0) {
        alert('Archivo inválido. No se permite la extensión ' + extension);
    }
}

inputsNft.forEach((input) => {
    input.addEventListener('keyup', validateFormNfts);
    input.addEventListener('blur', validateFormNfts);
});

registerNft.addEventListener('submit', (event) => {
    event.preventDefault();

    if(fieldsInitial.name && fieldsInitial.power && fieldsInitial.price && fieldsInitial.owner) {
        registerNft.reset();

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