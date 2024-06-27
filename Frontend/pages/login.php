<?php 
include_once "../../backend/api.php";
if (isset($_POST['mail']) && isset($_POST["password"])){
    $error = connexion($_POST['mail'], $_POST['password']);
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Frontend/pages/css/connexion.css">

    <!--Polices-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <title>Page de connexion</title>
</head>
<body>
    <div id="form-connexion">
    <h3>Formulaire de connexion</h3>

        <form action="" method="post" id="login_form">
            <p>Mail</p>
            <input type="mail" name="mail" id="mail_form">
            <p id="error_mail" style="color:red; font-size: 1rem"></p>
            <p>Password</p>
            <input type="password" name="password" id="password_form">
            <p id="error_password" style="color:red; font-size: 1rem"></p>
            <?php if (isset($error)&&$error==true){echo '<p style="color:red; font-size: 1rem">Mail ou mot de passe incorrect</p>';}?>
            <div id="button">
                <button type="submit">Se connecter</button> 
            </div>
          
            <a href="" id="register">Créer un compte</a>

        </form>
    </div>
    <script src="../script/connexion.js"></script>
</body>
</html>