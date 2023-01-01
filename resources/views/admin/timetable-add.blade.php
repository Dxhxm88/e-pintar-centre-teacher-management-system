@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Data Timetable</h1>
</div>

<div class="mb-2">
    <a href="{{ route('admin.timetable-view') }}" class="btn btn-secondary">Back</a>
</div>

<form class="border rounded p-2">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Time</label>
        <input type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Day</label>
        <input type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Subject</label>
        <input type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <button type="submit" class="btn btn-primary">Add</button>
</form>

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
        <td>English</td>
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
