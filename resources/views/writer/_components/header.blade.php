<!-- HEADER -->
<header id="header">

    <!-- Mobile Button -->
    <button id="mobileMenuBtn"></button>

    <!-- Logo -->
    <span class="logo pull-left">
        <h3 style="margin-top:7px;color:white;">WriterPanel</h3>
    </span>

    <form method="get" action="page-search.html" class="search pull-left hidden-xs">
        <input type="text" class="form-control" name="k" placeholder="Search for something..." />
    </form>

    <nav>
        <!-- OPTIONS LIST -->
        <ul class="nav pull-right">

            <!-- USER OPTIONS -->
            <li class="dropdown pull-left">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                    <img class="user-avatar" alt="" src="/themes/smarty_admin/assets/images/noavatar.jpg" height="34" /> 
                    <span class="user-name">
                        <span class="hidden-xs">
                            {{ Auth::user()->name }} <i class="fa fa-angle-down"></i>
                        </span>
                    </span>
                </a>
                <ul class="dropdown-menu hold-on-click">
                    <li>
                        <a href="/"><i class="fa fa-globe"></i> website</a>
                    </li>
                    <li><!-- my inbox -->
                        <a href="#"><i class="fa fa-envelope"></i> Inbox
                            <span class="pull-right label label-default">0</span>
                        </a>
                    </li>
                    <li><!-- settings -->
                        <a href="#"><i class="fa fa-cogs"></i> Settings</a>
                    </li>

                    <li class="divider"></li>

                    <li><!-- lockscreen -->
                        <a href="#"><i class="fa fa-lock"></i> Lock Screen</a>
                    </li>
                    <li>
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fa fa-power-off"></i> {{ __('Logout') }}
                        </a>    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
            <!-- /USER OPTIONS -->

        </ul>
        <!-- /OPTIONS LIST -->
    </nav>

</header>
<!-- /HEADER -->