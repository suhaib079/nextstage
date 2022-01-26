@extends('layouts.app')

@section('content')

    <div class="container">
      <h1>create new company</h1>
      <form action="{{route('addingcompany')}}" method="POST">
        @csrf
        <div class="form-group">
          <label class="w-100" > name
          <input type="text" class="form-control" name="name"   placeholder="company name" required>
        </label>
        </div>
        <div class="form-group">
          <label class="w-100" >Address
          <input type="text" class="form-control" name="address" placeholder="Address">
        </label>
        </div>
        <div class="form-group">
          <label class="w-100" >Website
          <input type="text" class="form-control" name="website" placeholder="Website">
        </label>
        </div>
        <div class="form-group">
          <label class="w-100" >Email
          <input type="text" class="form-control" name="email" placeholder="Email">
        </label>
        </div>
        <div class="form-group">
          <label class="w-100">logo
          <input type="file" class="form-control" name="logo" placeholder="logo">
        </label>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

@endsection