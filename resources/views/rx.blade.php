@extends('front.inc.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diagnosis</title>
    <link href="{{asset('front/styles')}}/layout.css" rel="stylesheet" type="text/css" media="all">
@yield('styles')
</head>

<body>


{{-- start Add Diagnosis --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> Add Diagnosis</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/a" method="post">
                @csrf
                <div class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" name="patient_id"  placeholder="Patient Id">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" name="Symptoms" placeholder="Symptoms and signs?">
                  </div>
                </div>
                  <br>
                  <div class="form-group">
                    <div class="col">
                      <input type="search" name="diagnosis" id="" class="form-control" placeholder="The diagnosis?">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <input type="search" name="Laboratory" id="" class="form-control" placeholder="Laboratory examination?">
                    </div>
                    <div class="col">
                        <input type="search" name="Radiology" id="" class="form-control" placeholder="X-ray examinations?">
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
        Add Prescription
      </button>
      <br> <br>
      <table id="datatable" class="table table-dark">
          <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">patient_id</th>
            <th scope="col">Snumber</th>
            <th scope="col">Dsearch</th>
            <th scope="col">Tsearch</th>  
            <th scope="col">Action</th>  
  
          </tr>
        </thead> 
    <tbody>
        @foreach ($rx as $rxdata)
          <tr>   
     <style>
       td{
         color: black;
       }
       </style>      
            <td style="color: black">{{ $rxdata->id }}</td>
  
            <td >{{$rxdata->patient_id}}</td>
            <td >{{$rxdata->Symptoms}}</td>
            <td >{{$rxdata->diagnosis}}</td>
            <td >{{$rxdata->Laboratory}}</td>
            <td >{{$rxdata->Radiology}}</td> 
            <td>
         
      
              <td><a href = '/delete/{{ $rxdata->id }}'  class="btn btn-danger" >Delete</a></td>
            </td>
          </tr>
       
    </tbody>
    @endforeach
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
