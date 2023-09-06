<!-- string_functions is use to access and manipulate a strings 
types of strings fumction functions  -->
<?php
$string="my name is joseph";
echo strlen($string);

$string=('HELLO JESUS');
echo strtolower($string);

$string= ('hello jesus');
echo strtoupper($string);

$string=('hello jesus');
echo ucwords ($string);

$tring=('hello jesus');
echo strrev($string);

// $string= ('HELLO JESUS')
// $substring= ('HELLO ADAM')
// str_starts_with( $string, $substring);
// $response = str_starts_with("HELLO JESUS.","HELLO");
// var_dump($response);
// Output: bool(true)
// $response = str_starts_with("HELLO JESUS", "YOU");
// var_dump($response);
// // Output: bool(false)
?>