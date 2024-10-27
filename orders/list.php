<?php
include "../shared/header.php";
include "../shared/inc.php" ;

$counter =1;
if(isset($_GET['customer_id'])){
    $customer_id = $_GET['customer_id'];
    
    $select="SELECT * FROM orders WHERE customer_id ='$customer_id' ORDER BY id DESC";
    $query=mysqli_query($conn,$select);

} else{
$select="SELECT * FROM orders ORDER BY id DESC";
$query=mysqli_query($conn,$select);}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete="DELETE FROM orders WHERE id = $id";
    mysqli_query($conn,$delete);
    header("location: ./list.php");
}

?>
<?php include "../shared/nav.php";?>
<table class="table">
    <tr>
        <th>id</th>
        <th>amount</th>
        <th>create date</th>
        <th colspan="3">ACTION</th>
        
    </tr>
    <?php foreach($query as $itam):?>
    <tr>
        <td><?= $counter++?></td>
        <td><?= $itam['amount']?></td>
        <td><?= $itam['create_date']?></td>
        <td><a class="btn btn-danger " href="/instant/php/form/orders/list.php?delete=<?=$itam['id']?>"> DELETE </a></td>
        <td><a class="btn btn-warning " href="/instant/php/form/orders/edit.php?edit=<?=$itam['id']?>"> EDIT </a></td>
        <td><a class="btn btn-success " href="/instant/php/form/orders/view.php?show=<?=$itam['id']?>"> show </a></td>
        <td></td>
        <?php endforeach?>
    </tr>
</table>
    
</body>
</html>
<?php include "../shared/footer.php";?>