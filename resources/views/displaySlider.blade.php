@extends('layouts.app')

@section('content')
	<div class="container bg-white">
	<h2>{{ $slider->titre }}</h2>
	<p>{{ $slider->auteur }}</p>

	<div class="slideshow-container">
	@foreach($slider->images as $image)
		<div class="mySlides fade">
			<div class="numbertext">{{ $image->id }}</div>
			<img src="{{ URL::to('/') }}/images/{{ $image->file }}" style="width:100%">
		</div>
	@endforeach
	</div>
<br>

	<div style="text-align:center">
	<span class="dot"></span> 
	<span class="dot"></span> 
	<span class="dot"></span> 
	</div>
</div>
@endsection