<?php include "../shared/header.php"?>
<?php include "../shared/inc.php" ?>
<?php include "../shared/nav.php";?>
    <form action="./customer_request.php" method="post" enctype="multipart/form-data">
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">

					<i class="login__icon fas fa-user"></i>
					<input type="text" name="full_name"class="login__input" placeholder="full name">
				</div>
				<div class="login__field">
                    <i class="login__icon fas fa-user"></i>
					<input type="number" name="age"class="login__input" placeholder=" age">
				</div>
				<div class="login__field">
                    <i class="login__icon fas fa-user"></i>
					<input type="number" name="phone"class="login__input" placeholder="phone">
				</div>
				<div class="login__field">
                    <i class="login__icon fas fa-user"></i>
					<input type="file" name="image" class="login__input">
				</div>

                <div class="login__field">
                <select class="form-select form-select-lg mb-3 login__input" aria-label="Large select example" name="country">
                     <option selected>country</option>
                      <option value="EGYPT">egypt</option>
                      <option value="MASR">masr</option>
                       </select>

                </div>
                <div class="login__field">
                <select class="form-select form-select-lg mb-3 login__input" aria-label="Large select example"  name="gender">
                     <option selected>gender</option>
                      <option value="MAN">man</option>
                      <option value="WOMAN">woman</option>
                      <option value="ELSE">else</option>
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