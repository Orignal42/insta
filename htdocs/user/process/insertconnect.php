<?php
require_once(__DIR__."/../../pdo.php");



if (empty($_POST['user'])){
    
    die('pseudo manquant');


    }


$sql= ("SELECT * FROM users WHERE user = :user");
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(':user' => $_POST["user"]));
    $count = $stmt->rowCount();
    if($count > 0)
    {
        
        header('Location: ../../bibliotheque.php');
    }
    else
    {
        header('Location: ../../index.php?pseudo inexistant');
    }
}
 catch (Exception $e) {
    print "Erreur de lecture! " . $e->getMessage() . "<br/>";
}