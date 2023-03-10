<!-- If Else -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>More Basics</title>
</head>
<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing:border-box;
    }
    .container{
        min-width: 80%;
        background-color: grey;
        margin: auto;
        padding: 23px;
    }
</style>
<body>
    <div class="container">
        <h1>Learning PHP</h1>
        <br>
        <h2>If else</h2>
        <p> Your Party Status :</p>
        
        <?php 
        $age=17;
        if($age>18){
            echo "You can party";
        }
        else if($age<=15){
            echo "No party for ";echo $age;echo " year old kid";
        }
        else{
            echo "Fuck off";
        }
        ?>
        <!-- Arrays -->
        <br>
        <h2>Arrays</h2>
        <?php 
        $languages=array("C","C++","C#","Java","PHP");
        // echo $languages[0];
        // echo "<br>";
        // echo count($languages);
        ?>
        <!-- Loops -->
        <br>
        <h2>Loops</h2>
        <?php
        // while
        // $a=0;
        // while ($a <= 10) {
        //     echo "<br>The value of a is : ";
        //     echo $a;
        //     $a++;
        // }
        ?>
        <!-- arrays with while loops -->
        <?php 
        // $a=0;
        // while ($a < count($languages)) {
            //     echo "<br>The value of language is : ";
            //     echo $languages[$a];
            //     $a++;
        // }
        ?>
        <!-- do while -->
        <?php 
        // $a=0;
        // do{
        //      echo "<br>The value of language is : ";
        //      echo $languages[$a];
        //      $a++;
        // }while ($a < count($languages));
                
        ?>
        <!-- For loop -->
        <?php 
        
        // for ($a=0; $a <= 10; $a++) { 
        //     echo "<br>The value of a is : ";
        //     echo $a;
        // }
        ?>
        <!-- for each loop,purpose : easy to iterate arrays -->
        <?php 
        foreach ($languages as $value ) {
            echo "<br>The value is : ";
            echo $value;
        }
        ?>
        <!-- functions -->
        <br>
        <?php 
            function print1(){
                echo "One";
            }
            print1();
        ?>
        <br>
        <?php 
            function num($n){
                echo "Your number is : ";
                echo $n;
            }
            num(5)
        ?>
    </div>
</body>
</html>