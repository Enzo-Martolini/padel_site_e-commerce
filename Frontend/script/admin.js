let arrayInput = {
    name: "",
    price: "",
    description: "",
    category: "",
    subcategory: "",
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
                arrayInput['category'] = inputModified.value;
                break;
            case 5:
                arrayInput['subcategory'] = inputModified.value;
                break;
            default:
                console.log("Valeur non prise en charge");
        }
        inputModified.remove();

    });
    // Parcourez chaque clé dans arrayInput
    for (let key in arrayInput) {
        p = document.createElement('p')
        p.className = 'modifiable'
        p.innerText=arrayInput[key]
        console.log(arrayInput[key])
        productDiv.insertBefore(p, btn_modify);
    }
    btn.src="../assets/icon_pen.png"
    btn.className='modify-btn-pen'
}
