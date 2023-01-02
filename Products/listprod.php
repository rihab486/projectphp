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
  <button  class="btn btn-primary" name="submit"><a style="color:black" href="addproduct.php">Add Product</a></button>

    <table class="table">

  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nom product</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th scope="col">Category</th>
      <th scope="col">Opération</th>
     
    </tr>
  </thead>
  <tbody>
     <?php
      include '../conexion.php';
      $list= "select * from product";
      $result=mysqli_query($conn,$list);
      if($result){
        while( $row=mysqli_fetch_assoc($result)){
          $id=$row['idprod'];
          $nameprod=$row['nameprod'];
          $description=$row['description'];
          $image=$row['imageurl'];
          {
            echo "
            <tr>
            <th scope='row' >$id</th>
            <td>$nameprod</td>
            <td>$description</td>
            
            <td>$image</td>
            <td>categoryyyyyyyyyyyy</td>
            <td>
            <a  class='btn btn-secondary' href='updateprod.php?idpro=$id'>Update</a>
            <button class='btn btn-danger' ><a class='text-light' href='deleteprod.php?idpro=$id' >Delete</a></button>
            </td>
            
            
            
            
            </tr>
            ";
          }



        }}
      
     ?>
</tbody>
</table></div>

</html>
<?php
include ('../footer.php');
?>