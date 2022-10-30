<?php 
require('ia.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camerone IA</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Ma première intelligence artificielle</h1><hr style="opacity:0.5;">
        <h3>Les avancées du programme : </h3>
        <div class="box">
            <ul>
                <li>Mise en place d'un site</li>
                <li>Structuration du programme</li>
                <li>Mise en place de l'apprentissage</li>
                <li>Mise en place du système d'arrêt de l'IA</li>
            </ul>
        </div>
        <h3>Zone d'essaie : </h3>
        <div class="box">
            <?php if(haveName()) { ?>
                <h4>Menu</h4><hr>
                <a href="/admin/logout.php">Déconnexion</a>
                <hr>
                <h3>Zone de question réponse</h3>
                <hr>
                <?php if(!isset($_SESSION['questionprecedente'])) { ?>
                
                <p>Envoyez le premier message.</p><br>
                <form action="" method="post">
                    <textarea name="question" id="question" placeholder="255 caractère max" cols="30" rows="10"></textarea><br>
                    <button type="submit">Envoyer</button>
                </form>


                <?php } else { ?>
                
                <b>Votre message : </b> <i><?= $_SESSION['questionprecedente'] ?></i>
                <br>
                <b>Ma réponse : </b><i><?= awnserIA($_SESSION['questionprecedente']); ?></i>
                <br>
                <hr>
                <form action="" method="post">
                    <textarea name="question" id="question" placeholder="255 caractère max" cols="30" rows="10"></textarea><br>
                    <button type="submit">Envoyer</button>
                </form>
                <?php } ?>

                

            <?php } else { ?> 
                
            <form action="" method="post">
                <label for="name"><b>Choisissez une nom : </b></label>
                <input type="text" name="name" id="name" placeholder="Ecrivez ici">
            </form>    
                
            <?php } ?>

        </div>
    </div>
</body>
</html>