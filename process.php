<?php
/*
include("connexion.php");
if (isset($_POST["create"])) {
    $nom = mysqli_real_escape_string($conn, $_POST["nom"]);
    $prenom = mysqli_real_escape_string ($conn, $_POST["prenom"]);
    $email = mysqli_real_escape_string ($conn, $_POST["email"]);
    $numero = mysqli_real_escape_string ($conn, $_POST["numero"]);
    $adresse = mysqli_real_escape_string ($conn, $_POST["adresse"]);
    $gender = mysqli_real_escape_string ($conn, $_POST["gender"]);
    $type = mysqli_real_escape_string ($conn, $_POST["type"]);
    $sql = "INSERT INTO apprenant (nom, prenom, email, numero, adresse, gender, type) VALUES ('$nom', '$prenom', '$email', '$numero', '$adresse', '$gender', '$type')";
    if (mysqli_query($conn, $sql)){
        echo "Record Inserted";
    }else{
        echo ("Someting went wrong");
    }
}
   

    
    include("connexion.php");
    
    if (isset($_POST["create"])) {
        // Vérifier si la connexion à la base de données est bien établie
        if (!$conn) {
            die("Erreur de connexion : " . mysqli_connect_error());
        }
    
        // Échapper les entrées pour éviter les injections SQL
        $nom = mysqli_real_escape_string($conn, $_POST["nom"]);
        $prenom = mysqli_real_escape_string($conn, $_POST["prenom"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $numero = mysqli_real_escape_string($conn, $_POST["numero"]);
        $adresse = mysqli_real_escape_string($conn, $_POST["adresse"]);
        $genre = mysqli_real_escape_string($conn, $_POST["genre"]);
        $formation = mysqli_real_escape_string($conn, $_POST["formation"]); // Si `type` est un champ unique
    
        // Si `type` est un tableau (choix multiples), convertir en chaîne de caractères
        if (is_array($_POST["formation"])) {
            $type = mysqli_real_escape_string($conn, implode(", ", $_POST["formation"]));
        }
    
        // Requête SQL
        $sql = "INSERT INTO apprenant (nom, prenom, email, numero, adresse, genre, formation) 
                VALUES ('$nom', '$prenom', '$email', '$numero', '$adresse', '$genre', '$formation')";
    
        if (mysqli_query($conn, $sql)) {
            echo "Enregistrement ajouté avec succès.";
        } else {
            echo "Erreur lors de l'insertion : " . mysqli_error($conn);
        }
    
        // Fermer la connexion
        mysqli_close($conn);
    }
     */
    
    
include("connexion.php");

if (isset($_POST["create"])) {
    $nom = mysqli_real_escape_string($conn, $_POST["nom"]);
    $prenom = mysqli_real_escape_string($conn, $_POST["prenom"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $numero = mysqli_real_escape_string($conn, $_POST["numero"]);
    $adresse = mysqli_real_escape_string($conn, $_POST["adresse"]);

    $formation = isset($_POST["formation"]) ? mysqli_real_escape_string($conn, $_POST["formation"]) : "";

    // Vérification de l'existence des clés avant de les utiliser
    $genre = isset($_POST["genre"]) ? mysqli_real_escape_string($conn, $_POST["genre"]) : "";
   
    

    $sql = "INSERT INTO apprenant (nom, prenom, email, numero, adresse, genre, formation) 
            VALUES ('$nom', '$prenom', '$email', '$numero', '$adresse', '$genre', '$formation')";

    if (mysqli_query($conn, $sql)) {
        session_start();
        $_SESSION["create"] = "✅ Apprenant ajouté avec succès !" ;
        header("Location:index.php");
        
    } else {
        echo "❌ Erreur : " . mysqli_error($conn);
    }
}

if (isset($_POST["edit"])) {
    $nom = mysqli_real_escape_string($conn, $_POST["nom"]);
    $prenom = mysqli_real_escape_string($conn, $_POST["prenom"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $numero = mysqli_real_escape_string($conn, $_POST["numero"]);
    $adresse = mysqli_real_escape_string($conn, $_POST["adresse"]);

    $formation = isset($_POST["formation"]) ? mysqli_real_escape_string($conn, $_POST["formation"]) : "";
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    

    // Vérification de l'existence des clés avant de les utiliser
    $genre = isset($_POST["genre"]) ? mysqli_real_escape_string($conn, $_POST["genre"]) : "";
    
    $updatesql = "UPDATE apprenant SET nom = '$nom', prenom = '$prenom', email = '$email', numero = '$numero', adresse = '$adresse', genre = '$genre', formation = '$formation' WHERE id=$id" ;
    if (mysqli_query($conn, $updatesql)){
        session_start();
        $_SESSION["edit"] = "✅ Apprenant modifié avec succès !" ;
        header("Location:index.php");
        
    } else{
        echo "❌ Erreur : " . mysqli_error($conn);
    }
}





?>