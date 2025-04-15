<?php
include_once('config.php');
$sql = " SELECT * FROM products";
$selectProducts=$conn->prepare($sql);
$selectProducts->execute();

$products_data=$selectProducts->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lesson 10</title>
</head>
<style>
    table,td,th{
        border:1px solid black;
        border-collapse: collapse;
    }
    td,th{
        padding:10px 20px;
    }
</style>
<body>
<table>
        <thead>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Update</th>
            <th>Delete</th>

    </thead>
    <tbody>
        <?php
    foreach($products_data as $product){
        ?>
        <tr>
            <td><?= $product['id']; ?></td>
            <td><?= $product['title']; ?></td>
            <td><?= $product['description']; ?></td>
            <td><?= $product['quantity']; ?></td>
            <td><?= $product['price']; ?></td>
            <td><?= "<a href= 'updateProduct.php?id=$product[id]'>update</a>"?></td>
            <td><?= "<a href= 'deleteProduct.php?id=$product[id]'>delete</a>"?></td>
        </tr>
        <?php
        }
        ?>
    <tbody>
    </table>
</body>
</html>