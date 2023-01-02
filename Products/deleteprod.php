<?php
include "../conexion.php";
include "../auth.php";

$idpp= $_GET['idpro'];
$del= "delete from product where idprod ='$idpp'";
$resl=mysqli_query($conn,$del);
if ($resl){
    header('location:./listprod.php');
   
}else{
     die(mysqli_error($conn));
}

?>