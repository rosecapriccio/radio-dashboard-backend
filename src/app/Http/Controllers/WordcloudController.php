<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wordcloud;

class WordcloudController extends Controller
{
    public function index()
    {
        $wordclouds = Wordcloud::all();
        return response()->json($wordclouds, 200);
    }
    
    public function store(Request $request)
    {
        $wordcloud = new Wordcloud;
        $wordcloud->title = $request->title;
        $wordcloud->body = $request->body;
        $wordcloud->save();
    }
    
    public function show($id)
    {
        // $wordcloud = Wordcloud::find($id);
        $wordcloud = Wordcloud::where('program_id', $id)->get();
        return response()->json($wordcloud, 200);
    }
    
    public function update(Request $request, $id)
    {
        $wordcloud = Wordcloud::find($id);
        $wordcloud->title = $request->title;
        $wordcloud->body = $request->body;
        $wordcloud->save();
    }
    
    public function destroy($id)
    {
        $wordcloud = Wordcloud::find($id);
        $wordcloud->delete();
    }
}
