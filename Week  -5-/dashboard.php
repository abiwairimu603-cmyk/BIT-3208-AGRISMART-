<?php
include 'db.php';

if(isset($_POST['add_product'])){

    $product_name = $_POST['product_name'];
    $category = $_POST['category'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];

    $sql = "INSERT INTO products(product_name, category, price, quantity)
            VALUES('$product_name','$category','$price','$quantity')";

    mysqli_query($conn, $sql);

    echo "Product Added Successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Farmer Dashboard</title>
</head>
<body>

<h2>Add Farm Product</h2>

<form method="POST">

    <input type="text" name="product_name" placeholder="Product Name" required><br><br>

    <input type="text" name="category" placeholder="Category" required><br><br>

    <input type="number" name="price" placeholder="Price" required><br><br>

    <input type="number" name="quantity" placeholder="Quantity" required><br><br>

    <button type="submit" name="add_product">Add Product</button>

</form>

</body>
</html>