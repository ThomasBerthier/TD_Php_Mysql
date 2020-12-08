<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Exercice 1</title>
 </head>
 <body>
     <?php 
     include "Menu.php";

    $Base = new PDO('mysql:host=localhost; dbname=Thomas_BDD_TD2_Exo2; charset=utf8','root', 'root');

    $DonneesPatient = $Base->query("SELECT `NumSS`, `Nom`, `Prenom` FROM `Patient`");

    while($TableauDonneesPatient = $DonneesPatient->fetch())
    {
        echo "<div>".$TableauDonneesPatient['NumSS']." ";
        echo " ".$TableauDonneesPatient['Nom']." ";
        echo " ".$TableauDonneesPatient['Prenom']." </div>";
    }

    ?> 

    <form method="post">
        <label for="Nom">Nom :</label>
        <input type="text" name="Nom" id="Nom">
        <label for="Prenom">Prenom :</label>
        <input type="text" name="Prenom" id="Prenom">
        <input type="submit" value="Submit" Name="Submit">
    </form>


    <?php
    if(isset($_POST['Submit']))
    {
        $DonneesMedecin = $Base->query("SELECT `Nom`, `Prenom` FROM `Medecin` WHERE `Nom` = '".$_POST['Nom']."' AND `Prenom` = '".$_POST['Prenom']."'");
        try{
                if($DonneesMedecin->rowCount()>=1)
                {
                    echo "Connecté";
                }
                else{
                    echo "Pas connecté";
                }
        }
        catch(Exception $e)
        {
            echo "erreur".$e->getMessage();
        }
    }else{
        echo"Pas de données entrées";
    }
    



?>
<h1>Code source :</h1>
<?php highlight_file(__FILE__);?>

 </body>
 </html>