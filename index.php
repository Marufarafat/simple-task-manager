<?php

require_once "vendor/autoload.php";

use Task\TaskManager;

use Task\Models\Task;

use Task\Storage\MysqlStorageService;

$task = new Task;

$db = new PDO("mysql:host=localhost;dbname=task;", "root", "arafat");

$storage = new MysqlStorageService($db);

$manager = new TaskManager($storage);



//$task = $manager->getTask(9);
//
//$task->setDescription("Teaching php study");
//
//$task->setDue(new DateTime("+ 2 hours"));
//
//$task->setCompleted(false);


echo "<pre>";


//print_r($manager->updateTask($task));

//print_r($manager->getTask(9));

print_r($manager->getTasks());

//print_r($manager->storeTask($task));


//var_dump($mysqlDB->get($mysqlDB->store($task)));
