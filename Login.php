
<?php
session_start();

include "conexion.php";
include "auth.php";

if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $password=sha1($_POST['password']);
  $log="select * from `user` where email ='$email' and password='$password'";
  $resl=mysqli_query($conn,$log);
    if(mysqli_num_rows($resl)==1){
      $row=mysqli_fetch_assoc($resl);
      if($row["email"]==$email && $row["password"]==$password){
      $type=$row['type'];
      $id = $row['id'];
      $_SESSION['auth']=array(
        'email'=>$email,
        'password'=>$password,
        'type'=>$type,
        'id'=>$id
   );
    
      if ($type=="ADMIN_ROLE"){
        
        header("location:Admin/profil.php?iduser=$id");
      }else if ($type=="USER_ROLE"){
        header("location:Admin/profil.php?iduser=$id");
      }else{
        echo "eee";
      }
    }
    }
   
   
}
?>
<!doctype html>

<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Events</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style rel="stylesheet">
                .divider:after,
        .divider:before {
        content: "";
        flex: 1;
        height: 1px;
        background: #eee;
        }
   </style>

</head>


<body>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="draw.svg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form method="post">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" placeholder="Add your Email" required />
            <label class="form-label" for="form1Example13"  >Email address</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23" name="password" placeholder="add your password" class="form-control form-control-lg" required/>
            <label class="form-label" for="form1Example23" >Password</label>
          </div>

          <div class="d-flex justify-content-around align-items-center mb-4">
            <!-- Checkbox -->
            
          </div>

          <!-- Submit button -->
          <button  name="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>

        

        </form>
      </div>
    </div>
  </div>
</section>
</body>
</html>