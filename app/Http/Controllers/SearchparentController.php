<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class SearchparentController extends Controller
{
    public function search(Request $request){
        $search_text = $_GET['query'];
        $parens= DB::table('users')
        ->join('parens', 'parens.user_id', '=', 'users.id')
        ->where('name','LIKE','%'.$search_text .'%')->orwhere('prp','LIKE','%'.$search_text .'%')->orwhere('adresse','LIKE','%'.$search_text .'%')->paginate(30);
    
        return view('indexparent',['parens'=>$parens]);
        }
}

