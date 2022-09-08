<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>index</title>
  </head>
  <body>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
          </li>
         
        </ul>
       
       
      </div>
    </div>
  </nav>
  <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="assets/images/banner.webp" class="d-block w-100" alt="...">
      </div>
     
    </div>
  </div>

   <br>


  <section>
<div class="container-fluid">
<div class="row">
<div class="col-lg-3 col-sm-12 col-md-3">
<ul>

<?php
            include 'admin/dbcon.php';
          
 
 $query=mysqli_query($con,"select * from category ");
 
 
 while($data=mysqli_fetch_assoc($query))
 {
    ?>

<li><a href="product.php?id=<?php echo $data['id'] ?>"><?php echo $data['cat_name'] ?></a></li>
<?php
 }

 ?>

  
</ul>
</div>
<div class="col-lg-8 col-sm-12 col-md-8">
<div class="container-fluid">
<div class="row">
<?php
            include 'admin/dbcon.php';
            

if(isset($_GET['id']))
{
  $id=$_GET['id'];
 $queryold=mysqli_query($con,"select * from products where cat_id = $id ");

 

 
 while($datap=mysqli_fetch_assoc($queryold))
 {
    ?>
<div class="col-lg-4 col-sm-12 col-md-6">
<figure class="figure">
   <a href="register.php?id=<?php echo $datap['id'];?>"> <img src="admin/product/<?php echo $datap['image']  ?>" style="height:250px; width:250px;" class="figure-img img-fluid rounded" alt="...">
   <h4 align="center"><?php echo $datap['product_name']  ?></h4>   <h2 align="center">Rs <?php echo $datap['price']  ?></h2></a>
    
    <!-- <figcaption class="figure-caption text-end"><?=$data['model']?></figcaption> -->
  </figure>
 
</div>
<?php
 }
 
}
 





 ?>


</div>
</div>
</div>
</div>
</div>

</section>



 <br />
 <br />
 <br />


</html>