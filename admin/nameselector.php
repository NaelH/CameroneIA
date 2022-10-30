<?php 
session_start();
if(isset($_POST['name']))
{

    $_SESSION['name'] = $_POST['name'];
    header('Location: /');

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sélection d'un nom</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Choose a name to use the IA">
    </form>
</body>
</html>