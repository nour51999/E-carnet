<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class SearchemploisController extends Controller
{
    public function search(Request $request){
       
   
        $query = $_GET['query'];
        $emplois= DB::table('classes')
        ->join('emplois','emplois.classe_id','=','classes.id')
        ->join('ens','emplois.emplois_id','=','ens.id')
        ->join('users','ens.user_id','=','users.id')
     
        
       ->get();

  
        $countCl= DB::table('ens')
        ->join('emplois', 'emplois.emplois_id', '=', 'ens.id')     
        ->join('classes','emplois.classe_id','=','classes.id')   
        ->where('nomcl','LIKE','%'.$query  .'%')
     
        ->select('nomcl')
        ->distinct()
        ->get();
      
        return view('index6',compact('emplois','countCl'));
        
        

    
  

        }

}
