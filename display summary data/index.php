<html>

<head>
    <meta charset="utf-8">
    <title>Jia's Used Cars</title>
</head>

<body>
    <h1>Jia's Used Cars</h1>
    <h3>Complete inventory</h3>
    <?php
    include 'db.php';

    //this query produces list of cars to be displayed
    $query = "SELECT * FROM INVENTORY";
    /* runs the query and displayes an error message if the query fails*/
    if ($result = $mysqli->query($query)) {
        //Don't do anything if successful
    } else {
        echo "error getting cars from the database:" . mysqli_error($mysqli) . "<br>";
    }

    //Create the table headers 
    echo "<table id='Grid' style='width: 80%'><tr>";
    echo "<th style='width: 50px'>Make</th>";
    echo "<th style='width: 50px'>Model</th>";
    echo "<th style='width: 50px'>Asking Price</th>";
    echo "</tr>\n";

    //keep track of whether a row was even or odd, so we can style it later
    $class = "odd";

    //Loop through all the rows returned by the query, creating a table row for each
    while ($result_ar = mysqli_fetch_assoc($result)) {
        echo "<tr class= \"$class\">";
        echo "<td>" . $result_ar['Make'] . "</td>";
        echo "<td>" . $result_ar['Model'] . "</td>";
        echo "<td>" . $result_ar['Asking_Price'] . "</td>";
        echo "</td></tr>\n";
    }
    /*****
      $result_ar[‘Make’] says get the value of Make and put it here between the <td> tags 
     *****/

    //If the last row was even, make the next one odd and vice-versa
    if ($class == "odd") {
        $class = "even";
    } else {
        $class = "odd";
    }
    echo "</table>";
    $mysqli->close();
    ?>
</body>

</html>