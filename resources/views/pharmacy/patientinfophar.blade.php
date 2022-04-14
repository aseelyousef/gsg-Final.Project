@extends('pharmacy.inc.layout')

@section('content')

@foreach($data as $data)


<head>
    <meta charset="utf-8">
    <title>Patient info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('front/styles')}}/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('front/styles')}}/view.css" rel="stylesheet" type="text/css" media="all">

     @yield('styles')

    <style type="text/css">
                body {
            color: #797979;
            background: #f1f2f7;
            font-family: 'Open Sans', sans-serif;
            padding: 0px !important;
            margin: 0px !important;
            font-size: 13px;
            text-rendering: optimizeLegibility;
            -webkit-font-smoothing: antialiased;
            -moz-font-smoothing: antialiased;
        }


        .bio-graph-heading {
            background: #1d8b94;
            color: #fff;
            text-align: center;
            font-style: italic;
            padding: 40px 110px;
            border-radius: 4px 4px 0 0;
            -webkit-border-radius: 4px 4px 0 0;
            font-size: 16px;
            font-weight: 300;
        }

        .bio-graph-info {
            color: #89817e;
        }

        .bio-graph-info h1 {
            font-size: 22px;
            font-weight: 300;
            margin: 0 0 20px;
        }

        .bio-row {
            width: 50%;
            float: left;
            margin-bottom: 10px;
            padding:0 15px;
        }

        .bio-row p span {
            width: 100px;
            display: inline-block;
        }

        .bio-chart, .bio-desk {
            float: left;
        }

        .bio-chart {
            width: 40%;
        }

        .bio-desk {
            width: 60%;
        }

     
</style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container bootstrap snippets bootdey">


<div class="row">
  <div class="profile-info col-md-9">
      <div class="panel">
        <div class="bio-graph-heading">
			<h1>{{ $data->fName }} {{ $data->lName }}</h1> 
        </div>
          <div class="panel-body bio-graph-info">
              <h1>Information</h1>
              <div class="row">
                  <div class="bio-row">
                      <p><span>First Name </span>: {{ $data->fName }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Last Name </span>: {{ $data->lName }}</p>
                  </div>
				  <div class="bio-row">
					<p><span>Address </span>: {{ $data->address }}</p>
				</div>
                  <div class="bio-row">
                      <p><span>Gender </span>: {{ $data->gender }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Birthday</span>:{{ $data->birthday }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Marital </span>:{{ $data->Marital }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Mobile </span>: {{ $data->phone }}</p>
                  </div>
                  <div class="bio-row">
                      <p><span>Phone </span>:{{ $data->phone2 }}</p>
                  </div>
               
                
                 

              </div>
          </div>
      </div>
   
   @endforeach
  </div>
</div>
{{-- --}}
<!-- add pres -->

    <br> <br>
    <table id="datatable" class="table table-dark">
        <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">patient_id</th>
          <th scope="col">Serial Number</th>
          <th scope="col">Drug Name</th>
          <th scope="col">Trade Name</th>  
          <th scope="col"><a href="/dr?id={{ $data->id }}  ">Doctor</a></th> 

        </tr>
      </thead> 
      <tbody>
        @foreach ($drug as $drugdata)
        <tr>   
   <style>
     td{
       color: black;
     }
     </style>      
          <td style="color: black">{{ $drugdata->id }}</td>

          <td >{{$drugdata->patient_id}}</td>
          <td >{{$drugdata->Snumber}}</td>
          <td >{{$drugdata->Dsearch}}</td>
          <td >{{$drugdata->Tsearch}}</td> 
          <td >{{$drugdata->Doctor}}</td>
     
        
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
</div>
       
    <br> 


<!-- Button trigger modal -->


<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script type="text/javascript"></script>
	
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</body>
</html>

@endsection
