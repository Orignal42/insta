<?php
require_once(__DIR__."/../../pdo.php");
session_start();//Creer la session


if (empty($_POST['user'])){
    header('Location: ../../index.php?message=pseudo vide');
}
  

$sql= ("SELECT * FROM users WHERE user = ?");
try {
    $stmt = $pdo->prepare($sql);
    $stmt->execute(array(
        $_POST["user"]
    ));
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user)
    {   //permet de récuperer tous les éléments de la tables
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['user'];
        $_SESSION['avatar'] = $user['avatar'];
        $_SESSION['description'] = $user['description'];
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