<nav id="sidebar">
  <!-- Sidebar Header-->
  <div class="sidebar-header d-flex align-items-center">
    <div class="avatar"><img src="{{ asset('img/avatar-6.jpg') }}" alt="..." class="img-fluid rounded-circle"></div>
    <div class="title">
      <h1 class="h5">Kamau Leakey</h1>
      <p>Web Designer</p>
    </div>
  </div>
  <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
  <ul class="list-unstyled">
          <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Job Listings </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{ url('add_job') }}">Add Job</a></li>
              <li><a href="{{ url('view_job') }}">View Job</a></li>
            </ul>
          </li>


          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Portfolio </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{ url('/view_portfolio') }}">Add Portfolio</a></li>
              <li><a href="{{ url('/show_portfolio') }}">View Portfolio</a></li>
            </ul>
          </li>



          <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Project Listings </a>
            <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
              <li><a href="{{ url('/view_project') }}">Add A Project</a></li>
              <li><a href="{{ url('/show_project') }}">View A Project</a></li>
            </ul>
          </li>
  
</nav>