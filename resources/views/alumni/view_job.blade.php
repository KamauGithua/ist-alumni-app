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
   @include('admin.header')
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      @include('superadmin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">

            <form action="{{url('job_search')}}" method="get">
                @csrf
                <input type="search" name="search">
                <input type="submit" class="btn btn-secondary" value="search">
            </form>


            <div class="div_deg">
                <table class="table_deg">
                    <tr>
                        <th>Job Title</th>
                        <th>Job Type</th>
                        <th>Description</th>
                        <th>Location</th>
                        <th>Job Category</th>
                        <th>Pay</th>
                        <th>Image</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>

                    @foreach ($job as $jobs)
                        

                    <tr>
                        <td>{{ $jobs->title}}</td>
                        <td>{{ $jobs->type}}</td>
                        <td>{!!Str::limit($jobs->description,50)!!}</td>
                        <td>{{ $jobs->location}}</td>
                        <td>{{ $jobs->category}}</td>
                        <td>{{ $jobs->pay}}</td>
                        <td>
                            <img height="120" width="120" src="jobs/{{ $jobs->image }}">
                        </td>

                        <td>
                            <a class="btn btn-success" href="{{ url('update_job',$jobs->id) }}">Edit</a>
                        </td>
                        
                        <td>
                            <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_job',$jobs->id)}}">Delete</a>
                        </td>
                    </tr>

                    @endforeach
                   
                </table>
                
            </div>
            {{-- pagination --}}
            <div class="div_deg">
                {{-- {{$job->links()}} --}}
                {{$job->onEachSide(1)->links()}}

            </div>    


          </div>
      </div>
    </div>
  
    @include('superadmin.js')
  </body>
</html>