<!-- /*
* Template Name: Volunteer
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
@extends('layouts.master')


@section('title','about')




<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>



<<<<<<< HEAD
@section('content')
	<div class="hero overlay" style="background-image: url('images/img_v_5-min.jpg')">
=======
	<div class="hero overlay" style="background-image: url('images/about.jpg')">
>>>>>>> ae34ab54d04e58d17dc690e812e08c52de91d990
		<div class="container">
			<div class="row align-items-center justify-content-center">
				<div class="col-lg-6 text-center">
					<h1 class="heading text-white mb-2" data-aos="fade-up">Contact Us</h1>
					{{-- <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
					<p data-aos="fade-up"  data-aos-delay="100">
						<a href="#" class="btn btn-primary me-4">Donate Now</a> 
					</p>		 --}}
					
				</div>

				
			</div>
		</div>
	</div>

	<div class="section">
		<div class="container">
			<div class="row mb-5">
				<div class="col-lg-6" data-aos="fade-up">
					<h2 class="heading">Get In Touch</h2>
					<p class="text-black-50">Volunteers are the heart of CodeHeroes. Have questions, ideas, or want to get involved? Contact us using the form below . Your contributions drive our mission.</p>
				</div>
			</div>
            <div class="row gap-5 ">

				@if(Session::has('success'))
				<div class="alert alert-success">
					{{Session::get('success')}}
				</div>
			@endif

			<form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm" class="col-md-6 col-lg-6 justify-content-between">
				{{ csrf_field() }}
				<div  data-aos="fade-up" data-aos-delay="100">
					<div class="row">

						<div class="mb-3 col-lg-6">
							<label for="name" class="ps-3 fw-bold mb-2">Name</label>
							<input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                            <span class="text-danger">{{ $errors->first('name') }}</span>
                                        @endif
						</div>
						<div class="mb-3 col-lg-6">
							<label for="email" class="ps-3 fw-bold mb-2">Email</label>
							<input type="text" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
						</div>

						<div class="mb-3 col-lg-12">
							<label for="message" class="ps-3 fw-bold mb-2">Message</label>
							<textarea name="message" rows="3" class="form-control">{{ old('message') }}</textarea>
							@if ($errors->has('message'))
								<span class="text-danger">{{ $errors->first('message') }}</span>
							@endif
						</div>	

						<div class="col-lg-6">
							<input type="submit" class="btn btn-primary text-white py-3" value="Send Message">
						</div>

					</div>
				</div>

			</form>

				<div class="col-md-6 col-lg-5" data-aos="fade-up" data-aos-delay="200">
					<div class="row">
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Address</h3>
							<p>Eidon. Irbid, Jordan </p>
						</div>
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Phone</h3>
							<p>
								+962777844121 <br>
								+962779599633
							</p>
						</div>

						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Follow</h3>
							<ul class="list-unstyled social-custom">
								<li><a href="#"><span class="icon-instagram"></span></a></li>
								<li><a href="#"><span class="icon-twitter"></span></a></li>
								<li><a href="#"><span class="icon-facebook"></span></a></li>
								<li><a href="#"><span class="icon-linkedin"></span></a></li>
								<li><a href="#"><span class="icon-pinterest"></span></a></li>
								<li><a href="#"><span class="icon-dribbble"></span></a></li>
							</ul>
						</div>
						<div class="col-6 col-lg-6 mb-4">
							<h3 class="h6 fw-bold text-secondary">Email</h3>
							<p>
								<a href="#">info@CodeHeroes.com</a>
							</p>
						</div>

					</div>
				</div>
				

			</div>
		</div>
	</div>





	<div class="site-footer">
		<div class="container">

			<div class="row">
				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="widget">
						<h3>Navigation</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">About us</a></li>
							<li><a href="#">Donate Now</a></li>
							<li><a href="#">Causes</a></li>
							<li><a href="#">Volunteer</a></li>
							<li><a href="#">Terms</a></li>
							<li><a href="#">Privacy</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="widget">
						<h3>Popular Causes</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">Food for the Hungry</a></li>
							<li><a href="#">Education for Children</a></li>
							<li><a href="#">Support for Livelihood</a></li>
							<li><a href="#">Medical Mission</a></li>
							<li><a href="#">Education</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="widget">
						<h3>Services</h3>
						<ul class="list-unstyled float-left links">
							<li><a href="#">Causes</a></li>
							<li><a href="#">Volunteer</a></li>
							<li><a href="#">Terms</a></li>
						</ul>
					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->


				<div class="col-6 col-sm-6 col-md-6 col-lg-3">
					<div class="widget">
						<h3>Contact</h3>
						<address>43 Raymouth Rd. Baltemoer, London 3910</address>
						<ul class="list-unstyled links mb-4">
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="tel://11234567890">+1(123)-456-7890</a></li>
							<li><a href="mailto:info@mydomain.com">info@mydomain.com</a></li>
						</ul>

						<h3>Connect</h3>
						<ul class="list-unstyled social">
							<li><a href="#"><span class="icon-instagram"></span></a></li>
							<li><a href="#"><span class="icon-twitter"></span></a></li>
							<li><a href="#"><span class="icon-facebook"></span></a></li>
							<li><a href="#"><span class="icon-linkedin"></span></a></li>
							<li><a href="#"><span class="icon-pinterest"></span></a></li>
							<li><a href="#"><span class="icon-dribbble"></span></a></li>
						</ul>

					</div> <!-- /.widget -->
				</div> <!-- /.col-lg-3 -->

			</div> <!-- /.row -->


			<div class="row mt-5">
				<div class="col-12 text-center">
					<p class="copyright">Copyright &copy;<script>document.write(new Date().getFullYear());</script>. All Rights Reserved. &mdash; Designed with love by <a href="https://untree.co">Untree.co</a> <!-- License information: https://untree.co/license/ -->
					</p>
				</div>
			</div>
		</div> <!-- /.container -->
	</div> <!-- /.site-footer -->







	<!-- Preloader -->
	<div id="overlayer"></div>
	<div class="loader">
		<div class="spinner-border text-primary" role="status">
			<span class="visually-hidden">Loading...</span>
		</div>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/tiny-slider.js"></script>

	<script src="js/flatpickr.min.js"></script>
	<script src="js/glightbox.min.js"></script>


	<script src="js/aos.js"></script>
	<script src="js/navbar.js"></script>
	<script src="js/counter.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>


@endsection
