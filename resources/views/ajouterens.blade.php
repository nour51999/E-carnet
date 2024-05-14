@extends('liste')
@section('content')
<h2 class="h" style="color:#976cd8;text-align:center;" >Ajouter Enseignant</h2>
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-red-500" style="color:red; ">{{ $error }}</div>
    
@endforeach
    
@endif
<div  style=" padding: 20px; background-color: #C493FF; " class="c center">
<form method="POST" action="{{route('ens.store')}}" enctype="multipart/form-data"  class="form3 ">
@csrf

<div class="form-group" >
        <label for="nom" >Nom/Prenom</label>
        <select class="form control" name="user_id" style="width: 100%">

            @foreach ($st as $ens)
            <option value="{{ $ens->id}}" >{{ $ens->name}}</option>
                
            @endforeach
        </select>
        
    </div>

   
    <div class="form-group">
        <label for="adresse" >Adresse:</label>
        <input type="text" class="form-control" name="adresse" required>
    </div>
    
    <div class="form-group">
        <label for="pfs" >Matière:</label>
        <input type="text" class="form-control" name="pfs" required pattern="[a-z A-Z ]+" multiple>
    </div>
    
    <div class="form-group">
        <label >Classe:</label>
      
        <select  name="cls" class="form-control" multiple>
            <option value="1AP1">1AP1</option>
            <option value="1AP2">1AP2</option>
            <option value="2AP1">2AP1</option>
            <option value="2AP2">2AP2</option>
            <option value="3AP1">3AP1</option>
            <option value="3AP2">3AP2</option>
            <option value="4AP1">4AP1</option>
            <option value="4AP2">4AP2</option>
            <option value="5AP1">5AP1</option>
            <option value="5AP2">5AP2</option>
           
          </select>
    </div>
  
   
    <div class="form-group">
        <label for="tel" >Tel:</label>
        <input type="text" class="form-control" name="tel" required pattern="{0-9}+" title="les chiffres 0-9">
    </div>
   
   
    <br>
   
    <input type="submit"  class="form-control btn2" value="Ajouter"  />



</form>
</div>
@endsection