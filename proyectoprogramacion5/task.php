<?php

class tasks

{
public $name;
public $description;
public $author; 
public $state;  

public function __construct($name,$description,$author,$state);
{
    $this->name=$name;
    $this->description=$description;
    $this->author=$author;
    $this->state=$state; 
    
}
?>