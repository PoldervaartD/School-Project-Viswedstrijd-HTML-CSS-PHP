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
        <link href="style2.css" rel="stylesheet" type="text/css">
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
                <a href="home.php">Home</a>
               
            </div>
        </nav>
        <div class="content">
            <h2>Vis seizoen 2021/2022</h2>
            <div class="nootje">
                <div class="row">
                
                    <?php foreach ($uitslag as $uitslag){ ?>

                        <div class="col s6 md3">
                            <div class="card z-depth-0"></div>
                            <div class="card-content center">

                            <table>
                            <tr>
                             <th>Voornaam</th>
                             <th>Tussenvoegsel</th>
                             <th>Achternaam</th>
                             <th>Aantal</th>

                             </tr>    
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
    </body>
</html>
<?php
// close connection
mysqli_close($conn);
$conn = null;
?>