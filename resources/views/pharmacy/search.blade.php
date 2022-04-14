@extends('pharmacy.inc.layout')

@section('content')
<!DOCTYPE html>
<head>
  <title>Search Patient</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="{{asset('front/styles')}}/layout.css" rel="stylesheet" type="text/css" media="all">
@yield('styles')
</head>

<body>

  <div class="container mt-3">
    <h2>Filter Patient</h2>
    <form action="{{route('pharsearch')}}" method="POST">
      <input type="hidden" name="_token" value="{{ csrf_token() }}" />
      <input type="search" name="search" id="" class="form-control" >
      <br>
      <button type="submit" class="btn btn-warning  btn-lg" id="bt">search</button>
  </div> 
  </form>   
  

<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>id</th>
      <th>Firstname</th>
      <th>Lastname</th>
      <th>Phone</th>
      <th> Alterent Phone</th>
      <th>Identification Number</th>
      <th>Gender</th>
      <th>VIEW DATA</th>
    </tr>
  </thead>
  <tbody id="myDIV">
    @foreach($data as $data)
    <tr>
      <td>{{ $data->id }}</td>
      <td>{{ $data->fName }}</td>
      <td>{{ $data->lName }}</td>
      <td>{{ $data->phone }}</td>
      <td>{{ $data->phone2 }}</td>
      <td>{{ $data->idnumber }}</td>
      <td>{{ $data->gender }}</td>
    
    <td><a href="/pharpatient?id={{ $data->id }}" >click</a></td>
    <br><br>
    
    </tr>
    @endforeach
</table>
</div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myDIV tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

</body>

@endsection
