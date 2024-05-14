@extends('liste')
@section('content') 

    

<h3 style="color:#976cd8; text-align:center;" >Ajouter Eleve</h3>
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-red-500" style="color:red; ">{{ $error }}</div>
    
@endforeach
    
@endif
<div style=" padding: 20px; background-color: #C493FF; " class="c cent">
<form method="POST" action="{{route('students.store')}}" enctype="multipart/form-data" class="form3 ">
@csrf


<div class="form-group" >
    <label for="image" >Image:</label>
    <input type="file" class="form-control" name="image" required>
    
</div>
<div class="form-group" >
    <label  >Matricule:</label>
    <input type="text"  class="form-control" name="mat" required id="mat" pattern="[0-9]+" title="les Chiffres de 0 à 9">
   
</div>
    <div class="form-group" >
        <label  >Nom:</label>
        <input type="text" class="form-control " name="nom" id="pr" required pattern="[a-zA-Z]+"  title="les lettres de a à z / A à Z">
       
    </div>
    <div class="form-group">
        <label for="prenom" >Prenom:</label>
        <input type="text" class="form-control" name="prenom" id="pr" required pattern="[a-zA-Z]+"  title="les lettres de a à z / A à Z">
       
 
    </div>
    <div class="form-group">
        <label for="birthdate"> Date:</label>
    <input type="date" class="form-control" name="date" id="birthdate" max="2018-12-31"  min="2006-01-01" required>
 
    </div>
   <div>
    <label for="lieu"  >Lieu de naissance:</label>
    <input type="text" class="form-control" name="lieu" required>
    
    </div>
    <div class="form-group">
        <label  >Adresse:</label>
        <input type="text" class="form-control" name="adresse" required>
      
    </div>
   
   
  
    
   
    <div class="form-group">
        <label >Niveau:</label>
        <select  name="niv" class="form-control" required>
            <option value="Primaire">Primaire</option>
            <option value="CEM">CEM</option>
            <option value="Lycé">Lycé</option>
           
          </select>
        
    </div>
  

  <div class="form-group">
    <label  >Classe:</label>

    <select class="form control" name="classe_id">
      
        @foreach ($classes as $st )
        <option value="{{ $st->id }}"  >{{ $st->nomcl }}</option>
            
        @endforeach
    </select>
    <div class="form-group">
        <label  >Prenom père:</label>

        <select class="form control" name="parent_id">
          
            @foreach ($parens as $stt )
            <option value="{{ $stt->id}}" >{{ $stt->name}}</option>
                
            @endforeach
        </select>
        
  </div>

   
    <br>
    <input type="submit"  class="form-control btn2" value="Ajouter"  />
</form>

<script>
    // const inputpr=document.getElementById('pr');
    // inputpr.setCustomValidity('les lettres a-z A-Z')

    // const inputmat=document.getElementById('mat');
    // inputmat.setCustomValidity('les chiffres 0-9')


    
</script>

</div>


@endsection