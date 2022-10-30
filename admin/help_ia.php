<?php 
require('../ia.php');
if(!isset($_SESSION['questionnotknow']))
{

    header('Location: /');

}

if(questionExist($_SESSION['questionnotknow']))
{

    header('Location: logout.php');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter une question à Camerone</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Aider l'AI Camerone</h1>
        <hr style="opacity:0.5;">
        <div class="box">
            <h2>Aidez moi à apprendre : </h2>
            <hr>
            <?php if(!isset($_SESSION['helped'])) { ?>
            <form action="" method="post">
                <div class="box">
                    <b>Question posé : </b> <i><?= $_SESSION['questionnotknow']; ?></i><br>
                    <label for="anwserconseille">Tu me conseille de répondre quoi ?</label><br>
                    <textarea name="anwserconseille" id="anwserconseille" placeholder="Sans limite de caractère" cols="30" rows="10"></textarea><br>
                    <button type="submit" name="purpose">Proposer</button>
                </div>
            </form>
            <?php } else { ?>
            
            <div class="box">
                <h3>Merci de m'avoir aidé, maintenant je sais quoi répondre aux autres utilisateurs.</h3>
                <a href="/">Retour au tchat.</a>
            </div>

            <?php } unset($_SESSION['helped']); unset($_SESSION['questionnotknow']); ?>
        </div>
    </div>
</body>
</html>