@php
$current_route=request()->route()->getName();
@endphp
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('home')}}" class="brand-link">
      <img src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('backend/dist/img/livre.jpeg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a href="#" class="d-block">
           @if(auth()->check())
             {{ auth()->user()->name }}
           @else
             Guest
           @endif
        </a>

        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            @if(auth()->check() && auth()->user()->role == '1')
            <ul class="nav nav-treeview">
            <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Users Management
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('user.index') }}" class="nav-link">
                  <i class="far fas fa-users"></i>
                  <p>List of user</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('user.create') }}" class="nav-link">
                  <i class="far fas fa-user"></i>
                  <p>Add User</p>
                </a>
              </li>
            </ul>
              </li>
            <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Books
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('book.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>List of book</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('book.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-book"></i>
                  <p>Add book</p>
                </a>
              </li>
            </ul>
              </li>
              <li class="nav-item ">
            <a href="#" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
              <p>
                Annoncements
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('annoncement.index')}}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>List of Annoncements</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route ('annoncement.create') }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>Add Annoncement</p>
                </a>
              </li>
            </ul>
            <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="far fa-user nav-icon"></i>
              <p>
                Contacts
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route ('contact.index')}}" class="nav-link">
                  <i class="far fa-users nav-icon"></i>
                  <p>List of contacts</p>
                </a>
              </li>
            </ul>
            </ul>
            @else
            <li class="nav-item ">
            <a href="{{route ('bookview')}}" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Library
              </p>
            </a>
            </li>
            <li class="nav-item ">
            <a href="{{route ('contactus.create')}}" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Contact-us
              </p>
            </a>
            </li>
            <li class="nav-item ">
            <a href="{{route ('contactus.all', ['id' => auth()->user()->id])}}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Mail-box
              </p>
            </a>
            </li>
            <li class="nav-item">
            <a href="{{ route('profile.view', ['id' => auth()->user()->id]) }}" class="nav-link">
                <i class="nav-icon fas fa-user"></i>
                <p>Profile</p>
            </a>


            </li>
            @endif
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>