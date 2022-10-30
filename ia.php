<?php
session_start();

// Connexion bdd
$sql = new PDO('mysql:host=localhost;dbname=cameroneia;charset=utf8', 'root','');

require('functions.php');

// Traitement 

if(isset($_POST['name']))
{

    $_SESSION['name'] = $_POST['name'];

}

if(isset($_POST['question']))
{

    $_SESSION['questionprecedente'] = $_POST['question'];

}

if(isset($_POST['purpose']))
{

    $purpose = $_POST['anwserconseille'];
    $question = htmlentities($_SESSION['questionnotknow']);
    InsertKnows($question, $purpose);
    $_SESSION['helped'] = true;

}