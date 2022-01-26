@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="border rounded">
            <div class="border-bottom p-3 mb-2">
                Companies
            </div>
            <div class="px-3 py-2">
                <a href="{{route('companystore')}}" class="btn btn-success mb-3">Create new company</a>
                <div class="border mb-5 rounded">
                    <div class="border-bottom p-3 mb-3">
                        Company List
                    </div>
                    <div class="mx-3 mb-4">
                        <table class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Website</th>
                                <th scope="col">Email</th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach ($companies as $company)
                                <tr>
                                    <td>{{$company->name}}</td>
                                    <td>{{$company->address}}</td>
                                    <td>{{$company->website}}</td>
                                    <td>{{$company->email}}</td>
                                    <td>{{$company->logo}}</td>
                                    <td>
                                        <a href="{{route('companyEdit', $company->id)}}" type="button" class="btn btn-sm btn-light border mb-1">Edit</a> <br>
                                        <form action="{{route('deleteingcompany')}}" method="POST">
                                            @csrf
                                            <input type="hidden" name="companyid" value="{{$company->id}}">
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