<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details de l'apprenant</title>
    <style>
        .detail-apprenant{
            background: #f5f5f5;
            padding:50px;
        }
    </style>
</head>
<body>
    <div class="container">
    <header class="d-flex justify-content-between my-4">
            <h1>Details de l'apprenant</h1>
            
            <div>
               <a href="index.php" class="btn btn-primary">Retour</a>
            </div>
        </header>
        <div class="detail-apprenant my-4">
        <?php
            if(isset($_GET["id"])){
                $id = $_GET["id"];
                include("connexion.php");
                $sql = "SELECT * FROM apprenant WHERE id=$id";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_array($result);
                ?>
                <h2>Nom</h2>
                <p><?php echo $row["nom"] ?></p>
                <h2>Prenom</h2>
                <p><?php echo $row["prenom"] ?></p>
                <h2>Email</h2>
                <p><?php echo $row["email"] ?></p>
                <h2>Numero</h2>
                <p><?php echo $row["numero"] ?></p>
                <h2>Adresse</h2>
                <p><?php echo $row["adresse"] ?></p>
                <h2>Genre</h2>
                <p><?php echo $row["genre"] ?></p>
                <h2>Formation suivie</h2>
                <p><?php echo $row["formation"] ?></p>

                <?php
            }
        ?>
        </div>
    </div>
</body>
</html>