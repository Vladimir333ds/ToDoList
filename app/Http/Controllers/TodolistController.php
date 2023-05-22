<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;
use DB;

class TodolistController extends Controller
{
  
    public function index()
    {

        $todolists = Todolist::all();
        return view('home', compact('todolists'));
        
    }

   
    public function store(Request $request)
    {

       $data = $request -> validate([
        'content' => 'required'
       ]);

       Todolist::create($data);
       return back();

    }

    public function destroy(Todolist $todolist)
    {

       $todolist -> delete();
       return back();

    }

    public function edit($id)
    {

        $todolists = DB::table('todolists')->where('id',$id)->first();
        return view('edit', compact('todolists'));

    }

    public function update(Request $request){

        DB::table('todolists')->where('id', $request->id)->update([
            'content' => $request->content
        ]);

        return back();
    }
}
