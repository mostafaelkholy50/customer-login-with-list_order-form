<?php
try{
$conn=mysqli_connect("localhost","root","","round30_st");
}catch(Exception $e){
    echo $e->getMessage();
}
?>