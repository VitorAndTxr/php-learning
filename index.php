<?php
require 'function.php';
require 'Task.php';

$pdo = connectToDb();
$tasks = fetchAllTasks($pdo);
var_dump($tasks);
require 'index.view.php';
