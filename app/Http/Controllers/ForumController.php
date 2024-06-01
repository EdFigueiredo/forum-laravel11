<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function index()
    {
        $questions = Question::with('user')->paginate(5);

        return view('forum.index', compact('questions'));
    }

    public function show(string $id)
    {
        if(! $question = Question::find($id)){
            abort(404);
        }

        return view('forum.show', compact('question'));
    }
}
