
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
                       <h3>Edicion de Libros</h3>
                      </div>
                        <div class="panel-body">
                            <div class="gamma-container gamma-loading" id="gamma-container">
                                <!---->
                                <form action="{{ route('books.update',$book) }}" method="POST">
                                    @method('PUT')
                                    @csrf
                                        <div class="row">
                                            <div class="col-md-12 form-group">
                                                <input type="text" class="form-control" name="name" value="{{ $book->name }}" placeholder="Nombre del Libro"/>
                                                @error('name')
                                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input type="text" class="form-control" name="author" value="{{ $book->author }}" placeholder="Autor"/>
                                                @error('author')
                                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <select name="editorial_id" class="form-control">
                                                    @foreach ($editorials as $element)
                                                        @if ($book->editorial_id == $element->id)
                                                            <option value="{{ $element->id}}" selected>{{ $element->name }}</option>
                                                        @else
                                                            <option value="{{ $element->id}}">{{ $element->name }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @error('editorial_id')
                                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                                            @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <input class="form-control" type="date" value="{{ $book->yearPublication }}" name="yearPublication" id="">
                                                @error('yearPublication')
                                                    <span class="text-danger form-label fw-bold">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-md-6 form-group">
                                                <select name="status" class="form-control">
                                                    @if ($book->status==1)
                                                        <option value="1" selected>No publicado</option>
                                                        <option value="2">Publicado</option>
                                                    @else
                                                        <option value="1" >No publicado</option>
                                                        <option value="2" selected>Publicado</option>
                                                    @endif
                                                </select>
                                                @error('status')
                                                <span class="text-danger form-label fw-bold">{{ $message }}</span>
                                            @enderror
                                            </div>
                                        </div>
                                            <button label="Registrar" type="submit" class="btn btn-warning">Editar</button>
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