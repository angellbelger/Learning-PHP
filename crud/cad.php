<?php

function cleanTxt($str){ 
  return preg_replace("/[^0-9]/", "", $str); 
}


if(count($_POST) > 0){

    include('connection.php');

    $error = false;
    $name = strtolower($_POST["name"]);;
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $birthday = $_POST["birthday"];

    if (strlen($name) <= 2 or empty($name)){
        $error = "Please, type a valid name.";
    }

    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please, type a valid email.";
}
    if (!empty($birthday)){
        $slice = explode('/',$birthday);
        if (count($slice) == 3){
            $birthday = implode('-', array_reverse($slice));

        }else{
            $error = "Pattern date: dd/mm/yyyy.";
        }
    }

    if (!empty($phone)){
        $phone = cleanTxt($phone);
        if (strlen($phone) != 11){
            $error = "Please, type a valid phone number.";
        }
    }


    
    if($error){
        echo "<p class\"false\"><strong>$error</strong></p>";
    }

    else{
        $sqlCode = "INSERT INTO clients (name, email, phone, birthday, date) VALUES ('$name','$email', '$phone','$birthday', NOW())";
        $addData = $mysqli->query($sqlCode) or die($mysqli->error);

        if ($addData){
            echo "<p class=\"true\">Client Registered.</p>";
            unset($_POST);
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cad</title>
</head>
<body>
    <form method="POST" action="">
        <a href="clients.php">Back to list</a>
        <fieldset>
            <p>
                <label for="iName">Name:</label>
                <input value="<?php if(isset($_POST["name"])) echo $_POST["name"];?>" type="text" name="name" id="iName">
            </p>
            <p>
                <label for="iMail">Email: </label>
                <input value="<?php if(isset($_POST["email"])) echo $_POST["email"];?>" type="email" name="email" id="iMail" placeholder="myself@me.uk">
            </p>
            <p>
                <label for="iPhone">Phone:</label>
                <input value="<?php if(isset($_POST["phone"])) echo $_POST["phone"];?>" type="text" placeholder="(xx)xxxxx-xxxx" name="phone" id="iPhone">
            </p>
            <p>
                <label for="iBirthday">Birthday: </label>
                <input value="<?php if(isset($_POST["birthday"])) echo $_POST["birthday"];?>" type="text" placeholder="dd/mm/yyyy" name="birthday" id="iBirthday">
            </p>
            <p>
                <input type="submit" value="Send">
            </p>
        </fieldset>
    </form>

</body>
</html>