<?php

// Should clean this up
// Maybe a tester class that looks for files in tests and attempts to execute them? 

require_once __DIR__ . '/../vendor/autoload.php';

use Src\Database;

$database = Database::getInstance();
var_dump($database::connection());
$conn = $database::connect("mysql:host=localhost;dbname=university", "root", "hotdog");
$sql = $database::query("SELECT Model FROM thinkpads");
var_dump($database::connection());
var_dump($sql);
