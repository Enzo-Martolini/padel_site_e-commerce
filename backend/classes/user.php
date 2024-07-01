<?php

require_once __DIR__ . '/../database.php';
class User {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    public function addUser($name, $surname, $mail, $password) {
        try {
            $ins = $this->pdo->prepare("insert into user (name,surname,mail,password) values(:name,:surname,:mail,:password)");
            $ins->execute(array(
                ":name"=>$name,
                ":surname"=>$surname,
                ":mail"=>$mail,
                ":password"=>$password
            ));
            $user = new User($this->pdo);
            $user->loginUser($mail, $password);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function loginUser($mail, $password){

        try {
            $ins = $this->pdo->prepare("select * from user where mail=:mail limit 1");
            $ins->setFetchMode(PDO::FETCH_ASSOC);
            $ins->execute(array(
                ":mail"=>$mail
            ));

            $log = $ins->fetchAll();

            if (!empty($log) && $log[0]['password']===$password){
                echo 'connexion faite';
                session_start();
                $_SESSION['id'] = $log[0]['id'];
                $_SESSION['name'] = $log[0]['name'];
                $_SESSION['surname'] = $log[0]['surname'];
                $_SESSION['mail'] = $log[0]['mail'];
                $_SESSION['role'] = $log[0]['role'];
                header("Location: profil.php");
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

    }

    public function getCommand($id){
        $data = [];

        $ins = $this->pdo->prepare("SELECT * FROM command WHERE id_user = ?");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute(array($id));

        $results = $ins->fetchAll();
        
        if (!empty($results)) {
            foreach ($results as $result){
                array_push($data, $result);
            }
            return $data;
        } else {
            return true;
        }
    }

    public function updatePassword($id, $password, $new_password){
        try {
            $ins = $this->pdo->prepare("SELECT password FROM user WHERE id = ? LIMIT 1");
            $ins->setFetchMode(PDO::FETCH_ASSOC);
            $ins->execute(array($id));
            $actual_password = $ins->fetchAll();

            if ($actual_password[0]['password'] === $password){
                $ins = $this->pdo->prepare("UPDATE user SET password = :password WHERE id = :id");
                $ins->execute(array(
                    ":id"=> $id,
                    ":password"=>$new_password
                ));
            } else {
                echo "Il y a eu un problème";
            }
        } catch (PDOException $e){
            echo "Erreur : " . $e->getMessage();
        }
    }
}
?>
