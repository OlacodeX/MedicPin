<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Calendar;
use App\Event;

class EventsController extends Controller
{
    public function index()
    {
        
        if(request()->ajax()) 

        {



         $start = (!empty($_GET["start_date"])) ? ($_GET["start_date"]) : ('');

         $end = (!empty($_GET["end_date"])) ? ($_GET["end_date"]) : ('');



         $dat = Event::whereDate('start_date', '>=', $start)->whereDate('end_date',   '<=', $end)->get(['id','title','start_date', 'end_date']);

         return Response::json($data);

        }

        return view('r');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
