<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Ajouter un apprenant</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Ajouter un apprenant</h1>
            
            <div>
               <a href="index.php" class="btn btn-primary">Retour</a>
            </div>
        </header>
        
        <form action="process.php" method="POST">
            <div class="form-element my-4">
                <label>Nom</label>
                <input type="text" class="form-control" name="nom" placeholder="Nom" required>
            </div>
            <div class="form-element my-4">
                <label>Prénom</label>
                <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
            </div>
            <div class="form-element my-4">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
            <div class="form-element my-4">
                <label>Numéro</label>
                <input type="text" class="form-control" name="numero" placeholder="Numéro" required>
            </div>
            <div class="form-element my-4">
                <label>Adresse</label>
                <input type="text" class="form-control" name="adresse" placeholder="Adresse" required>
            </div>

            <div class="form-element my-4">
                <label>Genre</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" id="homme" name="genre" value="Masculin" class="form-check-input" required>
                    <label for="homme" class="form-check-label">Masculin</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="femme" name="genre" value="Féminin" class="form-check-input">
                    <label for="femme" class="form-check-label">Féminin</label>
                </div>
            </div>

            <div class="form-element my-4">
                <label>Formation suivie</label>
                <select name="formation" class="form-control" required>
                    <option value="">Choisir votre formation</option>
                    <option value="Dev web">Développement Web</option>
                    <option value="Digital creator">Création Digitale</option>
                    <option value="Data analyse">Analyse de Données</option>
                </select>
            </div>


            <div class="form-element my-4">
                <input type="submit" class="btn btn-success" name="create" value="Ajouter">
            </div>
        </form>
    </div>
</body>
</html>
