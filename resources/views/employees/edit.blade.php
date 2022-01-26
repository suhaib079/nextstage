@extends('layouts.app')

@section('content')

    <div class="container">
      <h1>Edit {{$employee->firstname}} info</h1>
      <form action="{{route('edditingemployee')}}" method="POST">
        @csrf
        <input type="hidden" name="employeeid" value="{{$employee->id}}">
        <div class="form-group">
          <label class="w-100" > first name
          <input type="text" class="form-control" name="firstname" value="{{$employee->firstname}}"  placeholder="first name" required>
        </label>
        </div>
        <div class="form-group">
          <label class="w-100" >last name
          <input type="text" class="form-control" name="lastname" value="{{$employee->lastname}}" placeholder="lastname">
        </label>
        </div>
        <div class="form-group">
            <label class="w-100">company
              <select class="form-control"  name="company_id">
                @foreach ($companies as $company)
                <option value="{{$company->id}}">{{$company->name}}</option>
                @endforeach
              </select>
            </label>
          </div>
        <div class="form-group">
          <label class="w-100" >Email
          <input type="text" class="form-control" name="email" value="{{$employee->email}}" placeholder="Email">
        </label>
        </div>
        <div class="form-group">
          <label class="w-100">phone
          <input type="number" class="form-control" name="phone" value="{{$employee->phone}}" placeholder="phone">
        </label>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

@endsection