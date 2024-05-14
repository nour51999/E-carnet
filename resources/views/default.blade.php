@extends('layout')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/stylelogin.css')}}">
<div class="container">
      <div class="row">
        <div class="col-12">
          
          <form action="user" method="post">
            @csrf
             <h1>Authentification  <i class="fa fa-lock" aria-hidden="true"></i></h1>

            
            <div class="divc">
            
             <label>Utilisateur</label>
             <input type="text" name="user" id="user" class="inp">
           </div>
           
           <div class="divc">
            <label>Mot de passe</label>
            
            <input type="password" name="password" id="mdp" class="inp">
           
            
          </div>
          <br>
          
          <button name="connexion" id="cnx" type="submit">Valider</button>
        

            



          </form>
          
        </div>
        
      </div>
      
    </div>
    

@endsection