@extends('layout.admin')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Add Teacher</h1>
</div>

<form method="post" action="" enctype="multipart/form-data">
    <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Teacher </strong><small> Personal Details </small></div>
                <div class="card-body card-block">
                    <div class="form-group mb-2">
                        <label for="company" class=" form-control-label">Teacher Name</label>
                        <input type="text" name="tname" value="" class="form-control" id="tname" required="true">
                    </div>
                    <div class="form-group mb-2">
                        <label for="company" class=" form-control-label">Teacher Pic</label>
                        <input type="file" name="propic" value="" class="form-control" id="propic" required="true">
                    </div>
                    <div class="form-group mb-2">
                        <label for="street" class=" form-control-label">Teacher Email</label>
                        <input type="text" name="email" value="" id="email" class="form-control" required="true">
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="city" class=" form-control-label">Teacher Mobile Number</label>
                                <input type="text" name="mobilenumber" id="mobilenumber" value="" class="form-control" required="true" maxlength="10" pattern="[0-9]+">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="city" class=" form-control-label">Teacher Address</label>
                                <textarea type="text" name="address" id="address" value="" class="form-control" rows="4" cols="12" required="true"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card">
                <div class="card-header"><strong>Teacher </strong><small> Professional Details</small></div>
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="city" class=" form-control-label">Teacher Qualifications</label>
                                <input type="text" name="qualifications" id="qualifications" value="" class="form-control" required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="city" class=" form-control-label">Teaching Experience (in Years)</label>
                                <input type="text" name="teachingexp" id="teachingexp" pattern="[0-9]+" title="only numbers" class="form-control" required="true">
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="city" class=" form-control-label">Teacher Subjects</label>
                                <select type="text" name="tsubjects" id="tsubjects" value="" class="form-control" required="true">
                                    <option value="">Choose Subjects</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="city" class=" form-control-label">Description (if Any)</label>
                                <textarea type="text" name="description" id="description" class="form-control" rows="3" cols="12" required="true"></textarea>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group mb-2">
                                <label for="city" class=" form-control-label">Joining Date</label>
                                <input type="date" name="joiningdate" id="joiningdate" value="" class="form-control" required="true">
                            </div>
                        </div>

                        <div class="col-12 mt-2">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit">Add</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection
