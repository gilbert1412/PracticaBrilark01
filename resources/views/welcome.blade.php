
@include('admin.template.header')
@include('admin.template.navbar')

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
          <div id="page-content">
            <div class="row">
                <div class="col-lg-12">
                   <div class="panel">
                        <div class="panel-heading">
                       <h3>Registro de Libros</h3>
                      </div>
                        <div class="panel-body">
                            <div class="gamma-container gamma-loading" id="gamma-container">
                                <!---->
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.template.sidebar')
@include('admin.template.footer')