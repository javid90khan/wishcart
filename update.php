<?php
$db = mysqli_connect('Localhost', 'root', '', 'wishcart');
            if(isset($_GET["id"]))
           {  
           	$id=htmlspecialchars($_GET["id"]);
           	$quantity=htmlspecialchars($_GET["quantity"]);
           	$query = "update cart set quantity=$quantity where id=$id";
           	mysqli_query($db,$query);
            header('Location:shoppingcart.php');
           }




?>