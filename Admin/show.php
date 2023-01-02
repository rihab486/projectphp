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
    <div class="container">
    </br>
  <button  class="btn btn-primary" name="submit"><a style="color:black" href="add.php">Add User</a></button>

    <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom et Prénom</th>
      <th scope="col">Email</th>
     
      <th scope="col">Role</th>
     
      <th scope="col">Opération</th>
    </tr>
  </thead>
  <tbody>
    <?php
    include "../conexion.php";
     $req= "select *from user" ;
     $result=mysqli_query($conn,$req);
     if($result){
        while( $row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $email=$row['email'];
            $name=$row['name'];
            $type=$row['type'];
           
         {   echo "
            <tr>
            <th scope='row'>$id</th>
            <td> $name</td>
            <td> $email</td>
         
            <td> $type</td>
            <td> <a  class='btn btn-secondary' href='updateuser.php?idusr=$id'>Update</a>
            <button class='btn btn-danger' ><a class='text-light' href='deleteuser.php?idusr=$id' >Delete</a></button></td>
            
            </tr>
            ";  }}}
    ?>

</tbody>
</table></div></body>

</html>
<?php
include ('../footer.php');
?>