<?php
require 'config.php';
require 'fpdf.php';

 @session_start();
GLOBAL $db;


if (isset($_GET['form'])) {
  $laformule = $_GET['form'];

   $query= "UPDATE `client` SET `idf` = '$laformule' WHERE `client`.`idu` = ".$_SESSION['idu'].";";

   $requeteprt = $db->prepare($query);
   $requeteprt->execute();

   $query1 = "SELECT * FROM `formule` WHERE `idf` = $laformule;";

   $query2ok=$db->prepare($query1);


   $query2ok->execute();
   $count=$query2ok->rowCount();

     if ($count == 1) {
       while ($row = $query2ok->fetch(PDO::FETCH_NUM)) {
         $num=$row[0];
         $nomform=$row[1];
         $prix=$row[2];

       }
     }




   $today = date("D M j Y");
   $pdf = new FPDF();
   $pdf->AddPage();
   $pdf->Image('../img/driver.png',10,6,30);
   $pdf->SetFont('Arial','B',15);
   $pdf->Cell(80);
   $pdf->Cell(30,10,'Facture',1,0,'C');
   $pdf->SetY(50);
   $pdf->Cell(50,10,'Detail de la facture',1,10,'F');
   $pdf->SetFont('Arial','I',15);
   $pdf->SetY(60);
   $pdf->Cell(0,20,"merci d'avoir choisi notre auto-ecole ! ".$today);
   $pdf->SetY(70);
   $pdf->Cell(0,20,"La formule choisi est ".$nomform.", au prix de ".$prix." euros.");
   $pdf->SetY(76);
   $pdf->Cell(0,20,"pour regler la facture, je vous invites a vous rendre directement a Castellanecars,");
   $pdf->SetY(82);
   $pdf->Cell(0,20,"au cours de votre prochaine visite, et de vous presenter au bureau d'accueil.");
   $to      = 'ppe@mailinator.com';
   $subject = "Facture du choix de la formule" ;
   $message = "Bonjour !"."\n"."Veuillez vous connecter pour pouvoir voir votre nouvelle facture.";
   $headers = "From: support@Castellanecars.fr";
   

    $nbFichiers = 0;
    $repertoire = opendir("../pdf/");

    while ($fichier = readdir($repertoire))
    {
       $count = $nbFichiers += 1;
    }
     $fileserv = "../pdf/lepdf-".$count.".pdf";
    $pdf->Output('F',$fileserv,true);

   $query2 = "INSERT INTO `facture` (`idfa`, `idu`, `nom`, `link`) VALUES (NULL, ".$_SESSION['idu'].", 'facture-$nomform', 'pdf/lepdf-$nbFichiers.pdf');";

   $query2ok=$db->prepare($query2);
   $query2ok->execute();

   mail($to, $subject, $message, $headers);

   header("Location: ../?page=accueil");


}

 ?>
