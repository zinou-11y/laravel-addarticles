<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;
use App\Models\Article;
use Illuminate\Support\Facades\Validator;


class ArticleController extends Controller
{
    public function index(Request $Request){
        $Articles = Article::where('is_published', true)->get();
        return view('Article', ['Articles' => $Articles]);
    }
    public function Create(Request $Request){
        $date = Carbon::today()->toDateString();
        $slug= Str::slug($Request->title, '-');
        $Request->merge(['slug' => $date . '-' . $slug]);
        $validator = Validator::make($Request->all(),[
            'title' => 'required|min:5',
            'slug' => 'required',
            'category' => 'required|min:2',
            'body'=> 'required|min 5',
            ]);

            if ($validator -> fails()){

            return response()->json(['error' => 'can not add article'] , 417);
            }

            else {

            $article = new Article($Request->all());
            $article->save();
            return response()->json(['succes' => 'article added succesfully']);
            }
        }

        public function show ($slug)
        {
            $article = Article::where('slug', $slug)->first();
            return view('show', compact('Article'));
        }

    }

