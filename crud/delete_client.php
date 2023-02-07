<?php 
if (isset($_POST['btYes'])){

    include("connection.php");

    $id = intval($_GET["id"]);
    $sqlCode = "DELETE FROM clients WHERE id = '$id'";
    $delData = $mysqli->query($sqlCode) or die($mysqli->error);

    if ($delData){?>
        <h1 class="true">Client Delete!</h1>
        <p><a href="clients.php">Click here to back to list</a></p>       
        <?php
        die();
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete client</title>
    <style>
        a {
            text-decoration: none;
        }

        p.bt {
            display: block;
        }
    </style>
</head>
<body>
    <h1>Do you want to delete this client?</h1>
    <form action="" method="post">
        <a href="clients.php"><p>No</p></a>
        <button name="btYes" value="1" type="submit">Yes</button>
    </form>
</body>
</html>