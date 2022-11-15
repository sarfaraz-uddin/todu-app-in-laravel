<?php

namespace App\Http\Controllers;
use App\Models\todo;
use Illuminate\Http\Request;

class todocontroller extends Controller
{    
    public function index()
    {
        return view('welcome',['list'=>todo::all()]);
    }
    
    public function saveTodo(Request $req)
    {
        //save data to the database

        // print_r($req->all());
        $todoObj=new todo();
        $todoObj->title=$req->todo;

        $todoObj->save();
        return redirect('/');
    }
    public function delete($id)
    {
        $todoObj=todo::find($id);
        $todoObj->delete();
        return redirect('/');
    }
    public function edit($id)
    {
        $todoObj=todo::find($id);
         return view('edit',['data'=>$todoObj]);
    }
    public function updateTodo(Request $req)
    {
        //save data to the database

        // print_r($req->all());
        $todoObj=todo::find($req->id);
        $todoObj->title=$req->todo;

        $todoObj->save();
        return redirect('/');
    }
}
