<?php
    session_start();
    
    // $_SESSION['ranNum1'] = isset($_SESSION['ranNum1']) ? $_SESSION['ranNum1'] : rand(1, 10);
    // $_SESSION['ranNum2'] = isset($_SESSION['ranNum2']) ? $_SESSION['ranNum2'] : rand(1, 10);
    // $_SESSION['counter'] = isset($_SESSION['counter']) ? $_SESSION['counter'] : 0;
    
    $_SESSION['ranNum1']= rand(1,10);
    $_SESSION['ranNum2']= rand(1,10);
    $_SESSION['counter'] = 0;
    $ranNum1 = $_SESSION['ranNum1'];
    $ranNum2 = $_SESSION['ranNum2'];
    $counter = $_SESSION['counter'];
    echo "Random Number 1: ". $ranNum1 . "<br />";
    $ranNum2=(rand(1,10));
    echo "Random Number 2: " . $ranNum2 . "<br />";
    
    if($_SERVER['REQUEST_METHOS' == 'POST']){
            // $_SESSION['number1'] == ranNum1
            $number1 = $_POST["number1"];
            $number2 = $_POST["number2"];
    }
    $counter;
?>
<html>
    <head>
        <title>Guess the Numbers</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <blockquote>
        <h1> Guess the Numbers </h1>
        <h3> Guess two numbers between 1 and 10!</h3>
        
        <form action="ran.php" method="POST">
            
            Number 1: <input type="text" name="number1">
            <br>
            Number 2: <input type="text" name="number2">
            <br><br>
            <input type="submit" value="Guess Numbers" name="guessForm" href="#bottom">
            <br><br>
             <input type="submit" value="Give Up" name="giveUp">
             <input type="submit" value="Reset" name="reset">
            
        </form>
        </blockquote>
         <!--<p id = "bottom">-->
    <?php
        //     if($_GET["number1"] == $ranNum1) {
        //         echo "Your guess is equal to the random number";
        //     }
        //     else if($_GET["number1"] > $ranNum1){
        //         echo "Your guess is greater than the random number <br/>";
        //     }
        //     else if($_GET["number1"] < $ranNum1){
        //         echo "Your guess is less than the random number <br/>";
        //     }
        //     if($_GET["number2"] == $ranNum2) {
        //         echo "Your guess is equal to the random number <br/>";
        //     }
        //     else if($_GET["number2"] > $ranNum2){
        //         echo "Your guess is greater than the random number <br/>";
        //     }
        //     else if($_GET["number2"] < $ranNum2){
        //         echo "Your guess is less than the random number <br/>";
        //     }
        ?>
        </p>
    </body>
</html>