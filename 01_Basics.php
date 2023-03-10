<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Learning</title>
</head>
<body>
    <div class="container">Hello World</div>
    <?php 
     $variable1=35;
     $variable2=45;
     echo $variable1;
     echo "<br>";
     echo $variable2;
     
     ?>
    <br>
    <?php 
    // Operators in PHP
    // Arithmetic
    echo "<h1>Arithmetic operator</h1>";
    echo "<br>";
    echo "The sum of ";echo $variable1;echo " And ";echo $variable2;
    echo " is "; 
    echo $variable1+$variable2;
    echo "<br>";
    echo "The sub of ";echo $variable1;echo " And ";echo $variable2;
    echo " is "; 
    echo $variable1-$variable2;
    echo "<br>";
    echo "The mul of ";echo $variable1;echo " And ";echo $variable2;
    echo " is "; 
    echo $variable1*$variable2;
    echo "<br>";
    echo "The div of ";echo $variable1;echo " And ";echo $variable2;
    echo " is "; 
    echo $variable1/$variable2;
    echo "<br>";
    // Assignment
    echo "<br>";
    $newVar=$variable1;
    $newVar+=1;
    $newVar-=1;
    // $newVar*=2;
    // $newVar/=1;
    echo "The Value of newVar is ";
    echo $newVar;
    echo "<br>";
    
    // Comparison
    echo "<br>";
    
    echo "<h1>Comparison Operator returns boolean value</h1>";
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
    echo "<br>";
    
    // Inc/Dec 
    echo "<h1>Increment and Decrement operator</h1>";
    $anotherVariable=$variable1;
    echo "The Value of anotherVar is ";
    echo $anotherVariable;
    echo "<br>";
    echo "<br>";
    echo "The Value of anotherVar is ";
    echo $anotherVariable++;
    echo "<br>";
    echo "The Value of anotherVar is ";
    echo $anotherVariable--;
    echo "<br>";
    echo "The Value of anotherVar is ";
    echo ++$anotherVariable;
    echo "<br>";
    echo "The Value of anotherVar is ";
    echo --$anotherVariable;
    echo "<br><br>";
    // Logical
    echo "<h1>Logical operator</h1><br>";
    // and (&&)
    // or (||)
    // xor (xor)
    // not (!)
    // $myVar=(true)and(true);
    // $myVar=(true)and(false);
    // $myVar=(false)and(true);
    // $myVar=(false)and(false);
    // $myVar=(true)or(false);
    // $myVar=(true)xor(false);
    $myVar=(true xor true);
    echo "<br>";
    echo var_dump($myVar);
    ?>
    <?php
    // Data Types
    echo "<h1>Data Types</h1><br>";
    // 1.String 
    $var="This is a string";
    echo var_dump($var);
    echo "<br>";
    // 2.int
    $var=69;
    echo var_dump($var);
    echo "<br>";
    // 3.Float 
    $var=69.99;
    echo var_dump($var);
    echo "<br>";
    // 4.boolean
    $var=true;
    echo var_dump($var);
    echo "<br>";
    // 5.Array
    // 6.Object
    ?>
    <!-- Constants -->
    <?php 
    echo "<h1>Constants</h1><br>";
    define('PI',3.14);
    echo PI;
    ?>

    
    
</body>
</html>