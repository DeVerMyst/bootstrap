<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exemples d'utilisation de Bootstrap avec PHP</title>
  <!-- Link vers Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">Bootstrap Examples with PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">Accueil <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#buttons">Boutons</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#alerts">Alertes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#cards">Cards</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#forms">Formulaires</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-4">
    <h1>Exemples d'utilisation de Bootstrap avec PHP</h1>

    <!-- Boutons -->
    <h2 id="buttons" class="mt-4">Boutons</h2>
    <div class="row">
      <div class="col-md-3 mb-2">
        <form method="post" action="back.php">
          <button type="submit" class="btn btn-primary btn-block" name="btn_color" value="primary">Bouton primaire</button>
        </form>
      </div>
      <!-- Ajoutez ici les autres boutons avec des couleurs différentes -->
    </div>

    <!-- Alertes -->
    <h2 id="alerts" class="mt-4">Alertes</h2>
    <div class="row">
      <!-- Les alertes générées par PHP seront affichées ici -->
      <?php include 'back.php'; ?>
    </div>

    <!-- Cards -->
    <h2 id="cards" class="mt-4">Cards</h2>
    <div class="row">
      <!-- Ajoutez ici les exemples de cards avec différentes classes de couleur -->
    </div>

    <!-- Formulaires -->
    <h2 id="forms" class="mt-4">Formulaires</h2>
    <form method="post" action="back.php">
      <div class="row">
        <div class="col-md-6 mb-3">
          <label for="exampleFormControlInput1">Adresse e-mail</label>
          <input type="email" class="form-control" id="exampleFormControlInput1" name="email" placeholder="name@example.com">
        </div>
        <div class="col-md-6 mb-3">
          <label for="exampleFormControlSelect1">Sélection</label>
          <select class="form-control" id="exampleFormControlSelect1" name="selection">
            <option>Option 1</option>
            <option>Option 2</option>
            <option>Option 3</option>
          </select>
        </div>
        <div class="col-md-6 mb-3">
          <label for="exampleFormControlTextarea1">Textarea</label>
          <textarea class="form-control" id="exampleFormControlTextarea1" name="textarea" rows="3"></textarea>
        </div>
        <div class="col-md-6 mb-3">
          <label for="exampleFormControlFile1">Choisir un fichier</label>
          <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
        </div>
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary" name="submit">Envoyer</button>
        </div>
      </div>
    </form>
  </div>

  <!-- Link vers jQuery, Popper.js, et Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
