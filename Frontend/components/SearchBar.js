export function afficherSearchBar () {
    
const containerSearchBar = document.getElementById('searchBarContainer');

const searchBar = document.createElement('div');
searchBar.id = "searchBar";

const input = document.createElement('input');
input.type = "text";
input.className = "searchTerm";
input.placeholder = "Entre ta recherche";

const button = document.createElement('button');
button.type = "submit";
button.className = "searchButton";

const image = document.createElement('img');
image.src = "./assets/icon-glass-white.png";

button.appendChild(image);
searchBar.appendChild(input);
searchBar.appendChild(button);
containerSearchBar.appendChild(searchBar);

}
