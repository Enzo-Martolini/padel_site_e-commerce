<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Lobster+Two:wght@700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body style="background-color: #edf6f9">
    <div id="root"></div>

    <script type="module">
      import { AfficherHeader } from "./components/Header.js";

      document.addEventListener("DOMContentLoaded", () => {
        const header = AfficherHeader();
        document.getElementById("header").appendChild(header);
      });
    </script>
    <div id="header"></div>

    <div class="flex items-center justify-center">
      <div id="banner" class="m-14 flex items-center justify-center h-72"></div>
    </div>
    <br />

    <h2
      class="font-bold flex ml-40 text-xl font-lobster-two"
      style="color: #01555c" 
    >
      Nos Produits phares
    </h2>

    <div style="background-color: #edf6f9">
      <div
        class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-6 lg:max-w-7xl lg:px-8"
      >
        <div
          class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8"
        >
          <div class="group relative">
            <div
              class="bg-gray-200 mb-4 flex justify-center p-8 rounded-md font-bold"
            >
              <h2 style="color: #01555c">RAQUETTES</h2>
            </div>
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-100 lg:aspect-none group-hover:opacity-75 lg:h-26"
            >
              <img
                src="/assets/racket_1.png"
                alt="Raquette1"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full"
              />
            </div>
          </div>
          <div class="group relative">
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-100 lg:aspect-none group-hover:opacity-75 lg:h-22"
            >
              <img
                src="/assets/bag_1.png"
                alt="Sac_Head"
                class="h-l w-full object-cover object-center lg:h-72 lg:w-full"
              />
            </div>
            <div
              class="bg-gray-200 mt-4 flex justify-center p-7 rounded-md font-bold"
            >
              <h2 style="color: #01555c">SACS</h2>
            </div>
          </div>
          <div class="group relative">
            <div
              class="bg-gray-200 mb-4 flex justify-center p-8 rounded-md font-bold"
            >
              <h2 style="color: #01555c">BALLES</h2>
            </div>
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-100 lg:aspect-none group-hover:opacity-75 lg:h-26"
            >
              <img
                src="/assets/ball_1.png"
                alt="Balles"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full"
              />
            </div>
          </div>
          <div class="group relative">
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-72"
            >
              <img
                src="/assets/shoes_1.png"
                alt="Raquette2"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full"
              />
            </div>
            <div
              class="bg-gray-200 mt-4 flex justify-center p-7 rounded-md font-bold"
            >
              <h2 style="color: #01555c">SACS</h2>
            </div>
          </div>
          <!-- More products... -->
        </div>
      </div>
    </div>

    <div class="py-24 sm:py-32" style="background-color: #edf6f9">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <h2
          class="text-center text-xl font-bold leading-8 font-lobster-two"
          style="color: #01555c"
        >
          Retrouvez les marques qui nous ont fait confiance
        </h2>
        <div
          class="mx-auto mt-10 grid max-w-lg grid-cols-4 items-center gap-x-8 gap-y-8 sm:max-w-xl sm:grid-cols-6 sm:gap-x-10 lg:mx-0 lg:max-w-none lg:grid-cols-6"
        >
          <img
            class="col-span-2 max-h-12 w-full object-contain lg:col-span-1"
            src="/assets/logo-adidas.png"
            alt="Adidas"
            width="100"
            height="48"
          />
          <img
            class="col-span-2 max-h-16 w-full object-contain lg:col-span-1"
            src="/assets/logo-bullpadel.png"
            alt="bullpadel"
            width="100"
            height="48"
          />
          <img
            class="col-span-2 max-h-8 w-32 object-contain lg:col-span-1"
            src="/assets/logo_babolat.png"
            alt="babolat"
            width="100"
            height="48"
          />
          <img
            class="col-span-2 max-h-10 w-full object-contain sm:col-start-2 lg:col-span-1"
            src="/assets/logo_head.png"
            alt="head"
            width="100"
            height="48"
          />
          <img
            class="col-span-2 max-h-14 w-full object-contain sm:col-start-2 lg:col-span-1"
            src="/assets/logo_nox.png"
            alt="nox"
            width="150"
            height="44"
          />
          <img
            class="col-span-2 col-start-2 max-h-4 w-full object-contain sm:col-start-auto lg:col-span-1"
            src="/assets/logo_kuikma.png"
            alt="kuikma"
            width="100"
            height="48"
          />
        </div>
      </div>
    </div>
    <div class="flex hidden " id="newProduct" style="background-color: #edf6f9">
      <div
         style="border: solid #01555c 3px;"
        class="mx-auto max-w-2xl px-4 py-16 sm:px-8 sm:py-1 lg:max-w-7xl lg:px-4"
      >
        <div
          class="grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-6"
        >
          <div class="group relative w-fit">
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-56 lg:w-56"
            >
              <img
                src="/assets/shoes_woman_1-removebg-preview.png"
                alt="chaussureKuikma"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full"
              />
            </div>
            <div class="mt-4 flex-column">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Paire de chaussures Kuikma
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Femmes</p>
              </div>
              <p class="text-sm font-medium text-gray-900">65€</p>
            </div>
          </div>
          <div class="group relative w-fit">
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-56 lg:w-56"
            >
              <img
                src="/assets/racket_kid_2-removebg-preview.png"
                alt="raquetteBullpadel"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full"
              />
            </div>
            <div class="mt-4 flex-column">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Raquette BullPadel
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Enfants</p>
              </div>
              <p class="text-sm font-medium text-gray-900">78€</p>
            </div>
          </div>
          <div class="group relative">
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-56 lg:w-56 flex items-center justify-center"
            >
              <h3
                class="font-bold text-4xl font-lobster-two"
                style="color: #01555c"
              >
                Retrouvez nos derniers produits mis en ligne
              </h3>
            </div>
          </div>
          <div class="group relative w-fit">
            <div
              class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-100 lg:aspect-none group-hover:opacity-75 lg:h-56 lg:w-56"
            >
              <img
                src="/assets/bag_3.png"
                alt="sacBabolat"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full"
              />
            </div>
            <div class="mt-4 flex-column">
              <div>
                <h3 class="text-sm text-gray-700">
                  <a href="#">
                    <span aria-hidden="true" class="absolute inset-0"></span>
                    Sac Padel Babolat
                  </a>
                </h3>
                <p class="mt-1 text-sm text-gray-500">Edition Juan Lebron</p>
              </div>
              <p class="text-sm font-medium text-gray-900">120€</p>
            </div>
          </div>
          <!-- More products... -->
        </div>
      </div>
    </div>
    <footer class="py-8" style="background-color: #83c5be">
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
    <script src="/script/banner.js"></script>
  </body>
</html>