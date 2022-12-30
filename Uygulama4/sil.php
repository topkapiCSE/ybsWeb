<?php

$id = trim($_GET["id"]);
if(is_numeric($id)){
    require "inc/connection.php";
    $db->query("delete from tbl_todo where id=$id");
}

header("Location: index.php");