<header class="main-header">
  <a href="{{route('home.dashboard')}}" class="logo">
    <span class="logo-lg"><b>Survey Dashboard</b></span>
  </a>
  <nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
  </nav>
</header>
<aside class="main-sidebar">
  <section class="sidebar">
    <div class="user-panel">
      <div class="pull-left image">
      </div>
      <div class="pull-left info">
      </div>
    </div>
    
    <ul class="sidebar-menu">

      <!--Media-->
      <li class="treeview {{(Route::current()->getName() == 'survey.index' || Route::current()->getName() =='survey.create') ? 'active' : '' }}" >
        <a href="#">
          <i class="fa fa-dashboard"></i> <span> Survey </span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">

          <li class="{{(Route::current()->getName() == 'survey.index') ? 'active' : ''}}"><a href="{{route('survey.index')}}"><i class="fa fa-circle-o"></i> All Surveys </a></li>

          <li class="{{(Route::current()->getName() == 'survey.create') ? 'active' : ''}}"><a href="{{route('survey.create')}}"><i class="fa fa-circle-o"></i> Create Survey </a></li>

        </ul>
      </li>
      <!--END Media-->


      </ul>

  </section>

</aside>
