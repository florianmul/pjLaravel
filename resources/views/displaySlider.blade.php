{{ $slider->titre }}

{{ $slider->auteur }}

{{ $slider->images }}

<section id="contentHobbies" class="overlay">
		<a href="javascript:void(0)" class="closebtn">&times;</a>
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
					<div class="zoom">
						<div><img src="images/hike.jpg"></div>
						<div><img src="images/hobbies/club.jpeg"></div>
						<div><img src="images/roller.jpg"></div>
					</div>
				</div>
			</div>
			<div class="slider slide2">
				<div class="slide-content scrollable">
					<h2>{{ $slider->titre }}</h2>
                    <h3>{{ $slider->auteur }}</h3>
					<div class="zoom">
						<div><img src="images/hobbies/be2im.jpg"></div>
						<div><img src="images/charity.jpg"></div>
						<div><img src="images/writer.jpg"></div>
					</div>
					<p>
						Je fais partie du BDE de l'IUT de Montreuil, depuis ma première année en de DUT Informatique. J'ai décidé d'y rester en tant que trésorière et ancienne élève de l'IUT, afin de nouer le contact entre anciens élèves et nouveaux élèves pour faciliter la recherche d'entreprises des futurs apprentis en alternance de l'IUT.
					</p>
					<p>
						Je suis également une des rédactrices d'actrices du site d'actualités geek de <a class="linkHob" href="https://gamespell.fr">Gamespell</a> et je fais du bénévolat pour une paroisse, pour laquelle j'ai programmé et mis en place son <a class="linkHob" href="http://www.saintlucparis.com/index.php">site Web</a>, qui de nos jours, et modifié et administré par des jeunes de la communauté.
					</p>
				</div>
			</div>
			<div class="slider slide3">
				<div class="slide-content scrollable">
					<h2>{{ $slider->titre }}</h2>
                    <h3>{{ $slider->auteur }}</h3>
					<div class="zoom">
						<div><img src="images/hobbies/eg.jpg"></div>
						<div><img src="images/hobbies/24h.jpg"></div>
						<div><img src="images/hobbies/games.jpg"></div>
					</div>
					<p>
						Je suis une passionnée d'escape game : en effet, j'en ai fait à ce jour une vingtaine entre amis, collègues et famille.
					</p>
					<p>
						Je suis également une grande fan de jeux de plateau et de jeux de sociétés, tels que Tragedy Looper, Room-25, The Resistance : Avalone et pleins d'autres jeux. Par ailleurs, j'écris des articles sur ces jeux sur le site <a class="linkHobLight" href="https://gamespell.fr">Gamespell</a>.
					</p>
					<p>
						J'ai aussi participé aux 24h des IUT (hackathon inter-IUT Informatique de France).
					</p>
				</div>
			</div>
		</div>
	</section>