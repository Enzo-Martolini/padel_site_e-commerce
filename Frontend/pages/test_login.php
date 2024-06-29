<?php 
    include_once "../../backend/classes/user.php";
    include_once "../../backend/classes/order.php";
    include_once "../../backend/classes/product.php";

    $user = new User($pdo);
    $data = $user->getCommand(2);

    $order = new Order($pdo);
    $product = new Product($pdo);

    if (isset($data)&& $data !== true){
        foreach ($data as $value){
            $commands = $order -> getOrder($value['id']);
            foreach ($commands as $command)
            {
                echo $command['id_command'] . " ";
                echo $command['id_name'] . '</br>';
            };
        }
    } else if (isset($data)&&$data===true){
        echo "Aucuns resultats";
    }

?>

<?php 

$user->updatePassword('2', 'Unmotdepasse', 'unmotdepasse');

$product->updateProduct('5', 'Raquette de padel adulte-Kuikma PR 190 vert', 40, 'Conçu pour les joueurs de padel débutants qui recherchent une raquette légère avec un grand sweet spot, ce qui leur permet d\'avoir le plus grand confort.', ["racket"], ["man", "kuikma"], 'backend/images/racket/racket_3.png');
