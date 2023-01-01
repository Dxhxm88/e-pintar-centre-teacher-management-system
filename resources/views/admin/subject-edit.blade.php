@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Subject</h1>
</div>

<a href="{{ route('admin.subject') }}" class="btn btn-secondary mb-2">Back</a>

<form class="border p-2 rounded">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleInputEmail1" value="Science">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection
