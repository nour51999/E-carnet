<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchuserController extends Controller
{
    public function search(Request $request){
        $search_text = $_GET['query'];
        $users= DB::table('users')
       
        ->where('name','LIKE','%'.$search_text .'%')->orwhere('email','LIKE','%'.$search_text .'%')->paginate(30);
    
        return view('ListeUser',['users'=>$users]);
        }
}
