@extends('admin.header')
@section('admin')

<div class="content-wrapper" style="min-height: 2170.78px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>General Form</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">General Form</li>
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
                            <h3 class="card-title">ADD PRODUCT</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="post" action="/addproductaction" enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="productname">product name</label>
                                    <input type="text" class="form-control" id="text" name="name" placeholder="Enter">
                                </div>
                                <div class="form-group">
                                    <label for="productprize">product prize</label>
                                    <input type="text" class="form-control" id="text" name="prize" placeholder="enter">
                                </div>
                                <div class="form-group">
                                    <label for="productdiscription">product discription</label>
                                    <textarea name="discription" class="form-control">
                                       </textarea>
                                </div>
                                <div class="form-group">
                                    <label for="product image">Product Image</label>
                                    <input type="file" name="image" class="form-control">

                                </div>

                            </div>

                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
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