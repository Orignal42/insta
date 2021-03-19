<?php
include '..//../partials/header.php'  ?>
<div class="container phto">
<form method="post" action="/photos/process/Insertphoto.php"enctype="multipart/form-data">


    <div class="input-field col s8"id="phtos">
     Commentaire:<br><textarea id="commentaire" class="materialize-textarea" name="commentaire" data-length="255"></textarea>
                <label for="commentaire"></label>
     </div>
                     
        
            <label for="avatar"><br>Photo:</label>

        <input type="file" id="photo" name="photo" accept="image/png, image/jpeg">
     <br>
        <div class="input-field col s2">
        <button id="sendButton" type="submit" class="btn btn-light">Partager l'image</button>

            </div>   
        
        </div>  
        
</form>









<?php include '..//../partials/footer.php' ?>