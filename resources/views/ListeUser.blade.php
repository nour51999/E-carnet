@extends('Liste')
@section('content')


<form action="{{ route('user.search') }}" method="GET" class="formr card-body c">
    <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
    <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
    <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
    </div>
 
    <div class="flex-end"> <a class="btn2"  href="{{ url('/aj')}}"> Ajouter Utilisateurs</a></div>
</form>





<h3 class="h" style="color:#976cd8; text-align:center;">Liste des Utilisateurs</h3>
    <div class="c" >
@if (isset($users))
<table>

<thead>

<tr >
<th style="color:#976cd8">Id</th>

<th style="color:#976cd8">Nom</th>

<th style="color:#976cd8">Email</th>
<th style="color:#976cd8">Role</th>








</tr>
</thead>
<tbody>
    @if (is_countable($users) && count($users) > 0)
    @foreach ($users as $user)
    <tr> 
 
    <td>{{ $user->id }}</td>

    <td>{{ $user->name}}</td>
    
    <td>{{ $user->email}}</td>
    <td>{{  $user->role_id }}</td>   
    
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