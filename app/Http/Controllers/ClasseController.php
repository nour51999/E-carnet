<?php

namespace App\Http\Controllers;
use App\Models\Classe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ClasseController extends Controller
{
    public function index()
    {
        
      
        $classes=Classe::all();
       
        return view('indexClasse',compact('classes'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $classes=Classe::all();
       return view('classe',compact('classes'));
       
    }

   
    public function store(Request $request)
    {
        $validateData=$request->validate([
     
        'nomcl'=>'required|max:255',
       
      
        ]);
        $classes=Classe::create($validateData);
        return redirect('/classes');

       
    }

   
    public function show($id)
    {

    

     
    }
   
   
    public function edit($id)
    {

       

     
    }

    
    public function update(Request $request, $id)
    {
        
    }

   
    public function destroy($id)
    {
    
}
}