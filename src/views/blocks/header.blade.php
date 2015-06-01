<div class="navbar-branding">
    <a class="navbar-brand" href="/"> <b>Ua</b>Concept </a>
    <span id="toggle_sidemenu_l" class="glyphicons glyphicons-show_lines"></span>
    <ul class="nav navbar-nav pull-right hidden">
        <li>
            <a href="#" class="sidebar-menu-toggle">
                <span class="octicon octicon-ruby fs20 mr10 pull-right "></span>
            </a>
        </li>
    </ul>
</div>


<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
            <span>{{ Auth::user()->name }}</span>
            <span class="caret caret-tp hidden-xs"></span>
        </a>
        <ul class="dropdown-menu dropdown-persist pn w250 bg-white" role="menu">
            <li class="of-h">
                <a href="#" class="fw600 p12 animated animated-short fadeInUp">
                    <span class="fa fa-envelope pr5"></span> Messages
                    <span class="pull-right lh20 h-20 label label-warning label-sm">2</span>
                </a>
            </li>
            <li class="br-t of-h">
                <a href="{{route('admin_logout')}}" class="fw600 p12 animated animated-short fadeInDown">
                    <span class="fa fa-power-off pr5"></span> Выход </a>
            </li>
        </ul>
    </li>
</ul>