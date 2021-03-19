<?php include '../../partials/header.php' ?>
<form method="post" action="insertconnect.php"  enctype="multipart/form-data">
<div class="container connect">
<div class="row">
    <div class="input-field col s2">
    Pseudo:<input id="user" type="text" name="user" data-length="10">
        <label for="user"></label>
       
    <button id="sendButton" type="submit" class="btn btn-light">Connection</button>
    </div>
 </div>
</div>
</form>
<?php include '../../partials/footer.php' ?>