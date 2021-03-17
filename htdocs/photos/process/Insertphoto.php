<?php
  require_once(__DIR__."/../../pdo.php");
  session_start();
 
$comment=$_POST["commentaire"];


if (empty($comment)){
    die("parametres manquants");
    
}  
$user=$_SESSION["user"];
$insertStatement = $pdo->prepare("
SELECT * FROM users WHERE user = ?
");

$insertStatement ->execute([
    $_SESSION["user"],
]);
$resultUser = $insertStatement->fetch(PDO::FETCH_ASSOC);
$id=$resultUser['id'];



$insertStatement= $pdo-> prepare('SELECT* FROM photos JOIN users ON users.id=photos.id_user');
$insertStatement->execute();


    $insertPhotosStatement = $pdo->prepare("
        INSERT INTO photos
        (photo,id_user,comments)
        VALUES
        (?,?,?)"
);


$insertPhotosStatement-> execute([

    $_FILES['photo']["name"],
    $id,
    $_POST["commentaire"]

]);


header('Location: ../../bibliotheque.php');

// Vérifier si le formulaire a été soumis
if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Vérifie si le fichier a été uploadé sans erreur.
    if(isset($_FILES["photo"]) && $_FILES["photo"]["error"] == 0){
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        $filename = $_FILES["photo"]["name"];
        $filetype = $_FILES["photo"]["type"];
        $filesize = $_FILES["photo"]["size"];

        // Vérifie l'extension du fichier
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        if(!array_key_exists($ext, $allowed)) die("Erreur : Veuillez sélectionner un format de fichier valide.");

        // Vérifie la taille du fichier - 5Mo maximum
        $maxsize = 5 * 1024 * 1024;
        if($filesize > $maxsize) die("Error: La taille du fichier est supérieure à la limite autorisée.");

        // Vérifie le type MIME du fichier
        if(in_array($filetype, $allowed)){
            // Vérifie si le fichier existe avant de le télécharger.
            if(file_exists("images/" . $_FILES["photo"]["name"])){
                echo $_FILES["photo"]["name"] . " existe déjà.";
            } else{
                move_uploaded_file($_FILES["photo"]["tmp_name"], "../images/" . $_FILES["photo"]["name"]);
                echo "Votre fichier a été téléchargé avec succès.";
            } 
        } else{
            echo "Error: Il y a eu un problème de téléchargement de votre fichier. Veuillez réessayer."; 
        }
    } else{
        echo "Error: " . $_FILES["photo"]["error"];
    }
}

?>
