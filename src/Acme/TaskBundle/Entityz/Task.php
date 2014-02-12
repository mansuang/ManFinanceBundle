<?php
// src/Acme/TaskBundle/Entity/Task.php
namespace Acme\TaskBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;

class Task
{
    protected $description;

    protected $tags;

    public function __construct()
    {
        $this->tags = new ArrayCollection();
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getTags()
    {
        return $this->tags;
    }
	
    public function addTag(Tag $tag)
    {
		$tag->addTask($this);
		
        $this->tags->add($tag);
    }

    public function removeTag(Tag $tag)
    {
        // ...
    }	
}