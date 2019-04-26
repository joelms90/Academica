<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
  public function index()
    {  
      return Task::latest()->get();
    }
      public function all()
    {
        return Task::latest()->get();
    }

        public function show($id)
    {
        return Task::findOrFail($id);
    }

    public function store(Request $request)
    {   
        $this->validate($request, [
            'description' => 'required|max:500'
        ]);

        
        $id=$request->get('user');
        if ($id == NULL) {
        $id=$request->get('id');

        $task = Task::findOrFail($id);
        $task->description=$request->get('description');
        $task->save();
          return $task;   # code...
        }
        $user = User::findOrFail($id);
        $task=Task::create([ 'description' => request('description'), ]);
        $task->users()->attach($user);
        return $task;
    }
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return 204;
    }
     public function update(Request $request, $id)
    {
       // $company = Company::findOrFail($id);
       //  $company->update($request->all());

       //  return $company;

       $task = Task::findOrFail($id);
       $status=$task->status;
       if ($status=="Pendiente") {
       $task->status="Concluida";
       $task->save();
       return 204;
       }
       $task->status="Pendiente";
       $task->save();
        return 204;
    }
}
