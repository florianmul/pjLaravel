
<div class="css-slider-wrapper">
	<input type="radio" name="slider" checked="checked" class="slide-radio1" id="slider_1">
	<input type="radio" name="slider" class="slide-radio2" id="slider_2">
	<input type="radio" name="slider" class="slide-radio3" id="slider_3">
	<div class="slider-pagination">
		<label for="slider_1" class="page1"></label> 
		<label for="slider_2" class="page2"></label>
		<label for="slider_3" class="page3"></label>
	</div>
	<div class="next control">
		<label for="slider_1" class="numb1">
			<i class="fa fa-arrow-circle-right"></i>
		</label>
		<label for="slider_2" class="numb2">
			<i class="fa fa-arrow-circle-right"></i>
		</label>
		<label for="slider_3" class="numb3">
			<i class="fa fa-arrow-circle-right"></i>
		</label>
	</div>
	<div class="previous control">
		<label for="slider_1" class="numb1">
			<i class="fa fa-arrow-circle-left"></i>
		</label>
		<label for="slider_2" class="numb2">
			<i class="fa fa-arrow-circle-left"></i>
		</label>
		<label for="slider_3" class="numb3">
			<i class="fa fa-arrow-circle-left"></i>
		</label>
	</div>
	<div class="slider slide1">
		<div class="slide-content scrollable">
			<h2>{{ $slider->titre }}</h2>
			<h3>{{ $slider->auteur }}</h3>
			
		</div>
	</div>
	<div class="slider slide2">
		<div class="slide-content scrollable">
			<h2>{{ $slider->titre }}</h2>
			<h3>{{ $slider->auteur }}</h3>

		</div>
	</div>
	<div class="slider slide3">
		<div class="slide-content scrollable">
			<h2>{{ $slider->titre }}</h2>
			<h3>{{ $slider->auteur }}</h3>

			
		</div>
	</div>
</div>
