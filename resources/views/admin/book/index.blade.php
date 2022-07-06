
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
                            <h3 class="panel-title">Libros</h3>
                        </div>
                        <div class="panel-body">
                            @include('admin.book.alert')
                            <!--div class="gamma-container gamma-loading " id="gamma-container"-->
                                <!---->
                                <div class="pad-btm form-inline">
                                    <div class="row">
                                        <div class="col-sm-6 text-xs-center">
                                            <div class="form-group">
                                                <label class="control-label">Estado</label>
                                                <select id="demo-foo-filter-status" class="form-control">
                                                    <option value="">Show all</option>
                                                    <option value="no-publicado">No-Publicado</option>
                                                    <option value="publicado">Publicado</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 text-xs-center text-right">
                                            <div class="form-group">
                                                <input id="demo-foo-search" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table  id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7" >

                                    <thead>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Autor</th>
                                            <th>Editorial</th>
                                            <th>Año de Publicación</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tBody>
                                            @foreach ($books as $book)
                                                <tr>
                                                    <td>{{ $book->name }}</td>
                                                    <td>{{ $book->author }}</td>
                                                    <td>{{ $book->editorial->name }}</td>
                                                    <td>{{ $book->yearPublication }}</td>
                                                    <td>
                                                        @if ($book->status==1)
                                                            <span class="badge bg-danger">No-publicado</span>
                                                        @else
                                                            <span class="badge bg-success">Publicado</span>
                                                        @endif
                                                    </td>
                                                    <td >
                                                        <div class="d-flex align-items-center col-actions" >
                                                            <a href="{{route('books.edit',$book->id)}}" class="btn btn-xs btn-warning text-primary mx-1 shadow" title="Edit">
                                                                <i class="fa fa-lg fa-fw fa-pencil"></i>
                                                            </a>
                                                            <form action="{{route('books.destroy' ,$book->id)}}" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-xs btn-danger text-primary mx-1 shadow bg-danger">
                                                                    <i class="fa fa-lg fa-fw fa-trash"></i>
                                                                </button>
                                                            </form> 
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                    </tBody>
                                    <tfoot>
                                        <tr>
                                            <th>Nombre</th>
                                            <th>Autor</th>
                                            <th>Editorial</th>
                                            <th>Año de Publicación</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    
                                        <tr>
                                            <td colspan="6">
                                                <div class="text-right">
                                                    <ul class="pagination"></ul>
                                                </div>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            <!--/div-->
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--script> 

    $(document).ready(function () {
        $('#table_id').DataTable(
            {
                language: {
                    url: 'https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                }
            }, 
        );
    });
</script-->
@include('admin.template.sidebar')
@include('admin.template.footer')