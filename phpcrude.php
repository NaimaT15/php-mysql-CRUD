<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "flutter-p";
$table = "fluttercr";
$action = $_POST["action"];
$conn = new mysqli($servername,$usernamme,$password,$dbname);
if($conn->connect_error){
    die("Connection error: " . $conn->connect_error);
    return;
}
if("CREATE_TABLE"==$action) {
    $sql="CREATE TABLE IF NOT EXISTS $table(id IN(6) UNSIGNED PRIMARY KEY AUTOINCREMENT, first_name VARCHAR(255), last_name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL)";
    if ($conn->query($sql)===TRUE){
        echo "success";

    }
    else {
        echo "error";}
        $conn->close();
        return;
?>