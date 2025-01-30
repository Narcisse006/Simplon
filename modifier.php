<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Modifier l'apprenant</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Modifier l'apprenant</h1>
            
            <div>
               <a href="index.php" class="btn btn-primary">Retour</a>
            </div>
        </header>
        <?php
        if (isset($_GET["id"])){
            $id = $_GET["id"];
            include("connexion.php");
            $sql = "SELECT * FROM apprenant WHERE id=$id";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_array($result);

        ?>
            <form action="process.php" method="POST">
            <div class="form-element my-4">
                <label>Nom</label>
                <input type="text" class="form-control" name="nom" value="<?php echo $row["nom"]; ?>" placeholder="Nom" required>
            </div>
            <div class="form-element my-4">
                <label>Prénom</label>
                <input type="text" class="form-control" name="prenom" value="<?php echo $row["prenom"]; ?>" placeholder="Prénom" required>
            </div>
            <div class="form-element my-4">
                <label>Email</label>
                <input type="email" class="form-control" name="email" value="<?php echo $row["email"]; ?>" placeholder="Email" required>
            </div>
            <div class="form-element my-4">
                <label>Numéro</label>
                <input type="text" class="form-control" name="numero" value="<?php echo $row["numero"]; ?>" placeholder="Numéro" required>
            </div>
            <div class="form-element my-4">
                <label>Adresse</label>
                <input type="text" class="form-control" name="adresse" value="<?php echo $row["adresse"]; ?>" placeholder="Adresse" required>
            </div>

            <div class="form-element my-4">
                <label>Genre</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" id="homme" name="genre" value="Masculin" <?php if($row['genre']=="Masculin"){echo "checked";} ?> class="form-check-input" required>
                    <label for="homme" class="form-check-label">Masculin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="femme" name="genre" value="Féminin" <?php if($row['genre']=="Féminin"){echo "checked";} ?>  class="form-check-input">
                    <label for="femme" class="form-check-label">Féminin</label>
                </div>
            </div>

            <div class="form-element my-4">
                <label>Formation suivie</label>
                <select name="formation" class="form-control" required>
                    <option value="">Choisir votre formation</option>
                    <option value="Dev web" <?php if($row['formation']=="Dev web"){echo "selected";} ?>>Développement Web</option>
                    <option value="Digital creator" <?php if($row['formation']=="Digital creator"){echo "selected";} ?>>Création Digitale</option>
                    <option value="Data analyse" <?php if($row['formation']=="Data analyse"){echo "selected";} ?>>Analyse de Données</option>
                </select>
            </div>
           <input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="edit" value="Modifier">
            </div>
            </form>

        <?php
        }
        ?>
        

    </div>
</body>
</html>
