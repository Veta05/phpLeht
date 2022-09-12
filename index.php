<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Liza PHP lehestik</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
    <script src="js/legoGrinch.js"></script>
</head>
<body>
<?php
    include ('header.php');
?>
<?php
    include ('navigation.php');
?>
<main>
    <?php
        if (isSet($_GET["leht"])){ // проверяет что у нас есть клик на определенный запроc
            include ('content/'.$_GET["leht"].'.php');
        } else {
            echo "Siia tuleb sisu";
        }
    ?>
</main>
<?php
    include ('footer.php');
?>
</body>
</html>
