<?php
$conn = new mysqli("localhost", "root", "1234567890");

if ($conn->connect_error) {
    die("The connection failed: <b>" . $conn->connect_error . "</b>");
} else {
    echo "Connection successful<br>";
}

if ($conn->query("CREATE DATABASE `php_recap`")) {
    echo "Database created successfully<br>";
}
$conn->close();

$conn = new mysqli("localhost", "root", "1234567890", "php_recap");

if ($conn->query("CREATE TABLE `oop_sql`(
   id int auto_increment NOT NULL,
    firstname varchar(255) NOT NULL,
    lastname varchar(255) NOT NULL,
    primary key(id)
)") === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error in creating table: <b>" . $conn->error . "</b>";
}
$conn->close();

$conn = new mysqli("localhost", "root", "1234567890", "php_recap");
if ($conn->query("INSERT INTO `oop_sql`(firstname,lastname) VALUES('Ibrahim','Nurudeen')")) {
    echo "<br>Inserted successfully<br>";
} else {
    echo "<br><b>Error inserting into DB: </b>" . $conn->error;
}

echo $conn->insert_id . "<br>";
$conn->autocommit(false);
$conn->close();

$conn = new mysqli("localhost", "root", "1234567890", "php_recap");
echo $conn->insert_id . "<br>";

$stmt = $conn->prepare("INSERT INTO `oop_mysql` (firstname,lastname) VALUES(?,?)");
$stmt->bind_param("ss", $firstname, $lastname);

$firstname = "IBRAHIM";
$lastname = "NURUDEEN";
$stmt->execute();

$firstname = "SHEHU";
$lastname = "MUNIRUDEEN";
$stmt->execute();
$conn->close();

$conn = new mysqli("localhost", "root", "1234567890", "php_recap");
$stmt = $conn->prepare("INSERT INTO `oop_mysql` (firstname,lastname) VALUES(?,?)");
$stmt->bind_param("ss", $firstname, $lastname);

$firstname = "SHAMSUDEEN";
$lastname = "ABUBAKAR";
if ($stmt->execute() === TRUE) {
    echo "Data Inserted succesfully";
} else {
    echo "<b>Error inserting data: </b>" . $conn->error;
}
$conn->close();

$fname = "NURU";
$lname = "IBRO";

$conn = new mysqli("localhost","root","1234567890","php_recap");

$stmt = $conn->prepare("INSERT INTO `oop_mysql` (`firstname`,`lastname`) VALUES (?,?)");
$stmt->bind_param("ss",$fname,$lname);
$stmt->execute();


$stmt2 = $conn->query("TRUNCATE TABLE `oop_mysql`");
if ($stmt2) {
    echo "<br>Table Truncated successfully <br>";
}else{
    echo "<b>There is an error oo: </b>" . $conn->error;
}
$conn->close();

$conn = new mysqli("localhost","root","1234567890","php_recap");
$result = $conn->query("SELECT * FROM `oop_sql` WHERE id < 7");

if($result->num_rows > 0){
    while ($row = $result->fetch_assoc()) {
        echo $row["firstname"]. "     " . $row["lastname"] . "<br>";
    }
}

echo "<h1>Fetching and sisplaying fetched data from database using fetch_assoc()</h1>";

$result = $conn->query("SELECT * FROM `oop_sql`");

echo $conn->affected_rows . "<br>";
if($result->num_rows > 0){
    // $row = $result->fetch_all(MYSQLI_ASSOC);
    // print_r($row);
    while ($row = $result->fetch_all(MYSQLI_ASSOC)) {
        for ($i=0; $i < $conn->affected_rows; $i++) { 
            echo $row[$i]["id"] . "------" . "<b>MY FIRSTNAME IS: </b>". $row[$i]["firstname"] . "<b> AND MY LASTNAME IS: </b>". $row[$i]["lastname"] . "<br>";
        }
    }
}