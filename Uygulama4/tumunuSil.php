<?php

require "inc/connection.php";
$db->query("delete from tbl_todo where 1=1");

header("Location: index.php");