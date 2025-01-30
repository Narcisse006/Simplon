<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des apprenants</title>
</head>
<body>
    <div class ="container">
    <header class="d-flex justify-content-between my-4">
            <h1>Liste des apprenants</h1>
            
            <div>
               <a href="creation.php" class="btn btn-primary">Ajouter un apprenant</a>
            </div>
        </header>
        <?php
        session_start();
        if (isset($_SESSION["create"])) {
            ?>
            <div class="alert alert-success">
            <?php
            echo $_SESSION["create"];
            unset($_SESSION["create"]);
            ?>
            </div>
             <?php
        }
        ?>
        <?php
        
        if (isset($_SESSION["edit"])) {
            ?>
            <div class="alert alert-success">
            <?php
            echo $_SESSION["edit"];
            unset($_SESSION["edit"]);
            ?>
            </div>
             <?php
        }
        ?>
        <?php
        
        if (isset($_SESSION["delete"])) {
            ?>
            <div class="alert alert-success">
            <?php
            echo $_SESSION["delete"];
            unset($_SESSION["delete"]);
            ?>
            </div>
             <?php
        }
        ?>
        <table class= "table table-bordered">
            <thead>
                <tr>
                    <th>Index</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Numero</th>
                    <th>Adresse</th>
                    <th>Genre</th>
                    <th>Fomation suivie</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php
            include("connexion.php");
            $sql = " SELECT * FROM apprenant";
            $result = mysqli_query($conn, $sql);
            
            while ($row = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["nom"]; ?></td>
                    <td><?php echo $row["prenom"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["numero"]; ?></td>
                    <td><?php echo $row["adresse"]; ?></td>
                    <td><?php echo $row["genre"]; ?></td>
                    <td><?php echo $row["formation"]; ?></td>
                    <td>
                        <a href="details.php?id=<?php echo $row["id"]; ?>" class="btn btn-info">Details</a>
                        <a href="modifier.php?id=<?php echo $row["id"]; ?>" class="btn btn-warning">Modifier</a>
                        <a href="supprimer.php?id=<?php echo $row["id"]; ?>" class="btn btn-danger">Supprimer</a>
                    </td>
                </tr>
                <?php   
            }
            ?>
            </tbody>
        </table>
    </div>
    
</body>
</html>