<?php
require "inc/connection.php";
if($_POST){
    $value = $_POST["todo"];
    $db->query("insert into tbl_todo(value) values('$value')");
}

header("Location: index.php");