@extends('profil2')
@section('content')

<form method="GET" action="{{route('repconseil.search')}}" class="c form3">
    @csrf
<div class="form-group">
 


    @if (!isset($studentsCn))
    <label style="color:#976cd8">Nom/Prenom de votre enfant:</label>
<select name="query" >
    @foreach ($students as $student )
        <option value={{$student->id}}>{{$student->nom}} {{$student->prenom}}</option>
    @endforeach
</select>
<div class="flex-end"><input type="submit"  class="form-control btn2 "  style="width: 15%" value="Valider"  /></div>


    @else
    <div></div>
    @endif



</div>

    
   

</form>
@if (isset($studentsCn))
<div class="c">
<table>

<thead>

<tr >

<th style="color:#976cd8">Conseil</th>

</tr>
</thead>

<tbody>
    @foreach ($studentsCn as $studentt )
    <tr>
   
    <td>{{ $studentt->ann }}</td>
</tr>
    @endforeach
@endif
</tbody>
</table>
</div>
@endsection