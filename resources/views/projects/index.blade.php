<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

              {{-- start of my projects --}}
              <h2>Your Projects</h2>

              {{-- <ul>
                  @foreach($projects as $project)
                      <li>{{ $project->title }} - {{ ucfirst($project->status) }}</li>
                      <li>{{ $project->description }} - {{ ucfirst($project->status) }}</li>
                  @endforeach
              </ul>
               --}}


               @if($projects && $projects->count() > 0)
    <ul>
        @foreach($projects as $project)
            <li>{{ $project->title }} - {{ ucfirst($project->status) }}</li>
        @endforeach
    </ul>
@else
    <p>You have no projects yet.</p>
@endif
              <h2>Submit a New Project</h2>
              <form action="{{ route('projects.store') }}" method="POST">
                  @csrf
                  <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" name="title" class="form-control" required>
                  </div>
              
                  <div class="form-group">
                      <label for="description">Description</label>
                      <textarea name="description" class="form-control" required></textarea>
                  </div>
              
                  <button type="submit" class="btn btn-primary">Submit Project</button>
              </form>
              



              {{-- end of my projects --}}
           

          </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="{{ asset('admincss/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/popper.js/umd/popper.min.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery.cookie/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('admincss/vendor/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('admincss/vendor/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admincss/js/charts-home.js') }}"></script>
    <script src="{{ asset('admincss/js/front.js') }}"></script>
  </body>
</html>