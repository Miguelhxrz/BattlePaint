
const registerNft = document.getElementById('register');
const inputsNft = document.querySelectorAll('#register input');
const input_name = document.getElementById('name_nft');
const input_power = document.getElementById('power');
const input_rank = document.getElementById('rank');
const input_class = document.getElementById('class');
const input_price = document.getElementById('price');
const input_owner = document.getElementById('owner');

/* |---- for PHP ----|*/
const nft_token = document.querySelector('#nft__token');
const nft_name = document.querySelector('#nft__name');
const nft_power = document.querySelector('#nft__power');
const nft_class = document.querySelector('#nft__class');
const nft_rank = document.querySelector('#nft__rank');
const nft_owner = document.querySelector('#nft__owner');
const nft_price = document.querySelector('#nft__price');

// console.log(input_price);

/* |---- Function token ----|*/
const GenerateID = () => {

    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    let id = '';

    for (let i = 0; i < 22; i++) {
        id += characters.charAt(Math.floor(Math.random() * characters.length))
    }
    
    return id;

}

let token = GenerateID();


const expressionsNFT = {
    name: /^[a-zA-Z]{8,15}$/,
    power: /^[0-9]{3,3}$/,
    price: /^[0-9]{2,5}$/,
    owner: /^[a-zA-Z0-9]{8,15}$/
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

/* function validateImage() {
    let archive = document.getElementById('nft_image').value,
        extension = archive.substring(archive.lastIndexOf('.'), archivo.length);

    if(document.getElementById('nft_image').getAttribute('accept').split(',').indexOf(extension) < 0) {
        alert('Archivo inválido. No se permite la extensión ' + extension);
    }
} */

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


        nft_token.value = token;
        nft_name.value = input_name.value;
        nft_power.value = input_power.value;
        nft_class.value = input_class.value;
        nft_rank.value = input_rank.value;
        nft_owner.value = input_owner.value;
        nft_price.value = input_price.value;

        console.log(nft_name.value); //no sirve
        console.log(nft_power.value);
        console.log(nft_class.value);
        console.log(nft_rank.value);
        console.log(nft_owner.value);
        console.log(nft_price.value);

        setTimeout(() => { 

            // document.querySelector('.form__hidden').submit();

            // window.location.href = '../view/marketplace.php';
        
        },3000)


    } else {
        document.getElementById('register__message').classList.add('register__message-active');
        setTimeout(() => {
            document.getElementById('register__message').classList.remove('register__message-active');
        }, 3000);
    }
});