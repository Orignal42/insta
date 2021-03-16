<?php
require_once(__DIR__."/pdo.php");
session_start();

include './partials/header.php' 


?>


<form method="post" action="./photos/process/photo.php"  enctype="multipart/form-data">

        <div class="row">

            
        
        
        <button> Ajouter une image</button>
        
        
        </div>  

</section>

<?php include './partials/footer.php' ?>
