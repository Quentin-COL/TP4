
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Jumbotron Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->
<link rel="stylesheet" href="https://bootswatch.com/4/cerulean/bootstrap.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">   
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-primary">
      <a class="navbar-brand pl-5" href="index.php">Ma Bibliothèque</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-layer-group"></i> Gestion des genres</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="index.php?uc=genres&action=list"><i class="fa-solid fa-list"></i> Liste des genres</a>
              <a class="dropdown-item" href="index.php?uc=genres&action=add"><i class="fa-solid fa-plus"></i> Ajouter un genre</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-book"></i> Gestion des livres</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="index.php?uc=livres&action=list"><i class="fa-solid fa-list"></i> Liste des livres</a>
              <a class="dropdown-item" href="index.php?uc=livres&action=add"><i class="fa-solid fa-plus"></i> Ajouter un livre</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-male"></i> Gestion des auteurs</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="index.php?uc=auteurs&action=list"><i class="fa-solid fa-list"></i> Liste des auteurs</a>
              <a class="dropdown-item" href="index.php?uc=auteurs&action=add"><i class="fa-solid fa-plus"></i> Ajouter un auteur</a>
              <a class="dropdown-item" href="#"><i class="fa-solid fa-magnifying-glass"></i> Rechercher un auteur</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-house-flag"></i> Gestion des nationalités</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="index.php?uc=nationalites&action=list"><i class="fa-solid fa-list"></i> Liste des nationalités</a>
              <a class="dropdown-item" href="index.php?uc=nationalites&action=add"><i class="fa-solid fa-plus"></i> Ajouter une nationalité</a>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa-solid fa-earth-europe"></i> Gestion des continents</a>
            <div class="dropdown-menu" aria-labelledby="dropdown01">
              <a class="dropdown-item" href="index.php?uc=continents&action=list"><i class="fa-solid fa-list"></i> Liste des continents</a>
              <a class="dropdown-item" href="index.php?uc=continents&action=add"><i class="fa-solid fa-plus"></i> Ajouter un continent</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>