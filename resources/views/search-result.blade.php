@extends('layout.app')

@section('content')
<section class="py-5">
    <div class="container px-5 my-5">
        <form method="post" action="search-result.php">
<aside class="bg-primary bg-gradient rounded-3 p-4 p-sm-5 mt-5">
            <div class="d-flex align-items-center justify-content-between flex-column flex-xl-row text-center text-xl-start">
                <div class="mb-4 mb-xl-0">
                    <div class="fs-3 fw-bold text-white">Search Teacher by Name or Subject</div>
                </div>
                <div class="ms-xl-4">
                    <div class="input-group mb-2">
                        <input class="form-control" type="text" placeholder="Search Teacher by Name or Subject" aria-label="Email address..." aria-describedby="button-newsletter" name="searchinput" required style="width:350px;" />
                        <button class="btn btn-outline-light" id="button-newsletter" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </aside>
    </form>
        <hr />
        <div class="row gx-5 justify-content-center">
            <div class="col-lg-8 col-xl-6">
                <div class="text-center">
                    <h2 class="fw-bolder">Search List Against <font color="red">"John"</font></h2>
                <hr color="red" />
                </div>
            </div>
        </div>
        <div class="row gx-5">
            <div class="col-lg-4 mb-5">
                <div class="card h-100 shadow border-0">
                    <img class="card-img-top" src="img/teacher.jpg" alt="" />
                    <div class="card-body p-4">
                        <div class="badge bg-primary bg-gradient rounded-pill mb-2">Science</div>
                        <a class="text-decoration-none link-dark stretched-link" href="#" target="_blank">
                            <h5 class="card-title mb-3">John</h5></a>
                        <p class="card-text mb-0"><small>Registered Since 2000</small></p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
