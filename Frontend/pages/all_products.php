<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/all_product.css">
    <link rel="stylesheet" href="../style.css" />
     <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
</head>
<body>
    <div id="header"></div> 

    <script type="module">
      import { AfficherHeader } from "../components/Header.js";
      document.addEventListener("DOMContentLoaded", () => {
        const header = AfficherHeader();
        document.getElementById("header").appendChild(header);
      });
    </script>

    <div class="divSearchBar">
        <form action="" method="">
          <input type="text" placeholder="Faites une recherche" id="searchBar"><div class="divImage"><button><img src="../assets/icon-glass.png" width="20px"></button></div></input>
        </form>
    </div>

    <div class="card_container">
        <div class="card_wrapper" style="display:grid">

        </div>
    </div>
    <script src="../script/products.js"></script>
</body>
</html>