<?php

require_once __DIR__ . '/../database.php';

class User extends Bdd {

    public function __construct() {
        parent::__construct();
    }
    
    public function addUser($name, $surname, $mail, $password) {
        try {
            $ins = $this->bdd->prepare("INSERT INTO user (name, surname, mail, password) VALUES (:name, :surname, :mail, :password)");
            $ins->execute(array(
                ":name" => $name,
                ":surname" => $surname,
                ":mail" => $mail,
                ":password" => $password
            ));
            $this->loginUser($mail, $password);
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function loginUser($mail, $password){
        try {
            $ins = $this->bdd->prepare("SELECT * FROM user WHERE mail = :mail LIMIT 1");
            $ins->setFetchMode(PDO::FETCH_ASSOC);
            $ins->execute(array(":mail" => $mail));
            $log = $ins->fetch();

            if ($log && $log['password'] === $password) {
                echo 'Connexion réussie';
                session_start();
                $_SESSION['id'] = $log['id'];
                $_SESSION['name'] = $log['name'];
                $_SESSION['surname'] = $log['surname'];
                $_SESSION['mail'] = $log['mail'];
                $_SESSION['role'] = $log['role'];
                header("Location: profil.php");
                exit;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function getCommand($id){
        $data = [];

        try {
            $ins = $this->bdd->prepare("SELECT * FROM command WHERE id_user = ?");
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
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    }

    public function updatePassword($id, $password, $new_password){
        try {
            $ins = $this->bdd->prepare("SELECT password FROM user WHERE id = ? LIMIT 1");
            $ins->setFetchMode(PDO::FETCH_ASSOC);
            $ins->execute(array($id));
            $actual_password = $ins->fetch();

            if ($actual_password['password'] === $password) {
                $ins = $this->bdd->prepare("UPDATE user SET password = :password WHERE id = :id");
                $ins->execute(array(
                    ":id" => $id,
                    ":password" => $new_password
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
