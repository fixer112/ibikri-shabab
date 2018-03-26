<ul class="sidebar-menu" data-widget="tree">

    <li class="{{ Request::is('admin') ? 'active' : '' }}">
        <a href="{{url('admin')}}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
    </li>

    <li class="treeview {{ ( Request::is('admin/categor*') || Request::is('admin/subcateg*') ) ? 'active menu-open' : '' }}">
        <a href="#">
            <i class="fa fa-archive"></i> <span>Categories</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">            
            <li class="{{ Request::is('admin/categories') ? 'active' : '' }}"><a href="{{url('admin/categories')}}"><i class="fa fa-wpforms"></i> View Categories</a></li>
            <li class="{{ Request::is('admin/category/create') ? 'active' : '' }}"><a href="{{url('admin/category/create')}}"><i class="fa fa-sitemap"></i> Create Category</a></li>
            <li class="{{ Request::is('admin/subcategory/create') ? 'active' : '' }}"><a href="{{url('admin/subcategory/create')}}"><i class="fa fa-sitemap"></i> Create Sub Category</a></li>
        </ul>
    </li>
    
    <li class="treeview {{ ( Request::is('admin/locations') || Request::is('admin/division*') || Request::is('admin/city*') ) ? 'active menu-open' : '' }}">
        <a href="#">
            <i class="fa fa-map"></i> <span>Locations</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">            
            <li class="{{ Request::is('admin/locations') ? 'active' : '' }}"><a href="{{url('admin/locations')}}"><i class="fa fa-map"></i> View Locations</a></li>
            <li class="{{ Request::is('admin/division/create') ? 'active' : '' }}"><a href="{{url('admin/division/create')}}"><i class="fa fa-map-marker"></i> Create Division</a></li>
            <li class="{{ Request::is('admin/city/create') ? 'active' : '' }}"><a href="{{url('admin/city/create')}}"><i class="fa fa-map-marker"></i> Create Location</a></li>

        </ul>
    </li>
    
    <li class="treeview {{ ( Request::is('admin/sample/*') ) ? 'active menu-open' : '' }}">
        <a href="#">
            <i class="fa fa-archive"></i> <span>Sample Pages</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">            
            <li class="{{ Request::is('admin/sample/table') ? 'active' : '' }}"><a href="{{url('admin/sample/table')}}"><i class="fa fa-wpforms"></i> List Products</a></li>
            <li class="{{ Request::is('admin/sample/form') ? 'active' : '' }}"><a href="{{url('admin/sample/form')}}"><i class="fa fa-archive"></i> Create Product</a></li>
        </ul>
    </li>
    
</ul>