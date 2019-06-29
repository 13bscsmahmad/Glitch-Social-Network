<h1>Test Connection To MySQL Database</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'mydb';
$user = 'root';
$pass = 'mysqlPwd75';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected to MySQL successfully!";
?>