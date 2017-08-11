<?php


namespace Task;

use Task\Storage\Contracts\StorageInterface;

use Task\Storage\MysqlStorageService;

use Task\Models\Task;

class TaskManager{
    
    
    protected $storage;
    
    public function __construct(StorageInterface $storage){
        
        $this->storage = $storage;
    }
    
    public function storeTask(Task $task){
        
        return $this->storage->store($task);
    }
    
    public function updateTask(Task $task){
        
        return $this->storage->update($task);
    }
    
    public function getTask($id){
        
        return $this->storage->get($id);
    }
    
    public function getTasks(){
        
        return $this->storage->getAll();
    }
    
}