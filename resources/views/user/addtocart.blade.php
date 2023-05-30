@extends('user.header')
@section('indexbody')

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-sm-3"></div>
            <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">

                    <!-- /.card-header -->
                    <!-- form start -->
                    @foreach($result as $value)
                    <form method="post" action="/addtocartaction">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <center> <label for="productname">
                                        <h2 class="text-uppercase">{{$value->name}}</h2>
                                    </label></center>
                                <input type="hidden" name="id" value="{{$value->id}}">
                            </div>
                            <div class="form-group">
                                <center> <label for="product image"><img src="/product/{{$value->image}}" height="200px" width="200px"></label></center>

                            </div>
                            <div class="form-group">
                                <label for="quantity">quantity</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" min="1" value="1">
                            </div>

                            <div class="form-group">
                                <label for="prize">prize</label>
                                <input type="text" class="form-control" id="prize" name="prize" value="{{$value->prize}}">
                            </div>
                            <div class="form-group">
                                <label for="total">total</label>
                                <input type="number" class="form-control" id="total" name="total" value="{{$value->prize}}">

                            </div>


                        </div>

                        <!-- /.card-body -->

                        <div class="card-footer">
                            <center><button type="submit" class="btn btn-primary">ADD CART</button></center>
                        </div>
                    </form>
                    @endforeach
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
                    <script>
                        $(document).ready(function() {
                            $('#quantity').change(function() {
                                var quantity = $('#quantity').val();
                                var total = $('#prize').val();
                                $('#total').val(parseInt(quantity) * parseInt(total));
                            })
                        })
                    </script>


                    <!-- /.card -->





                </div>
                <!--/.col (left) -->

            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
</section>

@endsection