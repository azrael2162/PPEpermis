<?php
session_start();
require 'fonctionphp/recup_info_membre.php';

Global $grp;
$_SESSION['grp'] = $grp;
?>
<header>
  <head>
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-gJWVjz180MvwCrGGkC4xE5FjhWkTxHIR/+GgT8j2B3KKMgh6waEjPgzzh7lL7JZT" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  </head>
<?php if (empty($_SESSION['grp'])): ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="img/driverwhite.png" height="128px" width="128px" alt="">  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?pages=accueil">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=formulepasco">Les formules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=connexion">Connexion</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<?php endif; ?>
<?php if (@!empty($_SESSION['grp'] == 2)):

   ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="#"><img src="img/driverwhite.png" height="128px" width="128px" alt="">  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarColor01">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="?pages=accueil">dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=membre">page membre</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=planning">Mon planning</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=formules">formules</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=deconnexion">deconnexion</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<?php endif; ?>
