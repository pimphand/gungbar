<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;

class AdminController extends Controller
{
    //
    
    public function dashboard(){

        return view('backend.dashboard');
    }
    public function news(){


        return view('backend.news.news');
    }
    public function news_create(){

        return view('backend.news.create');
    }
    public function news_content(){

        return view('backend.news_content');
    }
    public function faq_show(){
        $faq = DB::table('faq')->get();
        
        return view('frontend.faq', ['faq' => $faq  ]);
    }

    public function faq(){
        $faq = DB::table('faq')->get();
        
        return view('backend.faq', ['faq' => $faq  ]);
    }

    public function updatefaq(Request $request, $id){
        DB::table('faq')->where('faq_id', $id)->update([
            "faq" => $request->faq
        ]);

        return back()->with('success', 'Success Updated FAQ');
    }
}
