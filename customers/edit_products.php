<?php
 include "../shared/header.php" ;
 include "../shared/inc.php" ;
 if(isset($_GET['edit'])){
 $id = $_GET['edit'];
$query="SELECT * FROM products WHERE id = $id ";
$result=mysqli_query($conn,$query);
$row= mysqli_fetch_assoc($result);
$titl= $row['title'];
$pric= $row['price'];
if(isset($_POST['submit'])){
 $title= $_POST['title'];
 $price= $_POST['price'];
 $update="UPDATE products SET title = '$title' , price = '$price' WHERE id = $id";
 $o=mysqli_query($conn,$update);
 header("location: ./list_products.php");
}
 }
 ?>
 <?php include "../shared/nav.php";?>
     <form method="post">
        <h1 class="text-center">products</h1>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
                    

					<i class="login__icon fas fa-user"></i>
					<input type="text" name="title"class="login__input"value=" <?= $titl ?>">
				</div>
				<div class="login__field">
                    <i class="login__icon fas fa-user"></i>
					<input type="text" name="price"class="login__input" value=" <?=$pric ?>">
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