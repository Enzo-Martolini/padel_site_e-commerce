var banner = document.getElementById("banner");

function afficherBanner(number) {
  if (number === 1) {
    banner.innerHTML = "";
    var a = document.createElement("a");
    var imageA = document.createElement("img");
    imageA.className = "h-72";
    imageA.src = "/assets/PackPadel.png";
    a.appendChild(imageA);
    a.href = "#";
    banner.appendChild(a);
  } else if (number === 2) {
    console.log("hehehe");
    return `
    <div class="flex " id="newProduct" style="background-color: #edf6f9">
      <div
         style="border: solid #01555c 3px;"
        class="mx-auto max-w-2xl px-4 py-16 sm:px-8 sm:py-1 lg:max-w-7xl lg:px-8"
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
                  <a href="details.php">
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
    `;
  }
}
afficherBanner(1);
function carouselBanner() {
  let valeur = 1;
  setInterval(function () {
    valeur = valeur === 1 ? 2 : 1;
    if (valeur === 1) {
      console.log(1);
      afficherBanner(1);
    } else {
      banner.innerHTML = afficherBanner(2);
      console.log(2);
    }
  }, 5000);
}
carouselBanner();
