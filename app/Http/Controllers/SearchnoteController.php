<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchnoteController extends Controller
{
    function search(Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $students= DB::table('classes')
            ->join('students', 'students.classe_id', '=', 'classes.id')
            ->where('nomcl','LIKE','%'.$search_text .'%')->paginate(30);
            
            return view('note',['students'=>$students]);
        }
        }
}
