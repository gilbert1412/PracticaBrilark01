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
                <form action="{{ route('authors.store') }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nombre del author"/>
                                @error('name')
                                    <span class="text-danger form-label fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="nickName"  placeholder="Nick Name"/>
                                @error('owner')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="nationality" placeholder="Nacionalidad"/>
                                @error('direction')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="date" class="form-control" name="yearBirth" placeholder="Fecha de Nacimiento"/>
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