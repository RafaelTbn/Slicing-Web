<!DOCTYPE html>
<html>
<head>
	<title>Portfolio website</title>
	<!--<link rel="stylesheet" type="text/css" href="css/style.css"> -->
	<link href="{{ asset('css/style.css') }}" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
	<!----hero Section start---->

	<div class="hero">
		<nav>
			<h2 class="logo">Personal<span> CV</span></h2>
			<ul>
				<li><a href="#hero">Home</a></li>
				<li><a href="#about" >About Us</a></li>
				<li><a href="#service">Skills</a></li>
				<li><a href="#service">Experience</a></li>
			</ul>
			<a href="#" class="btn">Subscribe</a>
		</nav>

		<div class="content">
			<h4>Hello, my name is</h4>
			<h1>Rafael <span>Tambunan</span></h1>
			<h3>I'am an Informatics Engineering Student.</h3>
			<div class="newslatter">
				<form>
					<input type="email" name="email" id="mail" placeholder="Enter Your Email">
					<input type="submit" name="submit" value="Lets Start">
				</form>
			</div>
		</div>
	</div>

	<!----About section start---->
	<section class="about">
		<div class="main">
			<img src="../image/IMG_2889.jpg">
			<div class="about-text">
				<h2>About Me</h2>
				<h5>Informatics Engineering Student</h5>
				<h5><span>Sepuluh Nopember Institute of Technology</span></h5>
				<p>Saya seorang mahasiswa Teknik Informatika dari Institut
					Teknologi Sepuluh Nopember yang tertarik dengan problem
					solving. Saya yang memilki tempat tinggal yang jauh,
					bercita-cita untuk menjadi seorang software engineer
					khususnya di bidang Front End dan App Dev.</p>
				<button type="button">Let's Talk</button>
			</div>
		</div>
	</section>

	<!-----service section start----------->
	<div class="service">
		<div class="title">
			<h2>Skills</h2>
		</div>

		<div class="box">
			<div class="card">
				<p><img src="../image/phyton.png"/></p><br>
				<p><h5>Python</h5></p>
			</div>

			<div class="card">
				<p><img src="../image/java.png"/></p><br>
				<p><h5>Java</h5></p>
			</div>

			<div class="card">
				<p><img src="../image/cpp.png"/></p><br>
				<p><h5>C/CPP</h5></p>				
			</div>
			

			<div class="card">
				<p><img src="../image/vegas.png"/></p><br>
				<p><h5>Vegas Pro</h5></p>
			</div>
		</div>
		
		<div class="title">
			<h2>Experience</h2>
		</div>

		<div class="box2">
			<div class="card2">
				<p><img src="../image/hmtc.png"/></p><br>
				<p><h5>Staff KDPM HMTC 2022</h5></p>
				<div class="pra">
					<p>Saya menjadi seorang staff dari himpunan mahasiswa yaitu Himpunan Mahasiswa Teknik Computer-Informatika (HMTC) ITS
						 yang bergerak dalam menangani Kaderisasi dan Pemetaan mahasiswa tepatnya departemen KDPM.
					</p>

				</div>
			</div>

			<div class="card2">
				<p><img src="../image/hmtc.png"/></p>,<br>
				<p><h5>Ketua Pelaksan OKKBK 2022</h5></p>
				<div class="pra">
					<p>Saya menjadi Ketua Pelaksana dari kegiatan Orientasi Keprofesian dan Kompetensi Berbasis Kurikulum (OKKBK) 2022.
						OKKBK adalah suatu acara dari Departemen Jurusan yang memfasilitasi mahasiswa baru untuk lebih mengenal dekat 
						dengan Departemen jurusannya masing-masing dan membantu mengetahui kegiatan kemahasiswaan yang ada di Departemen tersebut	
					</p>

				</div>
		</div>
				

	</div>
	

	<!------footer start--------->
	<footer>
		<p>Rafael Tambunan</p>
		<p>For more information - please click on the link below to subscribe to my channel:</p>
		<div class="social">
			<a href="https://www.facebook.com/rafael.tambunan.79/"><i class="fab fa-facebook-f"></i></a>
			<a href="https://www.instagram.com/rafaelaktbn/"><i class="fab fa-instagram"></i></a>
			<a href="https://twitter.com/RafaelTbn"><i class="fab fa-twitter"></i></a>
			<a href="https://www.youtube.com/channel/UCzn3KJIsQ6GYu8OoFGz2qgA/videos"><i class="fab fa-youtube"></i></a>
			<a href="https://rafaelaktambunan.blogspot.com/"><i class="fab fa-blogger"></i></a>
			<a href="https://www.linkedin.com/in/rafael-tambunan-481831216/"><i class="fab fa-linkedin"></i></a>
		</div>	
		<p class="end">CopyRight By Rafael Tambunan</p>
	</footer>
</body>
</html>