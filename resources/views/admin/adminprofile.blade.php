@extends('admin.header')
@section('admin')
<div class="content-wrapper" style="min-height: 2170.78px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>ADMIN PROFILE</h1>
                </div>
               
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">ADD ADMIN</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach($result as $value)
                        <form method="post" action="/adminprofileaction">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="username">username</label>
                                    <input type="text" class="form-control" value="{{$value->username}}" name=username placeholder="Enter here">
                                </div>
                                <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="text" class="form-control" value="{{$value->password}}" id="password" name="password">

                                </div>

                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        @endforeach
                    </div>
                    <!-- /.card -->





                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


@endsection