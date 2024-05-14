@extends('profil')
@section('content')


<div class="c ">
 
<form method="POST"  action="{{route('update.notes',  $studentsNT->id)}}" enctype="multipart/form-data" class=" c form2">
    @csrf

   

    <h3 class="h" style="color:#976cd8; text-align:center;">Editer notes</h3>
    <div style=" padding: 20px; background-color: #C493FF;">

<div class="flex">
 
    <label >Date</label>
  <input type="date" name="dt" value="{{$studentsNT->dt }}" required style="margin-right:80%">
  </div>


<div>

<table>

<thead>

<tr >
<th style="color:#976cd8">Matricule</th>
<th style="color:#976cd8">Nom</th>
<th style="color:#976cd8">Prenom</th>

<th style="color:#976cd8">CC</th>
<th style="color:#976cd8">Devoirs</th>
<th style="color:#976cd8">Examen</th>



</tr>
</thead>
<tbody>
   
   
    <tr>
      
                 
   
    <td>
        <input type="text"class="form control" name="nt_id" value="{{ $studentsNT->id }}"  style="display:none">
       <input type="text"class="form control"  value="{{ $studentsNT->mat }}"  style="width: 100%">
</td>
<td>
    <input type="text"class="form control" name="nt_id" value="{{ $studentsNT->id }}"  style="display:none">
   <input type="text"class="form control"  value="{{ $studentsNT->nom }}"  style="width: 100%">
</td>
<td>
    <input type="text"class="form control" name="nt_id" value="{{ $studentsNT->id }}"  style="display:none">
   <input type="text"class="form control"  value="{{ $studentsNT->prenom }}"  style="width: 100%">
</td>
<td> <input type="text"  name="cc" value="{{$studentsNT->cc }}"></td>
    <td> <input type="text"  name="dvr" value="{{$studentsNT->dvr }}"></td>
    <td><input type="text"  name="exm" value="{{$studentsNT->exm }}"></td>
     
    
   
</tr>




</table>







</tbody>

</div>
<br>

<input type="submit"  class="btn2 m25" value="Modifier"/>


</form>
</div>
@endsection