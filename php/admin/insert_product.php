<?php
$sname= "localhost";
$unmae= "root";
$password = "";

$db_name = "test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}

    $name = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($image_tmp,"image/$image");


    $query = "INSERT INTO products (name,description,price,image) VALUES ('$name','$description','$price','$image')";

    mysqli_query($conn, $query);
    
    echo"<script>
                   alert('Product Added');
                   window.location.href='AdminPanel.php';
                 </script>";
?>
