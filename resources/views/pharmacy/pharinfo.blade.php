@extends('pharmacy.inc.layout')

@section('content')


<!-- ################################################################################################ -->
<div class="wrapper bgded overlay" style="background-image:url('{{asset('front/images')}}/demo/backgrounds/01.png');">
    <div class="hoc container testimonial clear"> 
   
      <article><img src="{{asset('front/images')}}/demo/3.ico" style="height: 90px;" alt="">
        <h6 class="heading font-x1">Dr. {{ Auth::user()->name }}</h6>
  
    
    </div>
  </div>
  <form>
   <style>
     .form-group {
    padding: 70px;
    /* text-align: center; */
    font-size: larger;
    text-shadow: 0 0 black;
    font-style: italic;
      }
      h1{
        font-size: 35px
      }
   </style>
    <div class="form-group"> 
      <h1>  Information</h1>
      <p><span> Name </span>:  {{ Auth::user()->name }}</p>
      <p><span> Email</span>: {{ Auth::user()->email }}</p>
        </div>
    
  </form>
  

  
@endsection
