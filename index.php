<?php

    function multiplication($a)
        {
            for ($i=0; $i <= 12 ; $i++) { 
                # code...
                echo "$a x $i = ".($a * $i). "</br>";
            }
        }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multix</title>
</head>
<body>

        <form method="post" action="">
            <label for="multiplication"> Donnez la valeur à multiplier : </label><br>
            <input type="number" name="valeur"><br>

            <input type="submit" name="valider" value="calculer">
        </form>

        <hr>

        <div>

            <?php
            if(isset($_POST['valider']))
                {
                    if(isset($_POST['valeur']))
                    {
                        $valeur=$_POST['valeur'];

                        if(!$valeur=="" AND is_numeric($valeur))
                        {
                            echo "<h2>Table de multiplication de : $valeur </h2>";
                            multiplication($valeur);
                        }
                    }
                }


            ?>


            <h4>Bravo Bravo l'essai</h4>
        </div>
    
</body>
</html>