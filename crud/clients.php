<?php include('connection.php'); 

$sqlCode = "SELECT * FROM clients";
$readData = $mysqli->query($sqlCode) or die($mysqli->error);
$numClients = $readData->num_rows;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Clients List</title>
    <style>

        * {
            font-family: Arial, Helvetica, sans-serif;
        }

        table {
            border-collapse: collapse;
        }

        td, th {
            border: 1px solid black;
            padding: 5px;
        }

        p.false {
            text-align: center;
            color: red;
        }

        p.true {
            text-align: center;
            color: blue;
        }

    </style>
</head>
<body>
<a href="cad.php">Register again</a>
    <h1>List</h1>
    <h2 class="true">Clients registered</h2>
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Birthday</th>
            <th>Date</th>
            <th>Action</th>
        </thead>
        <tbody>
            <?php if($numClients == 0){ ?>
                <tr>
                    <td colspan="7">Nothing clients registered.</td>
                </tr>
            <?php
            }else{
                while($client = $readData->fetch_assoc()){

                    $name = ucwords(strtolower($client["name"]));

                    $phone = "";
                    if(!empty($client["phone"])){
                        $phone = phoneFormat($client["phone"]);
                    }

                    $birthday = "Not informed";
                    if (!empty($client["birthday"])){
                        $birthday = dateFormat($client["birthday"]);

                    }

                    $date = date("d/m/Y H:i", strtotime($client["date"]));
                
                ?>
                <tr>
                    <td><?php echo $client['id']; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $client['email']; ?></td>
                    <td><?php echo $phone; ?></td>
                    <td><?php echo $birthday; ?></td>
                    <td><?php echo $date; ?></td>
                    <td>
                        <a href="edit_client.php?id=<?php echo $client['id']; ?>">Edit</a>
                        <a href="delete_client.php?id=<?php echo $client['id']; ?>">Delet</a>
                    </td>
                </tr>
                <?php
                }
            } ?>
        </tbody>
    </table>
    
</body>
</html>