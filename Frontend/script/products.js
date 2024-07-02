document.addEventListener("DOMContentLoaded", function () {
  const fetchProductsLink = document.getElementById("productsBalls");

  fetchProductsLink.addEventListener("click", function (event) {
    event.preventDefault(); // Empêche le lien de naviguer

    // Faire la requête à l'API
    fetch("../../backend/classes/product.php?action=getAllProduct")
      .then((response) => response.json())
      .then((products) => {
        displayProducts(products);
      })
      .catch((error) => console.error("Erreur:", error));
  });

  function displayProducts(products) {
    const productsContainer = document.getElementById("products-container");

    productsContainer.innerHTML = ""; // Vide le conteneur avant d'ajouter les nouveaux produits

    products.forEach((product) => {
      const productCard = `
        <div class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img src="${product.img_src}" alt="${product.name}" class="h-full w-full object-cover object-center lg:h-full lg:w-full">
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-sm text-gray-700">
                <a href="#">
                  <span aria-hidden="true" class="absolute inset-0"></span>
                  ${product.name}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">${product.description}</p>
            </div>
            <p class="text-sm font-medium text-gray-900">${product.price}</p>
          </div>
        </div>
      `;
      productsContainer.innerHTML += productCard;
    });
  }
});
