 @extends('header')
 @section('indexbody')
 <form method="post" action="/useraction" enctype="multipart/form-data">
     @csrf
     <div class="card-body">
         <div class="form-group">
             <label for="email">email</label>
             <input type="email" class="form-control" id="email" name="email" placeholder="Enter">
         </div>
         <div class="form-group">
             <label for="password">password</label>
             <input type="password" class="form-control" id="password" name="password" placeholder="enter">
         </div>

     </div>



     <div class="card-footer">
         <button type="submit" class="btn btn-primary">Submit</button>
     </div>
 </form>
 @endsection