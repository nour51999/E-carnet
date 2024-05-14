
@extends('liste')
@section('content')





  



<h3 style="color:#976cd8; text-align:center;">Liste des Classe</h3>

<div class="c">
    <div class="flex-end"> <a class="btn2"  href="{{ url('/classes/create')}}"> Ajouter Classes</a></div>
<table>

<thead>

<tr >
<th style="color:#976cd8">Id</th>


<th style="color:#976cd8">NomClasse</th>


</tr>
</thead>
<tbody>
  

    @foreach ($classes as $student )
    <tr> 
        <td>{{ $student->id}}</td>
   
    <td>{{ $student->nomcl}}</td>
   

   
   </tr>
   @endforeach
</table>



</tbody>
</div>



@endsection