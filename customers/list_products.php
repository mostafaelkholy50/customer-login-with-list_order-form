<?php
 include "../shared/header.php" ;
 include "../shared/inc.php" ;
 $query="SELECT * FROM products ORDER BY id DESC";
 $data=mysqli_query($conn,$query);
 if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $delete="DELETE FROM products WHERE id = $id";
    mysqli_query($conn,$delete);
    header("location:./list_products.php");

 }
 ?>
 <?php include "../shared/nav.php";?>
<table class="table">
    <tr>
        <th>id</th>
        <th>title</th>
        <th>price</th>
        <th colspan="2">ACTION</th>
        
    </tr>
    <?php foreach($data as $itam):?>
    <tr>
        <td><?= $itam['id']?></td>
        <td><?= $itam['title']?></td>
        <td><?= $itam['price'] ;?></td>
        <td><a class="btn btn-danger " href="/instant/php/form/customers/list_products.php?delete=<?=$itam['id']?>"> DELETE </a></td>
        <td><a class="btn btn-warning " href="/instant/php/form/customers/edit_products.php?edit=<?=$itam['id']?>"> EDIT </a></td>
         
         <?php endforeach?>
        
    </tr>
</table>
</body>
</html>
<?php include "../shared/footer.php";?>