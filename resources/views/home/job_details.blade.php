<!DOCTYPE html>
<html lang="en">

<head>
    @include('home.css')
    <base href="/public">
</head>

<body>
    
    @include('home.header')
        <!-- Navbar End -->


        <div id="tab-1" class="tab-pane fade show p-0 active" style="margin: auto; width:50%; padding:30px">
            <div class="job-item p-4 mb-4">
                <div class="row g-4">
                    <div class="col-sm-12 col-md-8 d-flex align-items-center">
                        <img class="flex-shrink-0 img-fluid border rounded"   src="jobs/{{$job->image}}" alt="" style="width: 80px; height: 80px;">
                        <div class="text-start ps-4">
                            <h3 class="mb-3">Job Title: {{$job->title}}</h3>
                            <h4 class="mb-3">Category:{{$job->category}}</h4>
                            <p class="mb-3">{{$job->description}}</p>
                            <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i>{{$job->location}}</span>
                            <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i>{{$job->type}}</span>
                            <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i>${{$job->pay}}</span>
                            <form action="{{url('add_cart',$job->id)}}" method="POST">
                                @csrf
                                <input type="submit" class="btn btn-primary me-3" value="Apply Now">
                            </form>
                        </div>
                    </div>
               
                </div>
            </div>
            
        </div>



     


       
        

        <!-- Footer Start -->
        @include('home.footer')
</body>

</html>