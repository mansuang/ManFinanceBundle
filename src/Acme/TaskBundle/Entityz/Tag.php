<?php
// src/Acme/TaskBundle/Entity/Tag.php
namespace Acme\TaskBundle\Entity;

class Tag
{
    public $name;
	
	public function addTask(Task $task)
	{
		if (!$this->tasks->contains($task)) {
			$this->tasks->add($task);
		}
	}	
}