<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Timediv;

class TimedivController extends Controller
{
    public function index()
    {
        $timedivs = Timediv::all();
        return response()->json($timedivs, 200);
    }
    
    public function store(Request $request)
    {
        $timediv = new Timediv;
        $timediv->title = $request->title;
        $timediv->body = $request->body;
        $timediv->save();
    }
    
    public function show($id)
    {
        $timediv = Timediv::where('program_id', $id)->get();
        return response()->json($timediv, 200);
    }
    
    public function update(Request $request, $id)
    {
        $timediv = Timediv::find($id);
        $timediv->title = $request->title;
        $timediv->body = $request->body;
        $timediv->save();
    }
    
    public function destroy($id)
    {
        $timediv = Timediv::find($id);
        $timediv->delete();
    }
}
