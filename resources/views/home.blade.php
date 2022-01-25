@extends('layouts.app')

@section('content')
    <div class="container my-5">
        <div class="border rounded">
            <div class="border-bottom p-3 mb-2">
                Companies
            </div>
            <div class="px-3 py-2">
                <button class="btn btn-success mb-3">Create new company</button>
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
                            <tr>
                                <th>-</th>
                                <td>-</td>
                                <td>-</td>
                                <td>-</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-light border mb-1">Edit</button> <br>
                                    <button type="button" class="btn btn-sm btn-danger ">Delete</button>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection