<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RepconvController extends Controller
{
    public function search(Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $studentsConv = DB::table('students')
            ->join('convocations', 'convocations.co_id', '=', 'students.id')
            ->where('co_id','=',$search_text)->paginate(30);
            return view('recconv',['studentsConv'=>$studentsConv]);
            
            }else{
                $userId = Auth::id();
                $students = DB::table('students')
                ->select('students.nom', 'students.id', 'students.prenom')
                ->distinct()
                ->join('convocations', 'convocations.co_id', '=', 'students.id')
                ->join('users', 'students.parent_id', '=', 'users.id')
                ->where('users.id','=',$userId)->paginate(30);
                    return view('recconv',['students'=>$students]);
                }

}
}
