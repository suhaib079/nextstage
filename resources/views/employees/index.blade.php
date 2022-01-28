@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="border rounded">
            <div class="border-bottom p-3 mb-2">
                Employees
            </div>
            <div class="px-3 py-2">
                <a href="{{route('employeestore')}}" class="btn btn-success mb-3">Create new employee</a>
                <div class="border mb-5 rounded">
                    <div class="border-bottom p-3 mb-3">
                        employee List
                    </div>
                    <div class="mx-3 mb-4">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">first name</th>
                                <th scope="col">last name</th>
                                <th scope="col">company</th>
                                <th scope="col">Email</th>
                                <th scope="col">phone</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$employee->firstname}}</td>
                                    <td>{{$employee->lastname}}</td>
                                    <td>{{$employee->company->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->phone}}</td>
                                    <td>
                                        <a href="{{route('employeeEdit', $employee->id)}}" type="button" class="btn btn-sm btn-light border mb-1">Edit</a> <br>
                                        <form action="{{route('deleteingemployee')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="employeeid" value="{{$employee->id}}">
                                            <button type="submit" class="btn btn-sm btn-danger ">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection