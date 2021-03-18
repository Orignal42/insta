<?php
session_start();
session_destroy();
header('Location: /../index.php?message= vous avez été deconnecté');
?>