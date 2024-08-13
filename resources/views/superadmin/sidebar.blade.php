<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center">
      <div class="avatar"><img src="{{ asset('img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
      <div class="title">
        <h1 class="h5">Kamau Githua</h1>
        <p>Web Designer</p>
      </div>
    </div>
    <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
    <ul class="list-unstyled">
            <li class="active"><a href="{{url('/')}}"> <i class="icon-home"></i>Home </a></li>
     
            <li><a href="{{url('view_category')}}"> <i class="icon-grid"></i>Cartegory </a></li>
            <li><a href="{{url('role')}}"> <i class="icon-grid"></i>Roles </a></li>
            <li><a href="{{url('permission')}}"> <i class="icon-grid"></i>Permissions </a></li>
            <li><a href="{{url('user')}}"> <i class="icon-grid"></i>Users </a></li>
            
            
            <li><a href="" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Job Listings </a>
              <ul id="" class="collapse list-unstyled ">
                <li><a href="{{ url('add_job') }}">Add Job</a></li>
                <li><a href="{{ url('view_job') }}">View Job</a></li>
              </ul>
            </li>
            
  </nav>