<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">		
	    <meta name="description" content="">
    
    <title>Nexcom - Internet Services </title>
 

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('images/icon.png') }}">
     <!-- bootstrap -->

    <!-- Google font (font-family: 'Ubuntu', sans-serif;) -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,500i,700" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

   <!-- Custom stlylesheet -->
   <link rel="stylesheet" href="{{ asset('css/test-test.css') }}">
   <div id="header-area" class="header-area header-juu2">
   
   <div class="container-fluid headr" id="header">
  
    <div class="row align-items-center d-none d-lg-flex" >
        <div class="col-lg-3" >
            <div class="logo" >
                <a href="{{ url('/') }}" >
                    <img  src="{{ asset('images/logo/nexcom-logo.png') }}" alt="nexcom">
                </a>
            </div>
        </div>
        <div class="col-lg-8">
           

<nav class="mainmenu__nav" style="float:right; padding-top:30px;">
    <ul class="mainmenu">
    <!-- <li><a href="{{ url('/home') }}"><span class="d-none d-sm-block d-sm-none "><i class="fa fa-home"></i></span><span class="d-lg-none d-xl-none d-md-none">Home</span> </a></li> -->

       
        <li class="drop">
        <a class="" href="{{ url('/') }}">Get Internet</a>
            <ul class="dropdown__menu">
            <li><a class=""  href="{{ url('/nexcom-home') }}">Home Internet</a></li>
            <div class="dropdown-divider"></div>
                <li class=""><a class=""  href="{{ url('/nexcom-business') }}">Business Internet</a>
                
                  
                
                </li>

              
            </ul>
        </li>
        <li class="drop" >
                                <a class="" href="{{ url('/') }}">Solutions</a>
                                <ul class="dropdown__menu">
          
            <li><a class=""  href="{{ url('/coming-soon') }}">Domain Registration</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="" href="{{ url('/coming-soon') }}">Cloud Hosting </a></li>
         
             <div class="dropdown-divider"></div>
            <li class="sub">
                <a class="" href="{{ url('/coming-soon') }}">IoT </a>
                <ul class="third-level-menu">
                    <li><a class=""  href="{{ url('/coming-soon') }}">Home IoT</a></li>
                    <div class="dropdown-divider"></div>
                        <li><a class=""  href="{{ url('/coming-soon') }}">Business IoT</a></li>
        
                      
                    </ul>
               
            </li>
  
  

        </ul>
                            </li>
        <li><a class="" href="{{ url('/techshop') }}">Tecshop</a></li>
     

     
        <li class="drop" >
                                <a class="" href="{{ url('/') }}"><i class="fa fa-user"></i> My Account</a>
                                <ul class="dropdown__menu">
                                    <li><a  href="">Sign In</a></li>
                                    <li><a  href="">Sign Up</a></li>
                                    <li><a  href="{{url('/payment')}}">Quick Pay</a></li>
                                </ul>
                            </li>
       
    </ul>
</nav>


        </div>
 
    </div>
    <!-- Mobile Menu -->
    <div class="mobile-menu d-block d-lg-none">
        <div class="logo">
            <a href="{{ url('/') }}"><img src="{{ asset('images/logo/nexcom.png') }}" alt="nexcom"></a>
        </div>
      
    </div>
    <!-- Mobile Menu -->
</div>

   </div>


   <script></script>