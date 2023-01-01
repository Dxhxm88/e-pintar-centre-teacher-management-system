@extends('layout.teacher')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Change Password</h1>
</div>

<div class="row">
    <div class="col-lg-12">
        <form name="changepassword" class="form-control" method="post" action="">
            <div class="form-group">
                <label for="company" class=" form-control-label">Current Password</label>
                <input type="password" name="currentpassword" id="currentpassword" class="form-control" required="">
            </div>
            <div class="form-group">
                <label for="vat" class=" form-control-label">New Password</label>
                <input type="password" name="newpassword" class="form-control" required="">
            </div>
            <div class="form-group mb-2">
                <label for="street" class=" form-control-label">Confirm Password</label>
                <input type="password" name="confirmpassword" id="confirmpassword" value="" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">Change</button>
        </form>
    </div>
</div>

@endsection
