<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email']) && isset($_POST['comment'])){
  $email = $_POST['email'];
  $comment = $_POST['comment'];

  $stmt = $conn->prepare("INSERT INTO com (Gmail, cont) VALUES (?, ?)");
  $stmt->bind_param("ss", $email, $comment);
  
if ($stmt->execute()) {
    header('refresh: 1;');
    } else {
        echo "Błąd: " . $sql . "<br>" . $conn->error;
    }
    

  $stmt->close();
}

$conn->close();
?>
