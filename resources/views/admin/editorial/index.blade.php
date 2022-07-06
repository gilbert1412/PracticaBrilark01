@extends('../layouts.contentLayoutMaster') @section('title','Editoriales')
@section('cssComplement')
@endsection
    <link href="{{ asset('plugins/fooTable/css/footable.core.css') }}" rel="stylesheet">
@section('contentPrincipal')
    @include('admin.editorial.alert')
    <div class="panel">
        <div class="panel-body">
            <div class="pad-btm form-inline">
                <div class="row">
                    <div class="col-sm-6 text-xs-center">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select id="demo-foo-filter-status" class="form-control">
                                <option value="">Show all</option>
                                <option value="active">Active</option>
                                <option value="disabled">Disabled</option>
                                <option value="suspended">Suspended</option>
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
            <table  id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Propietario</th>
                        <th>Dirección</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tBody>
                        @foreach ($editorial as $editorial)
                            <tr>
                                <td>{{ $editorial->name }}</td>
                                <td>{{ $editorial->owner }}</td>
                                <td>{{ $editorial->direction }}</td>
                                <td>
                                    @if ($editorial->status==1)
                                        <span class="badge bg-success">Activo</span>
                                    @else
                                        <span class="badge bg-warning">Inactivo</span>
                                    @endif
                                </td>
                                <td >
                                    <div class="d-flex align-items-center col-actions" >
                                        <a href="{{route('editorials.edit',$editorial->id)}}" class="btn btn-xs btn-warning text-primary mx-1 shadow" title="Edit">
                                            <i class="fa fa-lg fa-fw fa-pencil"></i>
                                        </a>
                                        <form action="{{route('editorials.destroy', $editorial->id)}}" method="POST">
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
                        <th>Propietario</th>
                        <th>Dirección</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </tr>
                    <tfoot>
                        <tr>
                            <td colspan="6">
                                <div class="text-right">
                                    <ul class="pagination"></ul>
                                </div>
                            </td>
                        </tr>
                    </tfoot>
                </tfoot>
            </table>
        </div>
    </div>
@endsection

@section('scripComplemet')
    <script> 
        $(document).ready(function () {
            $('#table_id').DataTable(
                {
                    language: {
                        url: 'https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json'
                    }
                }, 
            );
        });
    </script>
    <script src="{{ asset('plugins/fooTable/dist/footable.all.min.js') }}"></script>
    <script src="{{ asset('js/demo/tables-footable.js') }}"></script>
@endsection