<?php

require_once "com.php";
?>
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
$sql2 = "SELECT * FROM com";
$result2 = $conn->query($sql2);

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {

    echo '<div class="post">';
    echo '<img class="jpg" src="data:image/jpeg;base64,' . base64_encode($row['image_data']) . '" / >';
    echo '<h2 class="title">' . $row['title'] . '</h2>';
    echo '<hr class="seperator">';
    echo '<p class="text">' . $row['text'] . '</p>';
    echo '<hr class="seperator2">';
    echo '<h3>Komentarze</h3>';
    if ($result2->num_rows > 0) {
      foreach ($result2 as $row2) {
             if($row['Post_ID']==$row2['Post_ID']){
             echo '<h2 class="email">' . $row2['Gmail'] . '</h2>';
             echo '<h2 class="conntent">' . $row2['cont'] . '</h2>';
             }
      }
}

    echo '<div class="comments">';
    echo '<h3>Dodaj komentarz</h3>';
    echo '<form method="POST" action="main_index.php">';
    echo '<label for="email">Adres email:</label>';
    echo '<input type="email" id="email" name="email" required>';
    echo '<br>';
    echo '<label for="comment">Komentarz:</label>';
    echo '<textarea name="comment" id="comment" rows="4" cols="50" required></textarea>';
    echo '<br>';
    // Ukryte pole POST_ID
    echo '<input type="hidden" name="post_id" value="' . $row['Post_ID'] . '">';
    echo '<input type="submit" value="Dodaj komentarz">';
    echo '</form>';
    echo '</div>';
    echo '</div>';

  }
} else {
  echo "0 results";
}

$conn->close();


?>