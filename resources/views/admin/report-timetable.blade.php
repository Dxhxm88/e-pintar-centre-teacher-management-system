@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Report Timetable</h1>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Class Name</th>
            <th scope="col">Available slot</th>
            <th scope="col">Taken Slot</th>
            <th scope="col">Created</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>5 Alpha</td>
            <td>2</td>
            <td>10</td>
            <td>12/22/2022</td>
        </tr>
    </tbody>
</table>
@endsection
