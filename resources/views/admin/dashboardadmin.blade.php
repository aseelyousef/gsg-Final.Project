@extends('layouts.master')

@section('title')
    Dashboard | Admin
@endsection

@section('content')
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Users Table</h4>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table">
            <thead class=" text-primary">
              <th> Name</th>
              <th> Email</th>
              <th> City</th>
              <th> Phone</th>
<th>Action</th>

            </thead>
            <tbody>
            @foreach ($data as $UserData)
              <tr>
                <td>{{$UserData->name}}</td>
                <td>{{$UserData->email}}</td>
                <td>{{$UserData->city}}</td>
                <td>{{$UserData->phone}}</td>

              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@section('scripts')

@endsection
