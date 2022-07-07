
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
                                                <select name="author_id" class="form-control">
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
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.template.sidebar')
@include('admin.template.footer')