 <?php
$servername = "webqbox.com";
$username = "webqbox_leda";
$password = "123456as";
$dbname = "webqbox_sisleda";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?> 