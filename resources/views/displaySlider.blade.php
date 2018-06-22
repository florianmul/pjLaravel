@extends('layouts.app')

@section('content')
<div class="container bg-white">
<div style="text-align:center">
	<h2>{{ $slider->titre }}</h2>
	<p>{{ $slider->auteur }}</p>
</div
	<div class="slideshow-container">
	@foreach($slider->images as $image)
		<div class="mySlides fade">
			<img src="{{ URL::to('/') }}/images/{{ $image->file }}">
			<div class="numbertext">{{ $image->id }}</div>
		</div>
	@endforeach
	</div>
<br>

	<div style="text-align:center">
	@foreach($slider->images as $image)
	<span class="dot"></span> 
	@endforeach
	</div>
</div>
@endsection