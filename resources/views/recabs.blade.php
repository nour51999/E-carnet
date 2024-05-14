@extends('profil2')
@section('content')

<form method="GET" action="{{route('repabs.search')}}" class="c form3">
    @csrf
<div class="form-group">
 


    @if (!isset($studentsAbs))
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
@if (isset($studentsAbs))
<div class="c">
<table>

<thead>

<tr >
<th style="color:#976cd8">Matière</th>
<th style="color:#976cd8">Date</th>
<th style="color:#976cd8">Absence/Présence</th>
<th style="color:#976cd8">Justification</th>

</tr>
</thead>

<tbody>
    @foreach ($studentsAbs as $studentt )
    <tr>
    <td >{{ $studentt->mt }}</td>
    <td>{{ $studentt->dt }}</td>
    <td >{{ $studentt->abr }}</td>
    <td>{{ $studentt->jfs }}</td>
</tr>
    @endforeach
@endif
</tbody>
</table>
</div>
@endsection