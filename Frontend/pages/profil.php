<?php
    include_once "../../backend/classes/user.php";
    include_once "../../backend/classes/order.php";
    include_once "../../backend/classes/product.php";

session_start();

if (!isset($_SESSION['id'])){
    header('Location: login.php');
    exit();
}
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
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Kulim+Park:ital,wght@0,200;0,300;0,400;0,600;0,700;1,200;1,300;1,400;1,600;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/profil.css">
</head>

<body>

    <div id="personnal_information">
        <h4>Mes informations</h4>
        <p><?= $_SESSION['name'] ?></p>
        <p><?= $_SESSION['surname'] ?></p>
        <p><?= $_SESSION['mail'] ?></p>
        <?php if ($_SESSION['role']==='admin') {
            echo("<p> Vous etes sur un compte administrateur </p>");
            }
        ?>
        
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
                <input type="password" name="verify_new_password" id="verify_new_password"
                    placeholder="Nouveau mot de passe">
                <img src="../assets/close_eye.png" width="20px" alt="" srcset="" id="eye_verify_new_password">
            </div>
            <button type="submit" id="button">Changer le mot de passe</button>
        </form>
    </div>
    <?php
        $order = new Order($pdo);
        $product = new Product($pdo);

        $user = new User($pdo);
        $data = $user->getCommand($_SESSION['id']);
    
        if (isset($data) && $data !== true) {
            foreach ($data as $value) {
                $prix=0;
                echo <<<HTML
                <div id="historical">
                <div>
                    <div class="historic">
                        <h4>Numero de commande : {$value['id']}</h4>
                    </div>
                HTML;
                $commands = $order->getOrder($value['id']);
                foreach ($commands as $command) {
                    echo <<<HTML
                            <div class="command">
                                <p>Produit : {$command['id_name']}</p>
                                <p>Quantité : {$command['quantity']}</p>
                                <p>Prix : {$command['price']}€</p>
                            </div>
                    HTML;
                    $prix += $command['price']*$command['quantity'];
                }
                echo <<<HTML
                            <h4>Prix total : {$prix} €</h4>
                        </div>
                    </div>
                HTML;
            }
        } else if (isset($data) && $data === true) {
            echo <<<HTML
            <div>
                <p>Aucunes commandes passées</p>
            </div>
            HTML;
        }
    ?>
    
    <script src="../script/profil.js"></script>
</body>

</html>