<?php
require_once(__DIR__."/pdo.php");
include './partials/header.php'; 

$selectStatement=  $pdo -> prepare('SELECT * FROM photos ORDER BY created_at DESC ');
$selectStatement->execute();

?>
<?php if($_SESSION){?>
        <div class="bibli">
<form method="post" action="./photos/process/photo.php"  enctype="multipart/form-data">
                
<button> Ajouter une image</button>

</form>
<?php }?>
</div>
        <div class=biblio>
<h1>Imagothèque </h1>
        </div>
        
<div class="container">
<div class="row align-items-center">


    <?php foreach ($selectStatement->fetchAll() as $photo){;?>
        

        
       
 <div class="col-3 "data-idUser>

         <img src="photos/images/<?php echo $photo['photo'];?>"alt="images" data-idPhoto width="80%" height="auto" /> <br> 
                                  
          <div class="break">     
         <?=$photo['comments']?><br>
        </div>  <br>  
         <button id="likeBtn">👍
         </button><br>
                      
                 
</div>
 <?php } ?>
<div class="col-1"></div>
</div>      
</div>   
  
   







<?php include './partials/footer.php' ?>
