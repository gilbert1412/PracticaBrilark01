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
                                    <li><a href="ui-xeditable.html"><i class="fa fa-caret-right"></i> Editar </a></li>
                                    
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
                                    <li><a href="ui-animation.html"><i class="fa fa-caret-right"></i> Visualizar </a></li>
                                    <li><a href="ui-panel.html"><i class="fa fa-caret-right"></i> Agregar </a></li>
                                    <li><a href="ui-xeditable.html"><i class="fa fa-caret-right"></i> Editar </a></li>
                                    
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