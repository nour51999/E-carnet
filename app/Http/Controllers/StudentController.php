<?php

namespace App\Http\Controllers;

use App\Models\Paren;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\User;
use App\Models\Classe;
use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= DB::table('users')
        ->join('students','students.parent_id','=','users.id')
        ->join('classes','students.classe_id','=','classes.id')
       ->get(['classes.*', 'users.*', 'students.*']);

        return view('index',compact('students'));

      
       
       
          
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
        // return view('create')->with('st',$parens);

        $parens=DB::table('parens')
        ->join('users', 'user_id','=', 'users.id')
        ->get();
        $classes=Classe::all();
        return view('ajoutereleve',compact('parens','classes'));

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
       'image'=>'required|image|mimes:jpg,jpeg,png,gif,svg',
       'mat'=>['required','max:255','min:5','unique:students'],
       'nom'=>'required|max:255',
       'prenom'=>'required|max:255',
       'date'=>'required',
       'lieu'=>'required',
       'adresse'=>'required',
       'niv'=>'required',
      
      'parent_id'=>'required',
      'classe_id'=>'required',

       ]);
       $image=$request->file('image');
       $destinationPath='image/';
       $profileImage=date('YmdHis').".".$image->getClientOriginalExtension();
       $image->move($destinationPath,$profileImage);
       $validateData['image']=$profileImage;

       
       $students=Student::create($validateData);
       return redirect('/students');



       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     * 
     */
    public function show($id)
    {

        $student= DB::table('users')
        ->join('students','students.parent_id','=','users.id')
        ->join('classes','students.classe_id','=','classes.id')
        ->where('students.id','=',$id)
        ->first(['classes.*', 'users.*', 'students.*']);
        return view('show',compact('student'));
    

     
    }
   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $parens=DB::table('parens')
        ->join('users', 'user_id','=', 'users.id')
        ->get();

        $classes=Classe::all();

        $students= DB::table('users')
        ->join('students','students.parent_id','=','users.id')
        ->join('classes','students.classe_id','=','classes.id')
        ->where('students.id','=',$id)
        // ->select('mat','nom','prenom','date','lieu','adresse','niv','classe_id','parent')
        ->first(['classes.*', 'users.*', 'students.*']);
        return view('editer',compact('students','classes','parens'));

     
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
        $students=Student::find($id);
        
            $students->mat=$request->mat; 
            $students->  nom=$request->nom; 
            $students->  prenom=$request->prenom; 
            $students->  date=$request->date; 
            $students->  lieu=$request->lieu; 
            $students-> adresse=$request->adresse; 
            $students->  niv=$request->niv; 
         
            $students->  parent_id=$request->parent_id;
            $students->  classe_id=$request->classe_id;
            $students->update();
            return redirect('/students');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $students=Student::find($id);
      $students->delete();
      return back();
    }
}
