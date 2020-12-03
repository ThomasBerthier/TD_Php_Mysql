<?php include "Fonction_Exercice_Final.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice Final</title>
</head>
<body>
<?php include "Menu.php"?>
    <div>
        <h1>Exercice :</h1>
        <?php
            if(form("ytreza","azerty")=="ok")
            {
                echo"Bienvenue";
                ?><div><a href="">Lien secret</a></div><?php
            }else{
                echo"Mot de passe incorrect";
            }
        ?>
    </div>
    <div>
        <h1>Code source :</h1>
        <?php highlight_file(__FILE__); ?>
        <h1>Code source Fonction :</h1>
        <?php highlight_file("Fonction_Exercice_Final.php"); ?>
    </div>
</body>
</html>