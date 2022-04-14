@extends('doctor.inc.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    

    
</head>
<body>
  <div class="wrapper bgded overlay" style="background-image:url('{{asset('front/images')}}/demo/backgrounds/01.png');">
    <div class="hoc container testimonial clear"> 
      <!-- ################################################################################################ -->
      <article><img src="{{asset('front/images')}}/demo/3.ico" style="height: 90px;" alt="">
        <h6 class="heading font-x1">Dr. {{ Auth::user()->name }}</h6>
  
      <!-- ################################################################################################ -->
    </div>
  </div>


{{-- start Add lab result --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> Add information</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/doctor" method="post">
                @csrf
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="form-row">
                 
                  <div class="col">
                    <input type="text " class="form-control" name="address" placeholder=" Address">
                  </div>
                  <div class="col">
                    <input type="text " class="form-control" name="phone" placeholder="  Phone Number">
                  </div>
                </div>
                <br>
                
                    <div class="form-group">
                        <div class="col">
                            <input type="text " class="form-control" name="specialty" placeholder="  Medical specialty">
                          </div>
                       
                    </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Data</button>
                  </div>
              </form>
        </div>
    
      </div>
    </div>
  </div>
{{--End Add Prescription--}}

<div class="container">
 <br>


    @if(count($errors) > 0)

    <div class="alert alert-danger">
     <ul>
       @foreach($errors->all() as $error)
       <li> {{$error}} </li>
       @endforeach
      </ul>
    </div>
    @endif

    @if(\Session::has('success'))
        <div class="alert alert-success">
           <p>  {{\Session::get('success') }}</p>
        </div>
    @endif

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add information
      </button>

  <br> <br>
  <table id="datatable" class="table table-dark">
      <thead>
      <tr>
    
        <th scope="col">Phone number</th>
        <th scope="col">Address</th>
        <th scope="col">specialty </th>
   

      </tr>
    </thead> 
    <tbody>
      @foreach ($doc as $docdata)
        <tr>   
   <style>
     td{
       color: black;
     }
     </style>      
 

          <td >{{$docdata->phone}}</td>
          <td >{{$docdata->address}}</td>
          <td >{{ $docdata->specialty }}</td>
       
        </tr>
        @endforeach
    </tbody>
  </table>
</div>
  <!-- Button trigger modal -->
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</html>

@endsection
