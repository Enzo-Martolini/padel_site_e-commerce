// ./pages/Layout/components/Header.js
export function createHoverModal(link, categories, brands) {
  // Create modal container
  const modalContainer = document.createElement("div");
  modalContainer.className = "fixed flex items-center justify-center bg-opacity-50 hidden";
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
    linkItem.style.fontFamily = "Lobster Two";
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
    linkItem.style.fontFamily = "Lobster Two";
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
    }, 200); // Adjust the delay as needed to prevent accidental closure
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
  });

  header.appendChild(navLinks);

  // Profile and Cart Icons
  const iconsContainer = document.createElement("div");
  iconsContainer.className = "flex space-x-4";

  const profileLink = document.createElement("a");
  profileLink.href = "#";
  const profileIcon = document.createElement("img");
  profileIcon.src = "../assets/icons8-user-96.png";
  profileIcon.alt = "Profile";
  profileIcon.className = "h-9 border-r-2 p-1 border-black size-9";
  profileLink.appendChild(profileIcon);
  iconsContainer.appendChild(profileLink);

  const cartLink = document.createElement("a");
  cartLink.href = "#";
  const cartIcon = document.createElement("img");
  cartIcon.src = "../assets/icon-shopping-cart.png";
  cartIcon.alt = "Cart";
  cartIcon.className = "h-8 px-2";
  cartLink.appendChild(cartIcon);
  iconsContainer.appendChild(cartLink);

  header.appendChild(iconsContainer);

  return header;
}
