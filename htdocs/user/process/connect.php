<?php include '../../partials/header.php' ?>
<form method="post" action="insertconnect.php"  enctype="multipart/form-data">
<div class="container">
<div class="row">
    <div class="connect">
    Pseudo:<input id="user" type="text" name="user" data-length="10"><br>
            
    <button id="sendButton" type="submit" class="btn btn-light">Connection</button>
    </div>
 </div>
</div>
</form>
<?php include '../../partials/footer.php' ?>