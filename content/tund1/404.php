<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h2>Genereeri kahe FOR tsükkliga 10x10 korrutustabel.
    Korrutustabel peab olema HTML tabeli sees.<br>
    Korrutustabelis peab olema esimesel real ja veerul numbrid 1-10.<br>
    Teisel real esimese rea ja veeru korrustis jne.</h2>
<?php
$cols=10;
$rows=10;
?>
<style>
    table { border: 0; }
    td { border: 2px solid; padding: 7px; text-align: center; }
</style>
<table>
<?php
    for ($tr = 1; $tr <= $rows; $tr++)
    {
        echo '<tr>';
        for($td = 1; $td <= $cols; $td++)
        {
            echo '<td>', $tr * $td, '</td>';
        }
        echo '</tr>';
    }
?>
</table>
</body>
</html>
