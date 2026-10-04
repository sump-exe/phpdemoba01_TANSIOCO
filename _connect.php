<?php 

$hostname = '';
$username = 'root';
$password = '';
$dbName = 'attendance_db';

$conn = new mysqli($hostname, $username, $password, $dbName);

if ($conn) {
    echo "Connected!";
} else {
    echo "Error!";
}

//select all data

$query = $conn->query("SELECT * FROM students");
$data = $query->fetch_all(MYSQLI_ASSOC);

echo "<br>";
echo "<br>";
echo "Data in attendance table";

foreach ($data as $row) {
    echo "<br>";
    echo "<br>";
    echo $row['ID'] . "<br>";
    echo $row['Name'] . "<br>";
}

?>