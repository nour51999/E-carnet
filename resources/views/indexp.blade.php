@extends('profil')
@section('content')
{{-- <link rel="stylesheet" href="{{ url('assets/css/devoir.css')}}"> --}}


  <form action="{{ route('indexabs.search') }}" method="GET" class="formr card-body c">
    <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
    <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
    <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
    </div>
    <div class="flex-end"> <a class="btn2"  href="{{ url('/absences/create')}}">  Ajouter Absences/Retards</a></div>
</form>

<h3 class="h" style="text-align:center; color:#976cd8;">Absences/Retards</h3>

@if (isset($studentsAB))
<div  class="c">
<td>{{  $studentsAB [0]->as}} </td> 
<td> Trimestre:{{ $studentsAB[0]->tr}} </td> 


<table>

<thead>

<tr >
<th style="color:#976cd8">matricule</th>
<th style="color:#976cd8">Nom</th>
<th style="color:#976cd8">Prenom</th>
<th style="color:#976cd8">Groupe</th>
<th style="color:#976cd8">Matiere</th>
<th style="color:#976cd8">Date</th>

<th style="color:#976cd8">Absence/Retard</th>
<th style="color:#976cd8">Justification</th>


</tr>
</thead>
@if (is_countable($studentsAB) && count($studentsAB) > 0)
    @foreach ( $studentsAB  as $absence)

    <tr>
    <td>{{$absence->mat}} </td>
    <td>{{$absence->nom}}</td>
    <td>{{$absence->prenom}} </td>
    <td>{{$absence->nomcl}}</td>
    <td>{{ $absence->mt}}</td>
    <td>{{ $absence->dt}} </td> 
    <td>{{$absence->abr}} </td>
    <td>{{$absence->jfs}}</td>
    
    </tr>
    @endforeach
@else
     <tr><td>no resultats</td></tr>
 @endif
</table>
</div>
@endif
   









@endsection