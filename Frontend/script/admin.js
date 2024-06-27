document.addEventListener('DOMContentLoaded', (event) => {
    //Slectionne tout les bouton vert
    const modifyButtons = document.querySelectorAll('.modify-btn-pen');
    modifyButtons.forEach((btn) => {
        //Ajoute un evenement sur chaque boutons
        btn.addEventListener('click', (event) => {
            event.preventDefault();
            const productDiv = event.target.closest('.product');
            const pTags = productDiv.querySelectorAll('p');
            pTags.forEach((pTag) => {
                //Crée des inputs avec le text dans p comme value, puis reset p
                const input = document.createElement('input');
                input.type = 'text';
                input.className = 'modify-input'
                input.value = pTag.innerText;
                pTag.innerText = '';
                pTag.appendChild(input);
            });
        });
    });
});
