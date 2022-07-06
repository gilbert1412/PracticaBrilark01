@if (session('success'))
        <div theme="success" class="alert alert-success" role='alert' title="Correcto">
            {{ session('success') }}
        </div>
@endif

@if (session('destroy'))
        <div theme="danger" class="alert alert-danger" role='alert'  title="Eliminado">
            {{ session('destroy') }}
        </div>
@endif

@if (session('update'))
        <div theme="info" class="alert alert-warning" rol='alert' title="Actualizacion">
            {{ session('update') }}
        </div>
@endif