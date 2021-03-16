<?php include '../../partials/header.php' ?>
<section>
<form method="post" action="insertuser.php"  enctype="multipart/form-data">

        <div class="row">
            <div class="input-field col s2">
                <input id="user" type="text" name="user" data-length="10">
                <label for="user">Pseudo</label>
            </div>

            <div class="input-field col s8">
                <textarea id="bio" class="materialize-textarea" name="bio" data-length="120"></textarea>
                <label for="bio">Bio</label>
            </div>
         
        
            <label for="avatar">Avatar:</label>

        <input type="file" id="avatar" name="avatar" accept="image/png, image/jpeg">
        
        
        </div>  

        <div class="input-field col s2">
                <button id="sendButton" type="submit" class="waves-effect waves-light btn">Creation nouvel utilisateur</button>
            </div>
</form>


</section>



<?php include '../../partials/footer.php' ?>