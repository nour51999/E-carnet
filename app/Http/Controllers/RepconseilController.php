<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class RepconseilController extends Controller
{
    public function search(Request $request){
        if(isset($_GET['query'])){
            $search_text = $_GET['query'];
            $studentsCn = DB::table('students')
            ->join('conseils', 'conseils.con_id', '=', 'students.id')
            ->where('con_id','=',$search_text)->paginate(30);
            return view('recconseil',['studentsCn'=>$studentsCn]);
            
            }else{
                $userId = Auth::id();
                $students = DB::table('students')
                ->select('students.nom', 'students.id', 'students.prenom')
                ->distinct()
                ->join('conseils', 'conseils.con_id', '=', 'students.id')
                ->join('users', 'students.parent_id', '=', 'users.id')
                ->where('users.id','=',$userId)->paginate(30);
                    return view('recconseil',['students'=>$students]);
                }

}
}
