<?php include "../shared/header.php"?>
<?php include "../shared/inc.php" ?>
<?php include "../shared/nav.php";?>
<?php
$selectCustomers="SELECT id , full_name FROM customers";
$customers=mysqli_query($conn,$selectCustomers);

$selectProducts="SELECT id , title FROM products";
$products=mysqli_query($conn,$selectProducts);
if(isset($_GET['edit'])){
    $id=$_GET['edit'];
    $select="SELECT * FROM orders WHERE id = $id ";
$query=mysqli_query($conn,$select);
$row=mysqli_fetch_assoc($query);
}
if(isset($_POST['submit'])){
 $amount=$_POST['amount'];
 $customer_id=$_POST['customer_id'];
 $product_id=$_POST['product_id'];

 $insert="UPDATE orders SET amount= $amount, customer_id = $customer_id , product_id = $product_id WHERE id = $id";
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
					<input type="number" name="amount" value="<?=$row['amount']?>" class="login__input" placeholder="order Amount">
				</div>
				<div class="login__field">
                <select class="form-select form-select-lg mb-3 login__input"  class="login__input"aria-label="Large select example" name="customer_id">
                     <option selected>customers Name</option>
					 <?php foreach($customers as $iteam): ?>
                        <?php if($iteam['id']==$row['customer_id']):?>
                            <option selected value="<?=$iteam['id']?>"><?=$iteam['full_name']?></option>
                            <?php else:?>
                                <option  value="<?=$iteam['id']?>"><?=$iteam['full_name']?></option>
                                <?php endif?>
                                <?php endforeach?>
                            </select>
                            
                        </div>
                        <div class="login__field">
                            <select class="form-select form-select-lg mb-3 login__input" class="login__input" aria-label="Large select example" name="product_id">
                                <option selected>Products Name</option>
                                <?php foreach($products as $iteam): ?>
                                    <?php if($iteam['id']==$row['product_id']):?>
                      <option selected value ="<?=$iteam['id']?>"><?=$iteam['title']?></option>
                      <?php else:?>
                        <option value ="<?=$iteam['id']?>"><?=$iteam['title']?></option>
					  <?php endif?>
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