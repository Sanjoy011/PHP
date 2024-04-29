<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>02_MoreBasics_php</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    .container{
        max-width: 90%;
        background-color: rgb(204, 141, 141);
        margin:auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Lets! Learn about PHP</h1>
        <p>Your party status is here:</p>
        <?php

        // (if-else) statements in php------------>
        $age = 11;
        if($age>18){
            echo "You can go to the party";
        }
        else if($age==7){
            echo "You are 7 years old";
        }
        else{
            echo "You can't go to the party";
        }
        echo "<br>";

        // Arrays in php------------------------------->
        $var = array ("Python","C++","PHP","Java");
        echo $var[2];

        // While Loops in php------------------------------->
        $a = 0;
        while($a <= 5) {
            echo "<br>The value of a from the while loops is: ";
            echo $a;
            $a++;
        }

        // Iterating arrays in php------------------------------->
        $a = 0;
        while($a < count($var)){
            echo "<br>The value of Variables is: ";
            echo $var[$a];
            $a++;
        }

        // do-while Loops in php------------------------------->
        $a = 0;
         do {
            echo "<br> The value of a from the do-while loops is: ";
            echo $a;
            $a++;
        }while($a <=5);
        // For Loops
        for ($i=0; $i <=5; $i++) { 
            echo "<br> The value of i from the for loops is: ";
            echo $i;
        }
        //Function
        function print5(){
            echo "<br>Sanjoy";
        }
        print5();
        function print_number($number){
            echo "<br>Your number is";
            echo $number;
        }
        print_number(32);
        print_number(45);
        ?>


    </div>   
</body>
</html>
