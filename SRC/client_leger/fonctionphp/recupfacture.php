<?php


require 'config.php';

GLOBAL $db;
$query = "SELECT * FROM facture WHERE idu=".$_SESSION['idu'].";";

$query2ok=$db->prepare($query);
$query2ok->execute();
$count=$query2ok->rowCount();

  if ($count >= 1) {
    while ($row = $query2ok->fetch(PDO::FETCH_NUM)) {
      $idf=$row[0];
      $idu=$row[1];
      $nom=$row[2];
      $link=$row[3];


      echo "<a href='$link'>Votre facture est disponible ici!
                            Facture n°$idf </br></a>";

    }
}

 ?>
