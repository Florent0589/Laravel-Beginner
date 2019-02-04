<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/storage/user-images/avatar5.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{Auth::user()->first_name}} {{Auth::user()->last_name}}</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
          <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview menu-open">
                <a href="#">
                  <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="/home"><i class="fa fa-circle-o"></i> Dashboard</a></li>
                </ul>
              </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Students</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/students/create"><i class="fa fa-plus"></i> Add Student</a></li>
                <li><a href="/students"><i class="fa fa-list"></i> List of Student(s)</a></li>
                <li><a href="/students/track"><i class="fa fa-certificate"></i> Track Application</a></li>
                <li><a href="/students/search"><i class="fa fa-search"></i> Advance Search</a></li>
                <li><a href="/students/statistics"><i class="fa fa-bar-chart-o"></i> Statistics</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i> <span>Lecturers / Tutor</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/lecturers/create"><i class="fa fa-plus"></i> Add Lecturer</a></li>
                <li><a href="/lecturers"><i class="fa fa-list"></i> List of Lecturer(s)</a></li>
                <li><a href="/lecturers/search"><i class="fa fa-search"></i> Advance Search</a></li>
                <li><a href="/lecturers/statistics"><i class="fa fa-bar-chart-o"></i> Statistics</a></li>
              </ul>
            </li>

            <li class="treeview">
                <a href="#">
                  <i class="fa fa-pie-chart"></i>
                  <span>Statistics</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="/customers/statistics"><i class="fa fa-area-chart"></i> Customers</a></li>
                  <li><a href="/payments/statistics"><i class="fa fa-line-chart"></i> Payments</a></li>
                  <li><a href="/business/statistics"><i class="fa fa-bar-chart"></i> Businesses</a></li>
                  <li><a href="/users/statistics"><i class="fa fa-pie-chart"></i> Users</a></li>
                  <li><a href="/collections"><i class="fa  fa-line-chart"></i> Collections</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="#">
                  <i class="fa fa-money"></i>
                  <span>Payments</span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                <ul class="treeview-menu">
                  <li><a href="/payments"><i class="fa fa-list"></i> List of Payments</a></li>
                  <li><a href="/payments/create"><i class="fa fa-credit-card"></i> Register Payments</a></li>
                </ul>
              </li>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-file"></i> <span>Academic Manager</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li class="treeview">
                  <a href="#"><i class="fa fa-building"></i> Campuses
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="/campus/create"><i class="fa fa-plus"></i> Add Campus</a></li>
                    <li><a href="/campus"><i class="fa fa-list"></i> List of Campuses</a></li>
                    <li><a href="/campus/search"><i class="fa fa-search"></i> Advance Search</a></li>
                    <li><a href="/campus/statistics"><i class="fa fa-bar-chart-o"></i> Statistics</a></li>
                  </ul>
                </li>
                <!-- Transport -->
                <li class="treeview">
                    <a href="#"><i class="fa fa-bus"></i> Subjects
                      <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                    </a>
                    <ul class="treeview-menu">
                        <li><a href="/subjects/create"><i class="fa fa-plus"></i> Add Subject</a></li>
                        <li><a href="/subjects"><i class="fa fa-list"></i> List of Subject</a></li>
                        <li><a href="#"><i class="fa fa-search"></i> Advance Search</a></li>
                        <li><a href="/subjects/statistics"><i class="fa fa-bar-chart-o"></i> Statistics</a></li>
                    </ul>
                </li>
                
              </ul>
              <!-- Routes -->
              <li class="treeview">
                  <a href="#"><i class="fa fa-road"></i> 
                    <span>Grades</span>
                    <span class="pull-right-container">
                      <i class="fa fa-angle-left pull-right"></i>
                    </span>
                  </a>
                  <ul class="treeview-menu">
                    <li><a href="/grades/create"><i class="fa fa-plus"></i> Add Grade</a></li>
                    <li><a href="/grades"><i class="fa fa-list"></i> List of Grade(s)</a></li>
                  </ul>
                </li>
              <li>
                <a href="/calendar">
                  <i class="fa fa-calendar"></i> <span>Calendar</span>
                  <span class="pull-right-container">
                  </span>
                </a>
              </li>
            </li>
            <li><a href="/manual"><i class="fa fa-book"></i> <span>User Manual</span></a></li>
            <li class="header">ADMINISTRATION</li>
            <li><a href="/users"><i class="fa fa-user"></i> <span>User Management</span></a></li>
            <li><a href="#"><i class="fa fa-steam"></i> <span>Audit Trail</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Errors</span></a></li>
            <li><a href="#"><i class="fa fa-gear"></i> <span>System Settings</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>