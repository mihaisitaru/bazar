<?php
require_once('config/general.php');

?>
<html>
<head>
<title>Add image</title>
</head>
<body>
<h3>Add image</h3>
<form action="/php/work3/api/products/addImage.php" method="POST" enctype="multipart/form-data"> 
    <input type="number" name="productId" placeholder="productId" /><br/>
    <input type="number" name="mainImage" placeholder="mainImage" /><br/>
    <input type="file" name="file" /> 
    <input type="submit" name="add" value="upload" /> 
</form>
</body>
</html>