<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absence;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class AbsenceController extends Controller
{
  
    
    public function index()
    { 
        $userId = Auth::id();
        $studentsAB  = Absence::where('ensen_id', $userId)
    
        ->join('students','absences.abs_id','=','students.id')
        ->join('classes','students.classe_id','=','classes.id')
       ->get();

        return view('indexp',compact('studentsAB'));
       
    }

    
    public function create()
    {
        $students=Student::all();
        return view('absence')->with('student',$students);
      
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

        $data = $request-> input("data");
        foreach($data as $row){
            $absence=new Absence();
            $absence -> tr =  $request->get('tr');
            $absence -> as =  $request->get('as');
            $absence -> mt =  $request->get('mt');
            $absence -> dt =  $request->get('dt');
          
            $absence -> abs_id =  $row['abs_id'];
            $absence -> abr =  $row['abr'];
            $absence -> jfs =  $row['jfs'];
            $absence -> ensen_id = $userId;
            $absence->save();

        }
            
             return redirect('/absences')->with('success','Absence Ajouter');
     
         }

      
}
