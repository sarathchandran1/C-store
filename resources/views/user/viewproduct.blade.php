@extends('user.header')
@section('indexbody')
<div class="offers_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title text-center mb-100">
                    <span></span>
                    <h3> VIEW PRODUCTS</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($result as $value)
            <div class="col-xl-3 col-md-3">
                <div class="single_offers">
                    <div class="about_thumb">
                        <img src="/product/{{$value->image}}" height="200px" width=200px>
                    </div>
                    <center>
                        <h3>{{$value->name}}</h3>
                        <h3>Rs.{{$value->prize}}</h3>
                    </center>
                    <a href="/addtocart/{{$value->id}}" class="book_now">ADD TO CART</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection