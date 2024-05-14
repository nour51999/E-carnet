<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
 
class SearchconvController extends Controller
{
    function search(Request $request){
if(isset($_GET['query'])){
$search_text = $_GET['query'];
$convocations= DB::table('convocations')->where('nom','LIKE','%'.$search_text .'%')->orwhere('pfs','LIKE','%'.$search_text .'%')->orwhere('cls','LIKE','%'.$search_text .'%')->orwhere('prenom','LIKE','%'.$search_text .'%')->paginate(20);
return view('index7',['convocations'=>$convocations]);

   
}else{

        return view('index7');
    }
}
}