<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Post;
//use App\Contact;

class PagesController extends Controller
{
    //
    public function index(){
       // $posts = Post::orderBy('created_at', 'desc')->paginate(2);
        //$portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(12);

       // $data = array(
         //   'posts' => $posts,
           // 'portfolios' => $portfolios
        //);
        return view('pages.home');//here i can return any page i want.
    }
     
    public function reg_patient(){
       
        return view("auth.registerpatient");
    }

    public function reachout(){
        return view("pages.contact");
    }
    public function hireus(){
        return view("pages.hireform");
    }
    public function pricelist(){
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(20);
        
        return view("pages.pricelist")->with('portfolios', $portfolios);
    }
    public function services(){
        $portfolios = Portfolio::orderBy('created_at', 'desc')->paginate(20);
        
        return view("pages.servicelist")->with('portfolios', $portfolios);
    }
}
