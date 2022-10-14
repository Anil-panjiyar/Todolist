<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
 use App\Models\Items;

class ItemController extends Controller
{  function showItem(){
    // $items = Items::all();
    // return view('todo',['items'=>$items ]);
    return view('todo');
}
    
}
