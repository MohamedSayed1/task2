<?php

namespace App\Http\Controllers;

use App\sys\Services\Tasks\TaskServices;
use Illuminate\Http\Request;
Use Alert;

class TaskController extends Controller
{
    private $task;

    public function __construct()
    {
        $this->task = new TaskServices();
    }

    public function index()
    {

        $tasks = $this->task->get();
        return view('admin.task.index')
            ->with('tasks',$tasks);
    }

    public function add(Request $request)
    {
        if($this->task->add($request->all()))
        {
            toast('تم اضافه عميل بنجاح','success');
            return redirect('dashboard/client');
        }

        toast('برجاء التاكد من البيانات واعاده المحاوله مره اخري ','error');
        $errors = $this->task->errors();
        return redirect()->back()->withInput($request->all())->withErrors($errors);
    }

    public function updatedView($id = 0)
    {
        $client = $this->task->getByid($id);

        if($client != null)
            return view('admin.customer.updated')->with('client',$client);



        toast('هذا العميل غير موجود او تم مسحه ..!','error');
        return redirect()->back();
    }

    public function updated(Request $request,$id)
    {

        if($this->task->updated($request->all(),$id))
        {
            toast('تم تعديل عميل بنجاح','success');
            return redirect('dashboard/client');
        }

        toast('برجاء التاكد من البيانات واعاده المحاوله مره اخري ','error');
        $errors = $this->task->errors();
        return redirect()->back()->withInput($request->all())->withErrors($errors);
    }


}
