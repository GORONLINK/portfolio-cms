@extends('layouts.app')

@section('content')

<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Nuevo Trabajo</h1>
        </div>
        <div class="card-body">
            <form action="/work" method="post">
            @csrf

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN PRINCIPAL</label>
                            <br>
                            <input type="text" name="url1" id="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 2</label>
                            <br>
                            <input type="text" name="url2" id="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 3</label>
                            <br>
                            <input type="text" name="url3" id="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 4</label>
                            <br>
                            <input type="text" name="url4" id="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 5</label>
                            <br>
                            <input type="text" name="url5" id="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN 6</label>
                            <br>
                            <input type="text" name="url6" id="name" class="form-control" placeholder="">
                        </div>                                           
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">TÍTULO</label>
                            <br>
                            <input type="text" name="title" id="name" class="form-control" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="name">DESCRIPCIÓN</label>
                            <br>
                            <textarea class="form-control" name="description" id="name" rows="3"></textarea>                            
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-white">
                            Crear Trabajo
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection