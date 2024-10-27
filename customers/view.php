<?php
 include "../shared/header.php" ;
 include "../shared/inc.php" ;
 if(isset($_GET['show'])){
    $id = $_GET['show'];
    $select="SELECT* FROM customers WHERE id = $id";
    $query=mysqli_query($conn,$select);
    $row=mysqli_fetch_assoc($query);
 }
 ?>
 <?php include "../shared/nav.php";?>
 <div class="card " style="width: 18rem;">
  <img src="./upload/<?=$row['image']?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">NAME :<?=$row['full_name']?></h5>
    <p class="card-text"> ID: <?=$row['id']?></p>
    <p class="card-text"> AGE: <?=$row['age']?></p>
    <p class="card-text"> COUNTRY: <?=$row['country']?></p>
    <p class="card-text"> GENDER:<?=$row['gender']?></p>
    <a href="./list_customers.php" class="btn btn-primary">LIST</a>
    <a href="./customers.php" class="btn btn-primary">LOGIN</a>
  </div>
</div>
<?php include "../shared/footer.php";?>