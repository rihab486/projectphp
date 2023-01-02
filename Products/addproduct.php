<?php 

include "../conexion.php";

if  (isset($_POST['submit'])){

    $name=$_POST['nameprod'];
    $description=$_POST['description'];
    
    $image=($_POST['imageurl']);
    $sql= "insert into product (nameprod,description,imageurl) values('$name','$description','$image')";
    $result=mysqli_query($conn,$sql);
    if ($result){
       header('location: listprod.php');
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
    
    <label  class="form-label">Name Product</label>
    <input type="text" class="form-control" placeholder="Enter your nameproduct"  name="nameprod" required>
    </div>
    <div class="form-group">
    
    <label  class="form-label">Decription Product</label>
    <input type="text" class="form-control" placeholder="Enter your description"  name="description" required>
    </div>
    <div class="form-group">
    
    <label  class="form-label">Image</label>
    <input type="text" class="form-control" placeholder="Enter your imageurl"  name="imageurl">
    </div>


    
    <div class="form-group">
                          <label>Category</label>
    								    <select class="form-control show-tick" > 
									<?php
                      $sql = "SELECT namecat
                      FROM category
                          LEFT JOIN category_product ON (category.idcat = 'category_id')
                                  LEFT JOIN product ON (product.idprod = 'product_id' )";
                  
                      $resl = mysqli_query($conn,$sql);
                          
											?>
                      <option value="<?php echo "NULL"; ?>"><?php echo "Nothing Selected"; ?> </option><?php
                      while($cat_pro=mysqli_fetch_row($resl)){
    										?>                        
    										<option value="<?php echo $cat_pro[0]; ?>"><?php echo $cat_pro[0]; ?></option>
    											<?php } ?> 
    									</select>
      </div>

     
  <button type="submit" class="btn btn-primary " name="submit">Add Product</button>
</form>
</div>
    



  </body>
</html>