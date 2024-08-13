<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <base href="/public">

    <style type="text/css">
    .div_deg
    {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    label
    {
        display: inline-block;
        width: 200px;
        padding: 20px;
    }

    input[type='text']
    {
        width: 300px;
        height: 60px;
    }

    textarea
    {
        width: 450px;
        height: 100px;
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

           <h1>Update Job</h1>
           
           <div class="div_deg">
            <form action="{{ url('edit_job',$data->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div>
                    <label>Job Title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>
                <div>
                    <label>Job Type</label>
                    <input type="text" name="type" value="{{$data->type}}">
                </div>
                <div>
                    <label>Job Description</label>
                    <textarea name="description">{{$data->description}}</textarea>
                </div>
                <div>
                    <label>Location</label>
                    <input type="text" name="location" value="{{$data->location}}">
                </div>
                
                <div>
                    <label>Category</label>
                    <select name="category" id="">
                        <option value="{{$data->category}}">{{$data->category}}</option>
                        @foreach ($category as $category)
                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                        @endforeach

                    </select>
                </div>
                <div>
                    <label>pay</label>
                    <input type="text" name="pay" value="{{$data->pay}}">
                </div>
                <div>
                    <label>Current Image</label>
                    <img width="150" src="/jobs/{{$data->title}}" alt="">
                </div>

                <div>
                    <label>New Image</label>
                    <input type="file" name="image">
                </div>
                <div>
                    <input class="btn btn-success" type="submit" value="Update Job">
                </div>



            </form>
           </div>


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