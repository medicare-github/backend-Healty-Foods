<section class="sidebar" style="height: auto;">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="{{asset('admin/dist/img/default.png')}}" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p>{{auth()->user()->name}}</p>
      <span></span>
      <a href="#"><i class="fa fa-circle text-success"></i> {{auth()->user()->role}} Online</a>
    </div>
  </div>
  <!-- search form -->
  <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
      <input type="text" name="q" class="form-control" placeholder="Search...">
      <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
              <i class="fa fa-search"></i>
            </button>
          </span>
    </div>
  </form>
  <!-- /.search form -->
  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu tree" data-widget="tree">
    <li class="header">MAIN NAVIGATION</li>
    @if(auth()->user()->role=='admin')
    <li>
      <a href="/dashboard">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-green">new</small>
        </span>
      </a>
    </li>
    <li class="treeview">
      <a href="#">
        <i class="fa fa-edit"></i> <span>Forms</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="/kategori/create"><i class="fa fa-circle-o"></i> Kategori</a></li>
        <li><a href="/produk/create"><i class="fa fa-circle-o"></i> Produk</a></li>
        <li><a href="/doctor/create"><i class="fa fa-circle-o"></i> Docter</a></li>
       
      </ul>
    </li>
    
    <li class="treeview">
      <a href="#">
        <i class="fa fa-table"></i> <span>Tables</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
          <li><a href="/kategori"><i class="fa fa-circle-o"></i> Kategori</a></li>
          <li><a href="/produk"><i class="fa fa-circle-o"></i> Produk</a></li>
          <li><a href="/doctor"><i class="fa fa-circle-o"></i> Docter</a></li>
         
      </ul>
    </li>
    @endif
   
    
   @if(auth()->user()->role=='doctor')
    <li>
      <a href="/messages">
        <i class="fa fa-envelope"></i> <span>Messaged</span>
        <span class="pull-right-container">
          <small class="label pull-right bg-yellow">12</small>
          <small class="label pull-right bg-green">16</small>
          <small class="label pull-right bg-red">5</small>
        </span>
      </a>
    </li>
    @endif
     <li>
        <a href="/customer">
          <i class="fa fa-user"></i> <span>Customer</span>
          <span class="pull-right-container">
              <small class="label pull-right bg-green">new</small>
          </span>
        </a>
      </li>
    
    
    <li class="header">LABELS</li>
 
    <li><a href="/logout"><i class="fa fa-circle-o text-yellow"></i> <span>Logout</span></a></li>
    
  </ul>
</section>