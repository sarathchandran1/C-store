@extends('user.header')
@section('indexbody')
<div class="content-wrapper" style="min-height: 2170.78px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>MY PROFILE</h1>
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
                        
                        <!-- /.card-header -->
                        <!-- form start -->
                        @foreach($result as $value)
                        <form method="post" action="/myprofileaction/{{$value->id}}"> 
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">name</label>
                                    <input type="text" class="form-control" value="{{$value->name}}" id="name" name="name" placeholder="enter">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" value="{{$value->email}}" id="email" name="email" placeholder="enter">

                                </div>
                                
                                <div class="form-group">
                                    <label for="phonenumber">phonenumber</label>
                                    <input type="number" class="form-control" value="{{$value->number}}" id="phonenumber" name="number" placeholder="enter">
                                    
                                    <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" class="form-control" value="{{$value->password}}" id="password" name="password" placeholder="enter">

                                </div>
                                <div class="form-group">
                                    <label for="gender">gender</label>
                                    <select name="gender" class="form-control"  id="gender" name="gender">
                                        <option value="{{$value->gender}}" selected>{{$value->gender}}</option>
                                        <option value="male">male</option>
                                        <option value="male">female</option>
                                        <option value="male">others</option>
                                    </select>
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