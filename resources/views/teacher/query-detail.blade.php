@extends('layout.teacher')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Query Detail</h1>
</div>

<a href="{{ route('teacher.query') }}" class="btn btn-primary mb-2">Back</a>

<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong class="card-title">Query Details</strong>
            </div>
            <div class="card-body">
                <table id="dtBasicExample" class="table table-striped table-bordered">
                    <tbody>
                        <tr>
                            <th>Full Name</th>
                            <td>John Doe</td>
                            <th>Email Id</th>
                            <td>john@email.com</td>
                        </tr>
                        <tr>
                            <th>Mobile Number</th>
                            <td>019274634</td>
                            <th>Query Date</th>
                            <td>12/12/2022</td>
                        </tr>
                        <tr>
                            <th>Query</th>
                            <td colspan="3">Your are awesome</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
