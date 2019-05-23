<br><br><br><br>
<?php require 'fonctionphp/choixformules.php'; ?>
<?php require 'fonctionphp/recupfacture.php'; ?>
<div class="container">
  <div class="row">
    <br><br><br>
    <div class="col-sm">
      <div class="col">

        <?php if (empty($_SESSION['idf']) != NULL): ?>


        <img src="img/id-card.png"  class=" img-fluid d-block mx-auto" height="128px" width="128px" alt=""><br>

        <center><b> Passer le Code<br></b></center>

          <?php if (empty($_SESSION['grp']) != NULL): ?>
          <center><p>Vous devez d'abord vous connecter</p>
            <a class="btn btn-primary" href="?page=connexion">Pour vous connecter</a>
          </center>
            <?php endif; ?>

        <?php if (empty($_SESSION['idf']) == NULL || empty($_SESSION['grp']) == NULL ): ?>


          <center><a class="btn btn-primary"  href="fonctionphp/choixformules.php?form=1">choisir</a></center>
        <?php endif; ?>
          <?php endif; ?>

          <?php if (!empty($_SESSION['idf'] != NULL)): ?>
      
          <?php endif; ?>



      </div>
      <br>
      <br>
    </div>
    <div class="col-sm">


    <?php if (empty($_SESSION['idf']) != NULL): ?>
      <img src="img/driver-license.png"  class="rounded-circle img-fluid d-block mx-auto" height="128px" width="128px" alt=""><br>
      <center><b>Passer le code et le permis</b></center>

      <?php if (empty($_SESSION['grp']) != NULL): ?>
        <center><p>Vous devez d'abord vous connecter</p>
          <a class="btn btn-primary" href="?page=connexion">Pour vous connecter</a>
        </center>
      <?php endif; ?>




        <?php if (empty($_SESSION['idf']) == NULL || empty($_SESSION['grp']) == NULL ): ?>
          <center><a class="btn btn-primary"  href="fonctionphp/choixformules.php?form=2">choisir</a></center>
        <?php endif; ?>
          <?php endif; ?>

    </div>

    <div class="col-sm">
      <?php if (empty($_SESSION['idf']) != NULL): ?>

      <img src="img/car.png"  class="rounded-circle img-fluid d-block mx-auto" height="128px" width="128px" alt=""><br>
      <center><b> Passer le permis<br></b></center>
      <?php if (empty($_SESSION['grp']) != NULL): ?>
        <center><p>Vous devez d'abord vous connecter</p>
          <a class="btn btn-primary" href="?page=connexion">Pour vous connecter</a>
        <?php endif; ?>

        </center>

        <?php if (empty($_SESSION['idf']) == NULL || empty($_SESSION['grp']) == NULL ): ?>
          <center><a class="btn btn-primary"  href="fonctionphp/choixformules.php?form=3">choisir</a></center>
        <?php endif; ?>
      <?php endif; ?>



    </div>

    </div>

</div>
