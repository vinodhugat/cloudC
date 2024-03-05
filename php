execute this this by following
sudo -i
yum install php php-mysqlnd
cd /var/www/html
dir  -> to see 
nano index.php
(past following php code using ctrl+shipt+c & ctrl+shipt+v)
ctrl+s  --> save;  ctrl+x -->  exit
service httpd start

<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "paste_end_point_here";
$username = "username"; // MySQL username
$password = "password"; // MySQL password
$dbname = "created_database_name"; // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// SQL query to retrieve data from the "Aircraft" table
$sql = "SELECT * FROM student";
$result = $conn->query($sql);

// Check if any rows were returned
if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - name: " . $row["name"] . "<br>";
    }
} else {
    echo "0 rows";
}

// Close connection
$conn->close();
?>
