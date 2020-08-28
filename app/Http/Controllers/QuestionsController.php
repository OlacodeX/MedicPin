<?php

namespace App\Http\Controllers;

use App\Messages;
use App\Questions;
use App\Answers;
use Illuminate\Http\Request;

class QuestionsController extends Controller
{
     /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
       $this->middleware('auth');
   }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $questions = Questions::orderBy('created_at', 'desc')->where('asker_id', auth()->user()->id)->get();
        $questions_all = Questions::orderBy('created_at', 'desc')->get();
        $data = array(
            'new_messages' => $new_messages,
            'questions' => $questions,
            'questions_all' => $questions_all
        );
        return view('questions.index', $data);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        return view("questions.create")->with('new_messages', $new_messages);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request, [
            'question' => 'required',
        ]); 
        
        $question = new Questions;
        $question->question  =  $request->input('question');
        $question->asker_name = auth()->user()->name;
        $question->asker_email = auth()->user()->email;
        $question->asker_id = auth()->user()->id;
        $question->asker_pin = auth()->user()->pin;
        //Save to db
        $question->save();
        //print success message and redirect
        return redirect('/dashboard')->with('success', 'Question Received!');//I just set the message for session(success).

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        
        $question = Questions::find($id);
        $answers = Answers::where('question_id',$id)->get();
        $messages = Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->orderBy('created_at', 'desc')->get();
        $replies = Messages::find($id);
        //$post = Posts::find($id);
        $data = [
            'question' => $question,
            'answers' => $answers,
            'messages' => $messages
           // 'replies' => $replies
        ];
        return view('questions.show', $data);
    }
  
    public function store_answer(){

        $this->validate($request, [
            'question_id' => 'nullable',
            'answer' => 'nullable',
            'user_email' => 'nullable',
            'user_id' => 'nullable',
            'user_pin' => 'nullable',
            ]);  
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
