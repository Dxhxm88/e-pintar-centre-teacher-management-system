@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="row">
    <div class="col-6 mb-2">
        <div class="p-4 border rounded-3 bg-danger text-white">
            <h2>3</h2>
            <p>Listed subjects</p>
        </div>
    </div>
    <div class="col-6 mb-2">
        <div class="p-4 border rounded-3 bg-info text-white">
            <h2>6</h2>
            <p>Total registered teachers</p>
        </div>
    </div>
    <div class="col-6 mb-2">
        <div class="p-4 border rounded-3 bg-warning text-white">
            <h2>2</h2>
            <p>Registered teachers (Profile not public)</p>
        </div>
    </div>
    <div class="col-6 mb-2">
        <div class="p-4 border rounded-3 bg-success text-white">
            <h2>0</h2>
            <p>Registered teachers (Profile public)</p>
        </div>
    </div>
</div>

@endsection
