@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">View Timetable</h1>
</div>

<div class="mb-2">
    <a href="{{ route('admin.timetable') }}" class="btn btn-secondary">Back</a>
    <a href="{{ route('admin.timetable-add') }}" class="btn btn-primary">Add data</a>
    <a href="{{ route('admin.timetable-edit') }}" class="btn btn-danger">Remove data</a>
</div>

<table class="table table-bordered">
    <tr>
        <th>Time</th>
        <th>Monday</th>
        <th>Tuesday</th>
        <th>Wednesday</th>
        <th>Thursday</th>
        <th>Friday</th>
    </tr>
    <tr>
        <td>9:00</td>
        <td>Math</td>
        <td>Science</td>
        <td></td>
        <td>History</td>
        <td>PE</td>
    </tr>
    <tr>
        <td>10:00</td>
        <td>Math</td>
        <td>Science</td>
        <td>English</td>
        <td>History</td>
        <td>PE</td>
    </tr>
    <tr>
        <td>11:00</td>
        <td>Math</td>
        <td>Science</td>
        <td>English</td>
        <td>History</td>
        <td>PE</td>
    </tr>
</table>

@endsection
