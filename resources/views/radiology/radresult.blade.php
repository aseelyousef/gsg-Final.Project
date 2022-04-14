@extends('radiology.inc.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>drug</title>
</head>
<body>


{{-- start Add lab result --}}
   <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> Add X-ray</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/radiology" method="post">
             
                @csrf
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                <div class="form-row">
                  <div class="col">
                    <input type="number" class="form-control" name="patient_id"  placeholder="Patient Id">
                  </div>
                  <div class="col">
                    <input type=" " class="form-control" name="Snumber" placeholder="Serial Number">
                  </div>
                </div>
                <br>
 
                    <div class="form-group">
                        <label for="rad">X-ray test results</label>
                        <textarea class="form-control" name="rad" id="ray" rows="
                        3"></textarea>
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
{{--End Add --}}

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
        Add x-ray results
      </button>
      <br> <br>
      <table id="datatable" class="table table-dark">
          <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">patient_id</th>
            <th scope="col">Serial number</th>
            <th scope="col">X-Ray test results</th>
       
  
          </tr>
        </thead> 
        <tbody>
            @foreach ($rad as $raddata)
            <tr>   
       <style>
         td{
           color: black;
         }
         </style>      
              <td style="color: black">{{ $raddata->id }}</td>
    
              <td >{{$raddata->patient_id}}</td>
              <td >{{$raddata->Snumber}}</td>
              <td >{{$raddata->rad}}</td>
           
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
