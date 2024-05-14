@extends('profil2')
@section('content')

<form method="GET" action="{{route('repdevoir.search')}}" class="c form3" >
    @csrf
<div class="form-group">
    <label style="color:#976cd8">Classe:</label>



{{-- <input type="text" name="query"> --}}

<select name="query">
    
    <option value="1AP1">1AP1</option>
    <option value="1AP2">1AP2</option>
    <option value="2AP1">2AP1</option>
    <option value="2AP2">2AP2</option>
    <option value="3AP1">3AP1</option>
    <option value="3AP2">3AP2</option>
    <option value="4AP1">4AP1</option>
    <option value="4AP2">4AP2</option>
    <option value="5AP1">5AP1</option>
    <option value="5AP2">5AP2</option>
</select>
<div class="flex-end"><input type="submit"  class="form-control btn2 "  style="width: 15%" value="Valider"  /></div>



</div>

    
   

</form>
@if (isset($devoirs))
@if (is_countable($devoirs) && count($devoirs) > 0)
<div class="c">
<table>

<thead>

<tr >

<th style="color:#976cd8">Matiere</th>
<th style="color:#976cd8">Devoir</th>
<th style="color:#976cd8">Date De remise</th>
</tr>
</thead>

<tbody>

@foreach ($devoirs as $devoir )
<tr>
 <td>{{$devoir->pfs}}</td>
<td>{{$devoir->dvr}} </td>
<td>{{$devoir->date}} </td>
</tr>
<br>
@endforeach

@endif
@else
pas de resultats
@endif
</tbody>
</table>
</div>
@endsection