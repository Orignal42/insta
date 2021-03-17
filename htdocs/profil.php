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
<div class="container">
 
    <?php foreach ($selectStatement->fetchAll() as $user){?>
        <tr>
        <div class="col-xs-12 col-md-4">
    <td><?=$user['user'] ?></td></div>
    <div class="col-xs-12 col-md-4">
    <td><img src="./user/avatar/<?php echo''. $user['avatar'].'';?>" alt="avatar" height="auto%" width="25%"/></td></div>
    <div class="col-xs-12 col-md-4">
    <td><?=$user['description']?></td></div>
   </tr>

<?php } ?>
    </div>
</tbody>
</body>
</html>



<?php include './partials/footer.php' ?>