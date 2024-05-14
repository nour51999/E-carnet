<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class SearchController extends Controller
{
    public function search(Request $request){
        $search_text = $_GET['query'];
        $students= DB::table('users')
        ->join('students', 'students.parent_id', '=', 'users.id')
        ->join('classes','students.classe_id','=','classes.id')
        ->where('nom','LIKE','%'.$search_text .'%')->orwhere('prenom','LIKE','%'.$search_text .'%')->orwhere('adresse','LIKE','%'.$search_text .'%')->orwhere('name','LIKE','%'.$search_text .'%')->orwhere('adresse','LIKE','%'.$search_text .'%')->orwhere('niv','LIKE','%'.$search_text .'%')->orwhere('adresse','LIKE','%'.$search_text .'%')->orwhere('nomcl','LIKE','%'.$search_text .'%')->paginate(30);
    
        return view('index',['students'=>$students]);
        }
}