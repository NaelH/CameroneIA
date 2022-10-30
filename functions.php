<?php 

function haveName() 
{

    global $_SESSION;
    if(isset($_SESSION['name']))
    {

        return true;

    }
    else 
    {

        return false;

    }

}

function notknow($question)
{

    global $_SESSION;
    $_SESSION['questionnotknow'] = $question;
    header('Location: admin/help_ia.php');

}

function awnserIA($question)
{

    global $sql;
    $req = $sql->prepare('SELECT * FROM knows WHERE question = ?');
    $req->execute(array($question));
    $count = $req->rowCount();
    if($count == 0)
    {

        notknow($question);

    }
    else 
    {

        $info = $req->fetch();
        echo $info['awnser'];

    }

}

function InsertKnows($question, $purpose)
{

    global $sql;
    $req = $sql->prepare('INSERT INTO knows(question,awnser) VALUES(?,?)');
    $req->execute(array($question,$purpose));

}

function questionExist($question)
{

    global $sql;
    $req = $sql->prepare('SELECT id FROM knows WHERE question = ?');
    $req->execute(array($question));
    if($req->rowCount() == 1)
    {

        return true;

    }
    else 
    {

        return false;

    }

}