<?php

namespace App\Http\Controllers;

use App\Messages;
use App\Questions;
use App\Answers;
use App\User;
use App\Mail\QuestionNotificationMail;
use Illuminate\Support\Facades\Mail;
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
        $questions = Questions::orderBy('created_at', 'desc')->where('asker_id', auth()->user()->id)->paginate(10);
        $questions_al = Questions::orderBy('created_at', 'desc')->where('asker_id', !auth()->user()->id)->paginate(10);
        $questions_all = Questions::orderBy('created_at', 'desc')->paginate(10);
        $data = array(
            'new_messages' => $new_messages,
            'questions' => $questions,
            'questions_all' => $questions_all,
            'questions_al' => $questions_al
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
        $data = request()->validate([
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
         $doctors = User::where('role', 'Doctor')->select('email')->pluck('email');
        Mail::to($doctors)->send(new QuestionNotificationMail($data));
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
        $new_messages = Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->orderBy('created_at', 'desc')->get();
        $replies = Messages::find($id);
        //$post = Posts::find($id);
        $data = [
            'question' => $question,
            'answers' => $answers,
            'new_messages' => $new_messages
           // 'replies' => $replies
        ];
        return view('questions.show', $data);
    }
  
    public function store_answer(Request $request){

        $this->validate($request, [
            'question_id' => 'nullable',
            'answer' => 'nullable',
            'user_email' => 'nullable',
            'user_id' => 'nullable',
            'user_pin' => 'nullable',
            ]);  
            $answer = new Answers;
            $answer->answer =  $request->input('answer');
            $answer->user_id = auth()->user()->id;
            $answer->user_email = auth()->user()->email;
            $answer->question_id = $request->input('question_id');
            $answer->user_pin = auth()->user()->pin;
            //Save to db
            $answer->save();
            //print success message and redirect
            return redirect()->back()->with('success', 'Answer Received!');//I just set the message for session(success).
    

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
        $question = Questions::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = [
            'question' => $question,
            'new_messages' => $new_messages
           // 'replies' => $replies
        ];
        return view('questions.edit', $data);
    }
    
    public function edit_answer()
    {
        //
        $id = $_POST['id'];
        $answer = Answers::find($id);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $data = [
            'answer' => $answer,
            'new_messages' => $new_messages
           // 'replies' => $replies
        ];
        return view('questions.editt', $data);
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
        $this->validate($request, [
            'question' => 'nullable',
            ]);  
            $question = Questions::find($id);
            $question->question =  $request->input('question');
            //Save to db
            $question->save();
            //print success message and redirect
            return redirect('/questions')->with('success', 'Question updated!');//I just set the message for session(success).
    
    }
    public function update_answer(Request $request)
    {
        //
        $this->validate($request, [
            'answer' => 'nullable',
            ]);  
            $answer = Answers::find($request->input('id'));
            $answer->answer =  $request->input('answer');
            //Save to db
            $answer->save();
            //print success message and redirect
            return redirect('/questions')->with('success', 'Answer updated!');//I just set the message for session(success).
    
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
        $question = Questions::find($id);
        $question->delete();
         return redirect()->back()->with('success', 'Question Deleted.');
         
    }
    public function destroyy()
    {
        //
        $id = $_POST['id'];
        $answer = Answers::find($id);
       $answer->delete();
        return redirect()->back()->with('success', 'Answer Deleted.');
        
    }
}
