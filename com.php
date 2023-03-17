  <<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email']) && isset($_POST['comment']) && isset($_POST['post_id'])) {
  $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
  $comment = filter_var($_POST['comment'], FILTER_SANITIZE_STRING);
  $post_id = $_POST['post_id'];

  $email = mysqli_real_escape_string($conn, $email);
  $comment = mysqli_real_escape_string($conn, $comment);

  $stmt = $conn->prepare("INSERT INTO com (Gmail, cont, post_id) VALUES (?, ?, ?)");
  $stmt->bind_param("ssi", $email, $comment, $post_id);

  if (!$stmt->execute()) {
    echo "Błąd: " . $stmt->error;
  } 

  $stmt->close();
  unset($_POST['email']);
}

$conn->close();
?>