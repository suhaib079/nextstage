@extends('layouts.app')

@section('content')

    <div class="container">
      <h1>create new employee</h1>
      <form action="{{route('addingemployee')}}" method="POST">
        @csrf
        <div class="form-group">
          <label class="w-100" > first name
          <input type="text" class="form-control" name="firstname"   placeholder="first name" required>
        </label>
        </div>
        <div class="form-group">
          <label class="w-100" >last name
          <input type="text" class="form-control" name="lastname" placeholder="last name">
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
          <label class="w-100">email
          <input type="text" class="form-control" name="email" placeholder="email">
        </label>
        </div>
        <div class="form-group">
          <label class="w-100">phone
          <input type="number" class="form-control" name="phone" placeholder="phone">
        </label>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

@endsection