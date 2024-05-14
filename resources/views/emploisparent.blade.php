@extends('profil2')
@section('content')



<h3  class="h" style="text-align:center; color:#976cd8;">Emplois du temps</h3> 

<div class="c">

@if (is_countable($countCl) && count($countCl) > 0)
@foreach ($countCl as $c)


<td> Classe:{{ $c->nomcl }}</td>

<td> Trimestre:{{ $emplois[0]->tr}}</td>   

<td> Année Scolaire:{{ $emplois[0]->as}}</td>

<table id="tblemploi">

    <thead>
        <th>Date/heure</th>
        <th>Dimanche</th>
        <th>Lundi</th>
        <th>Mardi</th>
        <th>Mercredi</th>
        <th>Jeudi</th>
    </thead>
    <tbody>
        
        <tr>
            <td>8h00 9h00</td>
            @foreach ($emplois as $emploi)
            @if ($emploi->jour == "dimanche" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl  && $emploi->sl== "vide")
            <td style="text-align:center; font-family:bold">vide</td>  
            @elseif ($emploi->jour == "dimanche" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl )
            <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
            @endif



            @if ($emploi->jour == "lundi" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
            <td style="text-align:center; font-family:bold">vide</td>  
            @elseif ($emploi->jour == "lundi" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl )
            <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
            @endif

            
            @if ($emploi->jour == "mardi" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
            <td style="text-align:center; font-family:bold">vide</td>  
            @elseif ($emploi->jour == "mardi" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl )
            <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
            @endif
           
            
            @if ($emploi->jour == "mercredi" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
            <td style="text-align:center; font-family:bold">vide</td>  
            @elseif ($emploi->jour == "mercredi" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl )
            <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
            @endif


           
            @if ($emploi->jour == "jeudi" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
            <td style="text-align:center; font-family:bold">vide</td>  
            @elseif ($emploi->jour == "jeudi" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl )
            <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
            @endif
               
            @endforeach           
        </tr>
     
            <tr>
                <td>9h00 10h00</td>
                @foreach ($emplois as $emploi)
                @if ($emploi->jour == "dimanche" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl  && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "dimanche" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
    
                @if ($emploi->jour == "lundi" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "lundi" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
                
                @if ($emploi->jour == "mardi" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mardi" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
               
                
                @if ($emploi->jour == "mercredi" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mercredi" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
               
                @if ($emploi->jour == "jeudi" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "jeudi" && $emploi->sc == 2 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
                   
                @endforeach   
            </tr>
            <tr>
                <td>10h15 11h15</td>
                @foreach ($emplois as $emploi)
                @if ($emploi->jour == "dimanche" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl  && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "dimanche" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
    
                @if ($emploi->jour == "lundi" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "lundi" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
                
                @if ($emploi->jour == "mardi" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mardi" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
               
                
                @if ($emploi->jour == "mercredi" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mercredi" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
               
                @if ($emploi->jour == "jeudi" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "jeudi" && $emploi->sc == 3 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
                   
                @endforeach              
            </tr>
            <tr>
                <td>11h15 12h15</td>
                @foreach ($emplois as $emploi)
                @if ($emploi->jour == "dimanche" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl  && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "dimanche" && $emploi->sc == 1 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
    
                @if ($emploi->jour == "lundi" && $emploi->sc == 4 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "lundi" && $emploi->sc == 4 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
                
                @if ($emploi->jour == "mardi" && $emploi->sc == 4 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mardi" && $emploi->sc == 4 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
               
                
                @if ($emploi->jour == "mercredi" && $emploi->sc == 4 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mercredi" && $emploi->sc == 4 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
               
                @if ($emploi->jour == "jeudi" && $emploi->sc == 4 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "jeudi" && $emploi->sc == 4 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
                   
                @endforeach       
            </tr>
            <tr>
                <td>13h00 14h00</td>
                @foreach ($emplois as $emploi)
                @if ($emploi->jour == "dimanche" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl  && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "dimanche" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
    
                @if ($emploi->jour == "lundi" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "lundi" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
                
                @if ($emploi->jour == "mardi" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mardi" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
               
                
                @if ($emploi->jour == "mercredi" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mercredi" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
               
                @if ($emploi->jour == "jeudi" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "jeudi" && $emploi->sc == 5 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
                   
                @endforeach       
            </tr>
            <tr>
                <td>14h00 15h00</td>
                @foreach ($emplois as $emploi)
                @if ($emploi->jour == "dimanche" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl  && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "dimanche" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
    
                @if ($emploi->jour == "lundi" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "lundi" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
                
                @if ($emploi->jour == "mardi" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mardi" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
               
                
                @if ($emploi->jour == "mercredi" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mercredi" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
               
                @if ($emploi->jour == "jeudi" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "jeudi" && $emploi->sc == 6 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
                   
                @endforeach   
            </tr>
            <tr>
                <td>15h00 16h00</td>
                @foreach ($emplois as $emploi)
                @if ($emploi->jour == "dimanche" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl  && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "dimanche" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
    
                @if ($emploi->jour == "lundi" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "lundi" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
                
                @if ($emploi->jour == "mardi" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mardi" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
               
                
                @if ($emploi->jour == "mercredi" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mercredi" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
               
                @if ($emploi->jour == "jeudi" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "jeudi" && $emploi->sc == 7 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
                   
                @endforeach   
            </tr>
            <tr>
                <td>16h00 17h00</td>
                @foreach ($emplois as $emploi)
                @if ($emploi->jour == "dimanche" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl  && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "dimanche" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
    
                @if ($emploi->jour == "lundi" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "lundi" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
                
                @if ($emploi->jour == "mardi" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mardi" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
               
                
                @if ($emploi->jour == "mercredi" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "mercredi" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
    
    
               
                @if ($emploi->jour == "jeudi" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl && $emploi->sl== "vide")
                <td style="text-align:center; font-family:bold">vide</td>  
                @elseif ($emploi->jour == "jeudi" && $emploi->sc == 8 && $emploi->nomcl == $c->nomcl )
                <td>ens:{{$emploi->name}}  mt:{{$emploi->pfs}} <br>salle:{{$emploi->sl}}
                @endif
                   
                @endforeach   
            </tr>
     
    </tbody>
    
</table>
<br>
<br>
@endforeach
@else
     <tr><td>no resultats</td></tr>
 @endif
</div>
@endsection