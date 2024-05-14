@extends('profil')
@section('content')


<form action="{{ route('indexnote.search') }}" method="GET" class="formr card-body c">
    <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
    <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
    <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
    </div>
    <div class="flex-end"> <a class="btn2"  href="{{ url('/notes/create')}}">  Ajouter Notes</a></div>
</form>



<h3 class="h" style="color:#976cd8; text-align:center;">Liste des notes</h3>
    

@if (isset($studentsNT))
<div  class="c">
<td>{{  $studentsNT [0]->as}} </td> 
<td> Trimestre:{{ $studentsNT[0]->tr}} </td> 


<table>

<thead>


<tr >
<th style="color:#976cd8">Matricule</th>
<th style="color:#976cd8">Nom</th>
<th style="color:#976cd8">Prenom</th>
<th style="color:#976cd8">Niveau</th>
<th style="color:#976cd8">Groupe</th>
<th style="color:#976cd8">CC</th>
<th style="color:#976cd8">Devoir</th>
<th style="color:#976cd8">Examen</th>
<th style="color:#976cd8">Matiere</th>
<th style="color:#976cd8">Date</th>

<th style="color:#976cd8">Modifier</th>




</tr>
</thead>

    @if (is_countable($studentsNT) && count($studentsNT) > 0)

    @foreach ($studentsNT as $student )
    <tr> 
      
    <td>{{ $student->mat }}</td>
    <td>{{ $student->nom}}</td>
    <td>{{ $student->prenom }}</td>
    <td>{{ $student->niv}}</td>
    <td>{{ $student->nomcl}}</td>
    <td>{{ $student->cc}}</td>
    <td>{{ $student->dvr}}</td>
    <td>{{ $student->exm}}</td>
    <td>{{ $student->mt}}</td>
    <td>{{ $student->dt}} </td> 

    <td style="padding-left: 20px">
      <a  href="{{ route('edit-notes',$student ->noteId)}}" class="btn btn-warning">Editer</a>
     </td>
    </tr>
    @endforeach
@else
     <tr><td>no resultats</td></tr>
 @endif
</table>
</div>
@endif
   




@endsection