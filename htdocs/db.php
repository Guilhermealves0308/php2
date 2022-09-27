<?php
header('Content-Type: text/html; charset=utf-8');
date_default_timezone_set('America/Sao_Paulo');

$db = array(
    "hostname" => "localhost",
    "database" => "cyberbank",
    "username" => "root",
    "password" => ""
);
$conn = new mysqli($db['hostname'], $db['username'], $db['password'], $db['database']);

  ?>