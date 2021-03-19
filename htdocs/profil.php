<?php
require_once(__DIR__."/pdo.php");
include './partials/header.php';

$selectStatement=  $pdo -> prepare('SELECT * FROM users JOIN photos ON users.id=photos.id_user WHERE users.id = ?');
$selectStatement->execute([
    $_SESSION['id']
]);


?>


<div class="container justify-content-center">
  
    <div class=bibli>
<h1>Profile </h1> 
<div class="container">   
    <?=$_SESSION['name'] ?><br>
   <div class="avatar">
   <img src="./user/avatar/<?php echo''. $_SESSION['avatar'].'';?>";/><br>
     </div>
     <div class="break">
   <?=$_SESSION['description']?>
     </div>
  
   </div>
   </div>
  <div class=row>
    <div class="col-12">
   <?php foreach ($selectStatement->fetchAll() as $user){?>
    <img src="photos/images/<?=$user['photo']?>" width="40%" height="auto">
     <?php } ?>
  
    </div>
</div>

</div>


<?php include './partials/footer.php' ?>