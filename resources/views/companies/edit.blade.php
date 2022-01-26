@extends('layouts.app')

@section('content')

    <div class="container">
      <h1>Edit {{$company->name}} company</h1>
      <form action="{{route('edditingcompany')}}" method="POST">
        @csrf
        <input type="hidden" name="companyid" value="{{$company->id}}">
        <div class="form-group">
          <label class="w-100" > name
          <input type="text" class="form-control" name="name" value="{{$company->name}}"  placeholder="company name" required>
        </label>
        </div>
        <div class="form-group">
          <label class="w-100" >Address
          <input type="text" class="form-control" name="address" value="{{$company->address}}" placeholder="Address">
        </label>
        </div>
        <div class="form-group">
          <label class="w-100" >Website
          <input type="text" class="form-control" name="website"  value="{{$company->website}}" placeholder="Website">
        </label>
        </div>
        <div class="form-group">
          <label class="w-100" >Email
          <input type="text" class="form-control" name="email" value="{{$company->email}}" placeholder="Email">
        </label>
        </div>
        <div class="form-group">
          <label class="w-100">logo
          <input type="file" class="form-control" name="logo" value="{{$company->logo}}" placeholder="logo">
        </label>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

@endsection