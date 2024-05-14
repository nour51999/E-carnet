<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ens;
use App\Models\User;

use Illuminate\Support\Facades\DB;
class EnsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usersEn= DB::table('users')
        ->join('ens','ens.user_id','=','users.id')
       ->get();

        return view('index2',compact('usersEn'));
        
       
       
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $ens=DB::table('users')
        // ->join('ens','ens.user_id','=','users.id')
        // ->where('role_id','=','enseignant')
        // ->get();
        // return view('create2')->with('st',$ens);

        $ens=User::all();
        return view('ajouterens')->with('st',$ens);
     
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'user_id'=>'required|max:255',
            
            'tel'=>['required','max:255','min:5','unique:ens'],
            'adresse'=>'required|max:255',
            'pfs'=>'required|max:255',
            'cls'=>'required',
            
     
            ]);
                
            $ens=Ens::create($validateData);
            return redirect('/ens');

       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    
    {
        // $ensm=Ens::find($id)
        // ->join('users','ens.user_id','=','users.id')
        // ->get();
        // return view('show2',compact('ensm'));


        $ensm= DB::table('users')
        ->join('ens','ens.user_id','=','users.id')
        ->where('ens.id','=',$id)
        ->first();
        return view('show2',compact('ensm'));


    }
  
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        // $ens= DB::table('users')
        // ->join('ens','ens.user_id','=','users.id')
        // ->where('ens.id','=',$id)
        // ->first();
        // return view('edite',compact('ens'));

        $users=User::all();
        $ens= DB::table('users')
        ->join('ens','ens.user_id','=','users.id')
     
        ->where('ens.id','=',$id)
        // ->select('mat','nom','prenom','date','lieu','adresse','niv','classe_id','parent')
        ->first(['users.*', 'ens.*']);
        return view('edite',compact('ens','users'));


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ens=Ens::find($id);
           
            
           $ens->user_id =$request->user_id;
            $ens->  adresse=$request->adresse; 
            $ens->  pfs=$request->pfs; 
            $ens->  cls=$request->cls; 
           
            $ens-> tel=$request->tel;  


     
        $ens->update();
        return redirect('/ens');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ens=Ens::find($id);
      $ens->delete();
      return back();
    }
}
