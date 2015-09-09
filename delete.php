<?php
$db = mysqli_connect('Localhost', 'root', '', 'wishcart');
            if(isset($_GET["id"]))
           {  
           	$id=htmlspecialchars($_GET["id"]);
           	$query = "delete FROM cart where id=$id";
           	mysqli_query($db,$query);
            header('Location:shoppingcart.php');
           }




?>