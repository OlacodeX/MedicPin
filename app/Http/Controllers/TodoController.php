<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $todos = todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day)->get();
        $data = array(
            'new_messages' => $new_messages,
            'todos' => $todos
        );
        return view('todo.index', $data);

    }
    public function tomorrow()
    {
        //
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $todos = todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day +1)->get();
        $data = array(
            'new_messages' => $new_messages,
            'todos' => $todos
        );
        return view('todo.tomorrow', $data);

    }

    public function yesterday()
    {
        //
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        $todos = todo::orderBy('created_at', 'desc')->where('user_id', auth()->user()->id)->whereDay('date', now()->day -1)->get();
        $data = array(
            'new_messages' => $new_messages,
            'todos' => $todos
        );
        return view('todo.yesterday', $data);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        return view("todo.create")->with('messages', $messages);
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
            'title' => 'required',
            'time' => 'required',
            'date' => 'required',
            ]);  
            $todo = new todo;
            $todo->title = $request->input('title');
            $todo->time = $request->input('time');
            $todo->date = $request->input('date');
            $todo->user_id = auth()->user()->id;
            $todo->user_pin = auth()->user()->pin;
            $todo->save();
            return redirect('/schedule')->with('success', 'Great!, activity scheduled');
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
    }

    public function done()
    {
        //
        $id = $_POST['id'];
        $todo = todo::where('id', $id)->first();
        $todo->status = 'done';
        $todo->save();
        return redirect('/schedule')->with('success', 'Great!, done');
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
        $todo = todo::find($id);
        $messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       $data = array(
                'todo' => $todo,
                'messages' => $messages
       );

        return view('todo.edit', $data);
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
            'title' => 'required',
            'time' => 'required',
            'date' => 'required',
            ]);  
            $todo = todo::find($id);
            $todo->title = $request->input('title');
            $todo->time = $request->input('time');
            $todo->date = $request->input('date');
            $todo->save();
            return redirect('/schedule')->with('success', 'Great!, schedule updated');
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
        $todo = todo::find($id);
        $todo->delete();
        return back();
    }
}
