@extends('layouts.contentLayoutMaster') @section('title','Home')
@section('cssComplement')
@endsection

@section('contentPrincipal')
<div class="row">
    
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="panel">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-10">
                        <h3 class="mar-no"> <span class="counter">{{$countBook}}</span></h3>
                       
                        <a href="{{ route('books.index') }}"> Ver Libros </a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-book fa-3x text-danger"></i> </div>
                </div>
                <div class="progress progress-striped progress-sm">
                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger"> <span class="sr-only">60% Complete</span> </div>
                </div>
                <p> Libros Publicados</p>
            </div>
        </div>
    </div>
    <div class="col-md-3 col-sm-6 col-xs-12">
        <div class="panel widget">
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-9 col-sm-9 col-xs-10">
                        <h3 class="mar-no"> <span class="counter">{{$countEditorial}}</span></h3>
                       
                        <a href="{{ route('editorials.index') }}"> 
                            Ver Editoriales

                         </a>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-briefcase fa-3x text-success"></i> </div>
                </div>
                <div class="progress progress-striped progress-sm">
                    <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-success"> <span class="sr-only">60% Complete</span> </div>
                </div>
                <p>Editoriales Activas </p>
            </div>
        </div>
    </div>
    
</div>
@endsection

@section('scripComplemet')

@endsection


