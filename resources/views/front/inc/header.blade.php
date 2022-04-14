
<!DOCTYPE html>
<head>
<title>EPS</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="{{asset('front/styles')}}/layout.css" rel="stylesheet" type="text/css" media="all">
@yield('styles')
</head>
<body id="top">
<!-- start one sidbar -->
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <div class="fl_left"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><i class="fas fa-phone rgtspace-5"></i> +972 5979 755 97</li>
          <li><i class="far fa-envelope rgtspace-5"></i> aseel@gmail.com</li>
        </ul>
  <!-- end one sidebar -->
      </div>
      <div class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="nospace">
          <li><a href="#topbar"><i class="fas fa-home"></i></a></li>
          <li><a href="#" title="Help Centre"><i class="far fa-life-ring"></i></a></li>

          <li> <a href="{{ route("login") }}" title="Login"><i class="fas fa-sign-in-alt"></i></a></li>
          <li><a href="{{ route("login") }}" title="Log out"><i class="fas fa-edit"></i></a></li>

          <li id="searchform">
            <div>
              <form action="#" method="post">
                <fieldset>
                  <legend>Quick Search:</legend>
                  <input type="text" placeholder="Enter search term&hellip;">
                  <button type="submit"><i class="fas fa-search"></i></button>
                </fieldset>
              </form>
            </div>
          </li>
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
        <h1><a href="{{ route("index") }}">E<span style="color:#1d8b94;">PS</span></a></h1>
        <!-- <img src="{{asset('front/images')}}/Untitled-4.png" style="height: 90%; width:60px" alt=""> -->
        <!-- ################################################################################################ -->
      </div>
      <nav id="mainav" class="fl_right"> 
        <!-- ################################################################################################ -->
        <ul class="clear">
          <li class="active"><a href="{{ route("index") }}">Home</a></li>
          <li><a class="drop" href="#">Services</a>
            <ul>
              <li><a href="{{ route("doctor") }}">Doctors</a></li>
              <li><a class="drop" href="#">E-priscriptin</a>
              <ul>
                <li><a href="{{ route("patient") }}">Patient</a>
                  <ul>
                    <li><a href="{{ route("addpatient") }}">Add Patients</a></li>
                    <li><a href="{{ route("search") }}">Search Patients</a></li>
                 </ul>
                </li>
                <li><a href="#">Visits list</a></li>
              </ul>
              </li>
              <li><a href="pages/basic-grid.html">Pharmacists</a></li>
              <li><a href="pages/font-icons.html">Font Icons</a></li>
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