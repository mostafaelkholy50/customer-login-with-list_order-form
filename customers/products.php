<?php include "../shared/header.php" ?>
<?php include "../shared/inc.php" ?>
<?php include "../shared/nav.php";?>
    <form action="product_request.php"method="post">
        <h1 class="text-center">products</h1>
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">
                    

					<i class="login__icon fas fa-user"></i>
					<input type="text" name="title"class="login__input" placeholder="title">
				</div>
				<div class="login__field">
                    <i class="login__icon fas fa-user"></i>
					<input type="number" name="price"class="login__input" placeholder="price">
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