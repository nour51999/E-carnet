<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
if($request->filled('search')){
    $students=Student::search($request->search)->get();
    

}else{
    $students= Student::paginate();
}

        return view('index',compact('students'));

    }
}
