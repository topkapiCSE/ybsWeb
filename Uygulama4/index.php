<?php
require "inc/connection.php";

$result = $db->query("select * from tbl_todo");
$sonuc = $result->fetch_all();

?>
<html>

<head>

</head>


<body>

    <form action="kayit.php" method="post">
        <input name="todo">
        <input type="submit" value="Kaydet">
    </form>

<table border="1">
    <tr>
        <th>#</th>
        <th>TODO</th>
    </tr>

    <?php
        for($i=0;$i<count($sonuc);$i++){
            $id = $sonuc[$i][0];
            $value = $sonuc[$i][1];
            echo "<tr><td>$id</td><td>$value</td></tr>";
        }
    ?>

</table>

</body>

</html>