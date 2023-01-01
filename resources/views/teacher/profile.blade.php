@extends('layout.teacher')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Profile</h1>
</div>

<div class="row mb-3">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header"><strong>Teacher</strong><small> Personal Details</small></div>
            <form name="" method="post" action="" enctype="multipart/form-data">
            <div class="card-body card-block">
                <div class="form-group">
                    <label for="company" class=" form-control-label">Teacher Name</label>
                    <input type="text" name="tname" value="John" class="form-control" id="tname" required="true">
                </div>

                <div class="form-group">
                    <label for="company" class=" form-control-label">Teacher Photo</label> &nbsp;
                    <img src="{{ asset('img/teacher.jpg') }}" width="100" height="100" class="mt-2">
                    <a href="changeimage.php"> &nbsp; Edit Image</a>
                </div>

                <div class="form-group mb-2">
                    <label for="street" class=" form-control-label">Teacher Email</label>
                    <input type="text" name="email" value="john@email.com" id="email" class="form-control" required="true">
                </div>

                <div class="row form-group mb-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="city" class=" form-control-label">Teacher Mobile Number</label>
                            <input type="text" name="mobilenumber" id="mobilenumber" value="012355555" class="form-control" required="true" maxlength="10">
                        </div>
                    </div>
                </div>

                <div class="row form-group mb-2">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="city" class=" form-control-label">Teacher Address</label>
                            <textarea type="text" name="address" id="address" class="form-control" rows="3" cols="12" required="true">North Dakota</textarea>
                        </div>
                    </div>
                </div>

                <div class="row form-group mb-2">
                    <div class="col-12">
                        <div class="form-group"><label for="city" class=" form-control-label">Joining Date</label>
                            <input type="date" name="joiningdate" id="joiningdate" value="2000" class="form-control" required="true">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header"><strong>Teacher</strong><small> Professional Details</small></div>
            <form name="" method="post" action="" enctype="multipart/form-data">
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Teacher Qualifications</label>
                                <input type="text" name="qualifications" id="qualifications" value="Master" class="form-control" required="true">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Teaching Experience (in Years)</label>
                                <input type="text" name="teachingexp" id="teachingexp" pattern="[0-9]+" title="only numbers" value="20" class="form-control" required="true">
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group"><label for="city" class=" form-control-label">Teacher Subjects</label>
                                <select type="text" name="tsubjects" id="tsubjects" value="" class="form-control" required="true">
                                    <option value="">Science</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Description (if Any)</label>
                                <textarea type="text" name="description" id="description" class="form-control" rows="3" cols="12" required="true">No description</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row form-group">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="city" class=" form-control-label">Profile Status <small style="color:red">(Public profile anybody can your details and not public only you can view)</small></label>
                                <select type="text" name="status" id="status" value="" class="form-control" required="true">
                                    <option value="1">Public</option>
                                    <option value="0">Not public</option>
                                </select>
                            </div>
                        </div>
                    </div>

                </div>
        <p style="text-align: center;"><button type="submit" class="btn btn-primary btn-sm" name="submit" id="submit"><i class="fa fa-dot-circle-o"></i> Update</button></p>
        </div>
        </form>
    </div>
</div>
@endsection
