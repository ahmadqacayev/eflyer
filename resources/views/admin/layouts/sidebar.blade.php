<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon">
            <img src="{{asset('admin/img/logo/logo2.png')}}">
        </div>
        <div class="sidebar-brand-text mx-3">Admin</div>
    </a>
    <hr class="sidebar-divider my-0">
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Features
    </div>
    <li class="nav-item @if(Request::segment(1) == 'products') active collapsed @endif">
        <a class="nav-link collapsed" href="{{route('products.index')}}" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
           aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Products</span>
        </a>
        <div id="collapseForm" class="collapse @if(Request::segment(1) == 'products') show @endif" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('products.create')}}">Add Products</a>
                <a class="collapse-item" href="{{route('products.index')}}">Show Products</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(Request::segment(2) == 'category') active collapsed @endif">
        <a class="nav-link collapsed" href="{{route('category.create')}}" data-toggle="collapse" data-target="#collapseBootstrap"
           aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Category</span>

        </a>
        <div id="collapseBootstrap" class="collapse @if(Request::segment(2) == 'category') show @endif" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('show_category')}}">List</a>
                <a class="collapse-item" href="{{route('category.create')}}">Create</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(Request::segment(1) == 'sliders') active collapsed @endif">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseBootstrap1"
           aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="fas fa-sliders-h"></i>
            <span>Slider</span>

        </a>
        <div id="collapseBootstrap1" class="collapse @if(Request::segment(1) == 'sliders') show @endif" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('sliders.index')}}">List</a>
                <a class="collapse-item" href="{{route('sliders.create')}}">Create</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(Request::segment(1) == 'posts') active collapsed @endif">
        <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseBootstrap2"
           aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Posts</span>

        </a>
        <div id="collapseBootstrap2" class="collapse @if(Request::segment(1) == 'posts') show @endif" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('posts.index')}}">List</a>
                <a class="collapse-item" href="{{route('posts.create')}}">Create</a>
            </div>
        </div>
    </li>


</ul>
