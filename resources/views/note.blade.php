@extends('profil')
@section('content')


    <form action="{{ route('note.search') }}" method="GET" class="formr card-body c">
        <div class="form-group flex jc-start ai-center" style="margin-right: 20%" >
        <input type="text" style="width: 40%; margin:0 "  name="query" placeholder="recherche ..." multiple>
        <input type="submit" class="btn2 " value="Recherche" style="width: 20%; margin-left: 5%" />
        </div>
       

    </form>
 
<form method="POST" action="{{route('notes.store')}}" enctype="multipart/form-data" class="form2 c">
    @csrf

    <div class="flex">
    
        <label >Année Scolaire</label>
        <select  name="as" required class="select">
            <option value="2022/2023">2022/2023</option>
            <option value="2024/2025">2024/2025</option>
            <option value="2026/2027">2026/2027</option>
            <option value="2027/2028">2027/2028</option>
            <option value="2028/2029">2028/2029</option>
            
        </select>

        
            <label >Matière</label>
            <select  name="mt"  required class="select">
                <option value="Arabe">Arabe</option>
                <option value="Math">Math</option>
                <option value="Anglais">Anglais</option>
                <option value="Francais">Francais</option>
                <option value="his-geo">his-geo</option>
                <option value="physique">physique</option>
                <option value="Séance">Séance Naturel</option>
                <option value="Séance Islamique">Séance Islamique</option>
                <option value="Sport">Sport</option>
            </select>
            <label >Date</label>
            <input type="date" name="dt" required class="select">
            <label>Trimestre</label>
            <select  name="tr"  required class="select">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            
            </select>
    </div>


<h3 class="h" style="color:#976cd8; text-align:center;">Notes</h3>


<div style=" padding: 20px; background-color: #C493FF;">
@if (isset($students))
<table>

<thead>

<tr >

    <th style="color:#976cd8">mat</th>
    <th style="color:#976cd8">Nom</th>
    <th style="color:#976cd8">Prenom</th>
    
    <th style="color:#976cd8">Niveau</th>
    <th style="color:#976cd8">Groupe</th>
    <th style="color:#976cd8">CC</th>
    <th style="color:#976cd8">Devoirs</th>
    <th style="color:#976cd8">Examen</th>
    

</tr>
</thead>
<tbody>
    @if (is_countable($students) && count($students) > 0)

    @foreach ($students as $index => $student )
    <tr> 
        <p style="display: none;">   {{ $index }} </p>
        <td > <select  name="data[{{ $index }}][nt_id]"   >
            <option value="{{ $student->id }}">{{ $student->mat}}</option></select></td>
            <td > <select  name="data[{{ $index }}][nt_id]" >
            <option value="{{ $student->id }}">{{ $student->nom}}</option></select></td>
            <td > <select  name="data[{{ $index }}][nt_id]" >
            <option value="{{ $student->id }}">{{ $student->prenom}}</option></select></td>
            <td > <select  name="data[{{ $index }}][nt_id]">
           <option value="{{ $student->id }}">{{ $student->niv}}</option></select></td>
            <td > <select  name="data[{{ $index }}][nt_id]">
           <option value="{{ $student->id }}">{{ $student->nomcl}}</option></select></td>
           <td>
            <input type="text"  name="data[{{ $index }}][cc]"  >   
     </td>
         <td> <input type="text"  name="data[{{ $index }}][dvr]"  ></td>
         <td><input type="text"  name="data[{{ $index }}][exm]" ></td>
          
    
   
</tr>


@endforeach
@else
     <tr><td>no resultats</td></tr>
 @endif
</table>
@endif


</tbody>

</div>
<br>

<input type="submit"  class="btn2 m25" value="Ajouter"/>

</form>

@endsection