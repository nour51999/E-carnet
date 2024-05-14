<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class RepdevoirController extends Controller
{
    public function search(Request $request){
    if(isset($_GET['query'])){
        $search_text = $_GET['query'];
        $students = DB::table('classes')
        ->join('devoirs','devoirs.classe_id','=','classes.id')
        
        ->where('nomcl','=',$search_text)->paginate(30);
        return view('recdevoir',['devoirs'=>$students]);
        
        }else{
        
                return view('recdevoir');
            }

}  
}
