@extends('layout.teacher')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
</div>

<div class="mb-4 rounded-3 bg-warning">
    <div class="container-fluid py-5">
        <h4 class="fw-bold">Welcome back, John!</h4>
        <p class="col-md-8">Your profile not public, student cannot see your profile yet</p>
    </div>
</div>

<div class="mb-4 rounded-3 bg-info">
    <div class="container-fluid py-5">
        <h4 class="fw-bold">0</h4>
        <p class="col-md-8">Total query received</p>
    </div>
</div>

@endsection
