<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todolists=Todolist::all();
        return view('home',compact('todolists'));
    }

   
 

   
    public function store(Request $request)
    {
        $data = $request->validate([
            'content' =>'required'
        ]);
        Todolist::create($data);
        return back();
    }

    
 

    
    

    
    public function update(Request $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Todolist $todolist)
    {
        $todolist->delete();
        return back();
    }
}
