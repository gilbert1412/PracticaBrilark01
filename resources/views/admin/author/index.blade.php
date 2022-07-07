@extends('../layouts.contentLayoutMaster') @section('title','Autores')
@section('cssComplement')
@endsection
    <link href="{{ asset('plugins/fooTable/css/footable.core.css') }}" rel="stylesheet">
@section('contentPrincipal')
    @include('admin.template.alert')
    <div class="panel">
        <div class="panel-body">
            <div class="pad-btm form-inline">
                <div class="row">
                    <div class="col-sm-6 text-xs-center">
                        <div class="form-group">
                            <label class="control-label">Status</label>
                            <select id="demo-foo-filter-status" class="form-control">
                                <option value="">Show all</option>
                                <option value="activo">Activo</option>
                                <option value="no activo">No activo</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 text-xs-center text-right">
                        <div class="form-group">
                            <input id="demo-foo-search" type="text" placeholder="Buscar" class="form-control" autocomplete="off">
                        </div>
                    </div>
                </div>
            </div>
            <table id="demo-foo-filtering" class="table table-bordered table-hover toggle-circle" data-page-size="7">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nickname</th>
                        <th>Nacionaldad</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tBody>
                        @foreach ($authors as $author)
                            <tr>
                                <td>{{ $author->name }}</td>
                                <td>{{ $author->nickName }}</td>
                                <td>{{ $author->nationality }}</td>
                                <td>{{ $author->yearBirth }}</td>
                                <td >
                                    <div class="align-items-center col-actions" >
                                        <a href="{{route('authors.edit',$author->id)}}" class="btn btn-xs btn-warning text-primary mx-1 shadow" title="Edit">
                                            <i class="fa fa-lg fa-fw fa-pencil"></i>
                                        </a>
                                        <form action="{{route('authors.destroy', $author->id)}}" method="POST">
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
                        <th>Nickname</th>
                        <th>Nacionaldad</th>
                        <th>Fecha de Nacimiento</th>
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
        </div>
    </div>
@endsection

@section('scripComplemet')
    
    <script src="{{ asset('plugins/fooTable/dist/footable.all.min.js') }}"></script>
    <script src="{{ asset('js/demo/tables-footable.js') }}"></script>
@endsection