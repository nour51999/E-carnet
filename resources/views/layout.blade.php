<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="{{url('assets/img/favicon.ico')}}">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Gestion d'une Ecole</title>

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

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="{{url('assets/img/sidebar-5.jpg')}}">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                    school-NS
                </a>
            </div>
        
            <ul class="nav">
               
                <li class="active">
                    <a href="{{ url('/home')}}" >
                        <i class="pe-7s-graph"></i>
                        <p>Enseigant</p>
                    </a>
                </li>
                <li class="active">
                    <a href="{{ url('/admin/home')}}" >
                        <i class="pe-7s-graph"></i>
                        <p>Administration</p>
                    </a>
                </li>
               
                <li class="active">
                    <a href="{{ url('/home')}}" >
                        <i class="pe-7s-graph"></i>
                        <p>Parent</p>
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
                        <a href="{{ url('/')}}">
                                Home
                            </a>
                        </li>
                    </ul>

    
        
   

<ul class="nav navbar-nav navbar-right">
         
           <li>
            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
          
         </li>
         <li>
            <a href="/register">
               Inscription
             </a>
          
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
