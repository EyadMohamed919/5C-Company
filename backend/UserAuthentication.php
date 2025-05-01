<?php
require_once('../vendor/autoload.php');
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();
// print_r(__DIR__);
// print_r($_ENV);

// Database connection
$server = $_ENV["DB_SERVER"];
$username = $_ENV["DB_USERNAME"];
$password = $_ENV["DB_PASSWORD"];
$database = $_ENV["DB_DATABASE_NAME"];

$DB_Connection = new mysqli($server, $username, $password, $database);

$email = $_POST["email"];
$password = $_POST["password"];
$password = sha1($password);

$result = $DB_Connection->query("select * from admin where admin_password = \"" . $password . "\"");
$result = mysqli_fetch_assoc($result);
if($result)
{
    echo $result["admin_fname"];
    session_start();
    $_SESSION["loged"] = true;
    $_SESSION["user_fname"] = $result["admin_fname"];
    $_SESSION["user_lname"] = $result["admin_lname"];
    $_SESSION["loged"] = true;
    header("location: ../index.php");
}
else 
{
    echo "Incorrect password or email";
    session_start();
    $_SESSION["loged"] = false;
    $_SESSION["incorrect_login"] = true;
    header("location: ../login.php");
}


?>