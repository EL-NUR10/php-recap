<h1>PHP OOP</h1>
<?php
class Fruits
{
    public $name;
    public $color;

    function set_name($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}
$apple = new Fruits();
$apple->set_name("APPLE");
echo $apple->get_name();

$apple->color = "red";

echo "<br>The fruit is <b>" . $apple->get_name() . "</b> and it is " . $apple->color . "<br>";

var_dump($apple instanceof Fruits);
?>
<h2>CONSTRUCTOR</h2>
<?php
class Cars
{
    public $name;
    public $model;

    function __construct($name)
    {
        $this->name = $name;
    }

    function get_name()
    {
        return $this->name;
    }
}
$tesla = new Cars("TESLA");
echo "My First Car is <b>" . $tesla->name . "</b><br>";

$BMW = new Cars("BMW");
echo "My Second car is <b>" . $BMW->get_name() . "</b><br>";
?>

<h2>DESTRUCTOR</h2>
<?php
class Books
{
    public $name;
    public $type;
    public $size;

    function _construct($length, $breadth)
    {
        $this->size = $length * $breadth;
        return $this->size;
    }

    function __destruct()
    {
        echo "<b>This is a destruct() function.</b>";
    }
}
$book1 = new Books();
echo $book1->_construct(10, 2) . "<br>";
?>

<h2>ACCESS MODIFIER</h2>
<?php
class access_modifier
{
    public $name = "Public Access modifer";
    private $color = "Private Access modifer";
    protected $type = "Protected Access modifer";
}
$access_modifier_object = new access_modifier;
echo $access_modifier_object->name;
#echo $access_modifier_object->color;//Error
#echo $access_modifier_object->type//Error
?>

<h2>INHERITANCE</h2>
<?php
class Building
{
    public $name = "Banger";
    private $type;
    protected $paint_type = "CREAM";

    public function paint_type()
    {
        return $this->paint_type;
    }
    protected function override($override)
    {
        echo $override;
    }
}
class my_house extends building
{
    public function __construct(string $my_choice = "Bungalow", $name)
    {
        $this->name = $name;
        echo "My house is a <b>{$my_choice}</b> and its name is <b>" . $this->name . "</b><br>";
    }

    public function override($overrides)
    {
        echo $overrides;
    }
}

$the_house = new my_house("Bungalow", "Concept");
echo $the_house->paint_type() . "<br>";
echo $the_house->override("Overriding an inherited Function.") . "<br>";

final class no_override
{
    public $name;

    final public function __construct(int $quantity = 3)
    {
        return  $quantity;
    }
}

#Error(Can`t inherit it)
/*class error_override extends no_override{
    #$this->_construct;//Error(Can`t inherit it)    
}*/
?>

<h2>Constants</h2>
<?php
class Owner
{
    public const NAME = "Nurudeen Ibrahim";
}
echo owner::NAME . "<br>";

class more_details extends Owner
{
    function _construct()
    {
        echo self::NAME . "<br>";
    }
}
$object = new more_details;
$object->_construct();
?>

<h2>ABSTRACT CLASSESS</h2>
<?php
abstract class System
{
    public $name;
    private $color;

    abstract public function my_system(): string;
}

class choosed_system extends System
{
    public function my_system(): string
    {
        return "HP probook 640b";
    }
}
$system_object = new choosed_system;
echo $system_object->my_system() . "<br>";
?>

<h2>TRAITS</h2>
<?php
trait trait1
{
    public function msg1()
    {
        echo "This is message 1<br>";
    }
}
trait trait2
{
    public function msg2()
    {
        echo "This is message 2<br>";
    }
}

trait trait3
{
    public function msg3()
    {
        echo "This is message 3<br>";
    }
}

class trait_class
{
    use trait1, trait2;
    use trait3;
}
$trait_obj = new trait_class;

$trait_obj->msg1();
$trait_obj->msg2();
$trait_obj->msg3();
?>

<h2>STATIC METHOD AND PROPERTY</h2>
<?php
class static_class
{
    public static $name;

    public static function get_name($name)
    {
        self::$name = $name;
        return self::$name;
    }
}
echo static_class::get_name("Nurudeen") . "<br>";

class child_static_class extends static_class
{
    static public function change_name($name)
    {
        $name = parent::$name;
        $name .= "<br>";
        return $name;
    }
}

echo child_static_class::change_name("IBRAHIM NURUDEEN SHEHU");
?>

<h2>OOP MYSQLI</h2>
<?php

?>