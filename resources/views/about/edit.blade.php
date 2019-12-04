@extends('layouts.app')

@section('content')

<div class="col-md-3"></div>
<div class="col-xs-12 col-md-6 mx-auto">
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Editar Info</h1>
        </div>
        <div class="card-body">
            <form action="/about/{{ $about->id }}" method="post">
                @csrf
                @method('PUT')
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">URL DE IMAGEN</label>
                            <br>
                            <input type="text" name="img" id="img" class="form-control" placeholder="" value="{{ $about->img }}">
                        </div>                                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">TÍTULO</label>
                            <br>
                            <input type="text" name="title" id="title" class="form-control" placeholder=""
                                value="{{ $about->title }}">
                        </div>
                    </div>
                </div>                
                <div class="form-group">
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary text-white">
                            Editar Info
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection