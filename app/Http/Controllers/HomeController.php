<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Model\Draft;
use App\Model\Product;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
/*
    public function __construct()
    {
        $this->middleware('auth');
    }
*/
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $drafts = Draft::inRandomOrder()->limit(3)->get();
        $draftsWithImages = array();
        foreach ($drafts as $key => $draft){
            $proyect = Draft::find($draft->id);
            $images=$proyect->images()->orderBy('featured','desc')->get();
            $proyect->images=$images;
            array_push($draftsWithImages,$proyect);
        }
        return view('welcome')->with(compact('draftsWithImages'));
    }

    public function drafts(){
        $drafts = Draft::inRandomOrder()->get();
        $draftsWithImages = array();
        foreach ($drafts as $key => $draft){
            $proyect = Draft::find($draft->id);
            $images=$proyect->images()->orderBy('featured','desc')->get();
            $proyect->images=$images;
            array_push($draftsWithImages,$proyect);
        }
        return view('drafts.drafts')->with(compact('draftsWithImages'));
    }

    public function products($search){
        $products = Product::where('name','like',$search.'%');

        return view('products.products')->with(compact('products'));
    }

    public function contact(Request $request){
       
        //dd($request);
        $for = "info@hidroextincion.com.ar";
        $subject = "Consultas de la Web Hidroextincion.com.ar";
        //dd($subject);
         Mail::send('email.consultaEmail',$request->all(), function($msj) use($subject,$for){
            $msj->from("info@hidroextincion.com.ar","Consultas para Hidro extinción");
            $msj->subject($subject);
            $msj->to($for);
        });       
       
        return redirect('/');
    }
}
