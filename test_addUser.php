<?php include_once 'backend/api.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html>
<body>
    <h2>Formulaire d'ajout d'utilisateur</h2>
        <form action="" method="post">
            <label for="name">Nom:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="surname">Prénom:</label><br>
            <input type="text" id="surname" name="surname"><br>
            <label for="mail">Email:</label><br>
            <input type="email" id="mail" name="mail"><br>
            <label for="password">Mot de passe:</label><br>
            <input type="password" id="password" name="password"><br>
            <input type="submit" value="Ajouter l'utilisateur">
        </form> 
</body>
</html>
</body>
</html>

<?php 

if(isset($_POST) && $_POST['name']!=="" && $_POST['surname']!=="" && $_POST['mail']!==""&& $_POST['password']!==""){
    echo "condition reussi </br>";
    addUser($_POST['name'], $_POST['surname'], $_POST['mail'], $_POST['password']);
} else {
    echo "condition pas reussi </br>";
}

echo '<pre>';
var_dump($_POST);
echo '</pre>';
