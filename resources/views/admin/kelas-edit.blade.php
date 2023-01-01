@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Class</h1>
</div>

<div class="mb-2">
    <a href="{{ route('admin.kelas') }}" class="btn btn-secondary">Back</a>
</div>

<form class="border rounded p-2">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
