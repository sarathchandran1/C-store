@extends('admin.header')
@section('admin')
<form method="post" action="/viewaboutaction">
 @csrf
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>viewabout</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">viewabout</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Discription</th>
                  </tr>
                </thead>
                <tbody>
                
                  @foreach($result as $value)
                  <tr>
                    <td>{{$value->id}}</td>  
                    <td>{{$value->title}}</td>
                    <td>{{$value->discription}}</td>
                    <td><a href="/deleteabout/{{$value->id}}">delete</a></td>
                    <td><a href="/editabout/{{$value->id}}">edit</a></td>
                    

                  </tr>
                  @endforeach
                </tbody>


              </table>
            </div>
            <!-- /.card-body -->
          </div>
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