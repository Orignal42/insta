<?php include './partials/header.php' ?>

<?php if(isset($_GET["message"])) : ?>
   <div style="padding:10px;background:green;color:#fff;">
   <?=    $_GET["message"]?>
   </div>          
     <?php endif ;?>    

<?php include './partials/footer.php' ?>
