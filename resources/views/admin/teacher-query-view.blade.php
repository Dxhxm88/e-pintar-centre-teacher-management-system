@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Teachers Query Detail</h1>
</div>

<a href="{{ route('admin.teacher-query') }}" class="btn btn-secondary mb-2">Back</a>

<div class="card">
    <div class="card-header">
        Query Detail
    </div>
    <div class="card-body">
        <div class="form-group">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Name</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" value="John" disabled>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Query</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" disabled>How about you?</textarea>
            </div>
        </div>
    </div>
</div>
@endsection
