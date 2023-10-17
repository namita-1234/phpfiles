<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$x = "Hello world!";
echo $x;
echo "<br>";

$y=5345;
var_dump($y);
echo "<br>";

$z=56.55;
var_dump($z);
echo "<br>";
$fruits=array("apple","mango","orange");
var_dump($fruits);

echo "<br>";

class fruit {
    public $name;
    public $color;
    public function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    public function myfunction() {
      return "My favourite fruit is  " . $this->name . " " ."color is"." ". $this->color . "!";
    }
  }
  $myfruit = new fruit("mango", "yellow");
  echo $myfruit -> myfunction();
  echo "<br>";

  $m=null;
  var_dump($m);
  echo "<br>";
echo(pi());
echo "<br>";
echo(max(10,20,30,40,));
echo "<br>";
echo(min(10,30,2,90,100));
echo "<br>";
echo(round(3.56));
echo "<br>";
echo(rand());
echo "<br>";
echo(abs(-23.33));
echo "<br>";
echo(sqrt(81));
echo "<br>";

define("world", "thank you");
echo world;

echo "<br>";
$l=456.789;
$int_cast=(int)$l;
echo $int_cast;
?>
</body>
</html>