<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')

    {{-- <base href="/public"> --}}


    <style type="text/css">

        .div_center{
            text-align: center;
            padding-top: 40px;
        }

        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
    
        h1
        {
            color: white;
        }
    
        label
        {
            display: inline-block;
            width: 200px;
            font-size: 18px!important;
            color: white!important;
        }
        input[type='text']
        {
            width: 350px;
            height: 50px;
        }
        textarea
        {
            width:450px;
            height: 80px;
        }
        .input_deg
        {
            padding: 15px;
        }
        .div_deg{
            padding-bottom: 15px;
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

        <div class="div_center">


           <h1>Update A Portfolio</h1>
           
           <div class="div_deg">
            <form action="{{ url('/update_portfolio_confirm',$data->id) }}" method="POST" enctype="multipart/form-data">

                @csrf
                <div class="div_deg">
                    <label>Basic Information</label>
                    <input type="text" name="title" required value="{{$data->title}}">
                </div>
                <div class="div_deg">
                    <label>Education</label>
                    <input type="text" name="education"  required value="{{$data->education}}">
                </div>
              
                <div class="div_deg">
                    <label>Work Experience</label>
                    <textarea name="experience">{{$data->experience}}</textarea>
                </div>
                {{-- <div class="input_deg"> --}}
                <div class="div_deg">

                    <label for="">Skills</label>
                    <textarea name="skills" required value="{{$data->skills}}"></textarea>
                </div>
                {{-- <div class="input_deg"> --}}
                <div class="div_deg">

                    <label for="">personal_projects</label>
                    <textarea name="projects" required value="{{$data->projects}}"></textarea>

                </div>
               

               
                
                <div class="div_deg">
                    <input class="btn btn-success" type="submit" value="Update A Portfolio">
                </div>



            </form>
           </div>


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