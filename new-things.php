<?php

namespace myarea;
?>
<h1>CASTING</h1>
<?php
$a = 6;
var_dump($a);
echo "<br>";
$_a = (string) $a;
var_dump($_a);
echo "<br>";
$_a = (bool) $a;
var_dump($_a);
?>


<h1>MAGIC CONSTANTS</h1>
<?php

echo __LINE__ . "<br>";


trait magic_constant
{
    static public function get_trait_name()
    {
        return __TRAIT__;
    }
}
echo magic_constant::get_trait_name() . "<br>";

class magic_constant_class
{
    public function get_class()
    {
        echo __CLASS__ . "<br>";
    }

    public function magic_constant()
    {
        echo magic_constant_class::class . "<br>";
    }
}
$obj = new magic_constant_class;
$obj->get_class();

$obj->magic_constant();

echo __NAMESPACE__ . "<br>";

echo __DIR__ . "<br>";

echo __FILE__ . "<br>";

function magic_constant()
{
    return __FUNCTION__;
}
echo magic_constant() . "<br>";

class last_one
{
    public static function last_ones_function()
    {
        return __METHOD__;
    }
}

echo last_one::last_ones_function() . "<br>";
?>

<h1>RegEx</h1>
<?php
$string = "www.goal.com and www.worldfootball.com";
echo preg_match("/goal/i", $string) . "<br>";

echo preg_match_all("/o/i", $string) . "<br>";

$replace = preg_replace("/o/i", "a", $string) . "<br>";
echo $replace;

$email = "z";
if (preg_match("/[bcgz]/i", $email)) {
    echo "<b>It Matches the required format</b><br>";
} else {
    echo "<b>It doesn't Match the required format please</b><br>";
}

$name = "ellothere";
if (preg_match("/there/i", $name)) {
    echo "<b>It Matches the required format</b><br>";
} else {
    echo "<b>It doesn't Match the required format please</b><br>";
}

$real_email = "ibrahim@gmail.com";
if (preg_match("/[a-z]+@[a-z]+(\.com)\b/i", $real_email)) {
    echo "<b>The email $real_email matches the required format</b><br>";
} else {
    echo "<b>The email $real_email doesn't matches the required format\nPlease change it.</b><br>";
}

$fullname = "IBRAHIM NURUDEEN";
if (preg_match("/[a-z]+\s[a-z]+/i", $fullname)) {
    echo "<b>$fullname is a correct format....</b><br>";
} else {
    echo "<b>$fullname is not a correct format atall....</b><br>";
}
?>

<h1>PHP OOP INTERFACE</h1>
<?php
interface Animals{
    public function make_sound();
}

class Dog implements Animals{
    public function make_sound()
    {
        echo "woo<br>";
    }
}

class cat implements Animals{
    public function make_sound()
    {
        echo "meow<br>";
    }
}

$dog = new dog;
$cat = new cat;
$dog->make_sound();
$cat->make_sound();
?>