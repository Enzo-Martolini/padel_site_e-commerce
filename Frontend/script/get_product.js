async function fetchProducts() {
    try {
        // Remplacez l'URL par le chemin vers votre script PHP
        const response = await fetch('/backend/routes/get_product.php');
        if (!response.ok) {
            throw new Error('Network response was not ok');
        }
        // Convertir la réponse en JSON
        const data = await response.json();
        return data;

    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
    }
}

// Fonction pour récupérer les produits depuis l'API
async function fetchProducts() {
    try {
        const response = await fetch('/backend/routes/get_product.php');
        if (!response.ok) {
            throw new Error('Network response was not ok: ' + response.status + ' ' + response.statusText);
        }
        const data = await response.json();
        return data; // Retourner les données des produits
    } catch (error) {
        console.error('There was a problem with the fetch operation:', error);
    }
}

// Fonction principale pour récupérer les produits et les afficher
async function displayProductCards() {
    const products = await fetchProducts();
    if (products) {
        const cardWrapper = document.querySelector('.card_wrapper');
        
        products.forEach(product => {
            const category = JSON.parse(product.category);
            const subcategory = JSON.parse(product.subcategory);

            const card = document.createElement('div');
            card.className = 'card';
            card.style.border = 'solid #01555C 2px';
            card.style.width = '250px';

            const img = document.createElement('img');
            img.src = `../../${product.img_src}`;
            img.alt = '';
            img.style.width = '250px';
            card.appendChild(img);

            const description = document.createElement('div');
            description.className = 'description';
            card.appendChild(description);

            const ul = document.createElement('ul');
            ul.className = 'card_list';

            const liName = document.createElement('li');
            liName.className = 'card_name';
            liName.textContent = product.name;
            ul.appendChild(liName);

            const liPrice = document.createElement('li');
            liPrice.className = 'card_price';
            liPrice.textContent = `${product.price} €`;
            ul.appendChild(liPrice);

            const liType = document.createElement('li');
            liType.className = 'card_brand';
            liType.textContent = category
            ul.appendChild(liType);
            
            const liBrand = document.createElement('li');
            liBrand.className = 'card_gender';
            liBrand.textContent = subcategory[0]
            ul.appendChild(liBrand);

            const liGender = document.createElement('li');
            liGender.className = 'card_gender';
            liGender.textContent = subcategory[1]
            ul.appendChild(liGender);

            description.appendChild(ul);

            const button = document.createElement('button');
            button.className = 'card_button';

            const buttonImg = document.createElement('img');
            buttonImg.src = '../assets/icon-shopping-cart.png';
            buttonImg.alt = '';
            buttonImg.width = 35;
            buttonImg.className = 'addToCart';
            button.appendChild(buttonImg);

            card.appendChild(button);

            cardWrapper.appendChild(card);
        });
    } else {
        console.error('No products data received');
    }
}

displayProductCards()

