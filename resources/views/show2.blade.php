@extends('liste')
@section('content')
<h2 class="h" style="color:#976cd8;text-align:center;" >Profil Enseignant</h2>

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
            margin-bottom: 70px;">ID:</b>{{ $ensm->id }}</p>


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
    margin-bottom: 70px;">Nom:</b>{{ $ensm->name }}</p>
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
        margin-bottom: 70px;">Adresse:</b>{{ $ensm->adresse }}</p>
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
            margin-bottom: 70px;">Matière:</b>{{ $ensm->pfs}}</p>
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
      margin-bottom: 70px;">Classe:</b>{{ $ensm->cls }}</p>



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
    margin-bottom: 70px;">Tel:</b>{{ $ensm->tel}}</p>
    
        
    </td>
   



</tr>

</table>
</div>
@endsection