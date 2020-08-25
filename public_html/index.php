<h1>Hello world!</h1>
<p>Attempting MySQL connection from php...</p>
<?php
$host = 'mysql';
$user = 'root';
$pass = ')k#tE437{}@^ULa/';
$conn = new mysqli($host, $user, $pass);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "<p>Connected to MySQL successfully!</p>";