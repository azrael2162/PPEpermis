<?php
require 'config.php';
@$id = $_SESSION['idu'];
GLOBAL $db;
$query = "SELECT * FROM client WHERE idu=$id;";

$query2ok=$db->prepare($query);
$query2ok->execute();
$count=$query2ok->rowCount();

  if ($count == 1) {
    while ($row = $query2ok->fetch(PDO::FETCH_NUM)) {
      $id=$row[0];//id
      $idf=$row[1];//idf
      $adresse=$row[2];//adress
      $code_zip=$row[3];//code_zip
      $datenaissa=$row[4];//datenaissa
      $tel=$row[5];//tel
      $nom=$row[6];//nom
      $prenom=$row[7];//prenom
      $mail =$row[8];//mail
      $passwd=$row[9];//passwd
      $val =$row[11];
      $grp = $row[13];
    }
$_SESSION['idu'] = $id;
$_SESSION['idf'] = $idf;



}
?>
