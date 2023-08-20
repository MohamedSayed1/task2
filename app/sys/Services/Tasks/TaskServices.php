<?php

namespace App\sys\Services\Tasks;

use App\sys\Repository\Tasks\TasksRepo;
use App\sys\Services;
use Validator;

class TaskServices extends Services
{

    private $task;

    public function __construct()
    {
        $this->task = new TasksRepo();
    }

    public function add($data)
    {
        // valid
        $rules = [
            'title' =>'required|max:250|unique:task_manger,title',
            'description' =>'required',
        ];
        $validator = Validator::make($data,$rules);
        if($validator->fails())
        {
            $this->setError($validator->errors());
            return false;
        }

        if($this->task->add($data))
            return  true;

        return  false;
    }
    public function updated($data,$id)
    {
        $check = $this->getByid($id);
        if(!empty($check))
        {
            // valid
            $rules = [
                'title' =>'required|max:600|unique:task_manger,title,'.$id,
                'description' =>'required'

            ];
            $validator = Validator::make($data,$rules);
            if($validator->fails())
            {
                $this->setError($validator->errors());
                return false;
            }

            if($this->task->updated($data,$id))
                return  true;

            return  false;
        }
        return  false;
    }

    public function get()
    {
        return $this->task->get();
    }

    public function getByid($id)
    {
        return $this->task->getByid($id);
    }
}
