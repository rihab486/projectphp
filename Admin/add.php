<?php 
session_start();
include "../conexion.php";
require("../auth.php");
if(Auth::isLogged()){
       /* $id=$_SESSION['auth']['id'];
        if ($_SESSION['auth']['type']=="ADMIN_ROLE"){
          header("location:add.php");
        
        }*/
     
}else{
header("location:../Login.php");
}
if  (isset($_POST['submit'])){

    $name=$_POST['name'];
    $email=$_POST['email'];
    
    $password=sha1($_POST['password']);
    $type=$_POST['type'];
    $sql= "insert into `user` (name,email,password,type) values('$name','$email','$password','$type')";
    $result=mysqli_query($conn,$sql);
    if ($result){
       header('location: show.php');
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
    
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name"  name="name">
    </div>
    <div class="form-group">
    
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email"  name="email">
    </div>
    <div class="form-group">
    
    <label  class="form-label">Password</label>
    <input type="text" class="form-control" placeholder="Enter your password"  name="password">
    </div>

    <div class="form-group">
    
       <label  class="form-label">Role</label>
       <select class="form-select" aria-label="Default select example" name="type">
            <option selected>-----</option>
            <option value="ADMIN_ROLE">ADMIN_ROLE</option>
            <option value="USER_ROLE">USER_ROLE</option>
           
          </select>
    </div>

  <button type="submit" class="btn btn-primary " name="submit">Submit</button>
</form>
</div>
    



  </body>
</html>