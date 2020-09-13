<?php include('./include/db.php');
$query = "SELECT * FROM personal_setup,aboutus_setup,userinfo";
$runquery = mysqli_query($db, $query);
if (!$db) :
	header("location:index-2.html");
endif;
$data = mysqli_fetch_array($runquery);
?>



<!DOCTYPE html>

<head>
	<meta charset="utf-8">
	<title>kimweb</title>
	<meta name="description" content="portfolio file rouge YOUCODE">
	<meta name="author" content="abdelkarim nouaouri">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/duotone.css" integrity="sha384-R3QzTxyukP03CMqKFe0ssp5wUvBPEyy9ZspCB+Y01fEjhMwcXixTyeot+S40+AjZ" crossorigin="anonymous" />
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/fontawesome.css" integrity="sha384-eHoocPgXsiuZh+Yy6+7DsKAerLXyJmu2Hadh4QYyt+8v86geixVYwFqUvMU8X90l" crossorigin="anonymous" />
	<link rel="stylesheet" href="dist/css/base.css">
	<link rel="stylesheet" href="dist/css/main.css">
	<link rel="stylesheet" href="dist/css/vendor.css">
	<script src="https://kit.fontawesome.com/acef9e66fa.js" crossorigin="anonymous"></script>
	<script src="dist/js/modernizr.js"></script>
	<script src="dist/js/pace.min.js"></script>
</head>

<body id="top">
	<header>
		<div class="row">

			<div class="top-bar">
				<a class="menu-toggle" href="#"><span>Menu</span></a>

				<div class="logo">
				</div>

				<nav id="main-nav-wrap">
					<ul class="main-navigation">
						<li class="current"><a class="smoothscroll" href="#intro" title="">Home</a></li>
						<li><a class="smoothscroll" href="#about" title="">About</a></li>
						<li><a class="smoothscroll" href="#resume" title="">Resume</a></li>
						<li><a class="smoothscroll" href="#portfolio" title="">Portfolio</a></li>
						<li><a class="smoothscroll" href="#services" title="">Services</a></li>
						<li><a href="/contact.html" title="">contact</a></li>
					</ul>
				</nav>
			</div>

		</div>
	</header>


	<section id="intro">

		<div class="intro-overlay"></div>

		<div class="intro-content">
			<div class="row">

				<div class="col-twelve">

					<h5>Hello, World.</h5>
					<h1><?= $data['name'] ?>
					</h1>

					<p class="intro-position">
						Freelance Web Designer & Developer based in Toussoufia, Morocco.
						Highly experienced in designing & developing websites.
					</p>

					<a class="button stroke smoothscroll" href="#about" title="">More About Me</a>

				</div>

			</div>
		</div>

		<ul class="intro-social">
			<?php
			if ($data['twitter'] != "") {
			?>
				<a href="<?= $data['twitter'] ?>" class="twitter"><i class="icofont-twitter"></i></a>
			<?php
			}
			if ($data['facebook'] != "") {
			?>
				<a href="<?= $data['facebook'] ?>" class="facebook"><i class="fa fa-facebook"></i></a>
			<?php
			}
			if ($data['instagram'] != "") {
			?>
				<a href="<?= $data['instagram'] ?>" class="instagram"><i class="fa fa-instagram"></i></a>
			<?php
			}
			if ($data['skype'] != "") {
			?>
				<a href="<?= $data['instagram'] ?>" class="google-plus"><i class="fa fa-skype"></i></a>
			<?php
			}
			if ($data['linkedin'] != "") {
			?>
				<a href="<?= $data['linkedin'] ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
			<?php
			}
			if ($data['github'] != "") {
			?>
				<a href="<?= $data['instagram'] ?>" class="github"><i class="fa fa-github"></i></a>
			<?php
			}
			?>
		</ul>

	</section>



	<section id="about">

		<div class="row section-intro">
			<div class="col-twelve">

				<h5>About</h5>
				<h1><?= $data['heading'] ?>
				</h1>

				<div class="intro-info">

					<img src="images/<?= $data['profilepic'] ?>" alt="Profile Picture">

					<p class="lead"> <?= $data['subheading'] ?></p>
				</div>

			</div>
		</div>

		<div class="row about-content">

			<div class="col-six tab-full">

				<h3>Profile</h3>


				<ul class="info-list">
					<li>
						<strong>Fullname:</strong>
						<span><?= $data['name'] ?></span>
					</li>
					<li>
						<strong>Birth Date:</strong>
						<span><?= $data['dob'] ?></span>
					</li>
					<li>
						<strong>Job:</strong>
						<span>Freelancer, Frontend Developer</span>
					</li>
					<li>
						<strong>Website:</strong>
						<span><?= $data['website'] ?></span>
					</li>
					<li>
						<strong>Email:</strong>
						<span><?= $data['emailid'] ?></span>
					</li>

				</ul>

			</div>

			<div class="col-six tab-full">

				<h3>Skills</h3>
				<?php
				$q_skills = "SELECT * FROM skills";
				$run_skills = mysqli_query($db, $q_skills);
				while ($data1 = mysqli_fetch_array($run_skills)) {
				?>



					<ul class="skill-bars">
						<li>
							<div style="width: <?= $data1['score'] ?>%;" class="progress"> <span><?= $data1['score'] ?>%
								</span></div>
							<strong><?= $data1['skill'] ?>
							</strong>
						</li>
					</ul>
				<?php
				}
				?>






			</div>

		</div>

		<div class="row button-section">
			<div class="col-twelve">
				<a href="contact.html" title="Hire Me" class="button stroke ">Hire Me</a>
				<a href="#" title="Download CV" class="button button-primary">Download CV</a>
			</div>
		</div>

	</section>


	<section id="resume" class="grey-section">

		<div class="row section-intro">
			<div class="col-twelve">

				<h1>Resume</h1>
				<h1>More of my credentials.</h>

					<p class="lead">Lorem ipsum Do commodo in proident enim in dolor cupidatat adipisicing dolore officia nisi aliqua incididunt Ut veniam lorem ipsum Consectetur ut in in eu do.</p>

			</div>
		</div>

		<div class="row resume-timeline">

			<div class="col-twelve resume-header">

				<h2>Work Experience</h2>

			</div> >

			<div class="col-twelve">

				<div class="timeline-wrap">

					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-graduation-cap"></i>
						</div>

						<?php
						$q_resume = "SELECT * FROM resume WHERE category='e'";
						$run_resume = mysqli_query($db, $q_resume);
						while ($data3 = mysqli_fetch_array($run_resume)) {
						?>

							<div class="timeline-header">

								<h3><?= $data3['title'] ?></h3>
								<p><?= $data3['year'] ?></p>
							</div>

							<div class="timeline-content">
								<h4>
									<?$data3['workdesc'] ?>
								</h4>
								<p>
									<?$data3['ogname'] ?>
								</p>
							</div>
						<?php
						}
						?>


					</div>


				</div>

			</div>

		</div>

		<div class="row resume-timeline">

			<div class="col-twelve resume-header">

				<h2>Education</h2>

			</div>

			<div class="col-twelve">

				<div class="timeline-wrap">
					<div class="timeline-block">

						<div class="timeline-ico">
							<i class="fa fa-briefcase"></i>
						</div>
						<?php
						$q_resume = "SELECT * FROM resume WHERE category='pe'";
						$run_resume = mysqli_query($db, $q_resume);
						while ($data3
							= mysqli_fetch_array($run_resume)
						) {
						?>

							<div class="timeline-header">
								<h3><?= $data3['title'] ?></h3>
								<p><?= $data3['year'] ?></p>
							</div>
					</div>

					<div class="timeline-content">
						<h4>
							<?$data3['workdesc'] ?>
						</h4>
						<p>
							<?$data3['ogname'] ?>
						</p>
					</div>
				<?php
						}
				?>


				</div>



			</div>



		</div>





	</section>
	<!-- projects -->

	<section class="project">
		<h1 class="project-tittle">Our best projects</h1>
		<div class="our_project">
			<?php
			$query = "SELECT * FROM portfolio";
			$runquery = mysqli_query($db, $query);
			while ($data2 = mysqli_fetch_array($runquery)) {
			?>

				<div class="div1">
					<div class="view overlay z-depth-1">
						<img src="images/<?= $data2['projectpic'] ?>" class="img-fluid" alt="Sample image">
						<div class="mask flex-center blue-gradient-rgba">
							<form action="<?= $data2['projectlink'] ?>">
								<input class="mask" type="submit" value="view site" />
							</form>
						</div>
					</div>
				</div>

			<?php
			}
			?>
		</div>
	</section>
	<!-- projects -->

	<section id="services">

		<div class="overlay"></div>

		<div class="row section-intro">
			<div class="col-twelve">
				<h3>What Can I Do For You?</h3>

				<h4 class="lead">Interested in working together? We should queue up a chat. I’ll buy the coffee..</h4>

			</div>
		</div>

		<div class="row services-content">

			<div id="owl-slider" class="owl-carousel services-list">

				<div class="service">

					<span class="icon"><i class="icon-earth"></i></span>

					<div class="service-content">

						<h3>Webdesign</h3>

						<p class="desc"> I value simple content structure, clean design patterns, and thoughtful interactions.
						</p>

					</div>

				</div>

				<div class="service">

					<span class="icon"><i class="icon-window"></i></span>

					<div class="service-content">

						<h3>Web Development</h3>

						<p class="desc">I like to code things from scratch, and enjoy bringing ideas to life in the browser.

					</div>

				</div>

				<div class="service">

					<span class="icon"><i class="icon-paint-brush"></i></span>

					<div class="service-content">

						<h3>Seo & Marketing</h3>

						<p class="desc">A case study on how to improve your website relevance on the google search ranking algorithm and why does it matter.

						</p>

					</div>

				</div>



			</div>

		</div>

	</section>


	<section id="stats" class="count-up">

		<div class="row">
			<div class="col-twelve">

				<div class="block-1-6 block-s-1-3 block-tab-1-2 block-mob-full stats-list">

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-pencil-ruler"></i>
						</div>

						<h3 class="stat-count">
							15
						</h3>

						<h5 class="stat-title">
							Projects Completed
						</h5>

					</div>

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-users"></i>
						</div>

						<h3 class="stat-count">
							20
						</h3>

						<h5 class="stat-title">
							Happy Clients
						</h5>

					</div>

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-badge"></i>
						</div>

						<h3 class="stat-count">
							3
						</h3>

						<h5 class="stat-title">
							Awards Received
						</h5>

					</div>

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-light-bulb"></i>
						</div>

						<h3 class="stat-count">
							6
						</h3>

						<h5 class="stat-title">
							Crazy Ideas
						</h5>

					</div>

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-cup"></i>
						</div>

						<h3 class="stat-count">
							1500
						</h3>

						<h5 class="stat-title">
							Coffee Cups
						</h5>

					</div>

					<div class="bgrid stat">

						<div class="icon-part">
							<i class="icon-clock"></i>
						</div>

						<h3 class="stat-count">
							7200
						</h3>

						<h5 class="stat-title">
							Hours
						</h5>

					</div>

				</div>

			</div>
		</div>

	</section>


	</div>

	<div class="row contact-info">

		<div class="col-four tab-full">

			<div class="icon">
				<i class="icon-pin"></i>
			</div>

			<h5>Where to find me</h5>

			<p>
				17 rue Mauritanie quartier smara<br>
				Youssoufia, Morocco<br>
				46300
			</p>

		</div>

		<div class="col-four tab-full collapse">

			<div class="icon">
				<i class="icon-mail"></i>
			</div>

			<h5>Email Me At</h5>

			<p>contact.nouaouri@gmail.com<br>
				k.nouaouri@gmail.com
			</p>

		</div>

		<div class="col-four tab-full">

			<div class="icon">
				<i class="icon-phone"></i>
			</div>

			<h5>data Me At</h5>

			<p>Phone: (+212) 626 565 101<br>
				Mobile: (+212) 638 746 084<br>

			</p>

		</div>

	</div>





	<footer>
		<div class="row">

			<div class="col-six tab-full pull-right social">

				<ul class="footer-social">
					<?php
					if ($data['twitter'] != "") {
					?>
						<a href="<?= $data['twitter'] ?>" class="twitter"><i class="fa fa-twitter"></i></a>
					<?php
					}
					if ($data['facebook'] != "") {
					?>
						<a href="<?= $data['facebook'] ?>" class="facebook"><i class="fa fa-facebook"></i></a>
					<?php
					}
					if ($data['instagram'] != "") {
					?>
						<a href="<?= $data['instagram'] ?>" class="instagram"><i class="fa fa-instagram"></i></a>
					<?php
					}
					if ($data['skype'] != "") {
					?>
						<a href="<?= $data['instagram'] ?>" class="google-plus"><i class="fa fa-skype"></i></a>
					<?php
					}
					if ($data['linkedin'] != "") {
					?>
						<a href="<?= $data['linkedin'] ?>" class="linkedin"><i class="fa fa-linkedin"></i></a>
					<?php
					}
					if ($data['github'] != "") {
					?>
						<a href="<?= $data['instagram'] ?>" class="github"><i class="fa fa-github"></i></a>
					<?php
					}
					?>
				</ul>

			</div>

			<div class="col-six tab-full">
				<div class="copyright">
					<span>© Copyright kimweb 2020.</span>
					<span>Design by <a href="http://www.youcode.ma/">kimweb</a></span>
				</div>
			</div>

			<div id="go-top">
				<a class="smoothscroll" title="Back to Top" href="#top"><i class="fa fa-long-arrow-up"></i></a>
			</div>

		</div>
	</footer>

	<div id="preloader">
		<div id="loader"></div>
	</div>










	<script src="dist/js/jquery-2.1.3.min.js"></script>
	<script src="dist/js/plugins.js"></script>
	<script src="dist/js/main.js"></script>

</body>

</html>