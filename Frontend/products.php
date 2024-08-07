
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Products</title>
    <link rel="stylesheet" href="   style.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet"
    />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-[#edf6f9] min-h-screen flex flex-col">
    <!-- Header -->
    <div id="header"></div>

    <script type="module">
        import { AfficherHeader } from "./components/Header.js";
        document.addEventListener("DOMContentLoaded", () => {
            const header = AfficherHeader();
            document.getElementById("header").appendChild(header);
        });
    </script>

     <!-- Main Content -->
     <div id="root" class="flex-grow h-full" style="height: 500px;">
        <div id="productsBalls">
            <a href="#">Fetch Products</a>
  
        </div>
        <div id="products-container">
 
            <!-- Les produits seront affichés ici -->
        </div>
    </div>


     <!-- Footer -->
     <footer style="background-color:#83C5BE;" class="py-8">
        <div class="container mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Left Column -->
            <div class="flex flex-col items-center">
                <div class="flex items-center">
                    <img
                        src="/assets/logo-png-removebg-preview.png"
                        alt="Logo"
                        class="w-16 h-18 mx-6"
                    />
                    <div>
                        <ul class="space-y-6">
                            <li>
                                <a
                                    href="#"
                                    class="hover:underline text-lg font-bold font-lobster-two"
                                    style="color: #01555c"
                                    >Raquettes</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="hover:underline text-lg font-bold font-lobster-two"
                                    style="color: #01555c"
                                    >Chaussures</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="hover:underline text-lg font-bold font-lobster-two"
                                    style="color: #01555c"
                                    >Sacs</a
                                >
                            </li>
                            <li>
                                <a
                                    href="#"
                                    class="hover:underline text-lg font-bold font-lobster-two"
                                    style="color: #01555c"
                                    >Balles</a
                                >
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Middle Column -->
            <div class="flex flex-col items-center border-x border-black">
                <div class="mb-4 flex flex-col items-center">
                    <a href="#" class="flex items-center hover:underline">
                        <img
                            src="/assets/icons8-user-96.png"
                            alt="Icon"
                            class="w-8 h-8 mr-2"
                        />
                        <span class="font-bold" style="color: #01555c">Profil</span>
                    </a>
                </div>
                <div class="mb-4 flex flex-col items-center">
                    <a href="#" class="flex items-center hover:underline">
                        <img
                            src="/assets/icons8-shopping-cart-90.png"
                            alt="Icon"
                            class="w-8 h-8 mr-2"
                        />
                        <span class="font-bold" style="color: #01555c">Panier</span>
                    </a>
                </div>
                <div class="mt-8">
                    <a
                        href="#"
                        class="italic text-sm hover:underline"
                        style="color: #01555c"
                        >Conditions Générales d'Utilisation</a
                    >
                </div>
            </div>

            <!-- Right Column -->
            <div class="flex flex-col items-center">
                <h3
                    class="text-xl font-bold mb-4 font-lobster-two"
                    style="color: #01555c"
                >
                    Nous retrouver
                </h3>
                <div class="space-y-8 text-center">
                    <p class="font-bold" style="color: #01555c">8 Rue d'Hozier</p>
                    <p class="font-bold" style="color: #01555c">13002 Marseille</p>
                    <p class="font-bold" style="color: #01555c">La Plateforme_</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="/script/products.js"></script>
</body>
</html>
