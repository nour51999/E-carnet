<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Searchindex5Controller extends Controller
{
    public function search(Request $request){
   
        $search_text = $_GET['query'];
        $studentsCon = DB::table('students')
        ->join('convocations', 'convocations.co_id', '=', 'students.id')
        ->where('nom','LIKE','%'.$search_text .'%')->orwhere('prenom','LIKE','%'.$search_text .'%')->paginate(30);

        return view('index5',['studentsCon'=>$studentsCon]);

        }
}
