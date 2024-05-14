<?php

namespace App\Http\Controllers;

use App\Models\Convocation;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ConvocationController extends Controller
{
    public function index(){
       
        

        $studentsCon = DB::table('convocations')
        ->join('students','convocations.co_id','=','students.id')
       ->get();

        return view('index5',compact('studentsCon'));
        
        
    }
    public function create()

    {
        $students=Student::all();
        return view('ajouterconV')->with('st',$students);
    }
    public function store(Request $request)
    {
        $data = new Convocation ([
       'co_id'  =>$request->get('co_id'),
       
      
       'cvc'  =>$request->get('cvc'),
        ]);
       

       $data->save();
        return redirect('/convocations')->with('success','Convocation Ajouter');

    }
}
