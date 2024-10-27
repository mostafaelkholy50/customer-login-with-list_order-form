<?php
include "../shared/header.php";
include "../shared/inc.php" ;

$counter =1;
$select="SELECT * FROM customers ORDER BY id DESC";
$query=mysqli_query($conn,$select);

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
     
    $data_one="SELECT *FROM customers WHERE id = $id";
    $query_one=mysqli_query($conn,$data_one);
    $row=mysqli_fetch_assoc($query_one);
    $old_image= $row['image'];
  
    if( $old_image ="./upload/def.jpg"){
        $delete="DELETE FROM customers WHERE id = $id";
        mysqli_query($conn,$delete);
        header("location: ./list_customers.php");
    }
    unlink("./upload/$old_image");
 }
?>
<?php include "../shared/nav.php";?>

<table class="table">
    <tr>
        <th>id</th>
        <th>full_name</th>
        <th>age</th>
        <th>phone</th>
        <th>image</th>
        <th>country</th>
        <th>gender</th>
        <th colspan="4">ACTION</th>
        
    </tr>
    <?php foreach($query as $itam):?>
    <tr>
        <td><?= $counter++?></td>
        <td><?= $itam['full_name']?></td>
        <td><?= $itam['age'] ?></td>
        <td><?= $itam['phone'] ?></td>
        <td><img width="50" src="./upload/<?=$itam['image'] ?>" alt=""></td>
        <td><?= $itam['country'] ?></td>
        <td><?= $itam['gender'] ;?></td>
        <td><a class="btn btn-danger " href="/instant/php/form/customers/list_customers.php?delete=<?=$itam['id']?>"> DELETE </a></td>
        <td><a class="btn btn-warning " href="/instant/php/form/customers/edit_customera.php?edit=<?=$itam['id']?>"> EDIT </a></td>
        <td><a class="btn btn-warning " href="/instant/php/form/orders/list.php?customer_id= <?=$itam['id']?>"> orders </a></td>
        <td><a class="btn btn-success " href="/instant/php/form/customers/view.php?show=<?=$itam['id']?>"> show </a></td>
        <td></td>
        <?php endforeach?>
    </tr>
</table>
    
</body>
</html>
<?php include "../shared/footer.php";?>