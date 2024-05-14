<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RepnoteController extends Controller
{
    public function search(Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $studentsNote = DB::table('students')
            ->join('notes', 'notes.nt_id', '=', 'students.id')
            ->where('nt_id','=',$search_text)->paginate(30);
            return view('recnote',['studentsNote'=>$studentsNote]);
            
            }else{
                $userId = Auth::id();
                $students = DB::table('students')
                ->select('students.nom', 'students.id', 'students.prenom')
                ->distinct()
                ->join('notes', 'notes.nt_id', '=', 'students.id')
                ->join('users', 'students.parent_id', '=', 'users.id')
                ->where('users.id','=',$userId)->paginate(30);
                    return view('recnote',['students'=>$students]);
                }

}
}
