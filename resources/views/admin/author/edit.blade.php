@extends('../layouts.contentLayoutMaster') @section('title','Autor')
@section('cssComplement')
    <link/>
@endsection

@section('contentPrincipal')
    <div class="panel">
        <div class="panel-heading">
    <h3>Edición de Autor</h3>
    </div>
        <div class="panel-body">
            <div class="gamma-container gamma-loading" id="gamma-container">
                <!---->
                <form action="{{ route('authors.update',$author) }}" method="POST">
                    @method('PUT')
                    @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="name" value="{{ $author->name }}" placeholder="Nombre del author"/>
                                @error('name')
                                    <span class="text-danger form-label fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="owner" value="{{ $author->nickName }}" placeholder="Propietario"/>
                                @error('owner')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="direction" value="{{ $author->nationality }}" placeholder="Dirección"/>
                                @error('direction')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="direction" value="{{ $author->yearBirth }}" placeholder="Dirección"/>
                                @error('direction')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                            </div>
                        </div>
                            <button label="Editar" type="submit" class="btn btn-warning">Editar</button>
                </form>
            </div>
        
        </div>
    </div>

@endsection

@section('scripComplemet')
    <script></script>
@endsection