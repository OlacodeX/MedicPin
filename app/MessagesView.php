<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MessagesView extends Model
{
    //
    public static function createViewLog($message) {
        $MessagesViews = Messages::find($message->id);
        $MessagesViews->status = 'read';
        ///$listingViews->titleslug = $listing->title;
        ///$listingViews->url = \Request::url();
        //$listingViews->session_id = \Request::getSession()->getId();
        //$listingViews->user_id = (\Auth::check())?\Auth::id():null; //this check will either put the user id or null, no need to use \Auth()->user()->id as we have an inbuild function to get auth id
        //$listingViews->ip = \Request::getClientIp();
        //$listingViews->agent = \Request::header('User-Agent');
        $MessagesViews->save();//please note to save it at least, very important
    }
}
