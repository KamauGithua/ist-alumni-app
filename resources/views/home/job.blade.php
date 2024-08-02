<div class="container-xxl py-5">
    <div class="container">
        <h1 class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Job Listing</h1>
        <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
            <ul class="nav nav-pills d-inline-flex justify-content-center border-bottom mb-5">
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 ms-0 pb-3 active" data-bs-toggle="pill" href="#tab-1">
                        <h6 class="mt-n1 mb-0">Featured</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 pb-3" data-bs-toggle="pill" href="#tab-2">
                        <h6 class="mt-n1 mb-0">Full Time</h6>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="d-flex align-items-center text-start mx-3 me-0 pb-3" data-bs-toggle="pill" href="#tab-3">
                        <h6 class="mt-n1 mb-0">Part Time</h6>
                    </a>
                </li>
            </ul>
            <div class="tab-content">

                @foreach ($job as $jobs)
                    
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="job-item p-4 mb-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                <img class="flex-shrink-0 img-fluid border rounded" src="products/{{$jobs->image}}" alt="" style="width: 80px; height: 80px;">
                                <div class="text-start ps-4">
                                    <h5 class="mb-3">{{$jobs->title}}</h5>
                                    <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$jobs->location}}</span>
                                    <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$jobs->type}}</span>
                                    <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{$jobs->pay}}</span>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>

                @endforeach

                
                
            </div>
        </div>
    </div>
</div>