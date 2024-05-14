@extends('liste')
@section('content')
<h3 class="h" style="color:#976cd8; text-align:center;">Emplois du temps</h3>
<div class="c ">
<form method="POST" action="{{route('emplois.store')}}" enctype="multipart/form-data" class=" c form2">
    @csrf
    <div class="flex" >
        <label >Année Scolaire</label>
        <select  name="as" required class="select">
            <option value="2022/2023">2022/2023</option>
            <option value="2024/2025">2024/2025</option>
            <option value="2026/2027">2026/2027</option>
            <option value="2027/2028">2027/2028</option>
            <option value="2028/2029">2028/2029</option>
            
        </select>
        
       
        <label>Trimestre</label>
        <select  name="tr"  required class="select">
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        
        </select>
        <label  >Classe:</label>
        
        <select  name="classe_id"  required>
               
            @foreach ($classes as $st )
            <option value="{{ $st->id }}"  >{{ $st->nomcl }}</option>
                
            @endforeach
              </select>
       
    
         
    </div>
    
    <div style=" padding: 20px; background-color: #C493FF;">
<table>
    <thead>

        <tr >
        <th style="color:#976cd8">Heures/Jours</th>
        <th style="color:#976cd8">Dimanche</th>
        <th style="color:#976cd8">Lundi</th>
        <th style="color:#976cd8">Mardi</th>
        <th style="color:#976cd8">Mercredi</th>
        <th style="color:#976cd8">Jeudi</th>
       
        </tr>
       
    </thead>
    <tbody>
        <tr>
        <td>08h à 09
        </td>
        <td>
            <input type="number" name="data[0][sc]" value="1" class="seance">
            <input type="text" name="data[0][jour]" value="dimanche" class="jour">
            <select name="data[0][sl]">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="vide">vide</option>
            </select>
            <select name="data[0][emplois_id]">
            @foreach ($ens as $em )
    <option value="{{ $em->id }}">{{$em->name}}</option>
    @endforeach
            </select>
        
        </td>
            <td>
                <input type="number" name="data[1][sc]" value="1" class="seance">
                <input type="text" name="data[1][jour]" value="lundi" class="jour">
                <select name="data[1][sl]">
                    <option value="1">1</option> 
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="vide">vide</option>
                </select>
                <select name="data[1][emplois_id]">
               
                @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                
                @endforeach
              
                </select></td>
                <td>
                    <input type="number" name="data[2][sc]" value="1"  class="seance">
                    <input type="text" name="data[2][jour]" value="mardi" class="jour">
                    <select name="data[2][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>
                    </select>
                    <select name="data[2][emplois_id]">
                    @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
             
                @endforeach
                   
                    </select></td>
                    <td>
                        <input type="number" name="data[3][sc]" value="1"  class="seance">
                        <input type="text" name="data[3][jour]" value="mercredi" class="jour">
                        
                            <select name="data[3][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                            <select name="data[3][emplois_id]" >
                        @foreach ($ens as $em )
                        <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                      
                        @endforeach
                        </select></td>
                        <td>
                            <input type="number" name="data[4][sc]" value="1"  class="seance">
                            <input type="text" name="data[4][jour]" value="jeudi" class="jour">
                            <select name="data[4][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                            <select name="data[4][emplois_id]">

                            @foreach ($ens as $em )
                            <option value="{{ $em->id }}"  >{{ $em->name}}</option>
                          
                            @endforeach
                            </select></td>
                          
    </tr>  
    <tr>
        <td>09h00 à 10h00
        </td>
        <td>
            <input type="number" name="data[5][sc]" value="2" class="seance">
            <input type="text" name="data[5][jour]" value="dimanche" class="jour">
            <select name="data[5][sl]">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="vide">vide</option>
            </select>
         
            <select name="data[5][emplois_id]">
            @foreach ($ens as $em )
         <option value="{{ $em->id }}"  >{{ $em->name }}</option>
       @endforeach
            </select>
        
        </td>
            <td>
                <input type="number" name="data[6][sc]" value="2" class="seance">
                <input type="text" name="data[6][jour]" value="lundi" class="jour">
                <select name="data[6][sl]">
                    <option value="1">1</option> 
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="vide">vide</option>
                </select>
                <select name="data[6][emplois_id]">
               
                @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
       
                @endforeach
              
                </select></td>
                <td>
                    <input type="number" name="data[7][sc]" value="2"  class="seance">
                    <input type="text" name="data[7][jour]" value="mardi" class="jour">
                    
                    <select name="data[7][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>
                    </select>
                    <select name="data[7][emplois_id]">
                    @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
             
                @endforeach
                   
                    </select></td>
                    <td>
                        <input type="number" name="data[8][sc]" value="2"  class="seance">
                        <input type="text" name="data[8][jour]" value="mercredi" class="jour">
                        <select name="data[8][sl]">
                            <option value="1">1</option> 
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="vide">vide</option>
                        </select>
                        <select name="data[8][emplois_id]" >
                        @foreach ($ens as $em)
                        <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                      
                        @endforeach
                        </select></td>
                        <td>
                            <input type="number" name="data[9][sc]" value="2"  class="seance">
                            <input type="text" name="data[9][jour]" value="jeudi" class="jour">
                            <select name="data[9][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                            <select name="data[9][emplois_id]">

                            @foreach ($ens as $em )
                            <option value="{{ $em->id }}"  >{{ $em->name}}</option>
                          
                            @endforeach
                            </select></td>
                         
    </tr>
   
    <tr>
        <td>10h15 à 11h15
        </td>
        <td>
            <input type="number" name="data[10][sc]" value="3" class="seance">
            <input type="text" name="data[10][jour]" value="dimanche" class="jour">
           
                <select name="data[10][sl]">
                    <option value="1">1</option> 
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="vide">vide</option>
                </select>
                <select name="data[10][emplois_id]">
            @foreach ($ens as $em )
    <option value="{{ $em->id }}"  >{{ $em->name }}</option>
    @endforeach
            </select>
        
        </td>
            <td>
                <input type="number" name="data[11][sc]" value="3" class="seance">
                <input type="text" name="data[11][jour]" value="lundi" class="jour">
               
                    <select name="data[11][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>
                    </select>
                    <select name="data[11][emplois_id]">
                @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
       
                @endforeach
              
                </select></td>
                <td>
                    <input type="number" name="data[12][sc]" value="3"  class="seance">
                    <input type="text" name="data[12][jour]" value="mardi" class="jour">
             
                    <select name="data[12][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>
                    </select>
                    <select name="data[12][emplois_id]">
                    @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
             
                @endforeach
                   
                    </select></td>
                    <td>
                        <input type="number" name="data[13][sc]" value="3"  class="seance">
                        <input type="text" name="data[13][jour]" value="mercredi" class="jour">
                   
                        <select name="data[13][sl]">
                            <option value="1">1</option> 
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="vide">vide</option>
                        </select>
                        <select name="data[13][emplois_id]" >
                        @foreach ($ens as $em )
                        <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                      
                        @endforeach
                        </select></td>
                        <td>
                            <input type="number" name="data[14][sc]" value="3"  class="seance">
                            <input type="text" name="data[14][jour]" value="jeudi" class="jour">
                            <select name="data[14][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option >
                                 <option value="vide">vide</option>

                            </select>
                            <select name="data[14][emplois_id]">
                            @foreach ($ens as $em )
                            <option value="{{ $em->id }}"  >{{ $em->name}}</option>
                          
                            @endforeach
                            </select></td>
                          
    </tr>
   
    <tr>
        <td>11h15à 12h15
        </td>
        <td>
            <input type="number" name="data[15][sc]" value="4" class="seance">
            <input type="text" name="data[15][jour]" value="dimanche" class="jour">
            <select name="data[15][sl]">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="vide">vide</option>
            </select>
            <select name="data[15][emplois_id]">
            @foreach ($ens as $em )
    <option value="{{ $em->id }}"  >{{ $em->name }}</option>
    @endforeach
            </select>
        
        </td>
            <td>
                <input type="number" name="data[16][sc]" value="4" class="seance">
                <input type="text" name="data[16][jour]" value="lundi" class="jour">
                <select name="data[16][sl]">
                    <option value="1">1</option> 
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="vide">vide</option>
                </select>
                <select name="data[16][emplois_id]">
               
                @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
       
                @endforeach
              
                </select></td>
                <td>
                    <input type="number" name="data[17][sc]" value="4"  class="seance">
                    <input type="text" name="data[17][jour]" value="mardi" class="jour">
                    <select name="data[17][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>
                    </select>
                    <select name="data[17][emplois_id]">
                    @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
             
                @endforeach
                   
                    </select></td>
                    <td>
                        <input type="number" name="data[18][sc]" value="4"  class="seance">
                        <input type="text" name="data[18][jour]" value="mercredi" class="jour">
                        <select name="data[18][sl]">
                            <option value="1">1</option> 
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="vide">vide</option>

                        </select>
                        <select name="data[18][emplois_id]" >
                        @foreach ($ens as $em )
                        <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                      
                        @endforeach
                        </select></td>
                        <td>
                            <input type="number" name="data[19][sc]" value="4"  class="seance">
                            <input type="text" name="data[19][jour]" value="jeudi" class="jour">
                            <select name="data[19][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                            <select name="data[19][emplois_id]">
                            @foreach ($ens as $em )
                            <option value="{{ $em->id }}"  >{{ $em->name}}</option>
                          
                            @endforeach
                            </select></td>
                      
    </tr>
   
    <tr>
        <td>13h00 à 14h00
        </td>
        <td>
            <input type="number" name="data[20][sc]" value="5" class="seance">
            <input type="text" name="data[20][jour]" value="dimanche" class="jour">
            <select name="data[20][sl]">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="vide">vide</option>

            </select>
            <select name="data[20][emplois_id]">
            @foreach ($ens as $em )
    <option value="{{ $em->id }}"  >{{ $em->name }}</option>
    @endforeach
            </select>
        
        </td>
            <td>
                <input type="number" name="data[21][sc]" value="5" class="seance">
                <input type="text" name="data[21][jour]" value="lundi" class="jour">
                <select name="data[21][sl]">
                    <option value="1">1</option> 
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="vide">vide</option>
                </select>
                <select name="data[21][emplois_id]">
               
                @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
       
                @endforeach
              
                </select></td>
                <td>
                    <input type="number" name="data[22][sc]" value="5"  class="seance">
                    <input type="text" name="data[22][jour]" value="mardi" class="jour">
                    <select name="data[22][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>
                    </select>
                    <select name="data[22][emplois_id]">
                    @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
             
                @endforeach
                   
                    </select></td>
                    <td>
                        <input type="number" name="data[23][sc]" value="5"  class="seance">
                        <input type="text" name="data[23][jour]" value="mercredi" class="jour">
                        <select name="data[23][sl]">
                            <option value="1">1</option> 
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="vide">vide</option>
                        </select>
                        <select name="data[23][emplois_id]" >
                        @foreach ($ens as $em )
                        <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                      
                        @endforeach
                        </select></td>
                        <td>
                            <input type="number" name="data[24][sc]" value="5"  class="seance">
                            <input type="text" name="data[24][jour]" value="jeudi" class="jour">
                            <select name="data[24][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                            <select name="data[24][emplois_id]">
                            @foreach ($ens as $em )
                            <option value="{{ $em->id }}"  >{{ $em->name}}</option>
                          
                            @endforeach
                            </select></td>
                         
    </tr>
    <tr>
        <td>14h00 à 15h00
        </td>
        <td>
            <input type="number" name="data[25][sc]" value="6" class="seance">
            <input type="text" name="data[25][jour]" value="dimanche" class="jour">
            <select name="data[25][sl]">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="vide">vide</option>
            </select>
            <select name="data[25][emplois_id]">
            @foreach ($ens as $em )
    <option value="{{ $em->id }}"  >{{ $em->name }}</option>
    @endforeach
            </select>
        
        </td>
            <td>
                <input type="number" name="data[26][sc]" value="6" class="seance">
                <input type="text" name="data[26][jour]" value="lundi" class="jour">
                    <select name="data[26][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                <select name="data[26][emplois_id]">
               
                @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
       
                @endforeach
              
                </select></td>
                <td>
                    <input type="number" name="data[27][sc]" value="6"  class="seance">
                    <input type="text" name="data[27][jour]" value="mardi" class="jour">
                    <select name="data[27][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>

                    </select>
                    <select name="data[27][emplois_id]">
                    @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
             
                @endforeach
                   
                    </select></td>
                    <td>
                        <input type="number" name="data[28][sc]" value="6"  class="seance">
                        <input type="text" name="data[28][jour]" value="mercredi" class="jour">
                        <select name="data[28][sl]">
                            <option value="1">1</option> 
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="vide">vide</option>
                        </select>
                        <select name="data[28][emplois_id]" >
                        @foreach ($ens as $em )
                        <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                      
                        @endforeach
                        </select></td>
                        <td>
                            <input type="number" name="data[29][sc]" value="6"  class="seance">
                            <input type="text" name="data[29][jour]" value="jeudi" class="jour">
                            <select name="data[29][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                            <select name="data[29][emplois_id]">
                            @foreach ($ens as $em )
                            <option value="{{ $em->id }}"  >{{ $em->name}}</option>
                          
                            @endforeach
                            </select></td>
                        
    </tr>
    <tr>
        <td>15h00 à 16h00
        </td>
        <td>
            <input type="number" name="data[30][sc]" value="7" class="seance">
            <input type="text" name="data[30][jour]" value="dimanche" class="jour">
            <select name="data[30][sl]">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="vide">vide</option>
            </select>
            <select name="data[30][emplois_id]">
            @foreach ($ens as $em )
    <option value="{{ $em->id }}"  >{{ $em->name }}</option>
    @endforeach
            </select>
        
        </td>
            <td>
                <input type="number" name="data[31][sc]" value="7" class="seance">
                <input type="text" name="data[31][jour]" value="lundi" class="jour">
                    <select name="data[31][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                <select name="data[31][emplois_id]">
               
                @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
       
                @endforeach
              
                </select></td>
                <td>
                    <input type="number" name="data[32][sc]" value="7"  class="seance">
                    <input type="text" name="data[32][jour]" value="mardi" class="jour">
                    <select name="data[32][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>
                    </select>
                    <select name="data[32][emplois_id]">
                    @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
             
                @endforeach
                   
                    </select></td>
                    <td>
                        <input type="number" name="data[33][sc]" value="7"  class="seance">
                        <input type="text" name="data[33][jour]" value="mercredi" class="jour">
                        <select name="data[33][sl]">
                            <option value="1">1</option> 
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="vide">vide</option>
                        </select>
                        <select name="data[33][emplois_id]" >
                        @foreach ($ens as $em )
                        <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                      
                        @endforeach
                        </select></td>
                        <td>
                            <input type="number" name="data[34][sc]" value="7"  class="seance">
                            <input type="text" name="data[34][jour]" value="jeudi" class="jour">
                            <select name="data[34][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                            <select name="data[34][emplois_id]">
                            @foreach ($ens as $em )
                            <option value="{{ $em->id }}"  >{{ $em->name}}</option>
                          
                            @endforeach
                            </select></td>
                        
    </tr>
    <tr>
        <td>16h00 à 17h00
        </td>
        <td>
            <input type="number" name="data[35][sc]" value="8" class="seance">
            <input type="text" name="data[35][jour]" value="dimanche" class="jour">
            <select name="data[35][sl]">
                <option value="1">1</option> 
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="vide">vide</option>
            </select>
            <select name="data[35][emplois_id]">
            @foreach ($ens as $em )
    <option value="{{ $em->id }}"  >{{ $em->name }}</option>
    @endforeach
            </select>
        
        </td>
            <td>
                <input type="number" name="data[36][sc]" value="8" class="seance">
                <input type="text" name="data[36][jour]" value="lundi" class="jour">
                <select name="data[36][sl]">
                    <option value="1">1</option> 
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="vide">vide</option>
                </select>
                <select name="data[36][emplois_id]">
               
                @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
              
                @endforeach
              
                </select></td>
                <td>
                    <input type="number" name="data[37][sc]" value="8"  class="seance">
                    <input type="text" name="data[37][jour]" value="mardi" class="jour">

                    <select name="data[37][sl]">
                        <option value="1">1</option> 
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="vide">vide</option>
                    </select>
                    <select name="data[37][emplois_id]">
                    @foreach ($ens as $em )
                <option value="{{ $em->id }}"  >{{ $em->name }}</option>
             
                @endforeach
                   
                    </select></td>
                    <td>
                        <input type="number" name="data[38][sc]" value="8"  class="seance">
                        <input type="text" name="data[38][jour]" value="mercredi" class="jour">
                        <select name="data[38][sl]">
                            <option value="1">1</option> 
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="vide">vide</option>
                        </select>
                        <select name="data[38][emplois_id]" >
                        @foreach ($ens as $em )
                        <option value="{{ $em->id }}"  >{{ $em->name }}</option>
                      
                        @endforeach
                        </select></td>
                        <td>
                            <input type="number" name="data[39][sc]" value="8"  class="seance">
                            <input type="text" name="data[39][jour]" value="jeudi" class="jour">
                            <select name="data[39][sl]">
                                <option value="1">1</option> 
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="vide">vide</option>
                            </select>
                            <select name="data[39][emplois_id]">
                
                            @foreach ($ens as $em )
                            <option value="{{ $em->id }}"  >{{ $em->name}}</option>
                      
                            @endforeach
                            </select></td>
                          
    </tr>
   
    
    </tbody>
</table>
    </div>
<br>
<br>



        <input type="submit"  style="margin-left:39% " class="btn2 m25" value="Ajouter"/>
</form>
    
</div>

@endsection