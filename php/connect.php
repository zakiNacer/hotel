<?php
$db = new PDO('mysql:dbname=relais;host=localhost;charset=UTF8','root','');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);