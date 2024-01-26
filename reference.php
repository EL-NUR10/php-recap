<h1>DATE REFERNECE</h1>
<?php
echo getcwd() . "<br>";
print_r(dir(getcwd()));
echo "<br>";
?>

<h1>ERROR REFERENCE</h1>
<?php

echo $test;
print_r(error_get_last());

// $conn = new mysqli("localhost","root","1234567890","hhdhh");
// if (!$conn) {
//     $sent_log = error_log("Failed to connect to DB",1,"ibrahimnurudeenshehu1447@gmail.com");

//     if ($sent_log === TRUE) {
//         echo "<b>Log error has been sent</b><br>";
//     }else {
//         echo "<b>Log error not sent!</b><br>";

//     }
// }

$no = 18;
if ($no >= 18) {
    trigger_error("You are matured, please! It's meant for kids.");
}

echo filesize("PHP logo.png");
echo filetype("testingfile.txt");

?>

<h1>MISCELLANEOUS REFERENCE</h1>
<?php
echo $_SERVER['HTTP_USER_AGENT'] . "<br><br>";
$browser = get_browser();
print_r($browser);
echo "<br>";

time_sleep_until(time()+0);
?>

<h1>NETWORK REFERENCE</h1>
<?php
echo $_SERVER["REMOTE_ADDR"] . "<br>";
echo gethostbyaddr($_SERVER["REMOTE_ADDR"])."<br>";
echo gethostbyname($_SERVER["REMOTE_ADDR"])."<br>";
echo gethostname()."<br>";
?>

<h1>STRING REFERENCE</h1>
<?php
$arr = array('Hello','World!','Beautiful','Day!');
echo join(" ",$arr);
?>

<h1>VARIABLE HANDLING REFERENCE</h1>
<?php
echo "0: " .(boolval(0) ? 'true' : 'false') . "<br>";
echo "4: " .(boolval(42) ? 'true' : 'false') . "<br>";
echo '"": ' .(boolval("") ? 'true' : 'false') . "<br>";
echo '"Hello": ' .(boolval("Hello") ? 'true' : 'false') . "<br>";
echo '"0": ' .(boolval("0") ? 'true' : 'false') . "<br>";
echo "[3, 5]: " .(boolval([3, 5]) ? 'true' : 'false') . "<br>";
echo "[]: " .(boolval([]) ? 'true' : 'false') . "<br>";

$all_variables = $GLOBALS;
$all_variables = array_keys($all_variables);
print_r($all_variables);

$a = array("red", "green", "blue");

$arr = get_defined_vars();
echo "<br>";
print_r($arr["a"]);
?>