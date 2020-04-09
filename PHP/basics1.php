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
<!-- 77
<?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
}
?>
-->
<!--78
 <?php
$t = date("H");

if ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>
-->
<!-- 79
<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
?>

-->
<!-- 80 switch case
<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}
?>

 -->
<!--81
<?php
$x = 1;

while($x <= 5) {
    echo "The number is: $x <br>";
    $x++;
}
?>

 -->
<!--82
<?php
$x = 0;

while($x <= 100) {
    echo "The number is: $x <br>";
    $x+=10;
}
?>

 -->
<!--83
<?php
$x = 1;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>

 -->
<!-- 84
<?php
$x = 6;

do {
    echo "The number is: $x <br>";
    $x++;
} while ($x <= 5);
?>


 -->
<!-- 85
<?php
for ($x = 0; $x <= 10; $x++) {
    echo "The number is: $x <br>";
}
?>

 -->
<!-- 86
<?php
for ($x = 0; $x <= 100; $x+=10) {
    echo "The number is: $x <br>";
}
?>


-->
<!--87
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>


 -->
<!--88
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $val) {
  echo "$x = $val<br>";
}
?>

 -->
<!--89 function
<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg(); // call the function
?>

 -->
<!-- 90
<?php
function familyName($fname) {
    echo "$fname Refsnes.<br>";
}

familyName("Jani");
familyName("Hege");
familyName("Stale");
familyName("Kai Jim");
familyName("Borge");
?>

 -->
<!-- 91
<?php
function familyName($fname, $year) {
    echo "$fname Refsnes. Born in $year <br>";
}

familyName("Hege", "1975");
familyName("Stale", "1978");
familyName("Kai Jim", "1983");
?>


-->
<!--92
<?php
function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is NOT enabled "5 days" is changed to int(5), and it will return 10
?>


 -->
<!-- 93
<?php declare(strict_types=1); // strict requirement

function addNumbers(int $a, int $b) {
    return $a + $b;
}
echo addNumbers(5, "5 days");
// since strict is enabled and "5 days" is not an integer, an error will be thrown
?>

 -->
<!-- 94
<?php declare(strict_types=1); // strict requirement
function setHeight(int $minheight = 50) {
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(135);
setHeight(80);
?>

-->
<!-- 95
<?php declare(strict_types=1); // strict requirement
function sum(int $x, int $y) {
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4);
?>

 -->
<!--96
<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : float {
    return $a + $b;
}
echo addNumbers(1.2, 5.2);
?>



-->
<!-- 97
<?php declare(strict_types=1); // strict requirement
function addNumbers(float $a, float $b) : int {
    return (int)($a + $b);
}
echo addNumbers(1.2, 5.2);
?>

 -->
<!-- 98
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>


 -->
<!--
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo count($cars);
?>


 -->
<!--
<?php
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?>


 -->
<!-- 
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
?>

-->
<!--
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Peter is " . $age['Peter'] . " years old.";
?>



 -->
<!--
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
}
?>

 -->
<!--
<?php
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
?>


 -->
<!-- 
<?php
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>


-->
<!-- 
<?php
$cars = array("Volvo", "BMW", "Toyota");
sort($cars);
?>



-->
<!--
<?php
$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
?>

 -->
<!--
<?php
$cars = array("Volvo", "BMW", "Toyota");
rsort($cars);
?>

 -->
<!--
<?php
$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
?>
 -->
<!--
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age);
?>


 -->
<!--
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
ksort($age);
?>

 -->
<!--
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
arsort($age);
?>


 -->
<!--
<?php
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
krsort($age);
?>


 -->
<!--
<?php
$x = 75;
$y = 25;
 
function addition() {
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
 
addition();
echo $z;
?>


 -->
<!--
<?php
echo $_SERVER['PHP_SELF'];
echo "<br>";
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['HTTP_HOST'];
echo "<br>";
echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
?>


 -->
<!--

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_REQUEST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>


 -->
<!--
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Name: <input type="text" name="fname">
  <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $name = $_POST['fname'];
    if (empty($name)) {
        echo "Name is empty";
    } else {
        echo $name;
    }
}
?>


 -->
<!--
<?php
echo "Study " . $_GET['subject'] . " at " . $_GET['web'];
?>


 -->
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