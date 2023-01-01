@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Manage Teachers</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Subject</th>
            <th scope="col">Status</th>
            <th scope="col">Registered date</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>John</td>
            <td>Science</td>
            <td>Public</td>
            <td>12/22/2020</td>
            <td>
                <a href="{{ route('admin.teacher-edit') }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('admin.teacher-edit') }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('admin.teacher-query') }}" class="btn btn-info text-white">Query</a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Abu</td>
            <td>Math</td>
            <td>Not Public</td>
            <td>12/22/2020</td>
            <td>
                <a href="{{ route('admin.teacher-edit') }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('admin.teacher-edit') }}" class="btn btn-danger">Delete</a>
                <a href="{{ route('admin.teacher-query') }}" class="btn btn-info text-white">Query</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
