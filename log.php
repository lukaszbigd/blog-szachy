<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Logowanie</title>
    <link rel="stylesheet" type="text/css" href="./assets/log_style.css">
</head>

<body>
    <header>
    </header>

    <div class="form-container">
        <form method="post" action="logowanie.php">
            <label for="login">Login</label>
            <input type="text" id="login" name="login" required>
            <br>
            <label for="gmail">Gmail</label>
            <input type="text" id="gmail" name="gmail" required>
            <br>
            <label for="haslo">Hasło</label>
            <input type="password" id="haslo" name="haslo" required>
            <br>
            <input type="submit" name="submit" value="Zaloguj">
        </form>
    </div>

</body>

<?php
require_once "Logowanie.php";   
?>
