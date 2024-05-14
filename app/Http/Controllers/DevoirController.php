<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Devoir;
use App\Models\Classe;

use Illuminate\Support\Facades\Auth;

class DevoirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $userId = Auth::id();
        // $devoirs = Devoir::where('ensen_id', $userId)->get();
        $devoirs= DB::table('classes')
        ->join('devoirs','devoirs.classe_id','=','classes.id')
        ->where('ensen_id', $userId)
       ->get();
        return view('index4',compact('devoirs'));
        
        
    }

  
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
      
        $classes=Classe::all();
        return view('ajouterdvr',compact('classes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $data = new Devoir ([
            'ensen_id'  =>$userId,
            'classe_id'  =>$request->get('classe_id'),
            'pfs'  =>$request->get('pfs'),
            'dvr'  =>$request->get('dvr'),
            'date'  =>$request->get('date'),
             ]);
            
     
            $data->save();
             return redirect('/devoirs')->with('success','devoirs Ajouter');
     
         }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
