<?php

$takim = "white";

if(isset($_GET["takim"])){
    switch ($_GET["takim"]){
        case "GS" : $takim="red";break;
        case "FB" : $takim="yellow";break;
        case "BJK" : $takim="black";break;
    }
}

?>


<html>
<head>

</head>
<body bgcolor="<?php echo $takim;?>">

    <a href="?takim=GS">GS</a>
    <a href="?takim=FB">FB</a>
    <a href="?takim=BJK">BJK</a>

</body>
</html>
