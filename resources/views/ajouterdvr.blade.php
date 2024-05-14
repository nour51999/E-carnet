@extends('profil')
@section('content')



<h2 style="color:#976cd8;text-align:center;" >Ajouter Devoir</h2>
<div  style=" padding: 20px; background-color: #C493FF; " class="c center">
<form method="POST" action="{{route('devoirs.store')}}" enctype="multipart/form-data" class="form3 ">
@csrf
<div class="form-group">
    <label  >Classe:</label>
    <select class="form control" name="classe_id">
      
        @foreach ($classes as $st )
        <option value="{{ $st->id }}"  >{{ $st->nomcl }}</option>
            
        @endforeach
    </select>
</div>

    <div class="form-group">
        <label>Matière:</label>
       <input type="text" class="form control" name="pfs">
    </div>
    
   
    <div class="form-group">

       <textarea name="dvr" cols="30" rows="10" class="form-control" placeholder="Travail a faire" required></textarea>
    </div>
    
   
    <div class="form-group">
        <label for="dt" >Date de remise:</label>
        <input type="date" class="form-control" name="date" required >
    </div>
    
   
   
    <br>
    <input type="submit"  class="form-control btn2" value="Ajouter Devoir"  />
</form>
</div>
@endsection