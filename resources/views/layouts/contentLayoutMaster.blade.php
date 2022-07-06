<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin | @yield('title') </title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="{{ asset('plugins/switchery/switchery.min.css') }}" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
        <!--ricksaw.js [ OPTIONAL ]-->
        <link href="{{ asset('plugins/jquery-ricksaw-chart/css/rickshaw.css') }}" rel="stylesheet">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href="{{ asset('plugins/bootstrap-validator/bootstrapValidator.min.css') }}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{ asset('css/demo/jquery-steps.min.css') }}" rel="stylesheet">
        <!--Summernote [ OPTIONAL ]-->
        <link href="{{ asset('plugins/summernote/summernote.min.css') }}" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="{{ asset('css/demo/jasmine.css') }}" rel="stylesheet">
        @yield('cssComplement')
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="{{ asset('plugins/pace/pace.min.css') }}" rel="stylesheet">
        <script src="{{ asset('plugins/pace/pace.min.js') }}"></script>
    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->
    <body>
        <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">
           <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                            <!--Messages Dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-envelope fa-lg"></i> <span class="badge badge-header badge-warning">9</span> 
                                </a>
                                <!--Message dropdown menu-->
                                <div class="dropdown-menu dropdown-menu-md with-arrow">
                                    <div class="pad-all bord-btm">
                                       <div class="h4 text-muted text-thin mar-no">You have 3 messages.</div>
                                    </div>
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                            <ul class="head-list">
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="{{ asset('img/av2.png') }}" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Andy sent you a message</div>
                                                            <small class="text-muted">15 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av4.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Lucy sent you a message</div>
                                                            <small class="text-muted">30 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Jackson sent you a message</div>
                                                            <small class="text-muted">40 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av6.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Donna sent you a message</div>
                                                            <small class="text-muted">5 hours ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av4.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Lucy sent you a message</div>
                                                            <small class="text-muted">Yesterday</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <img src="img/av3.png" alt="Profile Picture" class="img-circle img-sm"> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Jackson sent you a message</div>
                                                            <small class="text-muted">Yesterday</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Dropdown footer-->
                                    <div class="pad-all bord-top">
                                        <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages </a>
                                    </div>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End message dropdown-->
                            <!--Notification dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-bell fa-lg"></i> <span class="badge badge-header badge-danger">5</span> </a>
                                <!--Notification dropdown menu-->
                                <div class="dropdown-menu dropdown-menu-md with-arrow">
                                    <div class="pad-all bord-btm">
                                       <div class="h4 text-muted text-thin mar-no"> Notification </div>
                                    </div>
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                            <ul class="head-list">
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-primary"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">New comments waiting approval</div>
                                                            <small class="text-muted">15 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <span class="badge badge-success pull-right">90%</span>
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-danger"> <i class="fa fa-hdd-o fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">HDD is full</div>
                                                            <small class="text-muted">50 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-info"> <i class="fa fa-file-word-o fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Write a news article</div>
                                                            <small class="text-muted">Last Update 8 hours ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <span class="label label-danger pull-right">New</span>
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-purple"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Comment Sorting</div>
                                                            <small class="text-muted">Last Update 8 hours ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-success"> <i class="fa fa-user fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">New User Registered</div>
                                                            <small class="text-muted">4 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Dropdown footer-->
                                    <div class="pad-all bord-top">
                                        <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications </a>
                                    </div>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End notifications dropdown-->
                        </ul>
                        <ul class="nav navbar-top-links pull-right">
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs" id="toggleFullscreen">
                                <a class="fa fa-expand" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                                </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Profile toogle button-->
                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"> <img class="img-circle img-user media-object" src="{{ asset('img/av1.png') }}" alt="Profile Picture"> </span>
                                    <div class="username hidden-xs">
                                        <div class="card">
                                            {{auth()->user()->name}}
                                            
                                        </div>
                                    </div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="#"> <i class="fa fa-user fa-fw"></i> Profile </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-envelope fa-fw"></i> Messages </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-gear fa-fw"></i> Settings </a>
                                        </li>
                                        <li>
                                        
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                                                <i class="fa fa-sign-out fa-fw"></i>Logout
                                            </a>    
                                            <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->
                <div id="content-container">
                <div class="pageheader hidden-xs">
                  <h3><i class="fa fa-home"></i> Dashboard </h3>
                    <div class="breadcrumb-wrapper">
                      <span class="label">You are here:</span>
                         <ol class="breadcrumb">
                            <li> <a href="#"> Home </a> </li>
                            <li class="active"> Dashboard </li>
                         </ol>
                    </div>
                </div>
                    <!--Page content-->
                    <!--===================================================-->
                    <div id="page-content">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="panel">

                                    <div class="panel-heading"><h3>  @yield('title') </h3></div>

                                 

                                    <div class="panel-body">
                                        <div class="gamma-container gamma-loading " id="gamma-container">
                                            @yield('contentPrincipal')
                                        </div>

                                    </div>
                            </div>
                           
                        </div>
                       
                    </div>
                    <!--===================================================-->
                    <!--End page content-->
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->
                <!--MAIN NAVIGATION-->
    <!--===================================================-->
    <nav id="mainnav-container">
        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">
            <a href="index.html" class="navbar-brand">
                <i class="fa fa-forumbee brand-icon"></i>
                <div class="brand-title">
                    <span class="brand-text">WOW</span>
                </div>
            </a>
        </div>
        <!--================================-->
        <!--End brand logo & name-->
        <div id="mainnav">
            <!--Menu-->
            <!--================================-->
            <div id="mainnav-menu-wrap">
                <div class="nano">
                    <div class="nano-content">
                        <ul id="mainnav-menu" class="list-group">
                            <!--Category name-->
                            <li class="list-header">Navigation</li>
                            <!--Menu list item-->
                            <li> <a href="index.html"> <i class="fa fa-home"></i> <span class="menu-title"> Dashboard </span> </a> </li>
                            <!--Category name-->
                            <li class="list-header">Components</li>
                            <!--Menu list item-->
                            <li>
                                <a href="#">
                                <i class="fa fa-th"></i>
                                <span class="menu-title">
                                    Libros
                                </span>
                                <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li><a href="{{ route('books.index') }}"><i class="fa fa-caret-right"></i> Visualizar </a></li>
                                    <li><a href="{{ route('books.create') }}"><i class="fa fa-caret-right"></i> Agregar </a></li>
                                    <li><a href="ui-xeditable.html"><i class="fa fa-caret-right"></i> Buscar </a></li>
                                    
                                </ul>
                            </li>
                            <!--Menu list item-->
                            <li>
                                <a href="#">
                                <i class="fa fa-briefcase"></i>
                                <span class="menu-title">Editoriales</span>
                                <i class="arrow"></i>
                                </a>
                                <!--Submenu-->
                                <ul class="collapse">
                                    <li><a href="{{ route('editorials.index') }}"><i class="fa fa-caret-right"></i> Visualizar </a></li>
                                    <li><a href="{{ route('editorials.create') }}"><i class="fa fa-caret-right"></i> Agregar </a></li>
                                    <li><a href=""><i class="fa fa-caret-right"></i> Buscar </a></li>
                                    
                                </ul>
                            </li>
                            <!--Menu list item-->
                            
                                </ul>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End widget-->
                    </div>
                </div>
            </div>
            <!--================================-->
            <!--End menu-->
        </div>
    </nav>
    <!--===================================================-->
    <!--END MAIN NAVIGATION-->
            </div>
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Currently v2.2</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2015 Your Company</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
        <script src="{{ asset('js/jquery-2.1.1.min.js') }}"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="{{ asset('plugins/fast-click/fastclick.min.js') }}"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="{{ asset('plugins/nanoscrollerjs/jquery.nanoscroller.min.js') }}"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="{{ asset('plugins/metismenu/metismenu.min.j') }}s"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="{{ asset('js/scripts.js') }}"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="{{ asset('plugins/switchery/switchery.min.js') }}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="{{ asset('plugins/parsley/parsley.min.js') }}"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="{{ asset('plugins/jquery-steps/jquery-steps.min.js') }}"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="{{ asset('plugins/bootstrap-select/bootstrap-select.min.js') }}"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="{{ asset('plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="{{ asset('plugins/masked-input/bootstrap-inputmask.min.js') }}"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="{{ asset('plugins/bootstrap-validator/bootstrapValidator.min.js') }}"></script>
        <!--Flot Chart [ OPTIONAL ]-->
        <script src="{{ asset('plugins/flot-charts/jquery.flot.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.resize.min.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.spline.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.pie.min.js') }}"></script>
        <script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
        <script src="{{ asset('plugins/moment-range/moment-range.js') }}"></script>
        <script src="{{ asset('plugins/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
        <!--Flot Order Bars Chart [ OPTIONAL ]-->
        <script src="{{ asset('plugins/flot-charts/jquery.flot.categories.js') }}"></script>
        <!--ricksaw.js [ OPTIONAL ]-->
        <script src="{{ asset('plugins/jquery-ricksaw-chart/js/raphael-min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-ricksaw-chart/js/d3.v2.js') }}"></script>
        <script src="{{ asset('plugins/jquery-ricksaw-chart/js/rickshaw.min.js') }}"></script>
        <script src="{{ asset('plugins/jquery-ricksaw-chart/ricksaw.js') }}"></script>
        <!--Summernote [ OPTIONAL ]-->
        <script src="{{ asset('plugins/summernote/summernote.min.js') }}"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="{{ asset('plugins/screenfull/screenfull.js') }}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{ asset('js/demo/wizard.js') }}"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="{{ asset('js/demo/form-wizard.js') }}"></script>
        <script src="{{ asset('js/demo/dashboard-v2.js') }}"></script>
        @yield('scripComplemet')
    </body>
</html>