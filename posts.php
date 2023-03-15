<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $target_dir = "uploads/";
    
    if (empty($_FILES['file']['tmp_name'])) {
        die("Nie wybrano pliku");
    }
    
    $zdj = $_FILES['file']['tmp_name'];
    $zdj_name = $_FILES['file']['name'];
    $zdj_data = file_get_contents($zdj);
    $tytul = $_POST['tytul'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO posts (title, text, image_name, image_data) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $tytul, $content, $zdj_name, $zdj_data);

    if ($stmt->execute() === TRUE) {
        echo "Dodano post!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adminpanel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $target_dir = "uploads/";
    
    if (empty($_FILES['file']['tmp_name'])) {
        die("Nie wybrano pliku");
    }
    
    $zdj = $_FILES['file']['tmp_name'];
    $zdj_name = $_FILES['file']['name'];
    $zdj_data = file_get_contents($zdj);
    $tytul = $_POST['tytul'];
    $content = $_POST['content'];

    $stmt = $conn->prepare("INSERT INTO posts (title, text, image_name, image_data) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $tytul, $content, $zdj_name, $zdj_data);

    if ($stmt->execute() === TRUE) {
        echo "Dodano post!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
>>>>>>> b18f2bf4a9f4ba8bcc05df964bab7becd6791feb
?>