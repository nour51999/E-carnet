<?php

namespace App\Http\Controllers;
use App\Models\Emplois;
use App\Models\Classe;
use App\Models\Ens;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class EmploisController extends Controller
{
    public function index(){

        $countCl= DB::table('classes')
        ->join('emplois','emplois.classe_id','=','classes.id')
        ->select("nomcl")
        ->distinct()
       ->get();

        $emplois= DB::table('classes')
        ->join('emplois','emplois.classe_id','=','classes.id')
        ->join('ens','emplois.emplois_id','=','ens.id')
        ->join('users','ens.user_id','=','users.id')
     
        
       ->get();

        return view('index6',compact('emplois','countCl'));
        
        
    }
    public function create()

    {
      
        $ens=DB::table('users')
        ->join('ens','ens.user_id','=','users.id')
        ->get();
        $classes=Classe::all();
        return view('emplois',compact('ens','classes'));
    }

    public function store(Request $request)
    {
             $data = $request-> input("data");
             foreach($data as $row){
                 $emplois=new Emplois();
                 $emplois -> as =  $request->get('as');
                 $emplois -> classe_id =  $request->get('classe_id');
                 $emplois -> tr =  $request->get('tr');
                 $emplois -> emplois_id =  $row['emplois_id'];
                 $emplois -> sl =  $row['sl'];
                 $emplois -> jour =  $row['jour'];
                 $emplois -> sc =  $row['sc'];
                 $emplois->save();
     
             }
             return redirect('/emplois')->with('success','Emplois Ajouter');
}

public function show($id)
{
    $userId = Auth::id();
  

  
$emplois= DB::table('classes')
->join('emplois','emplois.classe_id','=','classes.id')
->join('ens','emplois.emplois_id','=','ens.id')
->join('users','ens.user_id','=','users.id')

//    ->where('users.id', '=',$userId)
->get();
$countCl= DB::table('classes')
->join('emplois','emplois.classe_id','=','classes.id')
->select("nomcl")
->distinct()
->get();

   

    return view('emploisens',compact('emplois','countCl'));

    
 
}
public function index2(){

    $userId = Auth::id();
    
    // $emplois= DB::table('classes')
    // ->join('emplois','emplois.classe_id','=','classes.id')
    // ->join('ens','emplois.emplois_id','=','ens.id')
    // ->join('users','ens.user_id','=','users.id')
    
    // ->get();

       $emplois= DB::table('emplois')
    ->join('ens','emplois.emplois_id','=','ens.id')
    ->join('classes','emplois.classe_id','=','classes.id')
    ->join('students','students.classe_id','=','classes.id')
    ->join('users','students.parent_id','=','users.id')
    ->where('users.id', '=',$userId)
    ->get();

    
    $countCl= DB::table('classes')
    ->join('emplois','emplois.classe_id','=','classes.id')
    ->join('students','students.classe_id','=','classes.id')
    ->join('users','students.parent_id','=','users.id')
    ->where('users.id', '=',$userId)
    ->select("nomcl")
    ->distinct()
    ->get();
   
  


    return view('emploisparent',compact('emplois','countCl'));
    
    
}

    
 



}