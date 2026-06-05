<?php
include 'db.php';

$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/style.css">

<title>Product List</title>
</head>
<body>

<h2>Available Products</h2>

<?php
while($row = mysqli_fetch_assoc($result)){
?>

<div style="border:1px solid #ccc; padding:10px; margin:10px;">
    <h3><?php echo $row['product_name']; ?></h3>
    <p>Price: Ksh <?php echo $row['price']; ?></p>
</div>

<?php
}
?>

</body>
</html>