<?php
/*
$dizi = [
        "ahmet" => [
            10,20,["a"=>13]
        ],
    ];

echo $dizi["ahmet"][1];
*/

if(isset($_GET["isim"]))
    echo "(GET)Hoşgeldiniz " . $_GET["isim"];

if(isset($_POST["isim"]))
    echo "(POST)Hoşgeldiniz " . $_POST["isim"];

?>

<html>
<head>

</head>
<body>
<br>
<h3>POST Example</h3>
<form action="test.php" method="post">
    <input name="isim">
    <input type="submit" value="gonder">
</form>

<h3>LINK Example</h3>
<a href="test.php?isim=Emre">Emre</a>
<a href="test.php?isim=Ahmet">Ahmet</a> <hr>


<h3>GET Example</h3>
<form action="test.php" method="get">
    <input name="isim">
    <input name="soyisim">
    <input type="submit" value="gonder">
</form>





</body>
</html>
