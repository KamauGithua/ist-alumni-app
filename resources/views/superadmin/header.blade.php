<header class="header">   
    <nav class="navbar navbar-expand-lg">
      
      <div class="container-fluid d-flex align-items-center justify-content-between">
        <div class="navbar-header">
          <!-- Navbar Header--><a href="{{url('/')}}" class="navbar-brand">
            <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">SUPER-ADMIN</strong><strong>DASHBOARD</strong></div>
            <div class="brand-text brand-sm"><strong class="text-primary">K</strong><strong>G</strong></div></a>
        </div>
        <!-- Sidebar Toggle Btn-->
        <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
      </div>
      <div class="right-menu list-inline no-margin-bottom">    
       
        <!-- Log out               -->
        <div class="list-inline-item logout">       
          
          <form method="POST" action="{{ route('logout') }}">
              @csrf

            <input type="submit" value="LogOut">
          </form>
      </div>
    </div>
    </nav>
  </header>