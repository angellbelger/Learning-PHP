<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Test Form</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <header>
        <h1>Hello, world.</h1>
    </header>
    <body>
        <main>
            <h2>Registration</h2>
            <form action="index.php" method="POST">
                <fieldset>
                    <p class="error ">Obrigatório *</p>
                    <p>
                        <label for="iName"><strong>Name:</strong> </label>
                        <input type="text" name="nName" id="iName" required><span class="error"> *</span>
                    </p>
                    <p>
                        <label for="iMail"><strong>E-mail:</strong> </label>
                        <input type="email" name="nMail" id="iMail" required><span class="error"> *</span>
                    </p>
                    <p>
                        <strong>Gender:</strong>
                    </p>
                    <p>
                        <input type="radio" name="nGender" id="male" value="male" checked>
                        <label for="male">Male </label>
                        <input type="radio" name="nGender" id="female" value="female">
                        <label for="female">Female </label><span class="error"> *</span>
                    </p>
                    <button type="submit" class="bt" name="sent">Send</button>
                    <button type="reset"></button>
                </fieldset>
                <?php 
                if (isset($_POST['sent'])){
                    echo "<h2>Verify your datas</h2>";
                    echo "<p>Name: " .$_POST['nName']. "</p>";
                    echo "<P>Email: ". $_POST['nMail']."</P>";
                    echo "<P>Gender: ".$_POST['nGender'] ."</P>";
                }
                ?>
            </form>
        </main>
    </body>
    <footer>

    </footer>
</body>
</html>