@extends('../layouts.contentLayoutMaster') @section('title','Editorial')
@section('cssComplement')
    <link href="{{ asset('plugins/dropzone/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('plugins/bootstrap-select/bootstrap-select.min.css') }}" rel="stylesheet">
@endsection

@section('contentPrincipal')
<div class="panel">
    <div class="panel-heading">
    <h3>Registro de Libros</h3>
</div>
    <div class="panel-body">
        <div class="gamma-container gamma-loading" id="gamma-container">
            <!---->
            <form action="{{ route('books.store') }}" method="POST">
                @csrf
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control" name="name" placeholder="Nombre del Libro"/>
                            @error('name')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <select name="author_id[]" class="demo-cs-multiselect" data-placeholder="Choose a Country..." multiple tabindex="4">
                                @foreach ($authors as $element)
                                    <option value="{{ $element->id }}">{{ $element->nickName }}</option>
                                @endforeach
                            </select>
                            @error('author_id')
                            <span class="text-danger form-label fw-bold">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <select name="editorial_id" class="form-control">
                                @foreach ($editorial as $element)
                                    <option value="{{ $element->id }}">{{ $element->name }}</option>
                                @endforeach
                            </select>
                            @error('editorial_id')
                            <span class="text-danger form-label fw-bold">{{ $message }}</span>
                        @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <input class="form-control" type="date" name="yearPublication">
                            @error('yearPublication')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-md-6 form-group">
                            <select name="status" class="form-control">
                                <option value="1">No publicado</option>
                                <option value="2">Publicado</option>
                            </select>
                            @error('status')
                            <span class="text-danger form-label fw-bold">{{ $message }}</span>
                        @enderror
                        </div>
                    </div>
                        <button label="Registrar" type="submit" class="btn btn-success">Registrar</button>
            </form>
        </div>
    
    </div>
</div>
                
@endsection

@section('scripComplemet')
    <script></script>
@endsection