<?php 


function getProduct (){
    include_once "db.php";

    $sql = "SELECT * FROM product";

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