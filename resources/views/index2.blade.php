@extends('liste')
@section('content')

<form action="{{ route('enseignant.search') }}" method="GET" class="formr card-body c">
    <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
    <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
    <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
    </div>
   <div class="flex-end"> <a class="btn2"  href="{{ url('/ens/create')}}"> Ajouter enseignant</a></div>

</form>






<h3 class="h" style="color:#976cd8; text-align:center;">Liste des enseignants</h3>

<div class="c">
@if (isset( $usersEn))
<table>

<thead>

<tr >
<th style="color:#976cd8">Id</th>
<th style="color:#976cd8">Nom/Prenom</th>

<th style="color:#976cd8">Adresse</th>
<th style="color:#976cd8">Matière</th>
<th style="color:#976cd8">Classe</th>
<th style="color:#976cd8">Tel</th>
<th style="color:#976cd8">voir</th>
<th style="color:#976cd8">Supprimer</th>
<th style="color:#976cd8">Modifier</th>








</tr>
</thead>
<tbody>
    @if (is_countable( $usersEn) && count( $usersEn) > 0)
    @foreach ( $usersEn as $ensm )
    <tr> 
   
    <td>{{ $ensm->id }}</td>
    <td>{{ $ensm->name}}</td>
   
    <td>{{ $ensm->adresse}}</td>
    <td>{{ $ensm->pfs}}</td>
    <td>{{ $ensm->cls}}</td>
    <td>{{ $ensm->tel}}</td>
    <td>
        <form method="POST"></form>
        <a class="btn btn-info" href="{{ route(' $usersEn.show',$ensm->id)}}">Profil</a>
    </td>
    

    <td>
        <a onclick="return confirm('vous etes sur de supprimer');" href="{{ route('delete-ens' ,$ensm->id)}}" class="btn btn-danger">Sup</a>
       </td>
       <td>
        <a  href="{{ route('edit-ens',$ensm->id)}}" class="btn btn-warning">Editer</a>
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