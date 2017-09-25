<?php
require_once('config/general.php');

?>
<html>
<head>
<title>Add product</title>
</head>
<body>
<h3>Add product</h3>
<form action="/php/work3/api/products/addProduct.php" method="POST"> 
    <input type="text" name="productName" placeholder="productName" /><br/>
    <input type="text" name="description" placeholder="description" /><br/>
    <input type="text" name="shortDescription" placeholder="shortDescription" /><br/>
    <input type="date" name="dateAdded" placeholder="dateAdded" /><br/>
    <input type="number" name="price" placeholder="price" /><br/>
    <input type="text" name="curencyIsoCode" placeholder="curencyIsoCode" /><br/>
    <input type="number" name="rating" placeholder="rating" /><br/>
    <input type="text" name="promo" placeholder="promo" /><br/>
    <input type="number" name="discount" placeholder="discount" /><br/>
    <input type="number" name="active" placeholder="active" /><br/>
    <input type="text" name="topSell" placeholder="topSell" /><br/>
    <input type="number" name="categId" placeholder="categId" /><br/>
    <input type="submit" name="add" value="Add" /> 
</form>
</body>
</html>