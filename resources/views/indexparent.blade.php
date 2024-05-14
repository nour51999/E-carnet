@extends('liste')
@section('content')



    <form action="{{ route('parent.search') }}" method="GET" class="formr card-body c">
        <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
        <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
        <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
        </div>
       <div class="flex-end"> <a class="btn2"  href="{{ url('/parens/create')}}"> Ajouter Parent</a></div>
    
    </form>
    



    <h3 class="h" style="color:#976cd8; text-align:center;">Liste des parents</h3>

    <div class="c">

@if (isset($parens))
<table>

<thead>

<tr >
<th style="color:#976cd8">Id</th>
<th style="color:#976cd8">Nom/Prenom</th>

<th style="color:#976cd8">Profession</th>
<th style="color:#976cd8">Adresse</th>
<th style="color:#976cd8">Tel</th>
<th style="color:#976cd8">Supprimer</th>
<th style="color:#976cd8">Modifier</th>









</tr>
</thead>
<tbody>
    @if (is_countable($parens) && count($parens) > 0)
    @foreach ($parens as $parent )
    <tr> 
   
    <td>{{ $parent->id }}</td>
   
   
    <td>{{ $parent->name }}</td>
    <td>{{ $parent->prp}}</td>
    <td>{{ $parent->adresse}}</td>
    <td>{{ $parent->tel}}</td>

   
    

    <td>
        <a onclick="return confirm('vous etes sur de supprimer');" href="{{ route('delete-parens' ,$parent->id)}}" class="btn btn-danger">Sup</a>
       </td>
       <td>
        <a  href="{{ route('edit-parens',$parent->id)}}" class="btn btn-warning">Editer</a>
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