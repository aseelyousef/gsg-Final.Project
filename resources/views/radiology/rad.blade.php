@extends('radiology.inc.layout')

@section('content')

@section('title')
   Radiology
@endsection
<link href="{{asset('front/styles')}}/view.css" rel="stylesheet" type="text/css" media="all">
<div class="wrapper bgded overlay" style="background-image:url('{{asset('front/images')}}/demo/backgrounds/01.png');">
    <div class="hoc container testimonial clear"> 
      <article><img src="{{asset('front/images')}}/demo/3.ico" style="height: 90px;" alt="">
        <h6 class="heading font-x1">Dr. {{ Auth::user()->name }}</h6>
  
    </div>
  </div>


  <main class="hoc container clear"> 
    <!-- main body -->
<div class="content"> 
 
<!-- ################################################################################################ -->
<div class="container">
  <div class="from-group col-12 p-0">
    <div>
      @if (Session::has('success'))
          <div class="alert alert-success">
          {{Session::get('success')}}
          </div>
      @endif
    </div>
  </div>
  <form    style="padding: 25px;" action="{{route('doctor')}}" method="POST">
  @csrf
        <h2>Register Patient</h2>
      <div class="form-row">
      
        <div class="col">
          <input class="form-control" type="tel" placeholder="phone" id="example-tel-input" name="phone" required>
      </div>   
          <div class="col">
            <input class="form-control" type="text" placeholder="Address" name="address" required>
        </div>
      </div>
    <br>
      <div class="form-group row">
        <div class="col">
            <input class="form-control" type="text" placeholder="Medical Specialty" name="specialty" required>
        </div>
      </div>
    <br>   <button type="submit" class="btn btn-primary"> Sign in </button>
</div>
  
      <br><br>
<!-- -->
    <div class="panel">
      <div class="panel-body bio-graph-info">
      <h1>  Information</h1>
          <div class="row">
              <div class="bio-row">
                  <p><span> Name </span>:  {{ Auth::user()->name }}</p>
              </div>
                
                <div class="bio-row">
                    <p><span>Phone Number </span>:  </p>
                </div>
                <div class="bio-row">
                    <p><span>Address</span>:</p>
                </div>
                <div class="bio-row">
                  <p><span>Medical Specialty</span>:</p>
                </div>
                <div class="bio-row">
                  <p><span> Email</span>: {{ Auth::user()->email }}</p>
                </div>
          </div>
      </div>
    </div> 

    <!-- ################################################################################################ -->
    <!-- / main body -->

  </main>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

@endsection
