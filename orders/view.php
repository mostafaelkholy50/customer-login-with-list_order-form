<?php
 include "../shared/header.php" ;
 include "../shared/inc.php" ;
 if(isset($_GET['show'])){
    $id = $_GET['show'];
    $select="SELECT* FROM join_all_data WHERE ord_id = $id";
    $query=mysqli_query($conn,$select);
    $row=mysqli_fetch_assoc($query);
 }
 ?>
 <?php include "../shared/nav.php";?>
 <div class="card container container-fluid card full-height-card justify-content-center align-items-center " style="width: 18rem;">
  <div class="card-body">
    <h3 class="card-title ">cust_id :<?=$row['cust_id']?></h3><hr>
    <h5 class="card-title">full_name :<?=$row['full_name']?></h5>
    <h5 class="card-title">age :<?=$row['age']?></h5>
    <h5 class="card-title">country :<?=$row['country']?></h5>
    <h5 class="card-title">gender :<?=$row['gender']?></h5><hr>
    <h3 class="card-title">prod_id :<?=$row['prod_id']?></h3><hr>
    <h5 class="card-title">title :<?=$row['title']?></h5>
    <h5 class="card-title">amount :<?=$row['amount']?></h5>
    <h5 class="card-title">phone :<?=$row['phone']?></h5>
    <h5 class="card-title">price :<?=$row['price']?></h5>
    <h5 class="card-title">create_date	 :<?=$row['create_date']?></h5>
    <a href="./list.php" class="btn btn-primary">LIST</a>
    <a href="./create.php" class="btn btn-primary">LOGIN</a>
  </div>
</div>
<?php include "../shared/footer.php";?>