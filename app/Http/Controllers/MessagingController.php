<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Messages;
use App\MessagesView;
use App\patients;
use App\Mail\MessageNotificationMail;
use Illuminate\Support\Facades\Mail;

class MessagingController extends Controller
{
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
        $messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->paginate(10);
        $new_messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
        //$omessages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'read')->get();
        
        
        $data = array(
            'messages' => $messages,
            //'omessages' => $omessages,
            'new_messages' => $new_messages
        );
          
        return view("chat.index", $data);
    }
    public function read()
    {
        //
        $latests = Listings::orderBy('created_at', 'desc')->where('type','paid')->where('status','approved')->paginate(6);
        $posts = Posts::orderBy('created_at', 'desc')->paginate(2);
       $omessages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'read')->get();
        
        
        $data = array(
            'omessages' => $omessages,
            'latests' => $latests,
            'posts' => $posts
        );
          
        return view("chat.read", $data);
    }
    public function unread()
    {
        //
        $latests = Listings::orderBy('created_at', 'desc')->where('type','paid')->where('status','approved')->paginate(6);
        $posts = Posts::orderBy('created_at', 'desc')->paginate(2);
        $messages = Messages::orderBy('created_at', 'desc')->where('receiver_id', auth()->user()->id)->where('status', 'unread')->get();
       
        
        $data = array(
            'messages' => $messages,
            'latests' => $latests,
            'posts' => $posts
        );
          
        return view("chat.unread", $data);
    }
    /**
     * Show the form for creating a new resource.
     *@param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $pin = $_GET['pin'];
        $patient = patients::where('pin', $pin)->first();
        $messages = Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->orderBy('created_at', 'desc')->get();
        $data = array(
            'patient' => $patient,
            'messages' => $messages
        );
        return view("chat.create", $data);
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
                'receiver_name' => 'required|nullable',
                'receiver_email' => 'required',
                'message' => 'required',
                //'sender' => auth()->user()->u_name,
            ]);
                     
           $message = new Messages;
           $message->receiver_id = $request->input('receiver_id');
           $message->receiver_name = $request->input('receiver_name');
           $message->receiver_pin = $request->input('receiver_pin');
           $message->sender_id = auth()->user()->id;
           $message->sender_email = auth()->user()->email;
           
           $message->message_id = $request->input('message_id');
           $message->sender_name = auth()->user()->name;
           $message->message = $request->input('message');
            //$comment->topic_id = $request->input('topic_id');
            //Save to db
         $message->save();
         
        Mail::to($request->input('receiver_email'))->send(new MessageNotificationMail($data));
         return redirect()->back()->with('success', 'Message sent');
    }
    public function store_reply(Request $request)
    {
        //
        $data = request()->validate([
            'receiver_name' => 'required',
            'receiver_email' => 'required',
            'message' => 'required',
            //'sender' => auth()->user()->u_name,
        ]);
                     // Create new post
           $message = new Messages;  
           $message->receiver_id = $request->input('receiver_id');
           $message->sender_id = auth()->user()->id;
           $message->sender_email = auth()->user()->email;
           
           $message->message_id = '0';
           $message->sender_name = auth()->user()->name;
           $message->message = $request->input('message');
            //$comment->topic_id = $request->input('topic_id');
            //Save to db
         $message->save();
         
         Mail::to($receiver->email)->send(new MessageNotificationMail($data));
         return redirect()->back()->with('success', 'Reply sent');
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
        $message = Messages::find($id);
        $messages = Messages::where('receiver_id', auth()->user()->id)->where('status', 'unread')->orderBy('created_at', 'desc')->get();
        $replies = Messages::find($id);
        //$post = Posts::find($id);
        $data = [
            'messages' => $messages,
            'message' => $message,
           // 'replies' => $replies
        ];
        //check if message is read and update db appropriately
        MessagesView::createViewLog($message);
        return view('chat.show', $data);
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
