<?php 
session_start();

include '../Navbar.php';
require('../auth.php');

if (Auth::isLogged()){

}else{
  header("Location:../Login.php");
}
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  
</head>
  <body>
    <?php
    include '../conexion.php';
    $id=$_GET['iduser'];
    $req= "select *from user where id='$id'" ;
    $result=mysqli_query($conn,$req);
    if($result){
       while( $row=mysqli_fetch_assoc($result)){
        
           $name=$row['name'];
          }}
    ?>

  <h2>welcome in your profil : <?php echo $name; ?> </h2>
    </body>

</html>
<?php
include ('../footer.php');
?>