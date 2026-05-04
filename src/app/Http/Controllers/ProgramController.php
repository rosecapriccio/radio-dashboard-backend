<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::with('title:id,title')->get();
        return response()->json($programs, 200);
    }
    
    public function store(Request $request)
    {
        $program = new Program;
        $program->title = $request->title;
        $program->body = $request->body;
        $program->save();
    }
    
    public function show($id)
    {
        $program = Program::find($id);
        return $program;
    }
    
    public function update(Request $request)
    {
        $program = Program::find($request->id);
        $program->memo = $request->memo;
        $program->save();
        $programs = Program::with('title:id,title')->get();
        return response()->json($programs, 200);
    }
    
    public function destroy($id)
    {
        $program = Program::find($id);
        $program->delete();
    }
    
}
