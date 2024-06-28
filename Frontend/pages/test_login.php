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

echo "<pre>";
var_dump($product->getAllProduct());
echo "</pre>";