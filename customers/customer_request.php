<?php

include "../shared/inc.php";
if(isset($_POST['submit'])){
    $full_name = $_POST['full_name'];
    $country = $_POST['country'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    //image
    if(empty($_FILES['image']['name'])){
        $image_name=$_POST['image'];
    }
    $image_name= rand(0,200).$_FILES['image']['name'];
    $tmp_name=$_FILES['image']['tmp_name'];
    $location="./upload/$image_name";
    move_uploaded_file($tmp_name,$location);

    $insert = "INSERT INTO customers VALUE (NULL ,'$full_name' , '$country' ,  $age , $phone ,'$image_name', '$gender')";
    $query= mysqli_query($conn,$insert);
    if($query){
       header("location:./list_customers.php");
    }else{
        echo"5555 a7a";
    }
}
?>