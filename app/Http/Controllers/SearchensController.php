<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class SearchensController extends Controller
{
    public function search(Request $request){
    $search_text = $_GET['query'];
    $usersEn= DB::table('users')
    ->join('ens', 'ens.user_id', '=', 'users.id')
    ->where('name','LIKE','%'.$search_text .'%')->orwhere('pfs','LIKE','%'.$search_text .'%')->orwhere('cls','LIKE','%'.$search_text .'%')->paginate(30);

    return view('index2',['usersEn'=>$usersEn]);
    }
}