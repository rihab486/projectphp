<?php
 
$conn = new mysqli('localhost','root','','projectphp');
if($conn){
    echo "success connexion";

    
}else{
    die(mysqli_error($conn));
}
  

 
?>