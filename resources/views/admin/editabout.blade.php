@extends('admin.header')
@section('admin')
<div class="content-wrapper" style="min-height: 2170.78px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">


                    </ol>
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
<h3>EDIT ABOUT</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach($result as $value)
                        <form method="post" action="/editaboutaction/{{$value->id}}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">title</label>
                                    <input type="text" class="form-control" id="text" name=title placeholder="Enter here" value="{{$value->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="discription">discription</label>
                                    <textarea name="discription" class="form-control" value="{{$value->discription}}">{{$value->discription}}</textarea>

                                </div>
                                <div class="form-group"><button type="submit" class="btn btn-primary">Submit</button></div>

                            </div>
                        </form>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </section>
</div>
@endsection
<!-- /.card-body -->