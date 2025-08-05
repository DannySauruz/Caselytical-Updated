<?php
   require("ConnectionAdminLoginPage.php");
   session_start();
   session_regenerate_id(true);
   if(!isset($_SESSION['AdminLoginId']))
   {
   	header("location: AdminLogin.php");
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Admin Panel</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
	<link rel="stylesheet" href="css/AdminPage.css">
	
</head>
<body>

<div class="header">
	<h2> WELCOME TO ADMIN PANEL -<?php echo htmlspecialchars($_SESSION['AdminLoginId'])?></h2>
	<form action="<?php echo $_SERVER['PHP_SELF'] ?>"method="POST">
	<button type="submit" name="Logout">LOG OUT</button>
</form>
</div>

<div class="container mt-5">
   <div class="row">
      <div class="col-lg-12">
         <table class="table text-center table-dark">
           <thead>
             <tr>
               <th scope="col">Order ID</th>
               <th scope="col">Customer Name</th>
               <th scope="col">Phone No</th>
               <th scope="col">Address</th>
               <th scope="col">Pay Mode</th>
               <th scope="col">Orders</th>
             </tr>
           </thead>
           <tbody>
            <?php 
              $query="SELECT * FROM `order_manager`";
              $user_result=mysqli_query($conn,$query);
              while($user_fetch=mysqli_fetch_assoc($user_result))
              {
               echo"
                <tr>
                  <td>$user_fetch[Order_Id]</td>
                  <td>$user_fetch[Full_Name]</td>
                  <td>$user_fetch[Phone_No]</td>
                  <td>$user_fetch[Address]</td>
                  <td>$user_fetch[Pay_Mode]</td>
                  <td>
                    <table class='table text-center table-dark'>
                     <thead>
                      <tr>
                        <th scope='col'>Item Name</th>
                        <th scope='col'>Price</th>
                        <th scope='col'>Quantity</th>
                    </tr>
                   </thead>
                   <tbody>
                  ";
                 $order_query="SELECT * FROM `user_orders` WHERE `Order_Id`='$user_fetch[Order_Id]'";
                 $order_result=mysqli_query($conn,$order_query);
                 while($order_fetch=mysqli_fetch_assoc($order_result))
                 {
                  echo"
                    <tr>
                      <td>$order_fetch[Item_Name]</td>
                      <td>$order_fetch[Price]</td>
                      <td>$order_fetch[Quantity]</td>
                   </tr>
                  ";
                 }
                 echo"

                   </tbody>
                  </table>
                  </td>
                </tr>
             ";
              }
            ?>
    
           </tbody>
         </table>
      </div>
   </div>
</div>

<div class="container">

  <div class="admin-product-form-container">

  <form action="insert_product.php" method="post" enctype="multipart/form-data">
    <h3>Add a new product</h3>
    <input type="text" placeholder="enter product name" id="name" name="name" class="box">
    <input type="text" placeholder="enter product description" id="description" name="description" class="box">
    <input type="number" placeholder="enter product price" id="price" name="price" class="box">
    <input type="file" accept="image/jpg" name="image" class="box">
    <input type="submit" class="btn" name="add_product" value="add product">
  </form>




</div>
</div>



<!--
<br>

    <div class="insertProduct text-center">
    	<h2> Insert Product Here: </h2>
	    <form action="insert_product.php" method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name"><br>

    <label for="description">Description:</label>
    <textarea id="description" name="description"></textarea><br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price"><br>

    <label for="image">Image:</label>
    <input type="file" id="image" name="image"><br>

    <input type="submit" value="Submit">
    </form>   
    </div> 
      
-->

<?php 
   if(isset($_POST['Logout']))
   {
   	session_destroy();
   	header("location:index.html");
   }
?>

</body>
</html>