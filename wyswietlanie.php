<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo '<img src="data:image/jpeg;base64,'.base64_encode($row['image_data']).'" / >';
    echo '<h2>'.$row['title'].'</h2>';
    echo '<p>'.$row['text'].'</p>';
  
  } 
} else {
  echo "0 results";
}
$conn->close();
?>
