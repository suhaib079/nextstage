@extends('layouts.app')

@section('content')

    <div class="container">
      <form>
        <div class="form-group">
          <label for="exampleInputEmail1"> name</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="company name">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Address</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Address">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Website</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Website">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Email</label>
          <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email">
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

@endsection