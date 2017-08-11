<?php


namespace Task\Storage\Contracts;

use Task\Models\Task;

interface StorageInterface{
    
    public function store(Task $task);
    
    public function update(Task $task);
    
    public function get($id);
    
    public function getAll();
    
}