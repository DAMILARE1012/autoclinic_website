<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
  <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
    <a class="navbar-brand brand-logo mr-5" href="{{ route('admin.home') }}"><img src="{{ asset('img/logo.png') }}" alt="profile"/></a>
    <a class="navbar-brand brand-logo-mini" href="{{ route('admin.home') }}"><img src="{{ asset('img/favicon.png') }}" alt="profile"/></a>
  </div>
  <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
    <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
      <span class="ti-view-list"></span>
    </button>
    <ul class="navbar-nav navbar-nav-right">
      
      <li class="nav-item nav-profile dropdown">
        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
          <img src="{{ asset('img/favicon.png') }}" alt="profile"/>
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
          <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="ti-power-off text-primary"></i>
            {{ __('Logout') }}
        </a>
        </div>
      </li>
    </ul>
  </div>
</nav>
<!-- partial -->
<div class="container-fluid page-body-wrapper">
  <!-- partial:partials/_sidebar.html --><nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.home') }} ">
              <i class="ti-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#home" aria-expanded="false" aria-controls="auth">
              <i class="ti-home menu-icon"></i>
              <span class="menu-title">Home</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="home">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.home.front') }} ">Sliders</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.home.create') }} ">Create Slider</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="auth">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Contacts</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contact">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.contact') }} ">Contacts</a></li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#about" aria-expanded="false" aria-controls="auth">
              <i class="ti-pencil-alt menu-icon"></i>
              <span class="menu-title">About</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.about') }} ">About</a></li>
                
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="ti-gallery menu-icon"></i>
              <span class="menu-title">Gallery</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.gallery') }}">Galleries</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.gallery.create')}} ">Add Picture</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="ti-cup menu-icon"></i>
              <span class="menu-title">Training Hub</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.training_index') }}  ">Training Hub</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.trainings') }}  ">Trainings</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.training.create') }} ">Create Training</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.trainer_student') }}  ">Trainers/students</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.trainer_student.create') }} ">Create Trainers/students</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.training_hub') }} ">Students</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.generate_hub') }} ">Generate Code</a></li>
                
                
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-comments-smiley menu-icon"></i>
              <span class="menu-title">Programs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.programs') }} ">Programs</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.program.create') }} ">Add Program</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.option.create') }} ">Add Option</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.apply') }} ">Reg Procedure</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="ti-comments-smiley menu-icon"></i>
              <span class="menu-title">Customer Review</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.reviews') }} ">Reviews</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.unpublished.review') }} ">Unapproved Review</a></li>
              </ul>
            </div>
          </li>
           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth3" aria-expanded="false" aria-controls="auth3">
              <i class="ti-layers-alt menu-icon"></i>
              <span class="menu-title">Inventory</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth3">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.inventory') }}"> Inventories</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.inventory.create')}}">Add Inventory</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#service" aria-expanded="false" aria-controls="service">
              <i class="ti-desktop menu-icon"></i>
              <span class="menu-title">Service</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="service">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.service') }}"> services</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.service.create')}}">Add service</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="auth">
              <i class="ti-write menu-icon"></i>
              <span class="menu-title">Footer</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="contact">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{ route('admin.footer') }} ">Footer</a></li>
                
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }} " onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" >
              <i class="ti-power-off menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>