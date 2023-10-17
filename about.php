<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo "puja" ?></h2>
    <p><?php echo "HELLO" ?></p>
    <h1><?php echo "This is my first php programme."; ?></h1>
    <?php $s="hello world";?>
    <?php echo $s ?>
    <?php
     echo "<p style=color:blue;> i am a girl</p>";
     $x=5;
     $y=6;
     echo $x.$y;
     echo "<br>".$x+$y;
    function myFunction(){
        global $x,$y;
        echo "<br>".$x+$y;

    }
myFunction();
echo "<br>".$x+$y."<br>";
var_dump ($x);
echo "<br>".strlen("hello   world");
echo "<br>".str_word_count("hello book dfgh  world");
echo "<br>".strrev("hello   world");
echo "<br>".strpos("hello world","world");
echo "<br>".str_replace(" ", "-", "Hello world Hello world Hello world");
 echo "<br>". var_dump(is_float($x));




?>
</body>
</html>