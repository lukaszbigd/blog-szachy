<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AdminPanel</title>
    <link rel="stylesheet" type="text/css" href="./assets/admin_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./assets/script1.js"></script>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#" id="adm-link">Administruj wpisami</a></li>
                <hr>
                <li><a href="#" id="dod-link">Dodaj wpis</a></li>
                <hr>
                <li><a href="main_index.php" id="pow">Powrót do strony głownej</a></li>
            </ul>
        </nav>
    </header>
    <div id="add-form">
        <form method="post" action="admin.php" enctype="multipart/form-data">
            <h1 class="headline">DODAWANIE WPISU</h1>
            <label for="file" class="paragraph">Dodaj Zdjęcie</label>
            <br>
            <input type="file" id="file" name="file">
            <br>
            <label for="tytul" class="paragraph">Tytuł</label>
            <br>
            <input type="text" id="tytul" name="tytul">
            <br>
            <label for="content" class="paragraph">Treść</label>
            <br>
            <input type="text" id="content" name="content">
            <br>
            <input type="submit" id="submit" name="submit" value="Dodaj Post">
        </form>
    </div>
    <div id="adm-form">
        <form>
            <h1 class="headline">USUWANIE KOMENTARZY</h1>
            <label for="email" class="paragraph">Adres email użytkownika</label>
            <br>
            <input type="email" id="email" name="email" required>
            <br>
            <label for="content" class="paragraph">ID postu</label>
            <br>
            <input type="number" id="post" name="post" required>
            <br>
            <input type="submit" id="submit" name="submit" value="Usuń komentarz">
        </form>
    </div>
</body>
<?php
require_once "posts.php"
?>
</html>
