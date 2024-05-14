@extends('liste')
@section('content')



<h2 class="h" style="color:#976cd8;text-align:center;" >Editer Enseignant</h2>
<div  style=" padding: 20px; background-color: #C493FF; " class="c center">
<form method="POST" action="{{route('update.ens',$ens->id)}}" enctype="multipart/form-data"  class="form3 ">
@csrf




<div class="form-group" >
    <label for="nom" >Nom/Prenom</label>
    

    <select class="form control" name="user_id" value="{{ $ens->user_id}}" >
          
        @foreach ($users as $stt )
        <option value="{{ $stt->id}}" {{ $ens->user_id == $stt->id ? "selected" : "" }}>{{ $stt->name}}</option>
            
        @endforeach
    </select>
      
</div>
    <div class="form-group">
        <label for="adresse" >Adresse:</label>
        <input type="text" class="form-control" name="adresse" value="{{ $ens->adresse }}"  required>
    </div>
    
    <div class="form-group">
        <label for="pfs" >Matière:</label>
        <input type="text" class="form-control" name="pfs" required value="{{ $ens->pfs}}"  pattern="[a-z A-Z ]+" multiple>
    </div>
    
    <div class="form-group">
        <label for="cl" >Classe:</label>
        <input type="text" class="form-control" name="cls" required value="{{ $ens->cls }}"   multiple>
    </div>
   
    
   
    <div class="form-group">
        <label for="tel" >Tel:</label>
        <input type="text" class="form-control" name="tel" value="{{ $ens->tel }}" required pattern="{0-9}+" >
    </div>
   
   
    <br>
       
    <input type="submit"  class="form-control btn2" value="Modifier"  />
 



</form>

@endsection