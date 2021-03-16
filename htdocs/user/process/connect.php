<?php include '../../partials/header.php' ?>
<form method="post" action="insertconnect.php"  enctype="multipart/form-data">

<div class="row">
    <div class="input-field col s2">
        <input id="user" type="text" name="user" data-length="10">
        <label for="user">Pseudo</label>
    </div>
    <div class="input-field col s2">
                <button id="sendButton" type="submit" class="waves-effect waves-light btn">Connection</button>
            </div>
</form>
<?php include '../../partials/footer.php' ?>