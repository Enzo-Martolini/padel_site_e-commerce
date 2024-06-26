<?php 

include_once "db.php";

function addUser ($name, $surname, $mail, $password) {


    global $mysqli;

    //Preparation de la requête
    $stmt = $mysqli->prepare("INSERT INTO `user`(`id`, `name`, `surname`, `mail`, `password`) VALUES (?,?,?,?,?)");
    $stmt->bind_param("issss", $id, $name,$surname,$mail,$password);

    //Execution de la requête
    if ($stmt->execute()){
        connexion($mail, $password);
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

    $passwordError = false;
    $mailError = false;

    global $mysqli;

    $sql = "SELECT * FROM USER WHERE mail=?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $mail);
    $stmt->execute();

    $result = $stmt->get_result();  
    $user = $result->fetch_assoc();

    if ($user!== null)
    {
        echo '<script>console.log("Utilisateur trouvé")</script>';
        if ($user['password']===$password){
            session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['surname'] = $user['surname'];
            $_SESSION['mail'] = $user['mail'];
            header("Location: profil.php");
        } else {
            echo '<script>console.log("mot de passe incorect"</script>';
            return true;
        }
    } else {
        echo '<script>console.log("mail incorrect"</script>';
        return true;
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

function getCommand($id) {

    global $mysqli;

    $sql = "SELECT * FROM command WHERE id_user = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $id);
    $stmt->execute();

    $result = $stmt->get_result();  

    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
    } else {
        echo "Pas de resultats";
    }

    if (isset($data)) { 
        return $data;
    }
}

function getHistoric ($id_command){

    global $mysqli;

    $sql = "SELECT * FROM historical WHERE id_command = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $id_command);
    $stmt->execute();

    $result = $stmt->get_result();  

    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $data[]=$row;
        }
    } else {
        echo "Pas de resultats";
    }

    if (isset($data)) { 
        return $data;
    }

}

function changePassword($id_user, $password, $newPassword, $verifyPassword){

    global $mysqli;
    $data = [];

    $sql = "SELECT password FROM user WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('s', $id_user);
    $stmt->execute();

    $result = $stmt->get_result();  

    if ($result->num_rows>0){
        while($row = $result->fetch_assoc()){
            $data[]=$row;

            if ($data[0]['password']===$password){
                if ($newPassword===$verifyPassword){
                    $sql = "UPDATE user SET password = ? WHERE id = ?";
                    $stmt = $mysqli->prepare($sql);
                    $stmt->bind_param('ss', $newPassword, $id_user);

                    if ($stmt->execute()){
                        echo '<p style="color:green; margin-left:0%">Le mot de passe a été mis à jour</p>';
                    };
                } else {
                    echo '<p style="color:red; margin-left:0%">Les mot de passe entrés sont différents</p>';
                }
            } else {
                echo '<p style="color:red; margin-left:0%">Mot de passe invalide</p>';
            }
        }
    } else {
        echo "Pas de resultats";
    }





}