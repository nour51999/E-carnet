@extends('liste')
@section('content')



    <form action="{{ route('index3.search') }}" method="GET" class="formr card-body c">
        <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
        <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
        <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
        </div>
        <div class="flex-end"> <a class="btn2"  href="{{ url('/conseils/create')}}"> Ajouter Conseil</a></div>
    </form>


<h3 class="h" style="text-align:center; color:#976cd8;">Conseil De Discipline</h3>
@if (isset($studentsCons ))
<div class="c">

<table>
    <thead>

        <tr >
        <th style="color:#976cd8">Matricule</th>
        <th style="color:#976cd8">Nom</th>
        <th style="color:#976cd8">Prenom</th>
        <th style="color:#976cd8">Conseil Discipline</th>
        
        </tr>
        </thead>
    <tbody>
        @if (is_countable($studentsCons) && count($studentsCons) > 0)
    @foreach ($studentsCons as $conseil)
   
<tr style="font-family:bold;">
    
    <td>{{ $conseil->mat}}</td>
    <td>{{ $conseil->nom}}</td>


    <td> {{ $conseil->prenom }}</td>
   
        <td> {{ $conseil->ann}}</td>
</tr>
   
   
   
    
        

@endforeach
@else
     <tr><td>no resultats</td></tr>
 @endif
</tbody>
</table>
@endif


@endsection