<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    <style class="text/css">
        .div_deg
        {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
    
        .table_deg
        {
            border: 2px solid greenyellow;
        }
    
        th{
            background-color: skyblue;
            font-size: 19px;
            color: white;
            font-weight: bold;
            padding: 15px;
        }
        td
        {
            border: 1px solid skyblue;
            text-align: center;
            color: white;
        }
        input[type='search']
        {
            width: 500px;
            height: 60px;
            margin-left: 50px;
        }
    
        </style>

  </head>
  <body>
   @include('alumni.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('alumni.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            @if(session()->has('message'))
                    <div>
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">X</button>
            
                        {{session()->get('message')}}
                    </div>
                    @endif
        

            <h1> My Projects</h1>

            <form action="{{url('project_search')}}" method="get">
                @csrf
                <input type="search" name="search">
                <input type="submit" class="btn btn-secondary" value="search">
            </form>


            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Project Title</th>
                        <th>Project Type</th>
                        <th>Project Description</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($project as $project)

                        

                    <tr>
                        <td>{{ $project->title}}</td>
                        <td>{{ $project->type}}</td>
                        <td>{!!Str::limit($project->description,50)!!}</td>
                       
                        <td>
                            <img height="120" width="120" src="project/{{ $project->image }}">
                        </td>

                        <td>
                            <a class="btn btn-success" href="{{ url('update_project',$project->id) }}">Edit</a>
                        </td>
                        
                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_project',$project->id)}}">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                   
                </table>
                
            </div>
            {{-- pagination --}}
            {{-- <div class="div_deg"> --}}
                {{-- {{$job->links()}} --}}
                {{-- {{$project->onEachSide(1)->links()}} --}}

            {{-- </div>     --}}


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