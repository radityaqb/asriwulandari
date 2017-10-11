<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li @yield('nav1')>
            <a href="{{URL::Route('biodegumdashboard')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            </a>
        </li>
        <li @yield('nav2')>
            <a href="{{URL::Route('biodegum.portfolio.index')}}">
            <i class="fa fa-picture-o"></i> <span>Portfolio</span>
            </a>
        </li>
       <li @yield('nav3')>
            <a href="{{URL::Route('biodegum.posts.index')}}">
            <i class="fa fa-newspaper-o"></i> <span>Posts</span>
            </a>
        </li>
       <li @yield('nav4')>
            <a href="{{URL::Route('pages.index')}}">
            <i class="fa fa-newspaper-o"></i> <span>Page Setting</span>
            </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>