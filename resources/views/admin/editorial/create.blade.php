@extends('../layouts.contentLayoutMaster') @section('title','Editorial')
@section('cssComplement')
    <link/>
@endsection

@section('contentPrincipal')
    <div class="panel">
        <div class="panel-heading">
    <h3>Registro de Editorial</h3>
    </div>
        <div class="panel-body">
            <div class="gamma-container gamma-loading" id="gamma-container">
                <!---->
                <form action="{{ route('editorials.store') }}" method="POST">
                    @csrf
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" name="name" placeholder="Nombre del Editorial"/>
                                @error('name')
                                    <span class="text-danger form-label fw-bold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="owner" placeholder="Propietario"/>
                                @error('owner')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <input type="text" class="form-control" name="direction" placeholder="Dirección"/>
                                @error('direction')
                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                            @enderror
                            </div>
                            <div class="col-md-6 form-group">
                                <select name="status" class="form-control">
                                    <option value="1">Activo</option>
                                    <option value="2">Inactivo</option>
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