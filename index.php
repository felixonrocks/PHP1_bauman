
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include "lib/data.php";?>

    <title>CV - <?php print $name[0];?></title>
    <!-- CSS -->
    <link href="assets/css/style.css" rel="stylesheet">
    <!-- Load Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,100,300italic,300,100italic,400italic,500,500italic,700,700italic&amp;subset=latin,cyrillic' rel='stylesheet'>
    <!-- Icons -->
    <link href="assets/css/ionicons.css" rel="stylesheet">
</head>
<body>
<!-- Container -->
<div class="container roboto bcg-green">
    <!-- Wrapper -->
    <div class="wrapper bcg-white">

        <header>
            <nav>
                <ul>
                    <li><a href="/?p=main" class="lnk">Главная</a></li>
                    <li><a href="/?p=resume" class="lnk">Резюме</a></li>
                    <li><a href="/?p=portfolio" class="lnk">Портфолио</a></li>
                    <li><a href="/?p=contacts" class="lnk">Контанты</a></li>
                </ul>

            </nav>


<?php include "pages/main.php";?>

        <footer>
            <small>© <?php echo $year, " ", $name[0], " ", $name[1];?></small>
        </footer>
    </div>
    <!-- end Wrapper -->
</div>
<!-- end Container -->
<!-- JS -->
<script src="assets/js/jQuery.js"></script>
<script src="assets/js/script.js"></script>
</body>
</html>
© 2022 GitHub, Inc.
Terms
Privacy
Security
Status
Docs
Contact GitHub
Pricing
API
Training
Blog
About
