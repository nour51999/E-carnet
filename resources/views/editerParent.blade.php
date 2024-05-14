@extends('liste')
@section('content')


<h2 class="h" style="color:#976cd8;text-align:center;" >Editer Parent</h2>

<div  style=" padding: 20px; background-color: #C493FF; " class="c center">
<form method="POST" action="{{route('update.parens',$parens->id)}}" enctype="multipart/form-data" class="form3 ">
@csrf

<div class="form-group" >
    <label for="nom" >Nom/Prenom</label>
    

    <select class="form control" name="user_id" value="{{ $parens->user_id}}" >
          
        @foreach ($users as $stt )
        <option value="{{ $stt->id}}" {{ $parens->user_id == $stt->id ? "selected" : "" }}>{{ $stt->name}}</option>
            
        @endforeach
    </select>
</div>


  
<div class="form-group">
    <label >Profession:</label>
    <input type="text" class="form-control" name="prp"  value="{{ $parens->prp }}" required pattern="[a-zA-Z]+">
   
</div>

<div class="form-group">
    <label >Adresse:</label>
    <input type="text" class="form-control" name="adresse"  value="{{ $parens->adresse }}"  required>
  
</div>
<div class="form-group">
    <label >Tel:</label>
    <input type="text" class="form-control"   value="{{ $parens->tel }}" name="tel" required pattern="{0-9}+">
  
</div>

<br>
<input type="submit"  class="form-control btn2" value="Modifier"  />


</form>
</div>

@endsection