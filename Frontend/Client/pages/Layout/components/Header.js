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
    link.className = "text-xl px-8 font-bold";
    link.style.fontFamily= "lobster Two"
    link.style.color= "#01555C";
    navLinks.appendChild(link);
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
  profileIcon.className = "h-9 border-r-2 p-1 border-black size-9  ";
  profileLink.appendChild(profileIcon);
  iconsContainer.appendChild(profileLink);

  const cartLink = document.createElement("a");
  cartLink.href = "#";
  const cartIcon = document.createElement("img");
  cartIcon.src = "../assets/icons8-shopping-cart-90.png";
  cartIcon.alt = "Cart";
  cartIcon.className = "h-8 px-2";
  cartLink.appendChild(cartIcon);
  iconsContainer.appendChild(cartLink);

  header.appendChild(iconsContainer);

  // Append header to body or any other container
  document.body.appendChild(header);
}


