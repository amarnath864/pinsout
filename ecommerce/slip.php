   
    <?php
include 'admin/dbcon.php';
 
if(isset($_GET['id']))
{
  $id=$_GET['id'];
 $query=mysqli_query($con,"select * from personal_details where id='$id' ");
 $data=mysqli_fetch_assoc($query);
 
 $queryad=mysqli_query($con,"select * from address where user_id='$id' ");
 $dataad=mysqli_fetch_assoc($queryad);
 
 $queryad=mysqli_query($con,"select * from address where user_id='$id' ");
 $dataad=mysqli_fetch_assoc($queryad);
 

}
?>



<html>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>
<body>
<style>


</style>
<h1 align="center">Payment Slip</h1>

<table cellpadding="15px" cellspacing="10px" border="5px solid " width="50%" align="center">
<th>Name</th>
<th> Address</th>

<tr>
<td>
   <?php echo $data['name']?>
</td>
    <td>
    <?php echo $dataad['address']?>
</td>
  


</tr>

<th>Email</th>
<th>Mobile No</th>
<tr>

    <td>
    <?php echo $data['email']?>
</td>
    <td>
    <?php echo $data['mobile_no']?>
</td>
    


</tr>


</tr>

<th>Product_Name</th>
<th>Total Ammount</th>
<tr>

    <td>
    <?php echo $data['product_name']?>
</td>
    <td>
    <?php echo $data['price']?>
</td>
    


</tr>
</table>

<button   class="btn btn-primary">Print Slip</button>

</body>
</html>