@extends('user.header')
@section('indexbody')
<div class="container m-5">
    <div class="row">
        <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-primary table-stripped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>name</th>
                        <th>prize</th>
                        <th>QUANTITY</th>
                        
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach($result as $value)
                    <tr>
                        <td>{{$value->name}}</td>
                        <td><img src="/product/{{$value->image}}" alt="" height="200px" width="200px"></td>
                        <td>{{$value->prize}}</td>
                        <td>{{$value->quantity}}</td>
                        <td>{{$value->total}}</td>
                        <td><a href="/deletecart/{{$value->id}}">delete</td>
                                                                                                                                                                                                          
                    </tr>
                    @endforeach
                    <tr>
                        <td>
                            <a href=/buynow class="btn btn-success w-100">Buynow</a>
                        </td>
                        <td>
                            <a href=/viewproduct class="btn btn-success w-100">Add Product</a>
                        </td>
                        <td></td>
                        <td>Total amount</td>
                        <td>{{$total}}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection