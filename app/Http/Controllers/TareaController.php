<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Tarea;

class TareaController extends Controller
{
    public function index(Request $request)
    {
      $tareas=Tarea::all();
 
        $estados = DB::table('estados')
            ->select('estados.*')
            ->paginate(10);
        return view('tarea.listar',compact('tareas'), [ 'estados' => $estados]);
    }
}
