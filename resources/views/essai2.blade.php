@extends('liste')
@section('content')
<h3 style="text-align:center; color:#976cd8;">Emplois du temps</h3>

@if (isset($emplois))


    
  <td> Année Scolaire:{{ $emplois[0]->as}}</td>
     <td> Classe:{{ $emplois[0]->cl }}</td>  
   <td> Trimestre:{{ $emplois[0]->tr}}</td>   
   <table >
    <thead>
        
            <tr>
             <th style="color:#976cd8">Heures/Jours</th>
             <th style="color:#976cd8">Dimanche</th>
             <th style="color:#976cd8">Lundi</th>
             <th style="color:#976cd8">Mardi</th>
             <th style="color:#976cd8">Mercredi</th>
             <th style="color:#976cd8">Jeudi</th>
             
             </tr>
         
    </thead>
    <tbody>
     <div>
        <tr>
            <td style="font-family: bold;">08h à 09h</td>
            @foreach ($emplois as $emploi)
            @if ($emploi->jour == "dimanche" && $emploi->sc == 1 )
            <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}}</td><br>
 
            @elseif ($emploi->jour == "lundi" && $emploi->sc == 1)
            <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
            @elseif ($emploi->jour == "mardi" && $emploi->sc == 1)
            <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
            @elseif ($emploi->jour == "mercredi" && $emploi->sc == 1)
            <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
            @elseif ($emploi->jour == "jeudi" && $emploi->sc == 1)
            <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} </td> <br>
            @endif
            @endforeach
           
        
 
</tr>
<tr>
    <td style="font-family: bold;">09h à 10h</td>
    @foreach ($emplois as $emploi)
    @if ($emploi->jour == "dimanche" && $emploi->sc == 2 )
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}}</td><br>

    @elseif ($emploi->jour == "lundi" && $emploi->sc == 2)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mardi" && $emploi->sc == 2)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mercredi" && $emploi->sc == 2)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "jeudi" && $emploi->sc == 2)
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} </td> <br>
    @endif
    @endforeach
   


</tr>
<tr>
    <td style="font-family: bold;">10h15 à 11h15</td>
    @foreach ($emplois as $emploi)
    @if ($emploi->jour == "dimanche" && $emploi->sc == 3)
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}}</td><br>

    @elseif ($emploi->jour == "lundi" && $emploi->sc == 3)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mardi" && $emploi->sc == 3)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mercredi" && $emploi->sc == 3)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "jeudi" && $emploi->sc == 3)
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} </td> <br>
    @endif
    @endforeach
   


</tr>
<tr>
    <td style="font-family: bold;">11h15 à 12h15</td>
    @foreach ($emplois as $emploi)
    @if ($emploi->jour == "dimanche" && $emploi->sc == 4 )
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}}</td><br>

    @elseif ($emploi->jour == "lundi" && $emploi->sc == 4)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mardi" && $emploi->sc == 4)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mercredi" && $emploi->sc == 4)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "jeudi" && $emploi->sc == 4)
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} </td> <br>
    @endif
    @endforeach
   


</tr>
<tr>
    <td style="font-family: bold;">13h à 14h</td>
    @foreach ($emplois as $emploi)
    @if ($emploi->jour == "dimanche" && $emploi->sc == 5 )
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}}</td><br>

    @elseif ($emploi->jour == "lundi" && $emploi->sc == 5)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mardi" && $emploi->sc == 5)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mercredi" && $emploi->sc == 5)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "jeudi" && $emploi->sc == 5)
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} </td> <br>
    @endif
    @endforeach
   


</tr>
<tr>
    <td style="font-family: bold;">14h à 15h</td>
    @foreach ($emplois as $emploi)
    @if ($emploi->jour == "dimanche" && $emploi->sc == 6 )
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}}</td><br>

    @elseif ($emploi->jour == "lundi" && $emploi->sc == 6)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mardi" && $emploi->sc == 6)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mercredi" && $emploi->sc == 6)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "jeudi" && $emploi->sc == 6)
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} </td> <br>
    @endif
    @endforeach
   


</tr>
<tr>
    <td style="font-family: bold;">15h à 16h</td>
    @foreach ($emplois as $emploi)
    @if ($emploi->jour == "dimanche" && $emploi->sc == 7 )
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}}</td><br>

    @elseif ($emploi->jour == "lundi" && $emploi->sc == 7)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mardi" && $emploi->sc == 7)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mercredi" && $emploi->sc == 7)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "jeudi" && $emploi->sc == 7)
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} </td> <br>
    @endif
    @endforeach
   


</tr>
<tr>
    <td style="font-family: bold;">16h à 17h</td>
    @foreach ($emplois as $emploi)
    @if ($emploi->jour == "dimanche" && $emploi->sc == 8 )
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}}</td><br>

    @elseif ($emploi->jour == "lundi" && $emploi->sc == 8)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mardi" && $emploi->sc == 8)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "mercredi" && $emploi->sc == 8)
    <td>ens:{{$emploi->name}} mt:{{$emploi->pfs}} </td><br>
    @elseif ($emploi->jour == "jeudi" && $emploi->sc == 8)
    <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} </td> <br>
    @endif
    @endforeach
   


</tr>
</div>



    </tbody>
  </table>
  <br> <br> <br>

@endif
   
                  
                 




@endsection