<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreReplyQuestion;
use App\Models\Question;
use App\Models\ReplyQuestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ForumController extends Controller
{
    public function index()
    {
        $questions = Question::with('user')->paginate(5);

        return view('forum.index', compact('questions'));
    }

    public function show(string $id)
    {
        if(! $question = Question::with(['user','replies'])->find($id)){
            abort(404);
        }

        return view('forum.show', compact('question'));
    }
    

    public function reply(StoreReplyQuestion $request)
    {
        if(! $question = Question::find($request->question_id)){
            abort(404);
        }

        ReplyQuestion::create([
            'user_id' => Auth::id(),
            ...$request->validated()
        ]);

        return redirect()->back()->with('success', 'Pergunta respondida com sucesso!');
    }
}
