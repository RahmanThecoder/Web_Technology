<!DOCTYPE html>
<html>
<body>
<!-- 01
<?php
echo "My first PHP script!";
?>
-->
<!-- 02 
<?php
ECHO "Hello World!<br>";
echo "Hello World!<br>";
EcHo "Hello World!<br>";
?>

-->

<!-- 03
<?php
$color = "red";
echo "My car is " . $color . "<br>";
echo "My house is " . $COLOR . "<br>";
echo "My boat is " . $coLOR . "<br>";
?>
 -->
<!-- 04
<?php
// This is a single-line comment

# This is also a single-line comment
?>
/*
This is a multiple-lines comment block
that spans over multiple
lines
*/
 -->
 
<!-- 05
<?php
// You can also use comments to leave out parts of a code line
$x = 5 /* + 15 */ + 5;
echo $x;
?>

 -->
<!-- 06
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;
?>

-->
<!-- 07
<?php
$txt = "W3Schools.com";
echo "I love $txt!";
?>

 -->
<!-- 08
<?php
$txt = "W3Schools.com";
echo "I love " . $txt . "!";
?>

-->
<!-- 09
<?php
$x = 5;
$y = 4;
echo $x + $y;
?>

-->
<!-- 10
<?php
$x = 5; // global scope

function myTest() {
    // using x inside this function will generate an error
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

echo "<p>Variable x outside function is: $x</p>";
?>

 -->
<!--  11
<?php
function myTest() {
    $x = 5; // local scope
    echo "<p>Variable x inside function is: $x</p>";
}
myTest();

// using x outside the function will generate an error
echo "<p>Variable x outside function is: $x</p>";
?>


 -->
<!-- 12
<?php
$x = 5;
$y = 10;

function myTest() {
    global $x, $y;
    $y = $x + $y;
}

myTest();
echo $y; // outputs 15
?>

 -->
<!-- 13
<?php
$x = 5;
$y = 10;

function myTest() {
    $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}

myTest();
echo $y; // outputs 15
?>

-->
<!-- 14
<?php
function myTest() {
    static $x = 0;
    echo $x;
    $x++;
}

myTest();
myTest();
myTest();
?>

 -->
<!-- 15
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?>

 -->
<!-- 16
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Study PHP at " . $txt2 . "<br>";
echo $x + $y;
?>
 

 -->
<!-- 17
<?php
print "<h2>PHP is Fun!</h2>";
print "Hello world!<br>";
print "I'm about to learn PHP!";
?>



 -->
<!-- 18
<?php
$txt1 = "Learn PHP";
$txt2 = "W3Schools.com";
$x = 5;
$y = 4;

print "<h2>" . $txt1 . "</h2>";
print "Study PHP at " . $txt2 . "<br>";
print $x + $y;
?>
 -->
<!-- 19
<?php
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
?>



 -->
<!-- 20
<?php
$x = 5985;
var_dump($x);
?>


-->
<!-- 21
<?php
$x = 10.365;
var_dump($x);
?>


 -->
<!-- 22
<?php
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);
?>

-->
<!-- 23
<?php
class Car {
    function Car() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
?>


 -->
<!-- 24
<?php
$x = "Hello world!";
$x = null;
var_dump($x);
?>


-->
<!--25
<?php
echo strlen("Hello world!"); // outputs 12
?>


-->
<!--26
<?php
echo str_word_count("Hello world!"); // outputs 2
?>


-->
<!-- 27
<?php
echo strrev("Hello world!"); // outputs !dlrow olleH
?>

 -->
<!--28
<?php
echo strpos("Hello world!", "world"); // outputs 6
?>

 -->
<!-- 29
<?php
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!
?>

-->
<!-- 30
<?php
$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));
?>

-->
<!-- 31
<?php
$x = 10.365;
var_dump(is_float($x));
?>


-->
<!--32
<?php
$x = 1.9e411;
var_dump($x);
?>


 -->
<!-- 33
<?php
$x = acos(8);
var_dump($x);
?>

 -->
<!-- 34
<?php
$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Hello";
var_dump(is_numeric($x));
?>

-->
<!--35
<?php
// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?>

-->
<!-- 36
<?php
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
?>

 -->
<!-- 37
<?php
define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>

-->
<!--38
<?php
define("cars", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo cars[0];
?>


 -->
<!--39
<?php
define("GREETING", "Welcome to W3Schools.com!");

function myTest() {
    echo GREETING;
}
 
myTest();
?>


 -->
<!--40
<?php
$x = 10;  
$y = 6;

echo $x + $y;
echo $x - $y;
echo $x * $y;
echo $x / $y;
echo $x % $y;
echo $x ** $y;

?> 



 -->
<!-- 41

<?php
$x = 10;  
echo $x;
?>



 -->
<!-- 42
<?php
$x = 20;  
$x += 100;

echo $x;
?> 

 -->
<!--43
<?php
$x = 50;
$x -= 30;

echo $x;
?>

 -->
<!-- 44
<?php
$x = 10;  
$y = 6;

echo $x * $y;
?> 


-->
<!--45
<?php
$x = 10;
$x /= 5;

echo $x;
?>


 -->
<!--46
<?php
$x = 15;
$x %= 4;

echo $x;
?>  


 -->
<!--47
<?php
$x = 100;  
$y = "100";

var_dump($x == $y); // returns true because values are equal
?>


 -->
<!-- 48
<?php
$x = 100;  
$y = "100";

var_dump($x === $y); // returns false because types are not equal
?>  


-->
<!--49
<?php
$x = 100;  
$y = "100";

var_dump($x != $y); // returns false because values are equal
?> 



 -->
<!--50
<?php
$x = 100;  
$y = "100";

var_dump($x <> $y); // returns false because values are equal
?>  


 -->
<!-- 51
<?php
$x = 100;  
$y = "100";

var_dump($x !== $y); // returns true because types are not equal
?>


-->
<!--52
<?php
$x = 100;
$y = 50;

var_dump($x > $y); // returns true because $x is greater than $y
?> 

 -->
<!--53
<?php
$x = 10;
$y = 50;

var_dump($x < $y); // returns true because $x is less than $y
?>  

 -->
<!-- 54
<?php
$x = 50;
$y = 50;

var_dump($x >= $y); // returns true because $x is greater than or equal to $y
?>


 -->
<!--55
<?php
$x = 50;
$y = 50;

var_dump($x <= $y); // returns true because $x is less than or equal to $y
?> 


-->
<!--56
<?php
$x = 5;  
$y = 10;

echo ($x <=> $y); // returns -1 because $x is less than $y
echo "<br>";

$x = 10;  
$y = 10;

echo ($x <=> $y); // returns 0 because values are equal
echo "<br>";

$x = 15;  
$y = 10;

echo ($x <=> $y); // returns +1 because $x is greater than $y
?>



 -->
<!--57
<?php
$x = 10;  
echo ++$x;
?>



 -->
<!--58
<?php
$x = 10;  
echo $x++;
?> 

 -->
<!--59
<?php
$x = 10;  
echo --$x;
?>


 -->
<!--60
<?php
$x = 10;  
echo $x--;
?> 



 -->
<!--61
<?php
$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world!";
}
?>


 -->
<!--62
<?php
$x = 100;  
$y = 50;

if ($x == 100 or $y == 80) {
    echo "Hello world!";
}
?> 

 -->
<!--63
<?php
$x = 100;  
$y = 50;

if ($x == 100 xor $y == 80) {
    echo "Hello world!";
}
?>

 -->
<!--64
<?php
$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}
?>


 -->
<!--65
<?php
$x = 100;  
$y = 50;

if ($x == 100 || $y == 80) {
    echo "Hello world!";
}
?>  


-->
<!--66
<?php
$x = 100;  

if ($x !== 90) {
    echo "Hello world!";
}
?>

 -->
<!--67
<?php
$txt1 = "Hello";
$txt2 = " world!";
echo $txt1 . $txt2;
?> 


 -->
<!-- 68
<?php
$txt1 = "Hello";
$txt2 = " world!";
$txt1 .= $txt2;
echo $txt1;
?>  

-->
<!--69
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

print_r($x + $y); // union of $x and $y
?>

 -->
<!--70
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x == $y);
?>
 -->
<!-- 71
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x === $y);
?> 


-->
<!--72
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x != $y);
?> 

 -->
<!--73
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x <> $y);
?>

 -->
<!--74
<?php
$x = array("a" => "red", "b" => "green");  
$y = array("c" => "blue", "d" => "yellow");  

var_dump($x !== $y);
?>

 -->
<!-- 75
<?php
   // if empty($user) = TRUE, set $status = "anonymous"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
   echo("<br>");

   $user = "John Doe";
   // if empty($user) = FALSE, set $status = "logged in"
   echo $status = (empty($user)) ? "anonymous" : "logged in";
?>


-->
<!--76
<?php
   // variable $user is the value of $_GET['user']
   // and 'anonymous' if it does not exist
   echo $user = $_GET["user"] ?? "anonymous";
   echo("<br>");
  
   // variable $color is "red" if $color does not exist or is null
   echo $color = $color ?? "red";
?>

 end of php operatorss -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->
<!-- -->










</body>
</html>