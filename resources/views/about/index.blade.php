@extends('layouts.app')

@section('content')

<div class="col-md-1"></div>
<div class="col-xs-12 col-md-10 mx-auto">
    <div class="text-center">
        <a href="/home" class="btn btn-primary text-white">
            Volver al administrador
        </a>
    </div>
    <br><br>
    <div class="card">
        <div class="card-header">
            <h1 class="text-center">Info</h1>
        </div>
        <div class="card-body">

            <div class="text-center mb-4">
                <a href="/about/create" class="btn btn-primary text-white">
                    Nuevo
                </a>
            </div>

            @if ($abouts->count())

            <ul class="list-group">
                @foreach ($abouts as $about)
                <li class="list-group-item">
                    <div class="clearfix">
                        <div class="float-left mr-auto">
                        	<img src="{{ $about->img }}" width="80px">
                            <a href="/about/{{ $about->id }}">
                                Ver imagen
                            </a>

                        </div>
                        <div class="float-right ml-auto">
                            <a href="/about/{{ $about->id }}/edit" class="btn btn-primary text-white mx-4">
                                Editar
                            </a>
                            <form class="d-inline" action="/about/{{ $about->id }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-white">
                                    Eliminar
                                </button>
                            </form>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>

            @else

            <h3>No hay resultados para mostrar</h3>

            @endif
        </div>
    </div>
</div>
<br><br><br><br>
@endsection