@extends('user.header')
@section('indexbody')


<form method="post" action="/buynowaction">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-lg-6">

                <div class="form-group">
                    <h1>BILLING DEATILES</h1>
                    <label for="first name">first name</label>
                    <input type="text" class="form-control" id="text" name="fname" placeholder="firstname*">
                </div>


                <div class="form-group">
                    <label for="last name">last name</label>
                    <input type="text" class="form-control" id="text" name="lname" placeholder="lastname*">
                </div>


                <div class="form-group">
                    <label for="adress">adress1</label>
                    <textarea name="address1" class="form-control" placeholder="adress*"></textarea>

                </div>


                <div class="form-group">
                    <label for="adress">adress2</label>
                    <textarea name="address2" class="form-control" placeholder="address line2"></textarea>
                </div>



                <div class="form-group">
                    <label for="city">city</label>
                    <input type="text" class="form-control" id="text" name="city" placeholder="city/town*">
                </div>


                <div class="form-group">

                    <label for="state">state</label>
                    <input type="text" class="form-control" id="text" name="state" placeholder="state/country*">
                </div>


                <div class="form-group">

                    <label for="postcode">postcode/zip</label>

                    <input type="text" class="form-control" id="text" name="postcode" placeholder="postcode/zip*">
                </div>


                <div class="form-group">

                    <label for="phonenumber">phone</label>
                    <input type="text" class="form-control" id="text" name="number" placeholder="phone*">
                </div>


                <div class="form-group">

                    <label for="email">email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address*">
                </div>


                <div class="form-group">

                    <label for="payment">payment mathod</label>
                    <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="method">
                        <option>select</option>
                        <option value="cashondelivary">cash on delivary</option>
                    </select>


                </div>
            </div>

            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-12">
                        <table id="example2" class="table table-bordered table-primary table-stripped">
                            <thead>
                                <tr>
                                    <th>PRODUCT NAME</th>
                                    <th>PRODUCT IMAGE</th>
                                    <th>PRODUCT PRIZE</th>
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
                                    <td><a href="/deletecart/{{$value->id}}">delete</td>

                                </tr>
                                @endforeach


                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-sm-12">
                        <h3>Total amount {{$total}}</h3>
                        <input type="hidden" name="total" value="{{$total}}">
                    </div>
                    <div class="col-sm-12">
                        <input type="submit" value="Checkout" class="btn btn-primary w-100">
                    </div>

                </div>
            </div>
        </div>
    </div>

</form>

@endsection