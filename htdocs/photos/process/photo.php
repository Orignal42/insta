<?php
include '..//../partials/header.php'  ?>


<form method="post" action="/photos/process/Insertphoto.php"enctype="multipart/form-data">


<div class="input-field col s8">
                <textarea id="commentaire" class="materialize-textarea" name="commentaire" data-length="255"></textarea>
                <label for="commentaire"></label>
            </div>
         

              
        
            <label for="avatar">Photo:</label>

        <input type="file" id="photo" name="photo" accept="image/png, image/jpeg">
        <div class="input-field col s2">
                <button id="sendButton" type="submit" class="waves-effect waves-light btn">Partager l'image</button>

            </div>   
        
        </div>  
</form>









<?php include '..//../partials/footer.php' ?>