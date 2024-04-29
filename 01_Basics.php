<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_TUTORIAL</title>
</head>
<body>
    <div class="container">
        <p>This is my first Php website</p>

        <?php
        echo "Hello word!";
        echo "<br>";
        echo "Hello word again!";
        echo "<br>";

        //Variables
        $var1=20;
        $var2=30;
        echo $var1;
        echo "<br>";
        echo $var2;
        echo"<br>";
        echo $var1+$var2;
        echo"<br>";
        echo "Arithmetic Operators:----------------------------------->";
        echo"<br>";
        echo "The value of Variable1 + Variable2 is ";
        echo $var1+$var2;
        echo"<br>";
        echo "The value of Variable1 - Variable2 is ";
        echo $var1-$var2;
        echo"<br>";
        echo "The value of Variable1 * Variable2 is ";
        echo $var1*$var2;
        echo "<br>";
        echo "The value of Variable1 / Variable2 is ";
        echo $var1/$var2;
        echo "<br>";
        echo "Assignment Operators:----------------------------------->";
        echo "<br>";
        $newVer=$var1;
        $newVer+= 1;
        $newVer-= 1;
        $newVer*= 2;
        $newVer/= 2;
        echo "The value of new variable is ";
        echo $newVer;
        echo "<br>";
        echo "Comparison Operators:----------------------------------->";
        echo "<br>";
        echo "The value of 1==4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1!=4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1>=4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1<=4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        echo "Increment/Decrement Operators:----------------------------------->";
        echo "<br>";
        echo $var1++; 
        echo "<br>";       
        echo $var1--;
        echo "<br>";
        echo ++$var1;
        echo "<br>";
        echo --$var1;
        echo "<br>";
        echo "Logical Operators:----------------------------------->";   // and(&&),or(||),xor,!
        echo "<p>AND(&&)Operators</p>";
        $myVar1 = (true) and (true);
        echo var_dump($myVar1);
        echo "<br>";
        $myVar2 = (false) and (true);
        echo var_dump($myVar2);
        echo "<br>";
        $myVar3 = (true) and (false);
        echo var_dump($myVar3);
        echo "<br>";
        $myVar4 = (false) and (false);
        echo var_dump($myVar4);
        echo "<p>OR(||)Operators</p>";
        $myVar5 = (true) or (true);
        echo var_dump($myVar5);
        echo "<br>";
        $myVar6 = (false) or (true);
        echo var_dump($myVar6);
        echo "<br>";
        $myVar7 = (true) or (false);
        echo var_dump($myVar7);
        echo "<br>";
        $myVar8 = (false) or (false);
        echo var_dump($myVar8);
        echo "<br>";
        ?>

        <?php
            //Data types in PHP 
            // 1.Integer
            // 2.Float 
            // 3.String
            // 4.Boolean
            // 5.Array
            // 6.Object
            $myclass = "This is a string";
            echo var_dump($myclass);
            echo "<br>";

            $myclass = 67;
            echo var_dump($myclass);
            echo "<br>";

            $myclass = 67.5;
            echo var_dump($myclass);
            echo "<br>";
            
            $myclass = true;
            echo var_dump($myclass);
            echo "<br>";


        ?>

    </div>
</body>
</html>