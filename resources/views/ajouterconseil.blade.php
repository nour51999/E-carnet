@extends('liste')
@section('content')


<h2 class="h" style="color:#976cd8;text-align:center;" >Ajouter Conseil</h2>
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-red-500" style="color:red; ">{{ $error }}</div>
    
@endforeach
    
@endif
<div  style=" padding: 20px; background-color: #C493FF; " class="c center">
<form method="POST" action="{{route('conseils.store')}}" enctype="multipart/form-data" class="form3 ">
    @csrf
    
    
    <div class="form-group">
        <label>Matricule Eleve:</label>

<select class="form control" name="con_id" style="width: 100%">

    @foreach ($st as $students )
    <option value="{{ $students->id }}"  >{{ $students->mat }}</option>
        
    @endforeach
</select>

    </div>
   
    <div class="form-group">
        <label>Nom:</label>

<select class="form control" name="con_id" style="width: 100%">

    @foreach ($st as $students )
    <option value="{{ $students->id }}" >{{ $students->nom }}</option>
        
    @endforeach
</select>

    </div>
    <div class="form-group">
        <label>Prenom:</label>

<select class="form control" name="con_id" style="width: 100%">

    @foreach ($st as $students )
    <option value="{{ $students->id }}"  >{{ $students->prenom }}</option>
        
    @endforeach
</select>

    </div>
       
    
    

       
        <div class="form-group">

       <textarea name="ann" cols="30" rows="10" class="form-control" placeholder="Anonce" required pattern="[a-zA-Z]+"></textarea>
    </div>
    
        
       
        
       
       
        <br>
        <input type="submit"  class="form-control btn2" value="Ajouter Conseil"  />
    
        
    
    
    
    </form>
    
</div>





@endsection