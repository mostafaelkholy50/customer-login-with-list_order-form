<?php 
include "inc.php";
if(isset($_POST['submit'])){
    $title= $_POST['title'];
    $price= $_POST['price'];
    $query="INSERT INTO products VALUE (NULL,'$title','$price')";
}else{
    header(header: "location : ./list_products.php ");
}
?>