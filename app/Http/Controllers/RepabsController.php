<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RepabsController extends Controller
{
    public function search(Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $studentsAbs = DB::table('students')
            ->join('absences', 'absences.abs_id', '=', 'students.id')
            ->where('abs_id','=',$search_text)->paginate(30);
            return view('recabs',['studentsAbs'=>$studentsAbs]);
            
            }else{
                $userId = Auth::id();
                $students = DB::table('students')
                ->select('students.nom', 'students.id', 'students.prenom')
                ->distinct()
                ->join('absences', 'absences.abs_id', '=', 'students.id')
                ->join('users', 'students.parent_id', '=', 'users.id')
                ->where('users.id','=',$userId)->paginate(30);
                    return view('recabs',['students'=>$students]);
                }

}
}
