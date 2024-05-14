@extends('liste')
@section('content')
<link rel="stylesheet" href="{{ url('assets/css/inscription.css')}}">

<h3 style="color:#976cd8; text-align:center;" >Editer Eleve</h3>

<div style=" padding: 20px; background-color: #C493FF; " class="c cent">
<form method="post" action="{{route('update.students',$students->id)}}"enctype="multipart/form-data" class="form3 ">
@csrf



<div class="form-group" >
    <label  >Matricule:</label>
    <input type="text" class="form-control" name="mat" value="{{ $students->mat }}"  required pattern="{0-9}+" >
   
</div>
    <div class="form-group" >
        <label  >Nom:</label>
        <input type="text" class="form-control" name="nom" value="{{ $students->nom }}"  required pattern="[a-zA-Z]+" autocomplete="name" autofocus>
       
    </div>
    <div class="form-group">
        <label for="prenom" >Prenom:</label>
        <input type="text" class="form-control" name="prenom" value="{{ $students->prenom }}" required pattern="[a-zA-Z]+">
       
 
    </div>
    <div class="form-group">
    <label   >Date De Naissance:</label>
    <input type="date" class="form-control" name="date"  value="{{ $students->date}}"  required>
    </div>
   <div>
    <label for="lieu"  >Lieu de naissance:</label>
    <input type="text" class="form-control" name="lieu" value="{{ $students->lieu}}" required>
    
    </div>
    <div class="form-group">
        <label  >Adresse:</label>
        <input type="text" class="form-control" name="adresse"  value="{{ $students->adresse}}"required>
      
    </div>
   
   
  
    
   
    <div class="form-group">
        <label >Niveau:</label>
        <select  name="niv" class="form-control" value="{{ $students->niv }}" required>
            <option value="Primaire">Primaire</option>
            <option value="CEM">CEM</option>
            <option value="Lycé">Lycé</option>
           
          </select>
        
    </div>
    <div class="form-group">
        <label  >Classe:</label>
        <select class="form control" name="classe_id" value="{{ $students->classe_id}}">
      
            @foreach ($classes as $st )
            <option value="{{ $st->id }}" {{ $students->classe_id == $st->id ? "selected" : "" }} >{{ $st->nomcl }}</option>
                
            @endforeach
        </select>
      
        
     
        
  </div>
  <div class="form-group" >
    <label >Nom/Prenom</label>
    

       
       <select class="form control" name="parent_id" value="{{ $students->parent_id}}" >
          
        @foreach ($parens as $stt )
        <option value="{{ $stt->id}}" {{ $students->parent_id == $stt->id ? "selected" : "" }}>{{ $stt->name}}</option>
            
        @endforeach
    </select>
    
</div>
   
    <br>
    
    <input type="submit"  class="form-control btn2" value="Modifier"  />

</form>


@endsection