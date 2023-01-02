<?php 

include "../conexion.php";

$iduser=$_GET["idusr"];
$sql="select * from  `user` where id='$iduser'";
$result=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($result);

if ($row){ 
  $idd=$row['id'];
  $email=$row["email"];
  $name=$row["name"];
  $types=$row["type"];
  $password=$row["password"];
  
  if (isset($_POST["submit"])){
    $email=$_POST["email"];
    $name=$_POST["name"];
    $type=$_POST["type"];
    $passwordd=sha1($_POST["password"]);
    if(($passwordd)==md5($password)){
      echo "<br> Correct password ";
       

    }else{
      echo "error password";
    }
    $sql="update `user` set email='$email', name='$name', password='$passwordd',type='$type' where id='$idd'";
    $result=mysqli_query($conn,$sql);
    if ($result){
     header('location:./show.php');
    }else{
      die (mysqli_error($conn));
  
    }
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
    <h1 class="text-center">Update User</h1>

    <form method="post">
    <div class="form-group">
    
    <label  class="form-label">Name</label>
    <input type="text" class="form-control" placeholder="Enter your Name"  name="name" value='<?php  echo $name; ?>' required>
    </div>
    <div class="form-group">
    
    <label  class="form-label">Email</label>
    <input type="email" class="form-control" placeholder="Enter your email"  name="email" value=' <?php echo $email ; ?> '  required>
    </div>

    <div class="form-group">
    
       <label  class="form-label">Password</label>
       <input type="password" class="form-control" placeholder="Enter your password"  name="password"  value='<?php echo $password; ?>' required  >
    </div>
    <div class="form-group">
    
    <label  class="form-label">Role</label>
    <select class="form-select" aria-label="Default select example" name="type" value='<?php echo $types; ?>' required>
         
         <option value="ADMIN_ROLE">ADMIN_ROLE</option>
         <option value="USER_ROLE">USER_ROLE</option>
        
       </select>
 </div>

  <button type="submit" class="btn btn-primary " name="submit">Update</button>
</form>
</div>

  </body>
</html>