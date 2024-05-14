<?php

namespace App\Http\Controllers;

use App\Models\Note;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class SearchindexnoteController extends Controller
{
    public function search(Request $request){
        $userId = Auth::id();
   
        $query = $_GET['query'];

        $studentsNT = DB::table('students')
        ->join('notes', 'notes.nt_id', '=', 'students.id')     
        ->join('classes','students.classe_id','=','classes.id')   
        ->where('nom','LIKE','%'.$query  .'%')
        -> where('ensen_id', $userId)
        ->select('as','tr','mat','nom','prenom','niv','nomcl','cc','dvr','exm','mt','dt', 'notes.id as noteId')
        ->paginate(30);
         
      
        return view('indexnote',[
        'studentsNT'=>$studentsNT,
        'noResult' => $userId

    
    ]);

        }
    }
       