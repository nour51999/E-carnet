@extends('liste')
@section('content')
<h2 class="h" style="color:#976cd8;text-align:center;" >Ajouter Parent</h2>

@if ($errors->any())
@foreach ($errors->all() as $error)
<div class="text-red-500" style="color:red; ">{{ $error }}</div>
    
@endforeach
    
@endif

<div  style=" padding: 20px; background-color: #C493FF; " class="c center">


<form method="POST" action="{{route('parens.store')}}" enctype="multipart/form-data" class="form3 ">
@csrf

<div class="form-group" >
    <label  >Nom:</label>
    <select class="form control" name="user_id" style="width: 100%">
        @foreach ($st as $parens)
        <option value="{{ $parens->id}}" >{{ $parens->name}}</option>
            
        @endforeach
      
    </select>
  
   
   
</div>


  
<div class="form-group">
    <label >Profession:</label>
    <input type="text" class="form-control" name="prp" required pattern="[a-zA-Z]+">
   
</div>

<div class="form-group">
    <label >Adresse:</label>
    <input type="text" class="form-control" name="adresse" required>
  
</div>
<div class="form-group">
    <label >Tel:</label>
    <input type="text" class="form-control" name="tel" required pattern="{0-9}+" title="les chiffres 0-9">
  
</div>

<br>

<input type="submit"  class="form-control btn2" value="Ajouter"  />


</form>


@endsection