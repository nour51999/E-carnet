@extends('liste')
@section('content')

<h3 style="color:#976cd8; text-align:center;" >Ajouter Classe</h3>

<div style=" padding: 20px; background-color: #C493FF; " class="c cent">
    <form method="POST" action="{{route('classes.store')}}" enctype="multipart/form-data" class="form3 ">
    @csrf
<div class="form-group" >

    <label  >Ajouter Claase</label>
    <input type="text"  class="form-control" name="nomcl" required >


    <br>
    <input type="submit"  class="form-control btn2" value="Ajouter"  />
   
</div>
</form>
</div>
@endsection