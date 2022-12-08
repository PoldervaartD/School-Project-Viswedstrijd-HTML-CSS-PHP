<?php
$conn = mysqli_connect('localhost', 'root', '', 'viswedstrijd');

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

// write query frp viswedstrijden
$sql = 'SELECT * FROM deelnemers';

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$deelnemers = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
?> 

<html>
    <head>
        <meta charset="utf-8">
        <title>Deelnemers</title>
        <link href="adminstyle.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="adminstyle.css">
    </head>
    <style>
    table, td, th {
  border: 1px solid black;
}

table {
  width: 100%;
  border-collapse: collapse;
}
</style>

    <body class="loggedin">
        <nav class="navtop">
            <div>
                <h1>Deelnemers</h1>
                <a href="uitslag.php">Uitslag</a>
                <a href="adminhome.php">Home</a>
               
            </div>
        </nav>
        <div class="content">
            <h2>Vis seizoen 2021/2022</h2>
            <div class="container">
                <div class="row">
                
                    <?php foreach ($deelnemers as $deelnemer){ ?>

                        <div class="col s6 md3">
                            <div class="card z-depth-0"></div>
                            <div class="card-content center">

                            <table>
                              
                            <tr>
                             <th>id</th>
                             <th>voornaam</th>
                             <th>tussenvoegsel</th>
                             <th>achternaam</th>
                             <th>straatnaam</th>
                             <th>huisnummer</th>
                             <th>woonplaats</th>

                             </tr>    
                             <th><?php echo htmlspecialchars($deelnemer['id']); ?></th>
                                <th><?php echo htmlspecialchars($deelnemer['Voornaam']); ?></th>
                                <td><?php echo htmlspecialchars($deelnemer['Tussenvoegsel']); ?></td>
                                <th><?php echo htmlspecialchars($deelnemer['Achternaam']); ?></th>
                                <th><?php echo htmlspecialchars($deelnemer['Straatnaam']); ?></th>
                                <th><?php echo htmlspecialchars($deelnemer['Huisnummer']); ?></th>
                                <th><?php echo htmlspecialchars($deelnemer['Woonplaats']); ?></th>
                    </table>

                            </div>
                            <div class="card-action right-align">
                            </div>
                        </div>
                    
                    <?php } ?>
                </div>
            </div>
        </div>
        <style>
            body{
                background-color: whitesmoke;
            }
            input{
                width: 50%;
                height: 5%;
                border: 1px;
                border-radius: 05px;
                padding: 8px 15px 8px 15px;
                margin: 2px auto;
                box-shadow: 1px 1px 2px 1px grey;
                display: flex;
                text-align: center;                
            }
            </style>
        <form action="admindeelnemers.php" method="post" autocomplete="off">
            <input id="id" type="text" name="id" placeholder="id" id="id" >
            <input id="Voornaam" type="text" name="Voornaam" placeholder="Voornaam" id="Voornaam" >
            <input id="Tussenvoegsel" type="text" name="Tussenvoegsel" placeholder="Tussenvoegsel" id="Tussenvoegsel">
            <input id="Achternaam" type="text" name="Achternaam" placeholder="Achternaam" >
            <input id="Straatnaam" type="text" name="Straatnaam" placeholder="Straatnaam" >
            <input id="Huisnummer" type="text" name="Huisnummer" placeholder="Huisnummer" >
            <input id="Woonplaats" type="text" name="Woonplaats" placeholder="Woonplaats" >
            <input id="aanmelden" type="submit" name="aanmelden" value="Aanmelden" >
            <h3>Voeg&nbsp;<a href="adddeelnemer.php">hier</a>&nbsp;een deelnemer toe</h3>
    </body>
</html>
<?php

if(isset($_POST['aanmelden']))
{
    $id = $_POST["id"];
    $voornaam = $_POST["Voornaam"];
    $tussenvoegsel = $_POST["Tussenvoegsel"];

    $query = "UPDATE deelnemers SET Voornaam='".$voornaam."', Tussenvoegsel='".$tussenvoegsel."', Achternaam='".$_POST["Achternaam"]."', Straatnaam='".$_POST["Straatnaam"]."', Huisnummer='".$_POST["Huisnummer"]."', Woonplaats='".$_POST["Woonplaats"]."' WHERE id='".$id."'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Data Updated") </script>';
    }
    else
    {
        echo '<script type="text/javascript"> alert("Data not Updated") </script>';
    }
}
// close connection
mysqli_close($conn);
$conn = null;
?>