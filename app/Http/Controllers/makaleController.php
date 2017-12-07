<?php

namespace App\Http\Controllers;

use App\Makale;
use Dotenv\Dotenv;
use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Comment;


class makaleController extends Controller
{
      public function  getIndex()
      {
          $makaleler = Makale::all();
          return  view('welcome', compact("makaleler"));
      }
    public function makale_olustur()
{
    return view('makale_olustur');
}

    public function makale_gonder(Request $request)
    {
        $test = $request->all();
        $test['sahip_id']= 0;
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images'), $imageName);
        $test["image"] = $imageName;
        $makale = new   Makale();
        $makale->create($test);
    }

    public function makale_all()
    {
        $makaleler = Makale::all();
        return  view('makale_all' , compact("makaleler"));

    }

    public function  makaleDetay($id)
    {
        $makalem =  Makale::Find($id);
        $comments = Comment::where("makale_id", $makalem->makale_id)->get();

        return view('makale' , compact('makalem', "comments"));

    }

    public  function  makaleDuzenle($id)
    {
            $makale = Makale::find($id);
            return view("makale-duzenle" , compact('makale') );
    }

    public function makaleGuncelle  (Request $request ,  $id = null)
    {

     $validator = Validator::make($request->all(), [
         'baslik' => 'required' ,
         'yazi' => 'required'
     ]);

     if($validator->fails())
     {
          return redirect()->back()->withInput()->withErrors($validator);
     }

         $request->merge([ 'slug' =>str_slug($request->baslik) ]);
         Makale::find($id)->update($request->all());


        session()->flash('success' ,  'blog yazısı güncellendi.');
    }
}