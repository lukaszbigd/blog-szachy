<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Debiutex</title>
    <link rel="stylesheet" type="text/css" href="./assets/main_ind_style.css">
</head>

<body>
    <header>
        <div class="list">
            <p>-</p>
            <div class="dropdown">
                <a href="log.php">Panel administratora</a>
            </div>
        </div>
        <h1 class="headline">Blog o tematyce szachów</h1>

    </header>
    <main>

    </main>
    <script>
        var list = document.querySelector('.list');
        var dropdown = document.querySelector('.dropdown');
        list.addEventListener('mouseover', function() {
            dropdown.style.display = 'block';
        });
        list.addEventListener('mouseout', function() {
            dropdown.style.display = 'none';
        });

    </script>
</body>
</html>
