const input_token = document.getElementById('id');


const registerNft = document.getElementById('register');
const inputsNft = document.querySelectorAll('#register input');
const input_name = document.getElementById('name_nft');
const input_power = document.getElementById('power_nft');
const input_rank = document.getElementById('rank_nft');
const input_class = document.getElementById('class_nft');
const input_price = document.getElementById('price_nft');
const input_owner = document.getElementById('owner_nft');
const input_img_p = document.getElementById('p_img');
const input_img_c = document.getElementById('c_img');







/* |---- Function token ----|*/
const GenerateID = () => {

    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';

    let id = '';

    for (let i = 0; i < 9; i++) {
        id += characters.charAt(Math.floor(Math.random() * characters.length))
    }

    return id;

}

let token = GenerateID();

input_token.value = token;


const expressionsNFT = {
    name: /^[a-zA-Z]{4,15}$/,
    power: /^[0-9]{3,4}$/,
    price: /^[0-9]{2,5}$/,
    owner: /^[a-zA-Z0-9]{4,15}$/
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
        case "nft_name":
            validateFieldsNFT(expressionsNFT.name, event.target);
            break;
        case "nft_power":
            validateFieldsNFT(expressionsNFT.power, event.target);
            break;
        case "nft_price":
            validateFieldsNFT(expressionsNFT.price, event.target);
            break;
    }
}


const validateFieldsNFT = (expressionNFT, inputNFT) => {

    if (expressionNFT.test(inputNFT.value)) {
        document.getElementById(`register_${inputNFT.name}`).classList.remove('register__group--incorrect');
        document.getElementById(`register_${inputNFT.name}`).classList.add('register__group--correct');
        document.querySelector(`#register_${inputNFT.name} i`).classList.remove('fa-circle-xmark');
        document.querySelector(`#register_${inputNFT.name} i`).classList.add('fa-circle-check');

        document.querySelector(`#register__${inputNFT.name}`).classList.remove('register__input--error-active');

        fieldsInitial[inputNFT.name.slice(4)] = true;
    } else {
        document.getElementById(`register_${inputNFT.name}`).classList.add('register__group--incorrect');
        document.getElementById(`register_${inputNFT.name}`).classList.remove('register__group--correct');
        document.querySelector(`#register_${inputNFT.name} i`).classList.add('fa-circle-xmark');
        document.querySelector(`#register_${inputNFT.name} i`).classList.remove('fa-circle-check');

        document.querySelector(`#register__${inputNFT.name}`).classList.add('register__input--error-active');

        fieldsInitial[inputNFT.name.slice(4)] = false;
    }
}

function validateImage() {
    let archive = document.getElementById('nft_image').value,
        extension = archive.substring(archive.lastIndexOf('.'), archivo.length);

    if (document.getElementById('nft_image').getAttribute('accept').split(',').indexOf(extension) < 0) {
        alert('Archivo inválido. No se permite la extensión ' + extension);
    }
}

inputsNft.forEach((input) => {
    input.addEventListener('keyup', validateFormNfts);
    input.addEventListener('blur', validateFormNfts);
});

registerNft.addEventListener('submit', (event) => {
    event.preventDefault();
    if (fieldsInitial.name && fieldsInitial.power && fieldsInitial.price) {
        // registerNft.reset();

        document.getElementById('register_complete').classList.add('register_complete-active');
        setTimeout(() => {
            document.getElementById('register_complete').classList.remove('register_complete-active');
        }, 3000);

        document.querySelectorAll('.register__group--correct').forEach((icon) => {
            icon.classList.remove('register__group--correct');
        });



        let ruta = input_img_p.files[0];
        let rInputImg = new FileReader();

        let aver = rInputImg.readAsDataURL(ruta);

        // console.log( document.querySelector('#register') );
        console.log(aver);



        // document.querySelector('.form__hidden').submit();
        document.querySelector('#register').submit();




    } else {
        document.getElementById('register_message').classList.add('register__message-active');
        setTimeout(() => {
            document.getElementById('register_message').classList.remove('register__message-active');
        }, 3000);
    }
});