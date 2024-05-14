 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>bare de recherche</title>
    <link href="{{url('assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>
 </head>
 <body>
    <div class="container">
<div class="row">
 <div class="col-md-6" style="margin-top:40px">
    <h3>SEARCH </h3><br>
<form action="{{ route('web.search') }}" method="GET">
<div class="form-group">
<label for="">entrer la recherche</label>
<input type="text" class="form-control" name="query" placeholder="recherche ...">

</div>
 <div class="form-group">
    <button type="submit" class="btn btn-primary">search</button>
 </div>


</form>
<br>
<br>
<br>
<br>
@if (isset($students))
<table style=" border-radius: 5px;
    font-size: 12px;
    font-weight: normal;
    border: none;
    border-collapse: collapse;
    width: 100%;
    max-width: 100%;
    white-space: nowrap;
    background-color: white">

<thead>

<tr >
<th style="color:#976cd8">Id</th>

<th style="color:#976cd8">Nom</th>
<th style="color:#976cd8">Prenom</th>
<th style="color:#976cd8">Date</th>
<th style="color:#976cd8">Lieu</th>
</tr>
</thead>

<tbody>
 @if (is_countable($students) && count($students) > 0) 
 @foreach ($students as $student )
 <tr> 

 <td>{{ $student->id }}</td>
 
 <td>{{ $student->nom}}</td>
 <td>{{ $student->prenom }}</td>
 <td>{{ $student->date}}</td>
 <td>{{ $student->lieu}}</td>
@endforeach

 @else
     <tr><td>no resultats</td></tr>
 @endif


</tbody>
</table>
@endif

 </div>


</div>



    </div>
 </body>
 </html>
 