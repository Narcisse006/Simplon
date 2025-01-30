<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    include("connexion.php");
    $sql = "DELETE FROM apprenant WHERE id = $id";
    if(mysqli_query($conn,$sql)){
        session_start();
        $_SESSION["delete"] = "Apprenant supprimé avec succès !😁" ;
        header("Location:index.php");
       
    }
} 

?>


