<?php

namespace Task\Models;

use DateTime;

class Task{
    
    protected $id;
    
    protected $descriptions;
    
    protected $due;
    
    protected $completed = false;
    
    public function getID(){
        return $this->id;
    }
    
    public function setDescription($descriptions){
        $this->descriptions = $descriptions;
    }
    
    public function getDescription(){
        return $this->descriptions;
    }
    
    public function setDue(DateTime $due){
        $this->due = $due;
    }
    
    public function getDue(){
        
        if(!$this->due instanceof DateTime){
            return new DateTime($this->due);
        }
        
        return $this->due;
    }
    
    public function setCompleted($completed){
        $this->completed = $completed;
    }
    
    public function getCompleted(){
        return (bool) $this->completed;
    }
    
    
}