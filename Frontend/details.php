<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Détails</title>
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

    <div style="background-color: #edf6f9">
      <div class="pt-6 py-12">
        <!-- Container for image and details -->
        <div class="mx-auto max-w-7xl px-8 lg:flex lg:gap-x-8">
          <!-- Image section -->
          <div class="flex-shrink-0 lg:w-1/2">
            <div class="aspect-h-2 aspect-w-2 overflow-hidden rounded-lg">
              <img
                src="/assets/shoes_woman_1-removebg-preview.png"
                alt="chaussureKuikma"
                class="h-full w-full object-cover object-center lg:h-full lg:w-full"
              />
            </div>
          </div>

          <!-- Product details section -->
          <div class="mt-6 lg:mt-0 lg:w-1/2">
            <div class="lg:border-r lg:border-gray-200 lg:pr-8">
              <h1
                style="color: #01555c"
                class="text-2xl font-bold tracking-tight font-lobster-two sm:text-3xl"
              >
                Chaussures de Padel Kuikma
              </h1>
              <div class="mt-6">
                <h3 class="sr-only">Notes</h3>
                <div class="flex items-center">
                  <div class="flex items-center">
                    <svg
                      class="h-5 w-5 flex-shrink-0 text-gray-900"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <svg
                      class="h-5 w-5 flex-shrink-0 text-gray-900"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <svg
                      class="h-5 w-5 flex-shrink-0 text-gray-900"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <svg
                      class="h-5 w-5 flex-shrink-0 text-gray-900"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd"
                      />
                    </svg>
                    <svg
                      class="h-5 w-5 flex-shrink-0 text-gray-200"
                      viewBox="0 0 20 20"
                      fill="currentColor"
                      aria-hidden="true"
                    >
                      <path
                        fill-rule="evenodd"
                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                        clip-rule="evenodd"
                      />
                    </svg>
                  </div>
                  <p class="sr-only">4 sur 5 étoiles</p>
                  <a
                    href="#"
                    style="color: #01555c"
                    class="ml-3 text-sm font-bold hover:text-indigo-500"
                    >117 avis</a
                  >
                </div>
              </div>

              <form class="mt-10">
                <div class="mt-10">
                  <div class="flex items-center justify-between">
                    <h3 style="color: #01555c" class="text-sm font-bold">
                      Tailles
                    </h3>
                  </div>

                  <fieldset aria-label="Choose a size" class="mt-4">
                    <div
                      class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4"
                    >
                      <label
                        class="group relative flex cursor-not-allowed items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium uppercase text-gray-200 hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                      >
                        <input
                          type="radio"
                          name="size-choice"
                          value="XXS"
                          disabled
                          class="sr-only"
                        />
                        <span style="color: #01555c">35</span>
                        <span
                          aria-hidden="true"
                          class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200"
                        >
                          <svg
                            class="absolute inset-0 h-full w-full stroke-2 text-gray-200"
                            viewBox="0 0 100 100"
                            preserveAspectRatio="none"
                            stroke="currentColor"
                          >
                            <line
                              x1="0"
                              y1="100"
                              x2="100"
                              y2="0"
                              vector-effect="non-scaling-stroke"
                            />
                          </svg>
                        </span>
                      </label>
                      <label
                        class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                      >
                        <input
                          type="radio"
                          name="size-choice"
                          value="XS"
                          class="sr-only"
                        />
                        <span style="color: #01555c">36</span>
                        <span
                          class="pointer-events-none absolute -inset-px rounded-md"
                          aria-hidden="true"
                        ></span>
                      </label>
                      <label
                        class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                      >
                        <input
                          type="radio"
                          name="size-choice"
                          value="S"
                          class="sr-only"
                        />
                        <span style="color: #01555c">37</span>
                        <span
                          class="pointer-events-none absolute -inset-px rounded-md"
                          aria-hidden="true"
                        ></span>
                      </label>
                      <label
                        class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                      >
                        <input
                          type="radio"
                          name="size-choice"
                          value="M"
                          class="sr-only"
                        />
                        <span style="color: #01555c">38</span>
                        <span
                          class="pointer-events-none absolute -inset-px rounded-md"
                          aria-hidden="true"
                        ></span>
                      </label>
                      <label
                        class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                      >
                        <input
                          type="radio"
                          name="size-choice"
                          value="L"
                          class="sr-only"
                        />
                        <span style="color: #01555c">39</span>
                        <span
                          class="pointer-events-none absolute -inset-px rounded-md"
                          aria-hidden="true"
                        ></span>
                      </label>
                      <label
                        class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                      >
                        <input
                          type="radio"
                          name="size-choice"
                          value="XL"
                          class="sr-only"
                        />
                        <span style="color: #01555c">40</span>
                        <span
                          class="pointer-events-none absolute -inset-px rounded-md"
                          aria-hidden="true"
                        ></span>
                      </label>
                      <label
                        class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                      >
                        <input
                          type="radio"
                          name="size-choice"
                          value="XXL"
                          class="sr-only"
                        />
                        <span style="color: #01555c">41</span>
                        <span
                          class="pointer-events-none absolute -inset-px rounded-md"
                          aria-hidden="true"
                        ></span>
                      </label>
                      <label
                        class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium uppercase text-gray-900 shadow-sm hover:bg-gray-50 focus:outline-none sm:flex-1 sm:py-6"
                      >
                        <input
                          type="radio"
                          name="size-choice"
                          value="XXXL"
                          class="sr-only"
                        />
                        <span style="color: #01555c">42</span>
                        <span
                          class="pointer-events-none absolute -inset-px rounded-md"
                          aria-hidden="true"
                        ></span>
                      </label>
                    </div>
                  </fieldset>
                </div>
                <p
                  style="color: #01555c"
                  class="text-2xl font-bold tracking-tight mt-4"
                >
                  65€
                </p>
                <button
                  type="submit"
                  style="background-color: #83c5be"
                  style="color: #01555c"
                  class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent px-8 py-3 text-base font-bold hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                >
                  Ajouter au panier
                </button>
              </form>

              <!-- Product description section -->
              <div class="mt-10">
                <h3
                  style="color: #01555c"
                  class="text-xl font-bold font-lobster-two"
                >
                  Description
                </h3>
                <div style="color: #01555c" class="mt-4 space-y-6 text-base">
                  <p class="text-black italic">
                    Les chaussures de padel pour femme de la marque Kuikma
                    offrent un parfait équilibre entre confort, performance et
                    style. Conçues spécialement pour le padel, elles disposent
                    d'une semelle extérieure en caoutchouc anti-dérapante pour
                    une adhérence optimale sur le terrain. Leur tige en mesh
                    respirant assure une excellente aération, tandis que le
                    renfort au niveau des orteils et du talon garantit une
                    meilleure protection et durabilité.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer style="background-color: #83c5be" class="py-8">
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
