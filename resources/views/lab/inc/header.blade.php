<!DOCTYPE html>
<head>
  <title>EPS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="{{asset('front/styles')}}/layout.css" rel="stylesheet" type="text/css" media="all">
  @yield('styles')
           
</head>
  <body>


      <x-slot name="header">
          
      </x-slot>
      <div class="wrapper row0">
      <div id="topbar" class="hoc clear">
        <div class="fl_left"> 
          <!-- ################################################################################################ -->
          <ul class="nospace">
            <li><i class="fas fa-syringe rgtspace-5"></i>DR. {{ Auth::user()->name }}</li>
            <li><i class="far fa-envelope rgtspace-5"></i>{{ Auth::user()->email }}</li>
          </ul>
    <!-- end one sidebar -->
        </div>
        <div class="fl_right"> 
          <!-- ################################################################################################ -->
  <ul class="nospace">
  {{--log out --}}       
    <!-- Responsive Settings Options -->
    <style>
      a{
        color:#53D3DE;
      }
    </style>
      <div class="mt-3 space-y-1">
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
              @csrf

              <x-responsive-nav-link :href="route('login')"
                      onclick="event.preventDefault();
                                  this.closest('form').submit();">
                  {{ __('Log out') }}
              </x-responsive-nav-link>
          </form>
      </div>
  </div>
  {{--log out --}}        
          </ul>
          <!-- ################################################################################################ -->
        </div>
      </div>
    </div>
    <!-- -->
    <div class="wrapper row1">
      <header id="header" class="hoc clear">
        <div id="logo" class="fl_left"> 
          <!-- ################################################################################################ -->
          <h1><a href="#">E<span style="color:#1d8b94;">PS</span></a></h1>
          <!-- <img src="{{asset('front/images')}}/Untitled-4.png" style="height: 90%; width:60px" alt=""> -->
          <!-- ################################################################################################ -->
        </div>
        <nav id="mainav" class="fl_right"> 
          <ul class="clear">
            <li class="active"><a href="#">Home</a></li>
            <li><a class="drop" href="#">Services</a>
              <ul>
              <li><a href="{{ route("laboratory") }}">Laboratory </a></li>
               
         
                 
                      <li><a href="{{ route("searchlab") }}">Search Patients</a></li>
              
             
            
              </ul>
            </li>
            <li><a href="#introblocks">Our Services</a></li>
            <li><a href="#latest">Our Team</a></li>
            <li><a href="#footer">Contact Us</a></li>

          </ul>
          <!-- ################################################################################################ -->
        </nav>
 </header>
</div> 
