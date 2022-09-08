<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../login.css">
</head>
<body>
  
      
    
      <div class="wrapper">
       
        <div class="text-center mt-4 name">
            <div >
            Add Products
        </div>
     
        <br />
       

<form action="" method="post" enctype='multipart/form-data'>
        <div class="form-field d-flex align-items-center">
          
           <select name="cat_id">
            <?php
            include 'dbcon.php';
          
 
 $query=mysqli_query($con,"select * from category ");
 
 
 while($data=mysqli_fetch_assoc($query))
 {
    ?>

<option class="form-control" value="<?php echo $data['id']?>"><?php echo $data['cat_name']?></option>
<?php
 }




 ?>
            
           </select>
        </div>
        <div class="form-field d-flex align-items-center">
            <span class="fas fa-key"></span>
            <input type="text" name="product_name" placeholder="Product Name" required>
        </div>
        <div class="form-field d-flex align-items-center">
          <span class="far fa-user"></span>
          <input type="text" name="price" placeholder="Price" required>
      </div>
      
      <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="file" name="image"  required>
    </div>
    
    <div class="form-field d-flex align-items-center">
        <span class="fas fa-key"></span>
        <input type="submit" name="submit" value="Submit"style="background-color:#04AA6D;" required>
    </div>
  </form>
       
        </div>
      
      </div>
       

    </div>


    <?php
include 'dbcon.php';
 
 
 if(isset($_POST['submit']))
{
    
    $cat_id=$_POST['cat_id'];
     $product_name=$_POST['product_name'];
     $price=$_POST['price'];
   
  
   
     $image=$_FILES['image']['name'];
    $filetemp=$_FILES['image']['tmp_name'];

  
    
    $sql= "INSERT INTO `products`(`cat_id`,`product_name`,`price`, `image`) VALUES ('$cat_id','$product_name','$price','$image')";
    
       $query=mysqli_query($con,$sql);


     if($query==true)
    {
        $image = move_uploaded_file($filetemp,"product/".$image);
      
      ?>
         
         
         <script> 
                  alert(' sucessfully Add Your Products');
                  window.open('add_product.php','_self');
                 
         </script>

      <?php
    }

    else{
      echo "data not insert";
    }
  
}

?>













</body>
</html>