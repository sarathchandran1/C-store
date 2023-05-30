@extends('header')
@section('indexbody')

<div class="about_area">
    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-lg-5">
                <div class="about_info">
                    <div class="section_title mb-20px">
                        <span>About Us</span>

                    </div>
                    @foreach($result as $value)
                    <p>{{$value->discription}}</p>
                    @endforeach
                </div>
            </div>
            <div class="col-xl-7 col-lg-7">
                    <div class="about_thumb d-flex">
                        <div class="img_1">
                            <img src="img/about/about_1.png" alt="">
                        </div>
                        <div class="img_2">
                            <img src="img/about/about_2.png" alt="">
                        </div>
                    </div>
                </div>


        </div>
    </div>
</div>
@endsection