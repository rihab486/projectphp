<?php
include "../conexion.php";
include "../auth.php";

$idpp= $_GET['idca'];
$del= "delete from category where idcat ='$idpp'";
$resl=mysqli_query($conn,$del);
if ($resl){
    header('location:./listcat.php');
   
}else{
     die(mysqli_error($conn));
}

?>