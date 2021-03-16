<?php include '..//../partials/header.php'  ?>


<form method="post" action="/../insertphoto.php">


<div class="input-field col s8">
                <textarea id="commentaire" class="materialize-textarea" name="commentaire" data-length="255"></textarea>
                <label for="commentaire"></label>
            </div>
         

<div class="input-field col s2">
                <button id="sendButton" type="submit" class="waves-effect waves-light btn">Partager l'image</button>

            </div>
                  
        
            <label for="avatar">Avatar:</label>

        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
        
        
        </div>  
</form>









<?php include '..//../partials/footer.php' ?>