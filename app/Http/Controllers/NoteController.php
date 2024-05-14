<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;
use App\Models\Classe;
use App\Models\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class NoteController extends Controller
{
  
    
    public function index()
    { 
        $userId = Auth::id();
       
    
        $studentsNT= DB::table('students')
        ->join('notes','notes.nt_id','=','students.id')
        ->join('classes','students.classe_id','=','classes.id')
        ->where('notes.ensen_id','=',$userId)
        ->select('as','tr','mat','nom','prenom','niv','nomcl','cc','dvr','exm','mt','dt', 'notes.id as noteId')
       ->get();

        return view('indexnote',compact('studentsNT'));

      

    }

    
    public function create()
    {
       
        $students=Student::all();
        return view('note')->with('student',$students);
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
            $note=new Note();
            $note-> tr =  $request->get('tr');
            $note -> as =  $request->get('as');
            $note -> mt =  $request->get('mt');
            $note-> dt =  $request->get('dt');
            $note -> nt_id =  $row['nt_id'];
            $note-> cc =  $row['cc'];
            $note -> dvr =  $row['dvr'];
            $note -> exm =  $row['exm'];
            $note -> ensen_id = $userId;
            $note->save();

        }
            
             return redirect('/notes')->with('success','Note Ajouter');
     
         }



         public function edit($id)
         {
            
     
            // $studentsNT=Note::find($id);
            
          
            // //  return view('editernote',compact('studentsNT'));

             
        //     $studentsNT= DB::table('students')
        //     ->join('notes','notes.nt_id','=','students.id')
        //     ->join('classes','students.classe_id','=','classes.id')
        // ->where('students.id','=',$id)
        // ->first();
        // return view('editernote',compact('studentsNT'));

        $studentsNT= DB::table('students')
        ->join('notes','notes.nt_id','=','students.id')
        ->where('notes.id','=',$id)
        ->first();
        return view('editernote',compact('studentsNT'));

       

     
         }



         public function update(Request $request, $id)
         {
            
    
        $studentsNT=Note::find($id);
           
            
         
        $studentsNT->  cc=$request->cc; 
        $studentsNT->  dvr=$request->dvr; 
        $studentsNT->  exm=$request->exm; 
           
        $studentsNT-> dt=$request->dt;  


     
        $studentsNT->update();
        return redirect('/notes');
    }
      
}
