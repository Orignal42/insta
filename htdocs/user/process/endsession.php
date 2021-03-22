<?php 
session_start();//Creer la session
session_destroy();
header('Location: /../index.php?message= vous avez été deconnecté');
?>