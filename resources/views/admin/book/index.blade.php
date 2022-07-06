@extends('../layouts.contentLayoutMaster') @section('title','Libros')
@section('cssComplement')
@endsection


@section('contentPrincipal')
@include('admin.book.alert')
<table  id="table_id" class="table display table-striped table-hover table-responsive" style="width:100%" >

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
                            <span class="badge bg-danger">No publicado</span>
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
    </tfoot>
</table>
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
@endsection


