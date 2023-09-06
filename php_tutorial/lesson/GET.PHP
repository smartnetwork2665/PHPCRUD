<?php

if (isset ($_GET['enter'])){
    $myname = $_GET['myname'];
    $myage= $_GET['myage'];
    echo "<h4>my name is {$myname}<h4/>";
    echo "<h3> my age is {$myage}<h3/>";
}

?>
<!-- GET HAS LIMITED CHARACTER THAT CAN BE SEND BUT POST HAS NO LIMIT TO BE SEND AT TIME
two ways of using the get method retrieve data and through url and form  -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">y
    <meta name="viewport" content="width=device-width, inity-ial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="get.php?myname=ONUH"> click to show name</a>
<center>
    <!-- in javascript we use an id but for php every input must have a name  -->
    <form action="GET.php" method="GET">
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