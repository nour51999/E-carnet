<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Searchindex3Controller extends Controller
{
    public function search(Request $request){
   
        $search_text = $_GET['query'];
        $studentsCons = DB::table('students')
        ->join('conseils', 'conseils.con_id', '=', 'students.id')
        ->where('nom','LIKE','%'.$search_text .'%')->orwhere('prenom','LIKE','%'.$search_text .'%')->paginate(30);

        return view('index3',['studentsCons'=>$studentsCons]);

        }
}
