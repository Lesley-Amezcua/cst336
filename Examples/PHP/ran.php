<?php
    session_start();
    $ranNum1 = $_SESSION['randNum1'];
    $ranNum2 = $_SESSION['randNum2'];
    $number1 = $_POST["number1"];
    $number2 = $_POST["number2"];
    
// if(isset ($ranNum1) && isset ($ranNum2)){
    
    if( $number1 == $ranNum1) {
        echo "Your guess is equal to the random number";
    }
    if($number1 > $ranNum1){
        echo "Your guess is greater than the random number <br/>";
        $_SESSION['counter']++;
    }
    if ($number1 < $ranNum1){
        echo "Your guess is less than the random number <br/>";
        $_SESSION['counter']++;
    }
    if ($number2 == $ranNum2) {
        echo "Your guess is equal to the random number <br/>";
    }
    if($number2 > $ranNum2){
        echo "Your guess is greater than the random number <br/>";
        $_SESSION['counter']++;
    }
    if($number2 < $ranNum2){
        echo "Your guess is less than the random number <br/>";
        $_SESSION['counter']++;
    }
// }
// else {
//     echo "Error";
// }
    
    
    
?>