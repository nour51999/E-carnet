@extends('profil')
@section('content')



<h2 class="h" style="text-align:center; color:#976cd8;">Devoir De Maison</h2>
<div class="flex-end"> <a class="btn2"  href="{{ url('devoirs/create')}}">Ajouter Devoirs</a></div>

    @foreach ($devoirs as $devoir)
    <div class="c">
              
        <div class="cart">
            <p class="h" style="color:black; text-align:center ;font-size:1.7em">Devoir</p>
        <p>
            {{ $devoir->nomcl}}   {{ $devoir->pfs}}<br>
            
            {{ $devoir->dvr}} <br>
            A remmetre Le {{ $devoir->date}}(par email ou bien papier le meme jour)

        </p>
        </div>
        <br>
        <br>
    </div>
    @endforeach









@endsection