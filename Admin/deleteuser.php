<?php
include "../conexion.php";
include "../auth.";

$iduser= $_GET['idusr'];
$del= "delete from user where id ='$iduser'";
$resl=mysqli_query($conn,$del);
if ($resl){
    header('location:./show.php');
   
}else{
     die(mysqli_error($conn));
}

?>