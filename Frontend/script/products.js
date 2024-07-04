// Fonction pour récupérer les produits depuis l'API

async function fetchProducts() {
    try {
        const response = await fetch('../../backend/routes/get_product.php');
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
async function displayProductCards(products) {
    if (products && products.length > 0) {
        const cardWrapper = document.querySelector('.card_wrapper');
        cardWrapper.innerHTML = '';
        
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
        console.log('no result');
        const cardWrapper = document.querySelector('.card_wrapper');
        cardWrapper.innerHTML = '';
        noResult = document.createElement('p');
        noResult.textContent = "Aucuns resultats trouvés";
        cardWrapper.appendChild(noResult);
        }
}

async function filter($filter) {
    const products = await fetchProducts();
    if (products) {
        const filteredProducts = products.filter(product => {
            const category = JSON.parse(product.category);
            const subcategory = JSON.parse(product.subcategory);
            const brand = subcategory[0];
            const gender = subcategory[1] || '';

            return product.name.includes($filter) ||
                product.description.includes($filter) ||
                category.includes($filter) ||
                brand.includes($filter) ||
                gender.includes($filter);
        });
        return filteredProducts;
    }
    return [];
}

async function redirectionFilter(category, subcategory) {
    const products = await fetchProducts();
    switch(category){
        case 'Raquettes':
            category='racket'
            break;
        case 'Chaussures':
            category='shoes'
            break;
        case 'Sacs':
            category='bag'
            break;
    }

    switch(subcategory){
        case 'Femmes':
            subcategory='woman'
            break;
        case 'Hommes':
            subcategory='man'
            break;
        case 'Enfants':
            subcategory='kid'
            break;
    }

    console.log(subcategory);

    if (products) {
        const filteredProducts = products.filter(product => {
            let productCategory = JSON.parse(product.category);
            let productSubcategory = JSON.parse(product.subcategory);
            let brand = productSubcategory[0];
            let gender = productSubcategory[1] || '';

            subcategory = subcategory.toLowerCase()
            productCategory = productCategory.toLowerCase();

            category = category.toLowerCase()
            brand = brand.toLowerCase();
            gender = gender.toLowerCase();

            const matchesCategory = productCategory.includes(category);
            const matchesSubcategory = brand.includes(subcategory) || gender.includes(subcategory);

            return matchesCategory && matchesSubcategory;
        });
        return filteredProducts;
    }
    return [];
}


(async function() {
    const products = await fetchProducts();

    const urlParams = new URLSearchParams(window.location.search);
    const brand = urlParams.get('brand');
    const category = urlParams.get('type');

    if(brand&&category){
        console.log(brand)
        const filteredProducts = await redirectionFilter(category, brand);
        displayProductCards(filteredProducts);
    } else {
        displayProductCards(products);}
})();

document.getElementById("searchBar").addEventListener('input', async function() {
    const filterValue = this.value;
    const filteredProducts = await filter(filterValue);
    displayProductCards(filteredProducts);
});



