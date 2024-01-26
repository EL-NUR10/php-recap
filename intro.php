<h1>COOKIE</h1>
<?php
setcookie("auth", "password", time() + 8640, "/");
print_r($_COOKIE);
if (isset($_COOKIE["auth"])) {
    echo "<br>Cookie is set";
} else {
    echo "<br>Oga that cookie is not set";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./PHP logo.png" type="image/x-icon">
    <title>PHP RECAP</title>
</head>

<body>
    <h1>VARIABLE SCOPE</h1>
    <?php
    function localVariable()
    {
        $x = 3;
        $y = 2;
        $z = $x + $y;
        echo $z;
    }
    echo localVariable() . "<br>";

    $x = 10;
    $y = 20;
    function globalVariable()
    {
        global $x, $y;
        $z = $x + $y;
        return $z;
    }
    echo globalVariable() . "<br>";

    function GLOBALS()
    {
        $zz = $GLOBALS["x"] + $GLOBALS["y"] + 20;
        echo $zz;
    }
    GLOBALS();
    echo "<br>";
    var_dump($x);
    echo "<br>";

    function staticVariable()
    {
        static $b = 1 + 2;
        echo $b;
        $b++;
    }
    staticVariable();
    echo "<br>";
    staticVariable();
    echo "<br>";
    staticVariable();
    echo "<br>";

    echo "<h1>PHP CONSTANT</h1>";
    define("myFavCar", "TESLA");
    echo myFavCar . "<br>";

    define("cars", ["BMW", "TESLA", "G-WAGON"]);
    echo cars[0] . "<br>";

    define("Gender", ["Male", "Female", "Other"]);
    echo "I am a " . Gender[0];
    ?>
    <h1>PHP Operator</h1>
    <?php
    $a = 1;
    $a += 2;
    echo $a . "<br>";

    $b = 3;
    $a <=> $b;

    $array1 = array("car1" => "BMW", "car2" => "TESLA", "car3" => "G-WAGON");
    $array2 = array("SIENNA", "TOYOTA", "HONDA ACCORD");
    print_r($array1 + $array2);

    $unknown = $g ?? 4;
    echo $unknown . "<br>";

    $value = true;
    $check = is_integer($value) ? "The value is an integer." : "The value is not an integer";
    echo $check;
    ?>
    <h1>PHP CASTING</h1>
    <?php
    $a = "6";
    var_dump($a);
    $a = (int) $a;
    var_dump($a);
    echo "<br>";

    $b = 6;
    var_dump($b);
    $b = (string) $b;
    var_dump($b);
    echo "<br>";

    $c = 6;
    $c = (bool) $c;
    var_dump($c);
    ?>

    <h1>CONDITIONAL STATEMENT</h1>
    <?php
    $a = 21;
    if ($a > 10 and $a < 20) {
        echo "You are more than 10. <br>";
    } elseif ($a > 20) {
        echo "You are more than 20. <br>";
    } elseif ($a < 10) {
        echo "You are less than 10. <br>";
    } else {
        echo "You do not belong to this place.<br>";
    }

    $age = 1;
    switch ($age) {
        case 18:
            echo "You are matured <br>";
            break;
        case 12;
            echo "Oga, You are not matured <br>";
            break;
        default:
            echo "I don't have what to tell you sir <br>";
    }
    ?>
    <h1>LOOP</h1>
    <?php
    for ($i = 1; $i <= 100; $i++) {
        echo $i . "<br>";
    }

    $i = 1;
    while ($i <= 100) {
        echo $i;
        $i++;
    }

    $cars = array("First car" => "BMW", "Second car" => "TESLA", "Third car" => "G-WAGON");
    foreach ($cars as $key => $value) {
        echo "My " . $key . " is " . $value . "<br>";
    }
    ?>

    <h1>FUNCTION</h1>
    <?php
    function GetSUM()
    {
        $a = 2;
        $b = 3;
        echo $a + $b . "<br>";
    }
    Getsum();

    function GETdiff($a)
    {
        $b = 20;
        echo $b - $a . "<br>";
    }
    Getdiff(6);

    function multiply($a, $b)
    {
        $c = $a * $b;
        echo $c;
    }
    multiply(2, 3);
    echo "<br>";

    $check = isset($a) ? "Correct" : "Not correct";
    echo "$check <br>";

    function divide(int $a, float $b)
    {
        echo $a / $b . "<br>";
    }
    divide(11.2, 6.12);

    function defaultHeight(float $height = 34.6)
    {
        echo "My current height is: $height <br>";
    }
    defaultHeight();
    defaultHeight(36.6);

    function returnValue(int $a, int $b)
    {
        $c = $a + $b;
        return $c;
    }
    echo "5 + 10 = " . returnValue(5, 10) . "<br>";

    function returnAnswer(float $a, float $b): int
    {
        return $a + $b;
    }
    echo returnAnswer(1.5, 1.7) . "<br>";

    function returnAnswer2(float $a, float $b): float
    {
        return $a + $b;
    }
    echo returnAnswer2(1.5, 1.7) . "<br>";

    function returnAnswer3(float $a, float $b)
    {
        return (float) ($a + $b);
    }
    echo returnAnswer3(2.6, 7.9) . "<br>";
    ?>
    <h1>ARRAY</h1>
    <?php
    $cars = ["BMW", "G-WAGON", "TESLA"];
    echo $cars["0"];

    $courses = ["100 level" => "GST111", "200 level" => "GST222"];
    echo $courses["100 level"];
    echo $courses["200 level"];

    $boys = array(
        array("Ibrahim", "Uni Abuja", "200 Level"),
        array("Nurudeen", "NSUK", "400 Level"),
        array("Munirudeen", "NSUK", "Graduate"),
        array("Abdul Salam", "Futminna", "Graduate")
    );

    echo '<table style="border:3px solid black;">';
    echo "<tr>
            <th style='border:3px solid black;'>Name</th>
            <th style='border:3px solid black;'>University</th>
            <th style='border:3px solid black;'>Level</th>
        </tr>";
    for ($i = 0; $i <= 3; $i++) {
        echo "<tr>";
        for ($j = 0; $j <= 2; $j++) {
            echo "<td>" . $boys[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>
    <h1>SUPERGLOBALS</h1>
    <?php
    print_r($_SERVER);
    echo "<br>";
    echo $_SERVER["REMOTE_ADDR"];
    ?>

    <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>
    <h1>FORM REQUIRE FIELDS</h1>
    <?php
    $test = "";

    if (!isset($test)) {
        echo "It is not set";
    };
    ?>

    <h1>DATE FUNCTION</h1>
    <?php
    date_default_timezone_set("AFRICA/LAGOS");
    echo date("D, d-m-y") . "<br>";
    echo date("l, d-M-Y") . "<br>";
    echo date("h:i:s A") . "<br>";

    echo "<h5>LOOPING THROUGH TIME</h5><br>";
    $starttime = strtotime("6:00pm");
    $enddate = strtotime("+1 hour", $starttime);

    while ($starttime <= $enddate) {
        echo date("h:i:s a", $starttime) . "<br>";
        $starttime = strtotime("+10 mins", $starttime);
    }
    echo time();
    ?>
    <h1>FILE HANDLING</h1>
    <?php
    echo readfile("README.md") . "<br>";

    $myfile = fopen("README.md", "r") ?? "File not found";
    echo fread($myfile, filesize("README.md")) . "<br>";
    fclose($myfile);

    $file = fopen("README.md", "r");
    while (!feof($file)) {
        echo fgetc($file) . "<br>";
    }

    $create_file = fopen("testingfile.txt", "w");
    $text = "This file was created from server.\n";
    $text2 = "Please ignore, its just a mere testing";
    fwrite($create_file, $text);
    fwrite($create_file, $text2);
    echo readfile("testingfile.txt") . "<br>";
    fclose($create_file);
    ?>
    <h1>FILE UPLOAD</h1>
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $file_array = $_FILES["file"];
        $target_dir = "uploads/" . $file_array["name"];
        print_r($file_array);
        echo "<br>";
        $size = $file_array["size"];
        if ($size < 1000000) {
            $filesize = $size / 1000;
            $filesize = round($filesize);
            $filesize .= "kb";
        } elseif ($size >= 1000000) {
            $filesize = $size / 1000000;
            $filesize = round($filesize, 2);
            $filesize .= "mb";
        }
        echo "<b>The filesize is: $filesize</b>" . "<br>";

        if ($file_array["size"] > 5000000) {
            echo "Your file is greater than 5mb";
        } else {
            # code...
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit">

    </form>

    

</body>

</html>