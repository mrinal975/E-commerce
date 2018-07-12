<ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
        <a class="nav-link" href="{{route('dashboard')}}">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
        </a>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsCategory" data-parent="#exampleAccordion">
            <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span class="nav-link-text">Category Information</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponentsCategory">
            <li>
                <a href="{{url('category/add')}}">Add Category</a>
            </li>
            <li>
                <a href="{{url('category/manage')}}">Manage Category</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsManufacturer" data-parent="#exampleAccordion">
            <i class="fa fa-industry" aria-hidden="true"></i>
            <span class="nav-link-text">Manufacturer Information</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponentsManufacturer">
            <li>
                <a href="{{url('manufacturer/add')}}">Add Manufacturer</a>
            </li>
            <li>
                <a href="{{url('manufacturer/manage')}}">Manage Manufacturer</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponentsProduct" data-parent="#exampleAccordion">
            <i class="fa fa-product-hunt" aria-hidden="true"></i>
            <span class="nav-link-text">Product Information</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseComponentsProduct">
            <li>
                <a href="{{url('product/add')}}">Add Product</a>
            </li>
            <li>
                <a href="{{url('product/manage')}}">Manage Product</a>
            </li>
        </ul>
    </li>
    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
        <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseExamplePages" data-parent="#exampleAccordion">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            <span class="nav-link-text">Order Information</span>
        </a>
        <ul class="sidenav-second-level collapse" id="collapseExamplePages">
            <li>
                <a href="{{url('new/order')}}">View Order</a>
            </li>
            <li>
                <a href="{{url('delivered/order')}}">delivered Order</a>
            </li>
        </ul>
    </li>

</ul>
<ul class="navbar-nav sidenav-toggler">
    <li class="nav-item">
        <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
        </a>
    </li>
</ul>