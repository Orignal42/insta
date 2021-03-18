<?php
require_once(__DIR__."/pdo.php");
include './partials/header.php';

$selectStatement=  $pdo -> prepare('SELECT * FROM users JOIN photos ON users.id=photos.id_user WHERE users.id = ?');
$selectStatement->execute([
    $_SESSION['id']
]);


?>


<div class="container">
    <div class=bibli>
<h1>Profile </h1>
    </div>



    
    <?=$_SESSION['name'] ?><br>
   
   <img src="./user/avatar/<?php echo''. $_SESSION['avatar'].'';?>" alt="avatar" height="auto%" width="25%"/><br>

   <?=$_SESSION['description']?>
  
   <div class=row>
<div class="col-8">
   <?php foreach ($selectStatement->fetchAll() as $user){?>
    <img src="photos/images/<?=$user['photo']?>">
    <?php } ?>
    
</div>
</div> 
</div>

</div>
<?php include './partials/footer.php' ?>