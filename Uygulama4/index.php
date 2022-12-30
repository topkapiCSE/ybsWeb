<?php
require "inc/connection.php";

$result = $db->query("select * from tbl_todo");
$sonuc = $result->fetch_all();
?>
<html>
<head>
    <style>
        .ortala{
            text-align: center;
        }
    </style>

</head>

<body>
<div class="ortala">
    <form action="kayit.php" method="post">
        <input name="todo">
        <input type="submit" value="Kaydet">
    </form>
<table border="1" align="center">
    <tr>
        <th>#</th>
        <th>TODO</th>
        <th>Sil</th>
    </tr>
    <?php
        for($i=0;$i<count($sonuc);$i++){
            $id = $sonuc[$i][0];
            $value = $sonuc[$i][1];

            $sil = "<a href='sil.php?id=$id'><img width='25px' src='img/delete.png'></a>";

            echo "<tr><td>$id</td><td>$value</td><td>$sil</td></tr>";
        }
    ?>

</table>
    <a href="tumunuSil.php">Tümünü Sil</a>

</div>

</body>

</html>