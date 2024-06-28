<?php

require_once __DIR__ . '/../database.php';
class Order {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function getOrder($id_command) {

        $data = [];

        $ins = $this->pdo->prepare("SELECT * FROM historical WHERE id_command = ?");
        $ins->setFetchMode(PDO::FETCH_ASSOC);
        $ins->execute(array($id_command));

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
}