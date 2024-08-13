<div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <h1 class="text-center mb-5">Alumni Projects</h1>
        <div class="owl-carousel testimonial-carousel">
            @foreach($project as $project)
            <div class="testimonial-item bg-light rounded p-4">
                <i class="fa fa-quote-left fa-2x text-primary mb-3"></i>
                <p>{{$project->description}}</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="project/{{$project->image}}" style="width: 50px; height: 50px;">
                    <div class="ps-3">
                        <h5 class="mb-1">{{$project->title}}</h5>
                        <small>{{$project->type}}</small>
                    </div>
                </div>
            </div>
            @endforeach

            
        </div>
    </div>
</div>