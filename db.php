?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
 
$host = "localhost";   // ⚠️ agar hosting ka DB host alag hai to yahan change karna
$user = "uyhezup6l0hgf";
$pass = "pr634bpk3knb";
$db   = "dbarukzwv47anj";
 
$conn = mysqli_connect($host, $user, $pass, $db);
 
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
