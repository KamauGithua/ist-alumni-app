<style >
    .btn-custom {
    background-color: #E92829;
    color: #ffffff; /* White text color for better contrast */
    border-color: #E92829;
}

.btn-custom:hover {
    background-color: #d32222; /* Slightly darker shade for hover effect */
    border-color: #d32222;
}

</style>



<div class="container-xxl bg-white p-0">
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="{{url('/')}}" class="navbar-brand d-flex align-items-center text-center py-0 px-4 px-lg-5">
            <h1 class="m-0 " style="color:#E92829">IST ALUMNI </h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <a href="{{url('/')}}" class="nav-item nav-link">About</a>
                <a href="{{url('/')}}" class="nav-item nav-link">Projects</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="{{url('/job_details')}}" class="dropdown-item">Job Details</a>
                        <a href="job-detail.html" class="dropdown-item">Job </a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="{{url('/')}}" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu rounded-0 m-0">
                        <a href="" class="dropdown-item">Job Category</a>
                        <a href="" class="dropdown-item">Projects</a>
                        <a href="" class="dropdown-item">Users</a>
                        <a href="" class="dropdown-item">Portfolio</a>
                    </div>
                </div>
                <a href="" class="nav-item nav-link">Contact</a>
                {{-- <a href="contact.html" class="nav-item nav-link">login</a> --}}

                     <!-- Authentication -->

                <div class="user_option">
                    @if (Route::has('login'))



                    @auth

                    <form style="padding: 10px" method="POST" action="{{ route('logout') }}">
                        @csrf
    
                       <input class="btn btn-success" type="submit" value="logout">
                    </form>



                    @else



                    <a href="{{'/login' }}">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        <span>Login</span>
                    </a>
                    <a href="{{'/register' }}">
                        <i class="fa fa-vcard" aria-hidden="true"></i>
                        <span>Register</span>
                    </a>
                    
                    @endauth

                    @endif

                </div>

               
            </div>

            
            <a href="{{'/login' }}" class="btn btn-primary btn-custom rounded-0 py-4 px-lg-5 d-none d-lg-block">Post A Job<i class="fa fa-arrow-right ms-3"></i></a>
            
        </div>
    </nav>