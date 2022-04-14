@extends('doctor.inc.layout')

@section('content')

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="{{asset('front/styles')}}/layout.css" rel="stylesheet" type="text/css" media="all">
     @yield('styles')
@section('title')
 firas
@endsection
</head>
<body>
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
    <form    style="padding: 25px;" action="{{route('store')}}" method="POST">
    @csrf
          <h2>Register customer</h2>
        <div class="form-row">
     
            <div class="col">
              <input type="text" class="form-control" placeholder="First name" name="fName" required>
            </div>
         
            <div class="col">
              <input class="form-control" type="text" placeholder="Address" name="address" required>
          </div>
        </div>
      <br>
        <div class="form-group row">
          <div class="col">
              <input class="form-control" type="id" placeholder="Identification" name="idnumber" required>
          </div>
          <div class="col">
              <input class="form-control" type="tel" placeholder="enter amount" id="example-tel-input" name="amount" required>
          </div>
         
            </div>
  
            <div id="gender-group" class="form-group{{ $errors->has('money') ? ' has-error' : '' }}">
              <label for="money" class="col-md-4 control-label">money</label>
            <div class="col-md-6">
                <input id="female" type="radio"class="form-control" name="money" value="Female" {{ (old('sex') == 'female') ? 'checked' : '' }} >
                in
              <input id="male" type="radio"class="form-control" name="money"  class="custom-control-input" value="Male" {{ (old('sex') == 'male') ? 'checked' : '' }} >
              out
              @if ($errors->has('money'))
              <span class="help-block">
              <strong>{{ $errors->first('money') }}</strong>
              </span>
              @endif
            </div>
          </div> 

            <div class="form-group row">

          <div class="col">
              <label  for="birthday">Birthday:</label>
              <input class="form-control" type="date" id="birthday" name="birthday">
          </div>
        
          </div>
      <br><br>   <button type="submit" class="btn btn-primary"> Sign in </button>

    </form>
  </div>
  
  @endsection