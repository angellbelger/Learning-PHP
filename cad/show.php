<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test Form</title>
</head>
<body>
    <header>
        <h1>Hello, world.</h1>
    </header>
    <body>
        <main>
            <h2>Registration</h2>
            <?php
            echo "Welcome " .$_GET["nName"]. ", you can do it!, because your work experience as a " .$_GET["nWork"]. 
            " in " .$_GET["nCollege"]. " at " .$_GET["nDate"]. " was clear <br>";
            var_dump($_GET)
            ?>     
        </main>
    </body>
    <footer>

    </footer>
</body>
</html>