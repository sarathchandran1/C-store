@extends('admin.header')
@section('admin')
<form method="post" action="/vieworders1action">
 @csrf

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
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
                <h3 class="card-title">view orders</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>USERID</th>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>ADDRESS 1</th>
                    <th>ADDRESS 2</th>
                    <th>CITY</th>
                    <th>STATE</th>
                    <th>POSTCODE</th>
                    <th>NUMBER</th>
                    <th>EMAIL</th>
                    <th>METHOD</th>
                    <th>PAYMENT STATUS</th>
                  </tr>
                  </thead>
                 <tbody>
                  @foreach($result as $value)
                    <tr>
                    <td>{{$value->userid}}</td>
                      <td>{{$value->fname}}</td>
                      <td>{{$value->lname}}</td>
                      <td>{{$value->address1}}</td>
                      <td>{{$value->address2}}</td>
                      <td>{{$value->city}}</td>
                      <td>{{$value->state}}</td>
                      <td>{{$value->postcode}}</td>
                      <td>{{$value->number}}</td>
                      <td>{{$value->email}}</td>
                      <td>{{$value->method}}</td>
                      <td>{{$value->paymentstatus}}</td>
                      <td><a href="/cancel/{{$value->id}}">cancel</a></td>
                      <td><a href="/payementcomplted/{{$value->id}}">payement complted</a></td>
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