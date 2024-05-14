<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;



use Illuminate\Http\Request;
class ProfilController extends Controller
{
    public function index(){
        
        if(Auth::user()->hasRole('enseignant')){
            return view('espaceEnseignant');
        }elseif(Auth::user()->hasRole('parent')){
            return view('espaceParent');
        }elseif(Auth::user()->hasRole('admin')){
            return view('espaceAdmin');
        }
    }
}
