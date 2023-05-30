@extends('header')
@section('indexbody')

                        <form method="post" action="/userregisteraction" enctype="multipart/form-data"> 
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="username">user name</label>
                                    <input type="text" class="form-control" id="text" name="name" placeholder="Enter">
                                </div>
                                <div class="form-group">
                                    <label for="email">email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="enter">

                                </div>
                                
                                <div class="form-group">
                                    <label for="phonenumber">phonenumber</label>
                                    <input type="number" class="form-control" id="number" name="number" placeholder="enter">
                                    
                                    <div class="form-group">
                                    <label for="password">password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="enter">

                                </div>
                                <div class="form-group">
                                    <label for="gender">gender</label>
                                    <select name="gender" id="gender">
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

@endsection