<?php

namespace App\Http\Controllers;
use App\Models\Paren;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class ParentController extends Controller
{
    public function index()
    {
        $parens= DB::table('users')
        ->join('parens','parens.user_id','=','users.id')
       ->get();

        return view('indexparent',compact('parens'));

       


     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        // $parens=DB::table('users')
        // ->join('parens','parens.user_id','=','users.id')
        // ->get();
        // return view('parent')->with('st',$parens);

        $parens=User::all();
        return view('parent')->with('st',$parens);
     
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
        
        'tel'=>['required','max:255','min:5','unique:parens'],
       
        'prp'=>'required|max:255',
        'adresse'=>'required',
        
 
        ]);
            
        $parens=Paren::create($validateData);
        return redirect('/parens');
 
    }

    public function edit($id)
    {
    //    $parens=Paren::find($id);
     
     
    //   return view('editerParent',compact('parens'));



    //   $parens= DB::table('users')
    //   ->join('parens','parens.user_id','=','users.id')
    //   ->where('parens.id','=',$id)
    //   ->first();
    //   return view('editerParent',compact('parens'));


    
    $users=User::all();
    $parens= DB::table('users')
    ->join('parens','parens.user_id','=','users.id')
 
    ->where('parens.id','=',$id)
    // ->select('mat','nom','prenom','date','lieu','adresse','niv','classe_id','parent')
    ->first(['users.*', 'parens.*']);
    return view('editerParent',compact('parens','users'));

    }


    public function update(Request $request, $id)
    {
        $parens=Paren::find($id);
           
            
            $parens->user_id =$request->user_id;
            $parens->  prp=$request->prp; 
            $parens->  adresse=$request->adresse; 
            $parens->  tel=$request->tel; 
           
          


     
        $parens->update();
        return redirect('/parens');
    }

    public function destroy($id)
    {
      $parens=Paren::find($id);
      $parens->delete();
      return back();
    }

    }
