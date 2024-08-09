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

          {{-- start  --}}


          {{-- <x-app-layout> --}}
            <div class="container mt-5">
                <div class="row">
                    <div class="col-md-12">
        
                        @if(session('status'))
                            <div class="alert alert-success">{{ session('status') }}</div>
                        @endif
        
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    Role: {{ $role->name }}
                                    <a href="{{ url('roles') }}" class="btn btn-danger float-end">Back</a>
                                </h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('roles/'.$role->id.'/give-permissions') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                
                                <div class="mb-3">
                                    @error('permission')
                                    <span class="text-danger">{{ $message }}</span>
                                    @enderror
        
                                    <label for="">Permissions</label>
        
                                    <div class="row">
                                        @foreach ($permissions as $permission)
                                        <div class="col-md-2">
                                            <label >
                                                <input 
                                                type="checkbox" 
                                                name="permission[]" 
                                                value="{{ $permission->name }}" 
                                                {{ in_array($permission->id, $rolePermissions) ? 'checked':'' }}
                                                />
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                        @endforeach
        
                                    </div>
        
                                </div>
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- </x-app-layout> --}}


          {{-- end  --}}

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