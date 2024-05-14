@extends('liste')
@section('content')


    <form action="{{ route('index5.search') }}" method="GET" class="formr card-body c">
        <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
        <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
        <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
        </div>
        <div class="flex-end"> <a class="btn2"  href="{{ url('/convocations/create')}}"> Ajouter Convocation</a></div>
    </form>


<h3 class="h" style="text-align:center; color:#976cd8;">Convocation</h3>
<div class="c">
    @if (isset($studentsCon ))
   
<table>

<thead>

<tr >
<th style="color:#976cd8">Matricule</th>
<th style="color:#976cd8">Nom</th>
<th style="color:#976cd8">Prenom</th>
<th style="color:#976cd8">Convocation</th>

</tr>
</thead>
<tbody>
    @if (is_countable($studentsCon) && count($studentsCon) > 0)
    
    @foreach ($studentsCon as $convocation )
    <tr> 
   
    
    <td>{{ $convocation->mat}}</td>
    <td>{{ $convocation->nom}}</td>
    <td>{{ $convocation->prenom}}</td>
    <td>{{ $convocation->cvc}}</td>
    
    
</tr>

@endforeach
@else
     <tr><td>no resultats</td></tr>
 @endif
</tbody>
</table>
@endif

</div>






@endsection