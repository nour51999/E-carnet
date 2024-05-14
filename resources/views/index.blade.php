@extends('liste')
@section('content')




<form action="{{ route('web.search') }}" method="GET" class="formr card-body c">
    <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
    <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
    <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
    </div>
   <div class="flex-end"> <a class="btn2"  href="{{ url('/students/create')}}"> Ajouter eleve</a></div>

</form>


<h3 style="color:#976cd8; text-align:center;" class="h">Liste des élèves</h3>

<div >
@if (isset($students))
<table>

<thead>

<tr >
<th style="color:#976cd8">Id</th>
<th style="color:#976cd8">Image</th>
<th style="color:#976cd8">Mat</th>
<th style="color:#976cd8">Nom</th>
<th style="color:#976cd8">Prenom</th>
<th style="color:#976cd8">Date</th>
<th style="color:#976cd8">Lieu</th>
<th style="color:#976cd8">Niveau</th>
<th style="color:#976cd8">Classe</th>

<th style="color:#976cd8">Nom/Prenom père</th>

<th style="color:#976cd8">Voir</th>
<th style="color:#976cd8">Supprimer</th>
<th style="color:#976cd8">Modifier</th>


</tr>
</thead>
<tbody>
    @if (is_countable($students) && count($students) > 0)

    @foreach ($students as $student )
    <tr> 
   
    <td>{{ $student->id }}</td>
    <td><img src="/image/{{ $student->image }}"  width="96" style=" border-radius: 10px"/></td>
    <td>{{ $student->mat}}</td>
    <td>{{ $student->nom}}</td>
    <td>{{ $student->prenom }}</td>
    <td>{{ $student->date}}</td>
    <td>{{ $student->lieu}}</td>
    <td>{{ $student->niv}}</td>
    <td>{{ $student->nomcl}}</td>
    <td>{{ $student->name}}</td>

   
   
    <td>
         <form method="POST"></form>
        <a class="btn btn-info"href="{{ route('students.show',$student->id) }}">Profil</a>
    </td>
   <td>
    <a onclick="return confirm('vous etes sur de supprimer');" href="{{ route('delete-students' ,$student->id)}}" class="btn btn-danger">Supprimer</a>
   </td>
   <td>
    <a  href="{{ route('edit-students',$student->id)}}" class="btn btn-warning" >Modifier</a>
   </td>

   
   
</tr>
@endforeach
@else
     <tr><td>no resultats</td></tr>
 @endif
</table>
@endif


</tbody>
</div>



@endsection