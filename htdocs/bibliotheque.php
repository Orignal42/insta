<?php
require_once(__DIR__."/pdo.php");
session_start();

include './partials/header.php'; 

$selectStatement=  $pdo -> prepare('SELECT * FROM photos ');
$selectStatement->execute();

?>

<h1>Bibliothéque </h1>

<table border=1>
<thead>
<tr>
<th>Photo</th>
<th>Commentaire</th>
<button>LIKE</button>
</tr>

 
    <?php foreach ($selectStatement->fetchAll() as $photo){;?>
        
    <div class=row>   
      
    <tr>    
    <div class="col-xs-12 col-md-4">
    <td><img src="photos/images/<?php echo $photo['photo'];?>"alt="images" height="auto%" width="60%"/></td>
    </div>
    <div class="col-xs-12 col-md-4">
    <td><?=$photo['comments']?></td>
    </div>

    </tr>
    

    </div>
<?php } ?>


  
   
</tbody>
</body>
</html>

<form method="post" action="./photos/process/photo.php"  enctype="multipart/form-data">
        <div class="container">                  
        <button> Ajouter une image</button>
        </div>  

</form>
<form method="post" action="../profil.php" >
        <div class="container">                 
        <button> Profil</button>              
        </div>  

</form>


<?php include './partials/footer.php' ?>
