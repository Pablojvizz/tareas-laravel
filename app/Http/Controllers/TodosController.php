<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;


class TodosController extends Controller
{
    public function store(Request $request){
        $request->validate([
            'title' => 'required|min:3'
        ]);
        $todo = New Todo;
        $todo->title = $request->title;
        $todo->save();

        return redirect()->route('todos')->with('success','Tarea creada correctamente.');

    }
}
