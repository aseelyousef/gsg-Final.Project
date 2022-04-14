@extends('doctor.inc.layout')

@section('content')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @section('title')
     Doctors of Patient
 @endsection
</head>
<body>
<table id="datatable" class="table table-dark">
   
      <tbody>
        @foreach ($drug as $drugdata)
        @endforeach

      
      </tbody>
    </table>

<table id="datatable" class="table table-dark">

          <thead>
          <tr>
            <th scope="col">id</th>
 
            <th scope="col">Doctor</th>  
            <th scope="col">Email</th>  

  
          </tr>
        </thead> 
    <tbody>
        @foreach ($dr as $Drdata)
          <tr>   
     <style>
       td{
         color: black;
       }
       </style>      
            
  
          <td >{{$drugdata->patient_id}}</td>
          <td >{{$Drdata->Doctor}}</td>
          <td > </td>
         
          </tr>
       
    </tbody>
    @endforeach
      </table>
  

</body>
</html>

@endsection