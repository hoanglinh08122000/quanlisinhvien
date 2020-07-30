      <!-- Left Panel -->

  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{ route('index') }}">{{-- <img src="public/images/logo.png" alt="Logo"> --}}Quản lí Sinh viên</a>
            <a class="navbar-brand hidden" href="./"><img src="public/images/logo2.png" alt=""></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active">
                    <li class="active">
                        <a href="{{ route('index') }}"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                </li>
                <h3 class="menu-title">Cập nhật</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-calendar"></i>Khóa học</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('course.index_course') }}">Xem </a></li>
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('course.view_insert_course') }}">Thêm </a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('course.show_course') }}">Sửa Khóa học</a></li>
                       </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i>Ngành học</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('discipline.index_discipline') }}">Xem </a></li>
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('discipline.view_insert_discipline') }}">Thêm </a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('discipline.show_discipline') }}">Sửa tên Ngành</a></li>
                    </ul>

                </li>
                </li><li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-suitcase"></i>Lớp</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('class.index_class') }}">Xem </a></li>
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('class.view_insert_class_under_student') }}">Thêm kèm chia</a></li>
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('class.view_insert_class') }}">Thêm </a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('class.show_edit') }}">Sửa lớp</a></li>
                       </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-book"></i>Môn học</a>
                    <ul class="sub-menu children dropdown-menu">
                         <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('subject.index_subject') }}">Xem</a></li>
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('subject.view_insert_subject') }}">Thêm</a></li>
                        <li><i class="fa fa-id-badge"></i><a href="{{ route('subject.show_subject') }}">Sửa môn</a></li>
                       </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-female "></i>Giáo viên</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-bars"></i><a href="{{ route('teacher.index_teacher') }}">Xem</a></li>
                        <li><i class="fa fa-bars"></i><a href="{{ route('teacher.view_insert_teacher') }}">Thêm</a></li>
                        <li><i class="fa fa-share-square-o"></i><a href="{{ route('teacher.show_teacher') }}">Sửa thông tin</a></li>
                    </ul>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-users"></i>Sinh Viên</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i><a href="{{ route('students.view_insert_students') }}">Thêm </a></li>
                        <li><i class="fa fa-share-square-o"></i><a href="{{ route('students.show_students') }}">Sửa thông tin</a></li>
                        
                    </ul>
                </li>
                
                 
               
                 <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-puzzle-piece"></i>Phân công</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="{{ route('assignment.assignment_teacher') }}">Theo giáo viên</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Theo lớp</a></li>
                    </ul>
                    
                </li>
                
                <h3 class="menu-title">Điểm danh</h3>
                <li class="{{-- menu-item-has-children dropdown --}}">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Điểm danh</a>
                    {{-- <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-table"></i><a href="tables-basic.html">Basic Table</a></li>
                        <li><i class="fa fa-table"></i><a href="tables-data.html">Data Table</a></li>
                    </ul> --}}
                </li>
                {{-- <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-th"></i>Forms</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                    </ul>
                </li> --}}
                
                <h3 class="menu-title">Thông tin</h3>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-tasks"></i>Icons</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                        <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                    </ul>
                </li>
                <li>
                    <a href="widgets.html"> <i class="menu-icon ti-email"></i>Widgets </a>
                </li>
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bar-chart"></i>Charts</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-line-chart"></i><a href="charts-chartjs.html">Chart JS</a></li>
                        <li><i class="menu-icon fa fa-area-chart"></i><a href="charts-flot.html">Flot Chart</a></li>
                        <li><i class="menu-icon fa fa-pie-chart"></i><a href="charts-peity.html">Peity Chart</a></li>
                    </ul>
                </li>

                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-area-chart"></i>Maps</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-map-o"></i><a href="maps-gmap.html">Google Maps</a></li>
                        <li><i class="menu-icon fa fa-street-view"></i><a href="maps-vector.html">Vector Maps</a></li>
                    </ul>
                </li>
                <h3 class="menu-title">Extras</h3><!-- /.menu-title -->
                <li class="menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-glass"></i>Pages</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="{{  route('login') }} ">Login</a></li>
                        <li><i class="menu-icon fa fa-sign-in"></i><a href="page-register.html">Register</a></li>
                        <li><i class="menu-icon fa fa-paper-plane"></i><a href="pages-forget.html">Forget Pass</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
</aside><!-- /#left-panel -->

    <!-- Left Panel -->