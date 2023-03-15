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

    echo '<div class="post">';
    echo '<img class="jpg" src="data:image/jpeg;base64,'.base64_encode($row['image_data']).'" / >';
    echo '<h2 class="title">'.$row['title'].'</h2>';
    echo '<hr class="seperator">';
    echo '<p class="text">'.$row['text'].'</p>';
    echo '<hr class="seperator2">';
    echo '<h3>Komentarze</h3>';
    require "show.php";
    echo '</div>';
    echo '<div class="comments">';
    echo '<h3>Dodaj komentarz</h3>';
    echo '<form method="POST" action="main_index.php">';
    echo '<label for="email">Adres email:</label>';
    echo '<input type="email" id="email" name="email" required>';
    echo '<br>';
    echo '<label for="comment">Komentarz:</label>';
    echo '<textarea name="comment" id="comment" rows="4" cols="50" required>';
    echo '</textarea>';
    echo '<br>';
    echo '<input type="submit" value="Dodaj komentarz">';
    echo '</form>';
    echo '</div>';

  } 
} else {
  echo "0 results";
}

$conn->close();


?>
<?php
require_once "com.php";
 ?>
