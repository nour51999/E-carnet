<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ListeUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('ListeUser',compact('users'));
    }

    public function show(User $user)
    {
        return view('show2',compact('user'));
    }
    
   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       

        $users=User::find($id);
     
     
        return view('edite',compact('users'));

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
        $users=User::find($id);
           
            
           
            $users->  nom=$request->nom;
           
            $users-> mail=$request->mail;  
          


     
        $users->update();
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=User::find($id);
      $users->delete();
      return back();
    }
}
