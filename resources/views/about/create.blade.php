@extends('layouts.app')

@section('content')

<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Nuevo Trabajo</h1>
        </div>
        <div class="card-body">
            <form action="/about" method="post">
            @csrf

                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN</label>
                            <br>
                            <input type="text" name="img" id="img" class="form-control">
                        </div>                                          
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">TÍTULO</label>
                            <br>
                            <input type="text" name="title" id="title" class="form-control" placeholder="">
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-white">
                            Cargar Info
                        </button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

@endsection