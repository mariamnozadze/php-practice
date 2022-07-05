<html>

<head>
    <title>Basic form</title>
</head>

<body>
    <form action="SubmitCar.php" method="post">
        <?php include 'SubmitCar.php' ?>
        <h1>Jia's used cars</h1>
        VIN: <input name="VIN" type="text" /> <br />

        <br />
        Make: <input name="Make" type="text" /> <br />

        <br />
        Model: <input name="Model" type="text" /> <br />

        <br />
        Price: <input name="Asking Price" type="text" /> <br />

        <br />
        <input name="Submit" type="submit" value="submit" /> <br />
        &nbsp;


    </form>
</body>

</html>