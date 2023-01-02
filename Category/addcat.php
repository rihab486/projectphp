<?php 

include "../conexion.php";

if  (isset($_POST['submit'])){

    $name=$_POST['namecat'];
  
    $sql= "insert into category (namecat) values('$name')";
    $result=mysqli_query($conn,$sql);
    if ($result){
       header('location: listcat.php');
    }else{
        die((mysqli_error($conn)));
        
    }}

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
    <div class="container my-5">

    <form method="post">
    <div class="form-group">
    
    <label  class="form-label">Name category</label>
    <input type="text" class="form-control" placeholder="Enter your name category"  name="namecat" required>
    </div>
    <div class="form-group">
    
  <button type="submit" class="btn btn-primary " name="submit">Add</button>
</form>
</div>
    



  </body>
</html>