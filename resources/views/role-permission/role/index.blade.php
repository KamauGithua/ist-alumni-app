<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
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

            {{-- start --}}

            {{-- <x-app-layout> --}}

               
            
                <div class="container mt-5">
                    <div class="row">
                        <div class="col-md-12">
            
                            @if (session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                                    
                            @endif
            
                            <div class="card mt-3">
                                <div class="card-header">
                                    <h4>
                                        Roles
                                        <a href="{{ url('roles/create') }}" class="btn btn-primary float-end">Add Roles</a>
                                    </h4>
                                </div>
                                <div class="card-body">
            
                                    <table class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    <a href=" {{ url('roles/'.$role->id.'/give-permissions') }}" class="btn btn-success">Add / Edit Role Permission</a>
                                                    <a href=" {{ url('roles/'.$role->id.'/edit') }}" class="btn btn-success">Edit</a>
                                                    <a href="{{ url('roles/'.$role->id.'/delete') }}" class="btn btn-danger mx-2">Delete</a>
                                                </td>
                                            </tr>
                                            @endforeach
            
                                        </tbody>
                                    </table>
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </x-app-layout> --}}




            {{-- end --}}

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