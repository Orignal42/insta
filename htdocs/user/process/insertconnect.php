<?php
require_once(__DIR__."/../../pdo.php");
session_start();


if (empty($_POST['user'])){
    
    {
        header('Location: ../../index.php?message=pseudo vide');
    }


    }
    $_SESSION['user']=$_POST['user'];


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
        header('Location: ../../index.php?message=pseudo inexistant');
    }
}
 catch (Exception $e) {
    print "Erreur de lecture! " . $e->getMessage() . "<br/>";
}