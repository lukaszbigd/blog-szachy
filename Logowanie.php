<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])) {
    $login = $_POST['login'];
    $gmail = $_POST['gmail'];
    $haslo = $_POST['haslo'];
   

    $stmt = $conn->prepare("SELECT * FROM dane_log WHERE Login = ? AND Gmail = ? AND Haslo = ?" );
    $stmt->bind_param("sss", $login, $gmail, $haslo);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
      header("Location: admin.php");
    } else {
        echo "Nieprawidłowe dane logowania.";
    }

    $stmt->close();
}

$conn->close();
?>