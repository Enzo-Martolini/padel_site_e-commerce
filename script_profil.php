

<?php
        //Fonction de modication de mot de passe
            if (isset($_POST['actual_password']) && isset($_POST['new_password']) && isset($_POST['verify_new_password']))
            {
                changePassword($_SESSION['id'], $_POST['actual_password'], $_POST['new_password'], $_POST['verify_new_password']);
            }
?>

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

A ajouter dans la div historical