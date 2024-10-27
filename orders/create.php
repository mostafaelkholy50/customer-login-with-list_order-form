<?php include "../shared/header.php"?>
<?php include "../shared/inc.php" ?>
<?php include "../shared/nav.php";?>
<?php
$selectCustomers="SELECT id , full_name FROM customers";
$customers=mysqli_query($conn,$selectCustomers);

$selectProducts="SELECT id , title FROM products";
$products=mysqli_query($conn,$selectProducts);
if(isset($_POST['submit'])){
 $amount=$_POST['amount'];
 $customers_id=$_POST['customers_id'];
 $products_id=$_POST['products_id'];
 $date =date("y-m-d");
 $insert="INSERT INTO orders VALUES (null,'$amount','$date','$customers_id','$products_id')";
 mysqli_query($conn,$insert);
 header("location: ./list.php");
}
?>
    <form  method="post" enctype="multipart/form-data">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">

					<i class="login__icon fas fa-user"></i>
					<input type="number" name="amount"class="login__input" placeholder="order Amount">
				</div>
				<div class="login__field">
                <select class="form-select form-select-lg mb-3 login__input"  class="login__input"aria-label="Large select example" name="customers_id">
                     <option selected>customers Name</option>
					 <?php foreach($customers as $iteam): ?>
                      <option value="<?=$iteam['id']?>"><?=$iteam['full_name']?></option>
					  <?php endforeach?>
                       </select>

				</div>
					   <div class="login__field">
                <select class="form-select form-select-lg mb-3 login__input" class="login__input" aria-label="Large select example" name="products_id">
                     <option selected>Products Name</option>
					 <?php foreach($products as $iteam): ?>
                      <option value="<?=$iteam['id']?>"><?=$iteam['title']?></option>
					  <?php endforeach?>
                       </select>

                </div>
				<button class="button login__submit" name="submit">
					<span class="button__text">submit</span>
					<i class="button__icon fas fa-chevron-right"></i>
				</button>				
			</form>
			
		</div>
		<div class="screen__background">
			<span class="screen__background__shape screen__background__shape4"></span>
			<span class="screen__background__shape screen__background__shape3"></span>		
			<span class="screen__background__shape screen__background__shape2"></span>
			<span class="screen__background__shape screen__background__shape1"></span>
		</div>		
	</div>
</div>
</form>
</body>
</html>
<?php include "../shared/footer.php";?>