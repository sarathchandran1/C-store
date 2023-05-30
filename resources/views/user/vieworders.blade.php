@extends('user.header')
@section('indexbody')

<div class="container m-5">
    <div class="row">
        <div class="col-sm-12">
            <table id="example2" class="table table-bordered table-primary table-stripped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>PRODUCT ID</th>
                        <th>USER ID</th>
                        <th>QUANTITY</th>
                        <th>TOTAL</th>
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


                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection