<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>401 / Andmed Massiivis</title>
</head>
<body>
<?php
//andmed massiivis
$data = [
    "nimi" => "Jelizaveta Aia",
    "aadress"=> "Sõpruse pst, 184 Tallinn",
    "pilt" => "pilt.png",
    "koduleht" => "https://www.tthk.ee/"];
?>
<h2> Ülesanne 1 / Andmed massiivist</h2>
<p>
    <strong>
        <?=$data["nimi"]?>
    </strong>
</p>
<p>
    <i>
        <?=$data["aadress"]?>
    </i>
</p>
<img src ="<?=$data["pilt"]?>" alt="pildike">
<br>
<a href="<?=$data["koduleht"]?>" target="_blank">TTHK koduleht</a>

<h2>Ülesanne 1 massiv array funktiooniga</h2>
<?php
$array=array("Jelizaveta Aia", "Sõpruse pst 184", "pilt.png", "www.tthk.ee");

echo "<b>$array[0]</b>";
echo "<br>";
echo "<i>$array[1]</i>";
echo "<br>";
echo "<img src='$array[2]' alt='pildike2'>";
echo "<br>";
echo "<a href='https://$array[3]'>Koduleht</a>";
?>
</body>
</html>
