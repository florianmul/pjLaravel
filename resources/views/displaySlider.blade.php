@extends('layouts.app')

@section('content')
	<div class="container bg-white">
	<h2>{{ $slider->titre }}</h2>
	<p>{{ $slider->auteur }}</p>

	<div class="slideshow-container">

		<div class="mySlides fade">
		<div class="numbertext">1 / 3</div>
		<img src="img_nature_wide.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
		<div class="numbertext">2 / 3</div>
		<img src="img_snow_wide.jpg" style="width:100%">
		</div>

		<div class="mySlides fade">
		<div class="numbertext">3 / 3</div>
		<img src="img_mountains_wide.jpg" style="width:100%">
		</div>

	</div>
<br>

	<div style="text-align:center">
	<span class="dot"></span> 
	<span class="dot"></span> 
	<span class="dot"></span> 
	</div>
</div>
@endsection