<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>AdminPanel</title>
    <link rel="stylesheet" type="text/css" href="./assets/adm_style.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="admin2.php" id="adm-link">Administruj wpisami</a></li>
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
    </div>
</body>
</html>


<?php
require_once "posts.php"
?>