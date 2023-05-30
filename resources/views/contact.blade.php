@extends('header')
@section('indexbody')


<form method="post" action="/contactaction">
  @csrf
  
  <div class="card-body">
    <div class="form-group">
      <label for="name">NAME</label>
      <input type="text" class="form-control" name="name" placeholder="Enter here">
    </div>
    <div class="form-group">
      <label for="number">PHONE NUMBER</label>
      <input type="number" class="form-control" name="number" placeholder="enter here">

    </div>
    <div class="form-group">
      <label for="email">EMAIL</label>
      <input type="email" class="form-control" name="email" placeholder="Enter here">
    </div>
    <div class="form-group">
      <label for="name">user name</label>
      <textarea class="form-control" name="message" placeholder="Enter here"></textarea>
    </div>

  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-warning" fdprocessedid="i9ekub">SEND MESSAGE</button>
  </div>
</form>

@endsection