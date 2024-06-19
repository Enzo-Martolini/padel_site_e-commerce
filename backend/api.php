<?php 

include_once "db.php";

function addUser ($name, $surname, $mail, $password) {


    global $mysqli;

    //Preparation de la requête
    $stmt = $mysqli->prepare("INSERT INTO `user`(`id`, `name`, `surname`, `mail`, `password`) VALUES (?,?,?,?,?)");
    $stmt->bind_param("issss", $id, $name,$surname,$mail,$password);

    //Execution de la requête
    if ($stmt->execute()){
        echo '<script>console.log("enregistrement réussi")</script>';
    } else {
        echo '<script>console.log("Erreur lors de l\'enregistrement : ' . $mysqli->error . '</script>';

    }
}

function getUserById ($id){

    global $mysqli;

    $sql = "SELECT * FROM user where id=$id";
    $result = $mysqli->query($sql);


    if ($result->num_rows>0)
    {
        echo '<script>console.log("Utilisateur trouvé")</script>';
        return $result = $result->fetch_assoc();
    } else {
        echo '<script>console.log("aucun utilisateur trouvé")</script>';
    }

    return $result;

}

function connexion ($mail, $password){

    global $mysqli;

    $sql = "SELECT * FROM USER WHERE mail=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $mail);
    $result = $stmt->execute();

    if ($result)
    {
        echo '<script>console.log("Utilisateur trouvé")</script>';
        $result = $stmt->get_result();  
        $result = $result->fetch_assoc();
        if ($result['password']===$password){
            session_start();
            $_SESSION['id'] = $result['id'];
            $_SESSION['name'] = $result['name'];
            $_SESSION['surname'] = $result['surname'];
            $_SESSION['mail'] = $result['mail'];
            header("Location: ../index.php");
        }
    } else {
        echo '<script>console.log("aucun utilisateur trouvé")</script>';
    }

}

function getProduct (){

    $sql = "SELECT * FROM product";

    global $mysqli;

    $result = $mysqli->query($sql);
    $data = [];

    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
    } else {
        echo "Pas de resultats";
    }

    $mysqli->close();

    return $data;
}