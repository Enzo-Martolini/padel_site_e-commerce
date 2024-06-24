// ./pages/Layout/components/Header.js
export function createHoverModal(link, categories, brands) {
  // Create modal container
  const modalContainer = document.createElement("div");
  modalContainer.className =
    "fixed flex items-center justify-center bg-opacity-50 hidden";
  modalContainer.style.zIndex = "1000";

  // Create modal content
  const modalContent = document.createElement("div");
  modalContent.className = "p-2 rounded shadow-lg";
  modalContent.style.backgroundColor = "#EDF6F9";
  modalContent.style.width = "200px";

  // Create categories section
  const categoriesTitle = document.createElement("h3");
  categoriesTitle.className = "text-lg font-bold mb-2";
  categoriesTitle.style.fontFamily = "Lobster Two";
  categoriesTitle.style.color = "#01555C";
  categoriesTitle.textContent = "Catégories";
  modalContent.appendChild(categoriesTitle);

  const categoriesList = document.createElement("ul");
  categoriesList.className = "mb-4";
  categories.forEach((category) => {
    const listItem = document.createElement("li");
    const linkItem = document.createElement("a");
    linkItem.href = `#${category.toLowerCase()}`;
    linkItem.className = "text-blue-500 hover:underline";
    linkItem.textContent = category;
    listItem.appendChild(linkItem);
    categoriesList.appendChild(listItem);
  });
  modalContent.appendChild(categoriesList);

  // Create brands section
  const brandsTitle = document.createElement("h3");
  brandsTitle.className = "text-lg font-bold mb-2";
  brandsTitle.textContent = "Marques:";
  brandsTitle.style.fontFamily = "Lobster Two";
  brandsTitle.style.color = "#01555C";
  modalContent.appendChild(brandsTitle);

  const brandsList = document.createElement("ul");
  brands.forEach((brand) => {
    const listItem = document.createElement("li");
    const linkItem = document.createElement("a");
    linkItem.href = `#${brand.toLowerCase()}`;
    linkItem.className = "text-blue-500 hover:underline";
    linkItem.textContent = brand;
    listItem.appendChild(linkItem);
    brandsList.appendChild(listItem);
  });
  modalContent.appendChild(brandsList);

  // Append modal content to container
  modalContainer.appendChild(modalContent);

  // Append modal container to body
  document.body.appendChild(modalContainer);

  // Position the modal just below the link
  const linkRect = link.getBoundingClientRect();
  modalContainer.style.top = `${linkRect.bottom}px`;
  modalContainer.style.left = `${linkRect.left}px`;

  // Show modal on hover
  let isMouseOverModal = false;

  link.addEventListener("mouseover", () => {
    modalContainer.classList.remove("hidden");
  });

  modalContainer.addEventListener("mouseover", () => {
    isMouseOverModal = true;
    modalContainer.classList.remove("hidden");
  });

  // Hide modal on mouseout, but only if not hovering over modal
  link.addEventListener("mouseout", () => {
    setTimeout(() => {
      if (!isMouseOverModal) {
        modalContainer.classList.add("hidden");
      }
    }, 0); // Adjust the delay as needed to prevent accidental closure
  });

  modalContainer.addEventListener("mouseout", () => {
    isMouseOverModal = false;
    modalContainer.classList.add("hidden");
  });
}

export function AfficherHeader() {
  const header = document.createElement("header");
  header.className = "flex items-center justify-around";
  header.style.backgroundColor = "#83C5BE";

  // Logo
  const logoLink = document.createElement("a");
  logoLink.href = "#";
  const logo = document.createElement("img");
  logo.src = "../assets/logo-png-removebg-preview.png";
  logo.alt = "Logo";
  logo.className = "h-12";
  logoLink.appendChild(logo);
  header.appendChild(logoLink);

  // Navigation Links
  const navLinks = document.createElement("nav");
  navLinks.className = "flex space-x-4 m-6";

  const links = ["Raquettes", "Chaussures", "Sacs", "Balles"];
  links.forEach((text) => {
    const link = document.createElement("a");
    link.href = "#";
    link.textContent = text;
    link.className = "text-xl px-8 font-bold hover-link"; // Add hover-link class
    link.style.fontFamily = "Lobster Two";
    link.style.color = "#01555C";
    navLinks.appendChild(link);

    // Ajouter le listener de survol uniquement sur le lien "Raquettes"
    if (text === "Raquettes") {
      link.classList.add("hover-link"); // Ajoutez la classe hover-link uniquement au lien "Raquettes"
      link.addEventListener("mouseover", () => {
        const categories = ["Femmes", "Hommes", "Enfants"];
        const brands = [
          "Head",
          "BullPadel",
          "Babolat",
          "Kuikma",
          "Nox",
          "Adidas",
        ];
        createHoverModal(link, categories, brands);
      });
    }

    if (text === "Chaussures") {
      link.classList.add("hover-link"); // Ajoutez la classe hover-link uniquement au lien "Raquettes"
      link.addEventListener("mouseover", () => {
        const categories = ["Femmes", "Hommes", "Enfants"];
        const brands = [
          "Head",
          "BullPadel",
          "Babolat",
          "Kuikma",
          "Nox",
          "Adidas",
        ];
        createHoverModal(link, categories, brands);
      });
    }

    
   if (text === "Sacs") {
      link.classList.add("hover-link"); // Ajoutez la classe hover-link uniquement au lien "Raquettes"
      link.addEventListener("mouseover", () => {
        const categories = ["Femmes", "Hommes"];
        const brands = [
          "Head",
          "BullPadel",
          "Babolat",
          "Kuikma",
          "Nox",
          "Adidas",
        ];
        createHoverModal(link, categories, brands);
      });
    }

  });

  header.appendChild(navLinks);

  // Profile and Cart Icons
const iconsContainer = document.createElement("div");
iconsContainer.className = "flex space-x-4 relative"; // 'relative' added for dropdown positioning

const profileLink = document.createElement("a");
profileLink.href = "#";
const profileIcon = document.createElement("img");
profileIcon.src = "../assets/icons8-user-96.png";
profileIcon.alt = "Profile";
profileIcon.className = "h-9 border-r-2 p-1 border-black size-9";
profileLink.appendChild(profileIcon);

// Create the dropdown menu
const dropdownMenu = document.createElement("div");
dropdownMenu.className = "hidden absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none";
dropdownMenu.setAttribute("role", "menu");
dropdownMenu.setAttribute("aria-orientation", "vertical");
dropdownMenu.setAttribute("aria-labelledby", "menu-button");
dropdownMenu.setAttribute("tabindex", "-1");

// Add the menu items
dropdownMenu.innerHTML = `
  <div class="py-1" role="none">
    <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-0">Voir Profil</a>
    <form method="POST" action="#" role="none">
      <button type="submit" class="block w-full px-4 py-2 text-left text-sm text-gray-700" role="menuitem" tabindex="-1" id="menu-item-3">Déconnexion</button>
    </form>
  </div>
`;

// Append the dropdown menu to the profile link container
profileLink.appendChild(dropdownMenu);
iconsContainer.appendChild(profileLink);

// Cart Icon
const cartLink = document.createElement("a");
cartLink.href = "#";
const cartIcon = document.createElement("img");
cartIcon.src = "../assets/icons8-shopping-cart-90.png";
cartIcon.alt = "Cart";
cartIcon.className = "h-8 px-2";
cartLink.appendChild(cartIcon);
iconsContainer.appendChild(cartLink);

// Append iconsContainer to the header
header.appendChild(iconsContainer);

// Add event listener to toggle the dropdown menu
profileLink.addEventListener("click", (event) => {
  event.preventDefault();
  dropdownMenu.classList.toggle("hidden");
});

// Add a click listener to the document to close the dropdown when clicking outside
document.addEventListener("click", (event) => {
  if (!profileLink.contains(event.target)) {
    dropdownMenu.classList.add("hidden");
  }
});

// Create the slide over panel for the cart
const slideOverPanel = document.createElement("div");
slideOverPanel.className = "hidden fixed inset-0 overflow-hidden z-50";
slideOverPanel.innerHTML = `
  <div class="absolute inset-0 overflow-hidden">
    <div class="absolute inset-0 bg-gray-500 bg-opacity-75 transition-opacity" aria-hidden="true"></div>
    <div class="fixed inset-y-0 right-0 flex max-w-full pl-10">
      <div class="relative w-screen max-w-lg">
        <div class="h-full flex flex-col py-6 bg-white shadow-xl overflow-y-scroll">
          <div class="px-4 sm:px-6">
            <div class="flex items-start justify-between">
              <h2 class="text-lg font-medium text-gray-900" id="slide-over-title">Mon Panier</h2>
              <div class="ml-3 h-7 flex items-center">
                <button type="button" class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" id="close-slide-over">
                  <span class="sr-only">Close panel</span>
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="mt-6 relative flex-1 px-4 sm:px-6">
            <!-- Shopping cart items -->
            <div class="absolute inset-0 px-4 sm:px-6">
              <div class="h-full" aria-hidden="true">
                <ul role="list" class="divide-y divide-gray-200">
                  <li class="py-6 flex">
                    <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                      <img src="https://via.placeholder.com/150" alt="Product Image" class="h-full w-full object-cover object-center">
                    </div>
                    <div class="ml-4 flex flex-1 flex-col">
                      <div>
                        <div class="flex justify-between text-base font-medium text-gray-900">
                          <h3>
                            <a href="#">Nom du Produit</a>
                          </h3>
                          <p class="ml-4">$99.99</p>
                        </div>
                        <p class="mt-1 text-sm text-gray-500">Description du Produit</p>
                      </div>
                      <div class="flex flex-1 items-end justify-between text-sm">
                        <p class="text-gray-500">Quantité: 1</p>
                        <div class="flex">
                          <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">Supprimer</button>
                        </div>
                      </div>
                    </div>
                  </li>
                  <!-- Add more items here -->
                </ul>
              </div>
            </div>
            <!-- /End replace -->
          </div>
        </div>
      </div>
    </div>
  </div>
`;
document.body.appendChild(slideOverPanel);

// Add event listener to show the slide over panel when the cart icon is clicked
cartLink.addEventListener("click", (event) => {
  event.preventDefault();
  slideOverPanel.classList.remove("hidden");
});

// Add event listener to close the slide over panel
const closeSlideOverButton = document.getElementById("close-slide-over");
closeSlideOverButton.addEventListener("click", () => {
  slideOverPanel.classList.add("hidden");
});



  return header;
}
