@extends('doctor.inc.layout')

@section('content')

@foreach($data as $data)


<head>
    <meta charset="utf-8">
    <title>Patient info</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{asset('front/styles')}}/layout.css" rel="stylesheet" type="text/css" media="all">
    <link href="{{asset('front/styles')}}/view.css" rel="stylesheet" type="text/css" media="all">

     @yield('styles')


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
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title"> Add Prescription</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form action="/zxc" method="post">
                @csrf
                <div class="form-row">
                  <div class="col">
                    <input type="text" class="form-control" name="patient_id"  placeholder="Patient Id">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" name="Snumber" placeholder="Serial Number">
                  </div>
                </div>
                  <br>
                  <div class="form-group row">
                    <div class="col">
                      <input type="search" name="Dsearch" id="" class="form-control" placeholder="Drug Name">
                    </div>
                    <div class="col">
                      <input type="search" name="Tsearch" id="" class="form-control" placeholder="Trade Name">

                    </div>
                    <div class="col">
                      <input type="text" name="Doctor" id="" class="form-control" placeholder="Doctor">

                    </div>
                  </div>
                    <div class="form-row">
                      <div class="col">
                      <input type="date" name="date" id="" class="form-control" >

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
{{-- delete model--}}
<!-- Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
            <form id="delete_modal_form" action="/delete" method="post">
                  {{ csrf_field() }}
                  {{method_field('delete')}}


        <div class="modal-body">
          <input type="hidden" id="delete_aboutus_id">
          <h5> Are you sure? you want to delete prescription!</h5>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

        @foreach ($drug as $drugdata)
        <a href = 'delete/{{ $drugdata->id }}' class="btn btn-danger" >Yes. Delete It</a>

        @endforeach
        </div>
      </form>
    </div>
  </div>
</div>
{{-- end --}}
<div class="container">

    @if(count($errors) > 0)

    <div class="alert alert-danger">
     <ul>
       @foreach($errors->all() as $error)
       <li> {{$error}} </li>
       @endforeach
      </ul>
    </div>
    @endif

    @if(Session::has('succes'))
        <div class="alert alert-success">
           <p>  {{Session::get('succes') }}</p>
        </div>
    @endif

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        Add Prescription
    </button>
    <br> <br>
    <table id="datatable" class="table table-dark">
        <thead>
        <tr>

          <th scope="col">patient_id</th>
          <th scope="col">Serial number</th>
          <th scope="col">Drug search</th>
          <th scope="col">Tred search</th>
          <th scope="col"><a href="/dr?id={{ $data->id }}  ">Doctor</a></th>
          <th scope="col"> Date of the prescription</th>
          <th scope="col">Action</th>

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
          <td >{{$drugdata->patient_id}}</td>
          <td >{{$drugdata->Snumber}}</td>
          <td >{{$drugdata->Dsearch}}</td>
          <td >{{$drugdata->Tsearch}}</td>
          <td >{{$drugdata->Doctor}}</td>
        <td >{{$drugdata->date}}</td>

          <td><a href = "javascript:void(0)"  class="btn btn-danger deletebtn"  data-toggle="modal" data-target="#deletemodal">Delete</a></td>

        </tr>
        @endforeach
      </tbody>
    </table>
</div>

    <br>

{{-- start Add Diagnosis --}}
   <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                      <input type="text" name="diagnosis" id="" class="form-control" placeholder="The diagnosis?">
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col">
                      <input type="text" name="Laboratory" id="" class="form-control" placeholder="Laboratory examination?">
                    </div>
                    <div class="col">
                        <input type="texr" name="Radiology" id="" class="form-control" placeholder="X-ray examinations?">
                      </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save Diagnosis</button>
                  </div>
              </form>
        </div>

      </div>
    </div>
  </div>
{{--End Add diagnos--}}

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

    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Modal">
        Add diagnosis
      </button>
      <br> <br>
      <table id="datatable" class="table table-dark">
          <thead>
          <tr>

            <th scope="col">patient_id</th>
            <th scope="col">Symptoms</th>
            <th scope="col">diagnosis</th>
            <th scope="col">Laboratory</th>
            <th scope="col">Radiology</th>

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


            <td >{{$rxdata->patient_id}}</td>
            <td >{{$rxdata->Symptoms}}</td>
            <td >{{$rxdata->diagnosis}}</td>
            <td >{{$rxdata->Laboratory}}</td>
            <td >{{$rxdata->Radiology}}</td>

          </tr>

    </tbody>
    @endforeach
      </table>
  </div>
  <div class="container">
 <h3> View result Laboratory</h3>
    <table id="datatable" class="table table-dark">
    <thead>
    <tr>

        <th scope="col">patient_id</th>
        <th scope="col">Serial number</th>
        <th scope="col">Lab test results</th>
    </tr>
    </thead>
    <tbody>
           @foreach ($lab as $labdata)
        <tr>
      <style>
        td{
          color: black;
        }
        </style>


             <td >{{$labdata->patient_id}}</td>
             <td >{{$labdata->Snumber}}</td>
             <td >{{$labdata->lab}}</td>

           </tr>
           @endforeach
       </tbody>
     </table>
</div>


<div class="container">
  <br>
       <h3> 	X-Ray test results</h3>
       <br> <br>
       <table id="datatable" class="table table-dark">
           <thead>
           <tr>

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

               <td >{{$raddata->patient_id}}</td>
               <td >{{$raddata->Snumber}}</td>
               <td >{{$raddata->rad}}</td>

             </tr>
             @endforeach
         </tbody>
       </table>
   </div>

</div>



  <script>
    $(document).ready(function(){
      $('#datatable').DataTable();

        $('#datatable').on('click','.deletebtn', function)(){
          $tr = $(this).closest('tr');
          var drug = $tr.children("td").map(function(){
            return $(this).text();
          }).get();

        });
    });
  </script>

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
