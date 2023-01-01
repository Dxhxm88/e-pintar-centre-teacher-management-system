@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Class</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Created date</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>5 Alpha</td>
            <td>12/22/2020</td>
            <td>
                <a href="{{ route('admin.kelas-edit') }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>3 Alpha</td>
            <td>12/22/2020</td>
            <td>
                <a href="{{ route('admin.kelas-edit') }}" class="btn btn-primary">Edit</a>
            </td>
        </tr>
    </tbody>
</table>
@endsection
