let arrayInput = {
    name: "",
    price: "",
    description: "",
    category: "",
    subcategory: [],
};

btn_modify = document.querySelector('.product-modification')


document.addEventListener('DOMContentLoaded', (event) => {

    const modifyButtons = document.querySelectorAll('.modify-btn-pen');
    modifyButtons.forEach((btn) => {
        btn.addEventListener('click', (event) => {
            event.preventDefault();
            if (btn.classList.contains('modify-btn-pen')) {
                modify(event);
            } else if (btn.classList.contains('modify-btn-valide')) {
                validate(event);
                updateProduct(event);
            }
        });
    });
});

function modify(event) {
    const btn = event.target;
    const productDiv = btn.closest('.product');
    const pTags = productDiv.querySelectorAll('p.modifiable');
    pTags.forEach((pTag) => {
        if (!pTag.classList.contains("id")) {
            const input = document.createElement('input');
            input.type = 'text';
            input.className = 'modify-input'
            input.value = pTag.innerText;
            pTag.remove();
            productDiv.insertBefore(input, btn_modify);
        }
    });
    
    btn.src="../assets/icon_check.png"
    btn.className='modify-btn-valide'
}

function validate(event) {
    const btn = event.target;
    const productDiv = btn.closest('.product');
    const inputModified = productDiv.querySelectorAll('.modify-input');
    let i = 0;
    inputModified.forEach(inputModified => {
        i++;
        switch(i) {
            case 1:
                arrayInput['name'] = inputModified.value;
                break;
            case 2:
                arrayInput['price'] = inputModified.value;
                break;
            case 3:
                arrayInput['description'] = inputModified.value;
                break;
            case 4:
                arrayInput['category'] = inputModified.value
                break;
            case 5 :
                arrayInput['subcategory'][0] = inputModified.value
                break;
            case 6 :
                arrayInput['subcategory'][1] = inputModified.value
                break;
            default:
                console.log("Valeur non prise en charge");
        }
        inputModified.remove();

    });
    // Parcourez chaque clé dans arrayInput
    for (let key in arrayInput) {
        if (key !== 'subcategory') {
            p = document.createElement('p')
            p.className = 'modifiable'
            p.innerText=arrayInput[key]
            console.log(arrayInput[key])
            productDiv.insertBefore(p, btn_modify);
        } else {
            arrayInput[key].forEach(element => {
                p = document.createElement('p')
                p.className = 'modifiable'
                p.innerText=element
                console.log(element)
                productDiv.insertBefore(p, btn_modify);
            });
        }
    }
    btn.src="../assets/icon_pen.png"
    btn.className='modify-btn-pen'

    console.log('le subcategory ' + arrayInput['subcategory'][0])

}

function updateProduct(event){
    const btn = event.target;
    const productDiv = btn.closest('.product');
    id = productDiv.querySelector(".id").innerText;
    var data = {
    id_product: id,
    name: arrayInput['name'],
    price: arrayInput['price'],
    description: arrayInput['description'],
    category: arrayInput['category'],
    subcategory: arrayInput['subcategory'],
};

fetch('http://localhost:8000/backend/api.php', {
    method: 'POST',
    headers: {
        'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
})
.then(response => response.json())
.then(data => console.log(data))
.catch((error) => console.error('Error:', error));

}
