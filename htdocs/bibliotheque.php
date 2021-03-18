<?php
require_once(__DIR__."/pdo.php");
include './partials/header.php'; 

$selectStatement=  $pdo -> prepare('SELECT * FROM photos ORDER BY created_at DESC ');
$selectStatement->execute();

?>
<div class="bibli">
<form method="post" action="./photos/process/photo.php"  enctype="multipart/form-data">
<div class="container">                  
<button> Ajouter une image</button>
</div>  

</form>


<h1>Bibliothèque </h1>
</div>

<div class="container">
<div class="row">
    <?php foreach ($selectStatement->fetchAll() as $photo){;?>
        

        
       
                <div class="col-3">
                        <img src="photos/images/<?php echo $photo['photo'];?>"alt="images" />  
                                  
               
                        <?=$photo['comments']?><br>
                                  
                        <button id="button" class="button">
                                Cliquez ici
                        </button>
                        <p>liker ici<span id="nombreClics">0</span>     fois.</p>
                 
                </div>

      
                



    
<?php } ?>
<div class="col-1"></div>
</div>      
</div>   
  
   






<script src=/js/like.js></script>
<?php include './partials/footer.php' ?>
