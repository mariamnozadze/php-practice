<?php

/* 
Create a database, a table and insert records
*/

//variable for connection
$mysqli = new mysqli('localhost', 'root', '');


if (!$mysqli) {
    //"die" command stops further code execution
    die('Could not connect:' . mysqli_error($mysqli));
}
echo 'Connected successfully to mySQL.<BR>';

if ($mysqli->query("CREATE DATABASE Books") === TRUE) {
    echo "<p>Database Books created</p>";
} else {
    echo "Error creating Books database:" . mysqli_error($mysqli) . "<br>";
}



//select database to work with
$mysqli->select_db("Books");

echo ("Selected the Books database");

$query = "CREATE TABLE Shelf (ID varchar(17) PRIMARY KEY, YEAR INT, Author varchar(50),  Price DECIMAL(10,2), Sale_date Date)";


//executes a SQL statement “query($query)” then tests for the result of the SQL statement and prints message if it's success
if ($mysqli->query($query) === TRUE) {
    echo "<p>Database table `Shelf` created</p>";
} else {
    echo "<p>Error:</p>" . mysqli_error($mysqli);
}

//insert new data
$query = "INSERT INTO `Books`.`Shelf` (`ID`, `YEAR`, `Author`, `Price`, `Sale_date`) VALUES ('36526tyefe', '2004', 'Angela Markle', '20', '2012-12-12');";

if ($mysqli->query($query) === TRUE) {
    echo "<p>Book inserted into table</p>";
} else {
    echo "<p>Error inserting book</p>" . mysqli_error($mysqli);
    echo "<p>*******</p>";
    echo $query;
    echo "<p>*****</p>";
}

$mysqli->close();
