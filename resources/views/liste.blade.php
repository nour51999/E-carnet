<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png"  href="{{url('assets/img/new_logo.png')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title> E-Carnet</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="{{ url('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    
     

    <!-- Animation library for notifications   -->
    <link href="{{url('assets/css/animate.min.css')}}" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="{{url('assets/css/light-bootstrap-dashboard.css?v=1.4.0')}}" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="{{url('assets/css/pe-icon-7-stroke.css')}}" rel="stylesheet" />
    
    <link rel="stylesheet" href="{{ url('assets/css/styleh.css')}}">
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{url('assets/img/a.jpg')}}">

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="/" class="simple-text">
             E-Carnet
                </a>
            </div>
            
            
            <ul class="nav">

                <ul class="nav">
                    <li class="active">
                        <a href="/classes">
                            <img src={{ asset("image/icons/task.png") }} class="icon">
                            <p>Classes</p>
                        </a>
                    </li>
         
                <li class="active">
                    <a href="/students">
                        <img src={{ asset("image/icons/e.png") }} class="icon">
                        <p>Liste Eleve</p>
                    </a>
                </li>
     
           
                <li class="active">
                    <a href="/ens">
                        <img src={{ asset("image/icons/prof.png") }} class="icon">
                        <p>Liste Enseignantt</p>
                    </a>
                </li>
               
                <li class="active">
                    <a href="/parens" >
                        <img src={{ asset("image/icons/parent.png") }} class="icon">
                        <p>Liste Parent</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/users" >
                        <img src={{ asset("image/icons/user.png") }} class="icon">
                        <p>Liste Utilisateur</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/conseils" >
                        <img src={{ asset("image/icons/j.png") }} class="icon">
                        <p>Conseil Dicipline</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/convocations">
                        <img src= {{ asset("image/icons/l.png") }} class="icon">
                        <p>Convocations</p>
                    </a>
                </li>
                <li class="active">
                    <a href="/emplois">
                        <img src={{ asset("image/icons/empl.png") }} class="icon">
                        <p>Emplois du temps</p>
                    </a>
                </li>
               
                 
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
       
               
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                        <a href="" style="color:#976cd8;font-size: 1.5em;" class="h">
                                Espace Admin
                            </a>
                        </li> 
                        
                    </ul>

                     

<ul class="nav navbar-nav navbar-right">
         
           <li>
            <a class="dropdown-item h" style="color:#976cd8;" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit(); "><img src={{ asset("image/icons/logout.png") }} class="icon m25">
                {{ __('Deconnexion') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
          
         </li>

 </ul>
 
                </div>
            </div>
        </nav>
     


        

        @yield('content')
       
    </div>
   
</div>


</body>

    <!--   Core JS Files   -->
    <script src="{{url('assets/js/jquery.3.2.1.min.js')}}" type="text/javascript"></script>
    <script src="{{url('assets/js/jquery.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assets/js/bootstrap.min.js')}}" type="text/javascript"></script>
    

	<!--  Charts Plugin -->
	<script src="{{url('assets/js/chartist.min.js')}}"></script>

    <!--  Notifications Plugin    -->
    <script src="{{url('assets/js/bootstrap-notify.js')}}"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="{{url('assets/js/light-bootstrap-dashboard.js?v=1.4.0')}}"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="{{url('assets/js/demo.js')}}"></script>
    
 

</html>

               


                  
                  
