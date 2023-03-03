@extends('layouts.main')

@section('container')
				<div class="row">

								<div class="col-lg-4 d-flex align-items-center justify-content-center px-5 my-5">
												<img src="{{ asset('img/dean-3.jpg') }}" alt="FIKRI DEAN RADITYO" class="square-middle rounded-circle shadow-lg"
																data-aos="zoom-in" data-aos-delay="1000">
								</div>

								<div class="col-lg-4 d-flex justify-content-center align-items-center position-relative my-5 px-5 my-5"
												data-aos="zoom-in" data-aos-delay="1100">
												<div class="aboutChangingOne d-flex flex-column position-absolute">
																<h1 class="poppins text-uppercase fs-5 text-muted text-center">Hello! I'm</h1>
																<h3 class="poppins text-uppercase fs-1 fw-bold text-center text-dark">Fikri Dean Radityo</h3>

												</div>

												<div class="aboutChangingTwo d-flex flex-column position-absolute">
																<h3 class="poppins text-uppercase fs-5 text-muted text-center">I'm From</h3>
																<h3 class="poppins text-uppercase fs-1 fw-bold text-center text-dark">Indonesia</h3>
												</div>
								</div>

								<div class="col-lg-4 d-flex justify-content-center align-items-center px-5 my-5">
												<div class="row display-3 text-primary d-flex align-items-center justify-content-center" data-aos="zoom-in"
																data-aos-delay="1200">
																<a href="https://www.linkedin.com/in/fikri-dean-radityo-23bb3621a/"
																				class="btn fs-1 col-lg-6 p-5 border-end border-bottom rounded-0 translate-topleft border-2 text-dark"
																				target="_blank">
																				<i class="bi bi-linkedin text-primary" data-aos="zoom-out" data-aos-delay="1300"></i>
																</a>

																<a href="https://github.com/FikriDean?tab=repositories"
																				class="btn fs-1 col-lg-6 p-5 border-start border-bottom rounded-0 translate-topright border-2 text-dark"
																				target="_blank">
																				<i class="bi bi-github" data-aos="zoom-out" data-aos-delay="1400"></i>
																</a>

																<a href="https://www.freecodecamp.org/fikridean"
																				class="btn fs-1 col-lg-6 p-5 border-top border-end rounded-0 translate-bottomleft border-2 text-dark"
																				target="_blank">
																				<i class="bi bi-layers-fill" data-aos="zoom-out" data-aos-delay="1500"></i>
																</a>

																<a href="https://mail.google.com/mail/u/0/#inbox?compose=GTvVlcSHxjNTrmfdDXPfKPVVCVpCphJQMhgpjVsvRVsmKWKbFsXHXTRkCQnQtXDxHBKzQQSmXBgbf"
																				class="btn fs-1 col-lg-6 p-5 border-top border-start rounded-0 translate-bottomright border-2 text-dark"
																				target="_blank">
																				<i class="bi bi-envelope-fill text-danger" data-aos="zoom-out" data-aos-delay="1600"></i>
																</a>
												</div>
								</div>
				</div>

				<div class="row">
								<div class="col-lg-12 mt-5">
												<h3 class="poppins fs-5 text-muted text-center" data-aos="zoom-out" data-aos-delay="1700">
																Featured
												</h3>
								</div>
				</div>

				<div class="row mb-5">
								<div class="col-lg-6 mt-5 d-flex justify-content-center align-items-center">
												<a href="">
																<img class="bigger-animation img-tech" src="{{ asset('img/logo_confido.png') }}" alt="Confido"
																				style="max-width: 200px">
												</a>
								</div>

								<div class="col-lg-6 mt-5 d-flex justify-content-center align-items-center">
												<a href="">
																<img class="bigger-animation img-tech" src="{{ asset('img/chat.png') }}" alt="Chat"
																				style="max-width: 80px">
												</a>
								</div>
				</div>

				<div class="row">
								<div class="col-lg-12 mt-5">
												<h3 class="poppins fs-5 text-muted text-center" data-aos="zoom-out" data-aos-delay="1700">
																Technology Stack
												</h3>
								</div>
				</div>

				<div class="row py-5">
								<div class="col-lg-12 d-flex flex-row justify-content-around align-items-center" data-aos="zoom-in"
												data-aos-delay="1800">
												<img src="{{ asset('img/html.png') }}" alt="HTML" class="img-tech">
												{{-- <i class="fa-brands fa-html5 fs-1 text-orange"></i> --}}

												<img src="{{ asset('img/css.png') }}" alt="CSS" class="img-tech">
												{{-- <i class="fa-brands fa-css3-alt fs-1 text-primary"></i> --}}

												<img src="{{ asset('img/js.png') }}" alt="JS" class="img-tech">
												{{-- <i class="fa-brands fa-square-js fs-1 text-warning"></i> --}}

												<img src="{{ asset('img/scss.png') }}" alt="SCSS" class="img-tech">
												{{-- <i class="fa-brands fa-sass fs-1 text-danger"></i> --}}


								</div>

				</div>

				<div class="row py-5 mb-5">
								<div class="col-lg-12 d-flex flex-row justify-content-around align-items-center" data-aos="zoom-out"
												data-aos-delay="1900">

												<img src="{{ asset('img/react.png') }}" alt="React JS" class="img-tech">
												{{-- <i class="bi bi-filetype-jsx"></i> --}}

												<img src="{{ asset('img/php.png') }}" alt="PHP" class="img-tech">
												{{-- <i class="bi bi-filetype-php"></i> --}}

												<img src="{{ asset('img/laravel.png') }}" alt="Laravel" class="img-tech">
												{{-- <i class="fab fa-laravel fs-1 text-maroon"></i> --}}

												<img src="{{ asset('img/node.png') }}" alt="Node JS" class="img-tech">
												{{-- <i class="fa-brands fa-node fs-1 text-success"></i> --}}



								</div>
				</div>

				<div class="row">
								<div class="col-lg-12 my-5">
												<h3 class="poppins fs-5 text-muted text-center" data-aos="zoom-out" data-aos-delay="2000">
																Organization
												</h3>
								</div>
				</div>

				<div class="row py-3 px-3">
								<div class="col-lg-12 d-flex align-items-center justify-content-center mb-5" data-aos="zoom-out">
												<img class="profile-picture-bigger rounded-circle border me-3" src="{{ asset('img/rohis.jpeg') }}"
																alt="Rohis 5 Depok">
												<div>
																<h4 class="text-dark fw-bold poppins fs-4 organization">Head of Public
																				Relations Division (2019-2020)</h4>
																<p class="mt-2 text-muted poppins fs-6 organization">Served as Head of
																				Public Relations Division at Islamic spiritual
																				extracurricular at public senior high school 5 in Depok, West Java</p>
												</div>
								</div>
				</div>

				<div class="row py-3 px-3">
								<div class="col-lg-12 d-flex align-items-center justify-content-center mb-5" data-aos="zoom-out">
												<img class="profile-picture-bigger rounded-circle border me-3" src="{{ asset('img/sc.jpg') }}"
																alt="Science Club 5 Depok">
												<div>
																<h4 class="text-dark fw-bold poppins fs-4 organization">1st secretary
																				(2019-2020)</h4>
																<p class="mt-2 text-muted poppins fs-6 organization">Served as 1st
																				secretary in science club extracurricula at public
																				senior high school 5 in Depok, West Java</p>
												</div>
								</div>
				</div>

				<div class="row pb-3 px-3">
								<div class="col-lg-12 d-flex align-items-center justify-content-center mb-5" data-aos="zoom-out">
												<img class="profile-picture-bigger rounded-circle border me-3" src="{{ asset('img/himti.png') }}"
																alt="HIMTI">
												<div>
																<h4 class="text-dark fw-bold poppins fs-4 organization">Course
																				Facilitator (2022-2023)</h4>
																<p class="mt-2 text-muted poppins fs-6 organization">Served as Course
																				Facilitator at HIMTI UIN Jakarta</p>
												</div>
								</div>
				</div>

				<div class="row pb-3 px-3">
								<div class="col-lg-12 d-flex align-items-center justify-content-center mb-5" data-aos="zoom-out">
												<img class="profile-picture-bigger rounded-circle border me-3" src="{{ asset('img/gdsc2.png') }}"
																alt="GDSC">
												<div>
																<h4 class="text-dark fw-bold poppins fs-4 organization">Head Manager of
																				Web Developer (2022-2023)</h4>
																<p class="mt-2 text-muted poppins fs-6 organization">Served as Head
																				Manager of Web Developer at
																				GDSC UIN Jakarta</p>
												</div>
								</div>

				</div>

				<div class="row pb-3 px-3">
								<div class="col-lg-12 d-flex align-items-center justify-content-center mb-5" data-aos="zoom-out">
												<img class="profile-picture-bigger rounded-circle border me-3" src="{{ asset('img/gdsc2.png') }}"
																alt="GDSC">
												<div>
																<h4 class="text-dark fw-bold poppins fs-4 organization">Web Developer
																				Course Facilitator (2022-2023)</h4>
																<p class="mt-2 text-muted poppins fs-6 organization">Served as Web
																				Developer Course Facilitator at GDSC UIN Jakarta</p>
												</div>
								</div>
				</div>

				<div class="row pb-3 px-3">
								<div class="col-lg-12 d-flex align-items-center justify-content-center mb-5" data-aos="zoom-out">
												<img class="profile-picture-bigger rounded-circle border me-3" src="{{ asset('img/bdi.jpg') }}"
																alt="BDI">
												<div>
																<h4 class="text-dark fw-bold poppins fs-4 organization">Web Developer
																				Intern (2022 - 2023)</h4>
																<p class="mt-2 text-muted poppins fs-6 organization">Served as Web
																				Developer Intern at Berani Digital ID</p>
												</div>
								</div>
				</div>

				@guest
								<div class="toast-container position-fixed bottom-0 start-0 p-3">
												<div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
																<div class="toast-header">
																				<img src="{{ asset('img/formal1000.png') }}" class="rounded-circle me-2 profile-picture"
																								alt="Fikri Dean Radityo">
																				<strong class="me-auto">Fikri Dean Radityo</strong>
																				<small>One second ago</small>
																				<button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
																</div>
																<div class="toast-body">
																				Greeting, welcome to my website! Please sign up to comment on my posts.
																</div>
												</div>
								</div>
				@else
								<div aria-live="polite" aria-atomic="true" class="position-relative">
												<div class="toast-container bottom-0 start-0">
																<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="top"></div>
																<div class="toast" role="alert" aria-live="assertive" aria-atomic="true" id="bottom"></div>
												</div>
								</div>
				@endguest
@endsection
