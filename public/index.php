<?php
require_once '../vendor/autoload.php';

echo "Hello from Guestbook!";

/*
$array = [1, "apple", 2, "foo", "bar"];
var_dump($array);
dump($array);
*/

$database = new Medoo\Medoo ([
    'database_type' => 'sqlite',
    'database_file' => '../storage/database.db'
]);

dump($database);
