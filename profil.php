<?php 
include_once "../../backend/api.php";
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>

    <!--Polices-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kulim+Park:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/profil.css">
</head>
<body>

    <div id="personnal_information">
        <h4>Mes informations</h4>
        <p><?= $_SESSION['name']?></p>
        <p><?= $_SESSION['surname']?></p>
        <p><?= $_SESSION['mail']?></p>
    </div>
    <div id="password_modification">
        <h4>Modifier mon mot de passe</h4>
        <form action="" method="post" id="login_form">
            <div class="div_input">
            <input type="password" name="actual_password" id="actual_password" placeholder="mot de passe actuel">
            <img src="../assets/close_eye.png" width="20px" alt="" srcset="" id="eye_actual_password">
            </div>
            <div class="div_input">
            <input type="password" name="new_password" id="new_password" placeholder="Nouveau mot de passe">
            <img src="../assets/close_eye.png" width="20px" alt="" srcset="" id="eye_new_password">
            </div>
            <div class="div_input">
            <input type="password" name="verify_new_password" id="verify_new_password" placeholder="Nouveau mot de passe">
            <img src="../assets/close_eye.png" width="20px" alt="" srcset="" id="eye_verify_new_password">
            </div>
            <button type="submit" id="button">Changer le mot de passe</button> 
        </form>

        <?php
        //Fonction de modication de mot de passe
            if (isset($_POST['actual_password']) && isset($_POST['new_password']) && isset($_POST['verify_new_password']))
            {
                changePassword($_SESSION['id'], $_POST['actual_password'], $_POST['new_password'], $_POST['verify_new_password']);
            }
        ?>
    </div>
    <div id="historical">
        <div>
            <?php 
            //Récupère toutes les commandes qui ont l'id du user
            $result = getCommand($_SESSION['id']);

                foreach ($result as $value){
                    //Affiche le numéro des commandes
                    echo <<<HTML
                    <div class="historic">
                        <h4>Numero de commande : {$value['id']}<h4>
                    </div>
                    HTML;
                if (isset($value['id'])){
                    $result = getHistoric($value['id']);
                    //Affiche les articles de chaques commandes
                    foreach ($result as $value){
                        echo <<<HTML
                        <div class="command">
                            <p>Produit : {$value['id_name']}<p>
                            <p>Quantité : {$value['quantity']}<p>
                            <p>Prix : {$value['price']}<p>
                        </div>
                        HTML;
                    }
                } 
            }
            ?>
        </div>
    </div>
    <script src="../script/profil.js"></script>
</body>
</html>



