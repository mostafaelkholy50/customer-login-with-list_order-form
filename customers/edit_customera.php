
<?php include "../shared/inc.php" ?>
<?php include "../shared/header.php" ?> 
<?php
if(isset($_GET['edit'])){
    $id= $_GET['edit'];
    $select="SELECT* FROM customers WHERE id = $id";
    $query = mysqli_query($conn,$select);
    $row=mysqli_fetch_assoc($query);
    
    if(isset($_POST['submit'])){
        $full_name=$_POST['full_name'];
        $age=$_POST['age'];
        $phone=$_POST['phone'];
        $image=$_POST['image'];
        if($image== null){
            $image="def.jpg";
        }else{ 
            $image=$_POST['image'];}
        $image=$_POST['image'];
        $country=$_POST['country'];
        $gender=$_POST['gender'];
        $update="UPDATE customers SET full_name ='$full_name', age=$age,phone=$phone,   image = '$image', country='$country',gender='$gender'
        WHERE id=$id";
        $A=mysqli_query($conn,$update);
        header("location: ./list_customers.php");

    }
}
?>
<?php include "../shared/nav.php";?>
    <form action="./customer_request.php" method="post" enctype="multipart/form-data" >
<div class="container">
	<div class="screen">
		<div class="screen__content">
			<form class="login">
				<div class="login__field">

					<i class="login__icon fas fa-user"></i>
					<input type="text" name="full_name"class="login__input" value=" <?= $row['full_name'] ?>" >
				</div>
				<div class="login__field">
                    <i class="login__icon fas fa-user"></i>
					<input type="text" name="age"class="login__input" value=" <?= $row['age'] ?>">
				</div>
				<div class="login__field">
                    <i class="login__icon fas fa-user"></i>
					<input type="text" name="phone"class="login__input"  value=" <?= $row['phone'] ?>">
				</div>
				<div class="login__field">
                    <i class="login__icon fas fa-user"></i>
					<input type="file" name="image"class="login__input"  value=" <?= $row['image'] ?>">
				</div>

                <div class="login__field">
                <select class="form-select form-select-lg mb-3 login__input" aria-label="Large select example"  name="country">
                <?php if($row['country']=="EGYPT"):?>
                      <option selected value="EGYPT">EGYPT</option>
                      <option value="MASR">MASR</option>
                      <?php else:?>
                        <option selected value="MASR">MASR</option>
                        <option value="EGYPT">EGYPT</option>
                        <?php endif?>

                       </select>

                </div>
                <div class="login__field">
                <select class="form-select form-select-lg mb-3 login__input" aria-label="Large select example"  name="gender">
                <?php if($row['gender']=="man"):?>
                      <option selected value="MAN">man</option>
                      <option value="WOMAN">woman</option>
                      <?php else:?>
                        <option selected value="MAN">man</option>
                        <option value="WOMAN">woman</option>
                        <?php endif?>

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