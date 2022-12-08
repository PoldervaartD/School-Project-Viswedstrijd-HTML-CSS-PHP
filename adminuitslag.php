<?php
$conn = mysqli_connect('localhost', 'root', '', 'viswedstrijd');

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

// write query frp viswedstrijden
$sql = 'SELECT * FROM uitslag ORDER BY aantal DESC';

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$uitslag = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
?> 

<html>
    <head>
        <meta charset="utf-8">
        <title>Uitslag</title>
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
                <h1>Uitslag</h1>
                <a href="adminhome.php">Home</a>
               
            </div>
        </nav>
        <div class="content">
            <h2>Vis seizoen 2021/2022</h2>
            <div class="container">
                <div class="row">
                
                    <?php foreach ($uitslag as $uitslag){ ?>

                        <div class="col s6 md3">
                            <div class="card z-depth-0"></div>
                            <div class="card-content center">

                            <table>
                            <tr>
                             <th>id</th>
                             <th>Voornaam</th>
                             <th>Tussenvoegsel</th>
                             <th>Achternaam</th>
                             <th>Aantal</th>

                             </tr>    
                             <th><?php echo htmlspecialchars($uitslag['id']); ?></th>
                                <th><?php echo htmlspecialchars($uitslag['Voornaam']); ?></th>
                                <td><?php echo htmlspecialchars($uitslag['Tussenvoegsel']); ?></td>
                                <th><?php echo htmlspecialchars($uitslag['Achternaam']); ?></th>
                                <th><?php echo htmlspecialchars($uitslag['Aantal']); ?></th>
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
        <form action="adminuitslag.php" method="post" autocomplete="off">
            <input id="id" type="text" name="id" placeholder="id" id="id" >
            <input id="voornaam" type="text" name="voornaam" placeholder="Voornaam" >
            <input id="tussenvoegsel" type="text" name="tussenvoegsel" placeholder="Tussenvoegsel" >
            <input id="achternaam" type="text" name="achternaam" placeholder="Achternaam" >
            <input id="Aantal" type="text" name="Aantal" placeholder="Aantal gevangen vissen" >
            <input id="aanmelden" type="submit" name="aanmelden" value="Wijzigen" >
    </body>
</html>
<?php

if(isset($_POST['aanmelden']))
{
    $id =               $_POST["id"];
    $aantal =           $_POST["Aantal"];
    $voornaam =         $_POST['voornaam'];
    $tussenvoegsel =    $_POST['tussenvoegsel'];
    $achternaam =       $_POST["achternaam"];

    $query = "UPDATE uitslag SET Aantal='".$aantal."' WHERE id='".$id."'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        echo '<script type="text/javascript"> alert("Deelnemer gewijzigd!") </script>';
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