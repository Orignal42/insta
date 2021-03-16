<?php
require_once(__DIR__."/pdo.php");



$selectStatement=  $pdo -> prepare('SELECT * FROM users ');
$selectStatement->execute();


?>


<?php include './partials/header.php'  ?>
<h1>Profile </h1>

<table border=1>
<thead>
<tr>
<th>Pseudo</th>
<th>Avatar</th>
<th>Bio</th>
</tr>

 
    <?php foreach ($selectStatement->fetchAll() as $user){?>
        <tr>
    
    <td><?=$user['user'] ?></td>
    <td><img src="<?php echo''. $user['avatar'].'';?>" alt="avatar" /></td>
        <td><?=$user['description']?></td>
   </tr>

<?php } ?>


  

</tbody>
</body>
</html>



<?php include './partials/footer.php' ?>