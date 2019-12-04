@extends('layouts.app')

@section('content')

<div class="container">
	@if ($abouts->count())

		@foreach ($abouts as $about)
			<div class="row">
				<div class="col-md-4 mx-auto">
					<div class="text-center">
						<img src="{{ $about->img }}" class="img-fluid rounded-circle" width="200px">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-8 mx-auto">
					<div class="text-center p-4">
						<h2>{{ $about->title }}</h2>
					</div>
					<hr>
				</div>
			</div>
		@endforeach			
	@endif
	<div class="row">
		<div class="col-md-8 mx-auto">
			<div class="text-center">
				<p class="texto-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur.</p>
				<br>
				<p class="texto-about">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
				<br>
				<a target="_blank" href="{{ asset('download/marianelavivas.pdf') }}" class="btn btn-primary">Download CV</a>
			</div>
		</div>
	</div>
</div>

<br><br>

@endsection