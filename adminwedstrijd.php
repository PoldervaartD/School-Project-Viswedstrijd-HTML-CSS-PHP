<?php
$conn = mysqli_connect('localhost', 'root', '', 'viswedstrijd');

if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
}

// write query frp viswedstrijden
$sql = 'SELECT * FROM wedstrijden';

// make query & get result
$result = mysqli_query($conn, $sql);

// fetch the resulting rows as an array
$wedstrijden = mysqli_fetch_all($result, MYSQLI_ASSOC);

mysqli_free_result($result);
?> 

<html>
    <head>
        <meta charset="utf-8">
        <title>deelnemers</title>
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
                <h1>Wedstrijden</h1>
                <a href="adminhome.php">Home Admin</a>
               
            </div>
        </nav>
        <div class="content">
            <h2>Vis seizoen 2021/2022</h2>

            <h4 class="center grey-text">Wedstrijden</h4>
            <div class="container">
                <div class="row">
                
                    <?php foreach ($wedstrijden as $wedstrijd){ ?>

                        <div class="col s6 md3">
                            <div class="card z-depth-0"></div>
                            <div class="card-content center">

                            <table>
                            
                            <tr>
                             <th>id</th>
                             <th>Datum</th>
                             <th>Begintijd</th>
                             <th>Eindtijd</th>
                             <th>Locatie</th>

                             </tr>    

                             <th><?php echo htmlspecialchars($wedstrijd['id']); ?></th>
                                <th><?php echo htmlspecialchars($wedstrijd['Datum']); ?></th>
                                <td><?php echo htmlspecialchars($wedstrijd['Begintijd']); ?></td>
                                <th><?php echo htmlspecialchars($wedstrijd['Eindtijd']); ?></th>
                                <th><?php echo htmlspecialchars($wedstrijd['Locatie']); ?></th>
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
        <form action="adminwedstrijd.php" method="post" autocomplete="off">
            <input id="id" type="text" name="id" placeholder="id" id="id" >
            <input id="Datum" type="date" name="Datum" placeholder="Datum" id="Datum" >
            <input id="Begintijd" type="time" name="Begintijd" placeholder="Begintijd" id="Begintijd">
            <input id="Eindtijd" type="time" name="Eindtijd" placeholder="Eindtijd" >
            <input id="Locatie" type="text" name="Locatie" placeholder="Locatie" >
            <input id="aanmelden" type="submit" name="aanmelden" value="Aanmelden" >
    </body>
</html>

<?php

if(isset($_POST['aanmelden']))
{
    $id = $_POST["id"];
    $datum = $_POST["Datum"];
    $etijd = $_POST["Eindtijd"];
    $btijd = $_POST["Begintijd"];
    $locatie = $_POST["Locatie"];


    $query = "UPDATE wedstrijden SET Datum='".$datum."', Eindtijd='".$etijd."', Begintijd='".$btijd."', Locatie='".$locatie."' WHERE id='".$id."'";
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