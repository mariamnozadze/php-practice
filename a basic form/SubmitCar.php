<html>

<head>
    <title>Car Saved</title>
</head>

<body bgcolor="#FFFFFF" text="#000000">

    <?php
    //capture values posted to this php from the text fields in the form
    $VIN = $_POST['VIN'];
    $Make = $_POST['Make'];
    $Model = $_POST['Model'];
    $Price = $_POST['Asking_Price'];

    //Build a SQL query using the values from above
    $query = "INSERT INTO inventory
    (VIN, Make, Model, Asking_Price)
    VALUES (
        '$VIN',
        '$Make',
        '$Model',
        '$Price'
        )";

    //Print the query to the browser so we can see it
    echo ($query . "<br>");

    $mysqli = new mysqli('localhost', 'root', '', 'cars');

    //check connection
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
    echo 'Connected successfully to mySQL.<br>';

    //Select a database to work with
    $mysqli->select_db("cars");
    echo ("Selected the cars database.<br>");

    //insert new car into the database
    if ($result = $mysqli->query($query)) {
        echo "<p>You have successfully entered $Make $Model into the database.</p>";
    } else {
        echo "Error entering $VIN into database:" . mysqli_error($mysqli) . "<br>";
    }
    $mysqli->close() . "<br>";

    ?>
</body>

</html>