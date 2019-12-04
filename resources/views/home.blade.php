@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                    <br><br><br><br>
                    <div class="row">
                        <div class="col-md-6">
                            <a href="/work" class="btn btn-primary">Administrar trabajos</a>
                        </div>
                        <div class="col-md-6">
                            <a href="/about" class="btn btn-primary">Administrar info</a>
                        </div>
                    </div>
                    <br><br><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<br><br><br><br>
@endsection