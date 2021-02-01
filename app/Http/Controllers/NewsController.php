<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
Use Carbon\Carbon;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    //
    public function index(){


        $headline = DB::table('news')
        ->join('news_category', 'news_category.category_id', '=', 'news.category_id')
        ->join('users', 'users.id', '=', 'news.user_id')
        ->where('news.status', 1)
        ->select('news.*', 'news_category.*', 'users.*')->get();

        $newsLimit4 = DB::table('news')
        ->join('news_category', 'news_category.category_id', '=', 'news.category_id')
        ->join('users', 'users.id', '=', 'news.user_id')
        ->where('news.status', 0)
        ->orderBy('news.news_id', 'DESC')
        ->limit(4)
        ->select('news.*', 'news_category.*', 'users.*')->get();

        // dd($newsLimit4);

        return view('frontend.news.index', ["headline" => $headline, "news" => $newsLimit4]);
    }

    public function list_berita_category($category){

        $news_by_category = DB::table('news')
        ->join('news_category', 'news_category.category_id', '=', 'news.category_id')
        ->join('users', 'users.id', '=', 'news.user_id')
        ->where('category', $category)
        ->orderBy('news_id', "DESC")
        ->paginate(10);

        // dd($news_by_category);

        return view('frontend.news.category', ["news" => $news_by_category]);
    }


    public function single_news($slug){

        $news = DB::table('news')
        ->join('news_category', 'news_category.category_id', '=', 'news_category.category_id')
        ->join('users', 'users.id', '=', 'news.user_id')
        ->where('news.slug', $slug)
        ->first();

        if(!$news){
            return abort(404);
        }

        return view('frontend.news.news_detail', ["news" => $news]);
    }

    public function create_news(Request $request){

        $request->validate([
            'title' => 'required|max:200',
            'category_id' => 'required',
            'content' => 'required',
            'news_image' => 'required',
            'confirm' => 'required'
        ]);

        if($request->hasFile('news_image')){

            $request->file('news_image')->move('images/content', $request->file('news_image')->getClientOriginalName() );
            
            DB::table('news')
            ->insert([

                'title' => $request->title,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
                'news_image' =>  env('APP_URL').'images/content/'.$request->file('news_image')->getClientOriginalName(),
                'slug' => Str::slug($request->title, '-').'-'.Carbon::now()->format('d-m-Y-His')
                
            ]);
            return redirect('/news/create')->with('success', 'Create News Success');

        } else {
            
            DB::table('news')
            ->insert([

                'title' => $request->title,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
                'slug' => Str::slug($request->title, '-').'-'.Carbon::now()->format('d-m-Y-His')
                
            ]);
            return redirect('/news/create')->with('success', 'Create News Success');
        }

        return redirect('/news/create')->with('warning', 'Create News Success');
    }

    public function news_data(){

        $data = DB::table('news')
        ->join('news_category', 'news_category.category_id', '=', 'news.category_id')
        ->orderBy('news.created_at', 'DESC')
        ->get();
        return array("data" => $data);
    }

    public function news_category(){
        $data = DB::table('news_category')->get();
        return $data;
    }

    public function news_delete($id){
        
        $data = DB::table('news')->where('news_id', '=', $id)->delete();

        return $data ;
    }

    public function news_update($id){
        $data = DB::table('news')->where('news_id', '=', $id)->get();
        return view('backend.news.update', ["news" => $data]);
    }

    public function news_update_post(Request $request, $id){

        $request->validate([
            'title' => 'required|max:200',
            'category_id' => 'required',
            'content' => 'required',
            'confirm' => 'required'
        ]);

        if($request->latest === "on"){

            DB::table('news')
            ->where('news_id', $id)
            ->update(["status" => 2]);
        }

        if($request->headline === "on"){
            
            DB::table('news')
            ->where('status', 1)
            ->update(["status" => 0]);

            DB::table('news')
            ->where('news_id', $id)
            ->update(["status" => 1]);

        }

        if($request->hasFile('news_image')){

            $request->file('news_image')->move('images/content', $request->file('news_image')->getClientOriginalName() );
            DB::table('news')
            
            ->where('news_id', $id)
            ->update([

                'title' => $request->title,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
                'news_image' =>  env('APP_URL').'images/content/'.$request->file('news_image')->getClientOriginalName(),
                'slug' => Str::slug($request->title, '-').'-'.Carbon::now()->format('d-m-Y-His')
                
            ]);
            return redirect('/news')->with('success', 'Update News Success');

        } else {
            
            DB::table('news')
            ->where('news_id', $id)
            ->update([

                'title' => $request->title,
                'category_id' => $request->category_id,
                'content' => $request->content,
                'user_id' => auth()->user()->id,
                'slug' => Str::slug($request->title, '-').'-'.Carbon::now()->format('d-m-Y-His')
                
            ]);
            return redirect('/news')->with('success', 'Update News Success');
        }

        return redirect('/news')->with('warning', 'Update News Success');
    }

    public function create_category(Request $request){

        DB::table('news_category')->insert(["category" => $request->category]);

        $data = array(
            "message" => "success create category",
            "result" => true
        );

        return $data ;
    }

    public function category_data(){
        $data =  DB::table('news_category')->orderBy('category_id', 'desc')->get();
        return $data;
    }

    public function category_delete($id){
        $delete = DB::table('news_category')->where('category_id', $id)->delete();
        return $delete ;
    }

    public function category_update(Request $request){

        $update = DB::table('news_category')
        ->where('category_id', $request->id)
        ->update([
            "category" => $request->category
        ]);

        return $update ;
    }

    public function news_headline(){


        $headline = DB::table('news')
        ->join('news_category', 'news_category.category_id', '=', 'news.category_id')
        ->where('news.status', 1)
        ->select('news.*', 'news_category.*')->get();
        return $headline;
    }

    public function latest_news(){

        $latest = DB::table('news')
        ->join('news_category', 'news_category.category_id', '=', 'news.category_id')
        ->where('news.status', 2)
        ->limit(6)
        ->select('news.*', 'news_category.*')->get();

        return $latest;
    }

    public function latest_unpin($id){

        $unpin = DB::table('news')
        ->where('news_id', $id)
        ->update([
            "status" => 0
        ]);
        return $unpin ;
    }

    public function berita_polpuler(){

        
        $populer = DB::table('news')
        ->join('news_category', 'news_category.category_id', '=', 'news.category_id')
        ->join('users', 'users.id', '=', 'news.user_id')
        ->where('news.status', 2)
        ->select('news.*', 'news_category.*', 'users.*')->paginate(10);

        return view('frontend.news.berita_terkini', ['populer' => $populer]);
    }


    public function news_image_content(Request $request){
  
        if ($request->hasFile('upload')) {
            $file = $request->file('upload'); 
            $fileName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
            
            $fileName = $fileName . '_' . time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('images/content/'), $fileName); 


            $ckeditor = $request->input('CKEditorFuncNum');
            $url = env('APP_URL').'images/content/'.$fileName; 
            $msg = 'Image uploaded successfully'; 

            $response = "<script>window.parent.CKEDITOR.tools.callFunction($ckeditor, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8'); 
            return $response;
        }
    }


}
