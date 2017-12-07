<?php

namespace App\Http\Controllers;

use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class commentController extends Controller
{
    public function yorum_olustur()
    {
        return view('makale_detay');
    }

    public function yorumgonder(Request $request)

    {
        $test1 = $request->all();
        //$test1['sahip_id']=  Auth::user()->id;
        $comment = new Comment();
        $comment->create($test1);
    }

    public function comment_all()
    {
     $comments = Comment::all();
     return view('makale_detay', compact("comments"));
    }

    }