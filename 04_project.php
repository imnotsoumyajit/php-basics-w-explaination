<?php 
$insert=false;
if (isset($_POST['name'])){


    //Connection variables :  these 3 are the defaults , don't change these values or else error function will be activated
    $submit=true;
    $server="localhost";
    $username="root";
    $password="";

    // create db connection
    $con=mysqli_connect($server,$username,$password);

    // check for connection success
    if(!$con){
        die("connection to this db failed due to ".mysqli_connect_error() );
    }
    // echo "db connection successful"
    
    //collect post variables
    $name=$_POST['name'];
    $age=$_POST['age'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    $sql="INSERT INTO `shitty_form01`.`test_form_01` (`name`, `age`, `gender`, `email`, `phone`, `other`, `date`) VALUES ('$name', '$age', '$gender', '$email','$phone','$desc', current_timestamp());"; 
    // echo $sql;

    // Execute the query
    // -> is object operator
    if($con -> query($sql)==true){
        // successful insertion flag
        $insert=true;
        // echo "Insertion successful";
    }else{
        echo "ERROR : $sql <br> $con->error";
    }

    // close the db connection
    $con->close();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./04_style.css" />

    <title>Another Form</title>           
  </head>
  <body>
    <img class="bg" src="./pexels-andrea-piacquadio-3760067.jpg" alt="bg_img" />
    <div class="container">
      <h1>Welcome to some shitty form</h1>
      <p>Give me the following data</p>
      <?php 
      if($insert==true){
          echo "<p class='submsg'>We got your data, Now share it with others</p>";
        }

      ?>
      
      <form action="04_project.php" method="post">
        <input type="text" name="name" id="name" placeholder="Your name" />
        <input type="text" name="age" id="age" placeholder="Your age" />
        <input
          type="text"
          name="gender"
          id="gender" 
          placeholder="Your gender"
        />
        <input type="email" name="email" id="email" placeholder="Your email" />
        <input type="phone" name="phone" id="phone" placeholder="Your phone" />
        <textarea
          name="desc"
          id="desc"
          cols="30"
          rows="10"
          placeholder="Any specific bullshit you want to add"
        ></textarea>
        <button class="btn">Submit</button>
      </form>
    </div>
    <script src="./04_app.js"></script>
  </body>
</html>
