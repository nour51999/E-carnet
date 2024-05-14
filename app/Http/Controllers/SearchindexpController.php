<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class SearchindexpController extends Controller
{
    
    public function search(Request $request){
        $userId = Auth::id();
   
        $query = $_GET['query'];

        $studentsAB = DB::table('students')
        ->join('absences', 'absences.abs_id', '=', 'students.id')    
        ->join('classes','students.classe_id','=','classes.id')   
        ->where('nom','LIKE','%'.$query  .'%')    
        ->where('nom','LIKE','%'.$query  .'%')
        -> where('ensen_id', $userId)
        
        ->paginate(30);
         
      
        return view('indexp',[
        'studentsAB'=>$studentsAB,
        'noResult' => $userId

    
    ]);

        }
    }