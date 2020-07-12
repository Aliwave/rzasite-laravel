<?php

namespace App\Http\Controllers\AdminPanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Task;
use Illuminate\Support\Facades\Storage;

class TasksController extends Controller
{
    public function index(){
        $tasks = Task::orderBy('year','asc')->get();
        return view('adminpanel.taskspage',[
            'tasks' => $tasks
        ]);
    }

    public function addTask(Request $req){
        $this->validate($req,[
            'number' => 'required|string',
            'year' => 'required|numeric',
            'math' => 'mimetypes:application/pdf',
            'ph' => 'mimetypes:application/pdf',
            'inf' => 'mimetypes:application/pdf',
        ]);
        
        $task = new Task;
        $task->olycount = $req->input('number');
        $task->year = $req->input('year');
        if($req->file('math')!=null){
            $file = $req->file('math');
            $extension = $req->file('math')->getClientOriginalExtension();
            $Name = 'RZA'.$req->input('year').'mathtasks.'.$extension;
            $task->mathtask = $Name;
            $Folder = 'public/tasks/'.$req->input('year');
            Storage::putFileAs($Folder,$file,$Name);
        }
        if($req->file('ph')!=null){
            $file = $req->file('ph');
            $extension = $req->file('ph')->getClientOriginalExtension();
            $Name = 'RZA'.$req->input('year').'phtasks.'.$extension;
            $task->phtask = $Name;
            $Folder = 'public/tasks/'.$req->input('year');
            Storage::putFileAs($Folder,$file,$Name);
        }
        if($req->file('inf')!=null){
            $file = $req->file('inf');
            $extension = $req->file('inf')->getClientOriginalExtension();
            $Name = 'RZA'.$req->input('year').'inftasks.'.$extension;
            $task->inftask = $Name;
            $Folder = 'public/tasks/'.$req->input('year');
            Storage::putFileAs($Folder,$file,$Name);
        }
        $task->save();
        return 
        redirect()->route('adminTasksPage')
            ->with('success', 'Задания добавлены.');
    }

    public function deleteTask($id){
        $task = Task::find($id);
        Storage::deleteDirectory('public/tasks/'.$task->year);
        $task->delete();
        return redirect()->route('adminTasksPage')->with('success','Задания удалены.');
    }
}
