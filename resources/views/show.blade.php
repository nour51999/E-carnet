@extends('liste')
@section('content')
<h2 class="h" style="text-align:center;">Profil Eleve</h2>
<table style="border:0px" > <tr>
    <td>
        <p><b style="color: black;
            width: 200px;
            font-weight: bold;
            background-color: #efefef;
            border-radius: 5px;
            font-size: 16px;
            padding-left: 11px;
            padding-right: 4px;
            padding-bottom: 5px;
            margin-right: 100px;
            margin-bottom: 70px;">ID:</b>{{ $student->id }}</p>

<p><b style="color: black;
   width: 200px;
   font-weight: bold;
   background-color: #efefef;
   border-radius: 5px;
   font-size: 16px;
   padding-left: 11px;
   padding-right: 4px;
   padding-bottom: 5px;
   margin-right: 100px;
   margin-bottom: 70px;">Matricule:</b>{{ $student->mat}}</p>


 <p><b style="color: black;
    width: 200px;
    font-weight: bold;
    background-color: #efefef;
    border-radius: 5px;
    font-size: 16px;
    padding-left: 11px;
    padding-right: 4px;
    padding-bottom: 5px;
    margin-right: 100px;
    margin-bottom: 70px;">Nom:</b>{{ $student->nom}}</p>
 <p><b style="color: black;
    width: 200px;
    font-weight: bold;
    background-color: #efefef;
    border-radius: 5px;
    font-size: 16px;
    padding-left: 11px;
    padding-right: 4px;
    padding-bottom: 5px;
    margin-right: 100px;
    margin-bottom: 70px;">Prenom :</b>{{ $student->prenom }}</p>
    
    
    
    
   
    
    
    
   
     <p><b style="color: black;
        width: 200px;
        font-weight: bold;
        background-color: #efefef;
        border-radius: 5px;
        font-size: 16px;
        padding-left: 11px;
        padding-right: 4px;
        padding-bottom: 5px;
        margin-right: 100px;
        margin-bottom: 70px;">Date:</b>{{ $student->date}}</p>
         <p><b style="color: black;
            width: 200px;
            font-weight: bold;
            background-color: #efefef;
            border-radius: 5px;
            font-size: 16px;
            padding-left: 11px;
            padding-right: 4px;
            padding-bottom: 5px;
            margin-right: 100px;
            margin-bottom: 70px;">Lieu:</b>{{ $student->lieu}}</p>


<p><b style="color: black;
    width: 200px;
    font-weight: bold;
    background-color: #efefef;
    border-radius: 5px;
    font-size: 16px;
    padding-left: 11px;
    padding-right: 4px;
    padding-bottom: 5px;
    margin-right: 100px;
    margin-bottom: 70px;">Adresse:</b>{{ $student->adresse}}</p>
 <p><b style="color: black;
    width: 200px;
    font-weight: bold;
    background-color: #efefef;
    border-radius: 5px;
    font-size: 16px;
    padding-left: 11px;
    padding-right: 4px;
    padding-bottom: 5px;
    margin-right: 100px;
    margin-bottom: 70px;">Niveau:</b>{{ $student->niv}}</p>
     <p><b style="color: black;
        width: 200px;
        font-weight: bold;
        background-color: #efefef;
        border-radius: 5px;
        font-size: 16px;
        padding-left: 11px;
        padding-right: 4px;
        padding-bottom: 5px;
        margin-right: 100px;
        margin-bottom: 70px;">Classe:</b>{{ $student->nomcl}}</p>
         <p><b style="color: black;
            width: 200px;
            font-weight: bold;
            background-color: #efefef;
            border-radius: 5px;
            font-size: 16px;
            padding-left: 11px;
            padding-right: 4px;
            padding-bottom: 5px;
            margin-right: 100px;
            margin-bottom: 70px;">Prenom Père:</b>{{$student->name}}</p>
            
    </td>
    <td style="margin-left: 3px">
        <img src="/image/{{$student->image}}" width ="200" height="200">
    </td>



</tr>

</table>

@endsection