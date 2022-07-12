<html>

<body>
    <h1>Comparison Operators</h1>
    <?php
    $firstName = 'Alan';
    if ($firstName == 'Alan') {
        echo "Hello Master";
    } else {
        echo "Hello $firstName";
    }
    echo "<br>";
    ///Hello Master

    /*
     * ************
     */

    $a = 1;
    $b = "1";
    if ($a == $b) {
        echo '$a is equal to $b';
    } else {
        echo '$a is not equal to $b';
    }
    //$a is equal to $b


    echo "<br><br>";


    /*
     * ************
     */

    if ($a === $b) {
        echo '$a is equal to $b';
    } else {
        echo '$a is not equal to $b';
    }
    //$a is not equal to $b
    ?>
</body>

</html>