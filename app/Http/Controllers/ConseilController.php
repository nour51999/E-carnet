<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conseil;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
class ConseilController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){


        $studentsCons = DB::table('conseils')
        ->join('students','conseils.con_id','=','students.id')
       ->get();

        return view('index3',compact('studentsCons'));
    }
    
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $students=Student::all();
        return view('ajouterconseil')->with('st',$students);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Conseil ([
            'con_id'  =>$request->get('con_id'),
            
           
            'ann'  =>$request->get('ann'),
             ]);
             $data->save();
             return redirect('/conseils')->with('success','Conseil Ajouter');
     

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
