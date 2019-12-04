@extends('layouts.app')

@section('content')

<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Editar Producto</h1>
        </div>
        <div class="card-body">
            <form action="/work/{{ $work->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN PRINCIPAL</label>
                            <br>
                            <input type="text" name="url1" id="name" class="form-control" placeholder="" value="{{ $work->url1 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 2</label>
                            <br>
                            <input type="text" name="url2" id="name" class="form-control" placeholder=""
                                value="{{ $work->url2 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 3</label>
                            <br>
                            <input type="text" name="url3" id="name" class="form-control" placeholder=""
                                value="{{ $work->url3 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 4</label>
                            <br>
                            <input type="text" name="url4" id="name" class="form-control" placeholder=""
                                value="{{ $work->url4 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 5</label>
                            <br>
                            <input type="text" name="url5" id="name" class="form-control" placeholder=""
                                value="{{ $work->url5 }}">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 6</label>
                            <br>
                            <input type="text" name="url6" id="name" class="form-control" placeholder=""
                                value="{{ $work->url6 }}">
                        </div>                                         
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">TÍTULO</label>
                            <br>
                            <input type="text" name="title" id="name" class="form-control" placeholder=""
                                value="{{ $work->title }}">
                        </div>
                        <div class="form-group">
                            <label for="name">DESCRIPCIÓN</label>
                            <br>
                            <textarea class="form-control" name="description" id="name" rows="3">{{ $work->description }}</textarea>
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-white">
                            Editar Trabajo
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection