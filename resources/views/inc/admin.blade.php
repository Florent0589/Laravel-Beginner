<header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><img src="{{asset('storage/images/logo.png')}}" width="30" height="30"></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>{{ config('app.name', 'Hamb kalula') }}</b> LTE</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            
            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <img src="/storage/user-images/avatar5.png" class="user-image" alt="User Image">
                <span class="hidden-xs">Root Account</span>
            </a>
            <ul class="dropdown-menu">
                <!-- User image -->
                <li class="user-header">
                <img src="/storage/user-images/avatar5.png" class="img-circle" alt="User Image">

                <p>
                        Root Account
                    <small>Member since </small>
                </p>
                </li>
                <!-- Menu Body -->
                <li class="user-body">
                <div class="row">
                    <div class="col-xs-4 text-center">
                    <a href="">Auth Code</a>
                    </div>
                    <div class="col-xs-4 text-center">
                    <a href="">Password</a>
                    </div>
                    <div class="col-xs-4 text-center">
                    <a href="#"> Picture</a>
                    </div>
                </div>
                <!-- /.row -->
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                <div class="pull-left">
                    <a href="" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                    <a class="btn btn-default btn-flat" href=""
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        Sign out
                    </a>

                    <form id="logout-form" action="" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </div>
                </li>
            </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
        </ul>
        </div>

    </nav>
</header>
@include('inc.left-nav-bar')