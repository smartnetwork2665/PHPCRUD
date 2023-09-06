<?php

if (isset ($_POST['enter'])){
    $myname = $_POST['myname'];
    $myage= $_POST['myage'];
    echo "<h4>my name is {$myname}<h4/>";
    echo "<h3> my age is {$myage}<h3/>";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
    <!-- in javascript we use an id but for php every input must have a name  -->
    <form action="post.php" method="post">
    <input type="text"  name= "myname" placeholder = "enter your name" form-control="required">
    <br>
    <br>
    <input type="age" name= "myage" placeholder= "enter your age">
    <br>
    <br>
  <button type= "submit" name= "enter">enter</button>
    </form>
    </center>
    <marquee behavior="alternate" direction="right"> <h2>my first project in otukpotech</h2></marquee>
    

</body>
</html>