
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" >Profil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <?php
              $id=$_SESSION['auth']['id'];
        if ($_SESSION['auth']['type']=="ADMIN_ROLE"){
        echo' <a class="nav-link" href="../Admin/show.php">Users</a>';
        
        }
        if($_SESSION['auth']['id']==$id){
          echo '
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Category/listcat.php">Category</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../Products/listprod.php">products</a>
          </li>
         
          <li class="nav-item">
          <a class="nav-link active" href="../logout.php" aria-current="page">logout</a>
          </li>
          
          ';}
        ?>
       
       
 
      </ul>
    </div>
  </div>
  
</nav></body></html>
