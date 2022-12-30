<?php

$db = new mysqli("localhost", "root", "");
if(!$db->select_db("ybs")){
    die("baglanti hatasi");
}
