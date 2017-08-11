<?php  


namespace Task\Storage;

use Task\Storage\Contracts\StorageInterface;

use Task\Models\Task;

use PDO;

class MysqlStorageService implements StorageInterface{
    
    protected $db;
    
    public function __construct(PDO $db){
        $this->db = $db;
    }
    
    public function store(Task $task){
        
        $stm = $this->db->prepare("INSERT INTO taskmanager (descriptions, due, completed) VALUES (:descriptions, :due, :completed);");
        
        $done = $stm->execute($this->buildColumn($task));
        
        
        return $done ? $this->get($this->db->lastInsertId()) : 0;       
        
    }
    
    public function update(Task $task){
        
        $stm = $this->db->prepare("UPDATE taskmanager SET descriptions = :descriptions, due = :due, completed = :completed WHERE id = :id;");
        
        $done = $stm->execute($this->buildColumn($task, array(
            "id"                => (int) $task->getID(),
        )));
        
        return $done ? $this->get((int) $task->getID()) : 0; 
    }
    
    public function get($id){
        
        $stm = $this->db->prepare("SELECT * FROM taskmanager WHERE id = :id;");
        
        $stm->setFetchMode(PDO::FETCH_CLASS, Task::class);
        
        $stm->execute(array(
            "id" => $id,
        ));
        
        return $stm->fetch();
        
    }
    
    public function getAll(){
        
        $stm = $this->db->prepare("SELECT * FROM taskmanager;");
        
        $stm->setFetchMode(PDO::FETCH_CLASS, Task::class);
        
        $stm->execute();
        
        return $stm->fetchAll();
    }
    
    protected function buildColumn(Task $task, array $additional = array()){
        
        return array_merge(array(
            "descriptions"      => $task->getDescription(),
            "due"               => $task->getDue()->format("Y-m-d H:i:s"),
            "completed"         => $task->getCompleted() ? 1 : 0,
        ), $additional);
    }
}





















