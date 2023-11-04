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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="style.css">
</head>
<body class="container">

<br>

    <div class="card text-center" >
        <div class="card-header">
            <h1>Multimix</h1>
        </div>

        <form method="post" action="" class="form-group">

            <div class="card-body">
                <label for="multiplication"  class="card-title"> Donnez la valeur à multiplier : </label><br>
                <input type="number" name="valeur" class="input-group"><br>

                <input type="submit" name="valider" value="calculer" class="btn btn-primary btn-lg btn-block">
            </div>
        
        </form>
    </div>

        

        <hr>

<div class="card text-center" >
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
        </div>
</div>

        
    
</body>
</html>