<?php
class Todo{
  
    private $userId;
    private $id;
    private $title;
    private $completed;
     
    public function __construct($userId, $id, $title, $completed){
        $this->userId = $userId;        
        $this->id = $id;        
        $this->title = $title;        
        $this->completed = $completed;
    }

    public function __get($property){
        return $this->$property;
    }
}
?>