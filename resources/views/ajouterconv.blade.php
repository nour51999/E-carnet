@extends('liste')
@section('content')


<h2 class="h" style="color:#976cd8;text-align:center;" >Ajouter Convocation</h2>
@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-red-500" style="color:red; ">{{ $error }}</div>
    
@endforeach
    
@endif
<div  style=" padding: 20px; background-color: #C493FF; " class="c center">
<form method="POST" action="{{route('convocations.store')}}" enctype="multipart/form-data" class="form3 ">
    @csrf

    <div class="form-group">
        <label>Matricule Eleve:</label>

<select class="form control" name="co_id" style="width: 100%">

    @foreach ($st as $students )
    <option value="{{ $students->id }}" where >{{ $students->mat }}</option>
        
    @endforeach
</select>

    </div>
   
    <div class="form-group">
        <label>Nom:</label>

<select class="form control" name="co_id" style="width: 100%">

    @foreach ($st as $students )
    <option value="{{ $students->id }}" where >{{ $students->nom }}</option>
        
    @endforeach
</select>

    </div>
    <div class="form-group">
        <label>Prenom:</label>

<select class="form control" name="co_id" style="width: 100%">

    @foreach ($st as $students )
    <option value="{{ $students->id }}" where >{{ $students->prenom }}</option>
        
    @endforeach
</select>

    </div>
       
    
    
    <div class="form-group">

        <textarea name="cvc" cols="30" rows="10" class="form-control" placeholder="A Monsieur/Madame:" required></textarea>
     </div>
       
        
       
       
        <br>
        <input type="submit"  class="form-control btn2" value="Ajouter Conseil"  />
    
     
    
    
    
    </form>
    

</div>




@endsection