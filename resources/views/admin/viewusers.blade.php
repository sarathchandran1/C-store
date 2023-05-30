@extends('admin.header')
@section('admin')
<form method="post" action="/viewusersaction">
@csrf
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>VIEW USERS</h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
              
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    
                  
                    <th>ID</th>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>NUMBER</th>
                    <th>PASSWORD</th>
                    <th>GENDER</th>
                  </tr>
                  </thead>
                 <tbody>
                 @foreach($result as $value)
                    <tr>
                    <td>{{$value->id}}</td>
                    <td>{{$value->name}}</td>
                    <td>{{$value->email}}</td>
                    <td>{{$value->number}}</td>
                    <td>{{$value->password}}</td>
                    <td>{{$value->gender}}</td>
                    
                  </tr>
                 @endforeach
                  </tbody>
                </table>
                  </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

@endsection