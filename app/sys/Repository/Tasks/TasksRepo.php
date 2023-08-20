<?php

namespace App\sys\Repository\Tasks;

use App\sys\Model\Tasks;

class TasksRepo
{

    private $task;

    public function __construct()
    {
        $this->task = new Tasks();
    }

    public function add($data)
    {
        $this->task->title = $data['title'];
        $this->task->description = $data['description'];
        return $this->task->save();
    }

    public function updated($data,$id)
    {
        $t = $this->task->find($id);
        $t->title = $data['title'];
        $t->description = $data['description'];
        $t->completed = $data['completed'];
        return $t->save();
    }

    public function get()
    {
        return $this->task->orderBy('updated_at', 'desc')->get();
    }

    public function getByid($id)
    {
        return $this->task->find($id);
    }
}
