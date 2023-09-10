<!-- /*
* Template Name: Volunteer
* Template Author: Untree.co
* Tempalte URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->

@extends('layouts.master')


@section('title','Home')

<div class="site-mobile-menu site-navbar-target">
		<div class="site-mobile-menu-header">
			<div class="site-mobile-menu-close">
				<span class="icofont-close js-menu-toggle"></span>
			</div>
		</div>
		<div class="site-mobile-menu-body"></div>
	</div>
    <link rel="stylesheet" href="css/tiny-slider.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/flatpickr.min.css">
    <link rel="stylesheet" href="css/glightbox.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>Volunteer </title>
</head>

<body>

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close">
                <span class="icofont-close js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>

    <nav class="site-nav">
        <div class="container">
            <div class="menu-bg-wrap">
                <div class="site-navigation">
                    <div class="row g-0 align-items-center">
                        <div class="col-2">
                            <a href="index.html" class="logo m-0 float-start text-white">Volunteer</a>
                        </div>
                        <div class="col-8 text-center">
                            <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="index.html">Home</a></li>
                                <li class="has-children">
                                    <a href="causes.html">Causes</a>
                                    <ul class="dropdown">
                                        <li><a href="#">Menu One</a></li>
                                        <li><a href="#">Menu Two</a></li>
                                        <li class="has-children">
                                            <a href="#">Dropdown</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Sub Menu One</a></li>
                                                <li><a href="#">Sub Menu Two</a></li>
                                                <li><a href="#">Sub Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>


                                </li>
                                <li><a href="{{route('About')}}">About</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="pages/about">About</a></li>
                                <li><a href="pages/news">News</a></li>
                                <li><a href="pages/contact">Contact</a></li>
                                <li class="has-children">






@section('content')


<div class="hero overlay" style="background-image: url('images/classroom-1.png')">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 text-left">
                <span class="subheading-white text-white mb-3" data-aos="fade-up">Volunteer</span>
                <h1 class="heading text-white mb-2" data-aos="fade-up">Give a helping hand to those who need it!
                </h1>
                <p data-aos="fade-up" class=" mb-5 text-white lead text-white-50">program to help increase access to
                    education in communities around jordan</p>
                <p data-aos="fade-up" data-aos-delay="100">
                    <a href="single" class="btn btn-primary me-4 d-inline-flex align-items-center"> <span
                            class="icon-attach_money me-2"></span><span>Donate Now</span></a>
                    <a href="https://www.youtube.com/watch?v=7b1qBE_Icbw&t=911s"
                        class="text-white glightbox d-inline-flex align-items-center"><span
                            class="icon-play me-2"></span><span>Watch the video</span></a>
                </p>

            </div>

            <div class="col-lg-5">
                <form action="paypal" method="POST" class="bg-white p-5 rounded donation-form" data-aos="fade-up">
                    @csrf
                    <h3>Quick Donation Form</h3>
                    <div class="form-field mb-3">
                        <label for="amount-1" class="amount js-amount" data-value="1.00">
                            <input type="radio" id="amount-1" name="radio-amount" checked="true">
                            <span>$1</span>
                        </label>

                        <label for="amount-2" class="amount js-amount" data-value="5.00">
                            <input type="radio" id="amount-2" name="radio-amount">
                            <span>$5</span>
                        </label>
                        <label for="amount-3" class="amount js-amount" data-value="25.00">
                            <input type="radio" id="amount-3" name="radio-amount">
                            <span>$25</span>
                        </label>
                        <label for="amount-4" class="amount js-amount" data-value="100.00">
                            <input type="radio" id="amount-4" name="radio-amount">
                            <span>$100</span>

								
							</label>
							<h3>And you can select custom</h3>

                    </div>
                    <div class="field-icon">
                        <span>$</span>
                        <input type="text" placeholder="0.00" class="form-control px-4" name="price"
                            value="1.00">

						</div>
						<div class="form-field mb-3">
							{{-- <input type="text" placeholder="Name" class="form-control px-4"> --}}
							{{-- <input type="email" placeholder="Email" class="form-control px-4"> --}}
						</div>

						<input type="submit" value="Donate now" class="btn btn-secondary w-100" style="background:url('images/PayPal-Logo.png')">
					</form>


            </div>
        </div>
    </div>
</div>

<div class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-6" data-aos="fade-up">
                <div class="vision">
                    <h2>Our Vision</h2>
                    <p class="mb-4 lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima
                        dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
                    <p><a href="#" class="link-underline">Learn More</a></p>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div class="mission">
                    <h2>Our Mission</h2>
                    <p class="mb-4 lead">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Illum minima
                        dignissimos hic mollitia eius et quam ducimus maiores eos magni.</p>
                    <p><a href="#" class="link-underline">Learn More</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


	<div class="section flip-section" style="background-image: url('images/classroom-1.png')">
		<div class="blob-1">
			<img src="images/blob.png" alt="Image" class="img-fluid">
		</div>
		<div class="container">
			<div class="row justify-content-center mb-5">
				<div class="col-lg-7 text-center" data-aos="fade-up">
					<span class="subheading-white mb-3 text-white">Help Now</span>
					<h2 class="heading text-white">Ways to Donation</h2>
				</div>
			</div>
			<div class="row">
				@foreach ( $categories as $categorie )
					
				<div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="100">
					<div class="card-flip">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								<div class="flip-content-wrap">
									{{-- class="icon-local_drink" --}}
									<span ><img src="{{ $categorie->image  }}" width="100px" alt=""></span>
									<h3>{{ $categorie->name }}</h3>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<div class="flip-content-wrap">
<h3>{{ $categorie->name }}</h3>	

									<p>{{ $categorie->description }}</p>
								</div>
							</div>
						</div>
					</div>
					<!-- End Card Flip -->
				</div>
				@endforeach

				{{-- <div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="200">
					<div class="card-flip">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								<div class="flip-content-wrap">
									<span class="icon-graduation-cap"></span>
									<h3>Teaching as a volunteer</h3>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<div class="flip-content-wrap">
									<h3>Teaching as a volunteer</h3>
									<p>Teaching as a volunteer</p>
								</div>
							</div>
						</div>
					</div>

				</div>
				<div class="col-lg-3 position-relative" data-aos="fade-up" data-aos-delay="300">
					<div class="card-flip">
						<div class="flip">
							<div class="front">
								<!-- front content -->
								<div class="flip-content-wrap">
									<span class="icon-dollar"></span>
									<h3>Give Donation</h3>
								</div>
							</div>
							<div class="back">
								<!-- back content -->
								<div class="flip-content-wrap">
									<h3>Give Donation</h3>
									<p>Donating money entails supplying all necessary supplies.</p>
								</div>
							</div>
						</div>
					</div>

				</div> --}}
				
			</div>		
		</div>		
	</div>




<div class="section">
    <div class="container">
        <div class="row mb-5 align-items-center justify-content-between">
            <div class="col-lg-5" data-aos="fade-up" data-aos-delay="0">
                <span class="subheading mb-3">Who we are</span>
                <h2 class="heading">About Us</h2>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ducimus sint quae cumque vitae sed
                    aliquid, voluptatibus, doloremque?</p>
            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <blockquote>
                    Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Quos deserunt quod, dolores
                    obcaecati. Magni nesciunt architecto, ullam laborum, illum fugit.
                </blockquote>
            </div>
        </div>
        <div class="row justify-content-between">
            <div class="col-lg-5 pe-lg-5" data-aos="fade-up" data-aos-delay="200">

                <ul class="nav nav-pills mb-5 custom-nav-pills" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-mission-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-mission" type="button" role="tab"
                            aria-controls="pills-mission" aria-selected="true">Our Mission</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-values-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-values" type="button" role="tab"
                            aria-controls="pills-values" aria-selected="false">Our Values</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-history-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-history" type="button" role="tab"
                            aria-controls="pills-history" aria-selected="false">Our History</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-mission" role="tabpanel"
                        aria-labelledby="pills-mission-tab">
                        <h2 class="mb-3 text-primary fw-bold">Our Mission</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eveniet voluptates
                            eligendi maxime ad. Quas commodi distinctio modi, aspernatur, quos neque omnis magnam
                            voluptatibus, sapiente fugiat cupiditate velit impedit praesentium.</p>
                        <p>Reprehenderit hic illo, nulla autem odit molestiae molestias, dolores accusantium eos? Ut
                            aspernatur fuga labore eius sequi nihil sit iusto, enim. Aliquam, cumque! Quaerat
                            inventore illo dicta, exercitationem natus ducimus?</p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary me-4">Donate Now</a>
                            <a href="#" class="link-more">Learn More <span
                                    class="icon-chevron-right"></span></a>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-values" role="tabpanel"
                        aria-labelledby="pills-values-tab">
                        <h2 class="mb-3 text-primary fw-bold">Our Values</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eveniet voluptates
                            eligendi maxime ad. Quas commodi distinctio modi, aspernatur, quos neque omnis magnam
                            voluptatibus, sapiente fugiat cupiditate velit impedit praesentium.</p>
                        <p>Reprehenderit hic illo, nulla autem odit molestiae molestias, dolores accusantium eos? Ut
                            aspernatur fuga labore eius sequi nihil sit iusto, enim. Aliquam, cumque! Quaerat
                            inventore illo dicta, exercitationem natus ducimus?</p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary me-4">Be A Volunteer</a>
                            <a href="#" class="link-more">Learn More <span
                                    class="icon-chevron-right"></span></a>
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pills-history" role="tabpanel"
                        aria-labelledby="pills-history-tab">

                        <h2 class="mb-3 text-primary fw-bold">Our History</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus, eveniet voluptates
                            eligendi maxime ad. Quas commodi distinctio modi, aspernatur, quos neque omnis magnam
                            voluptatibus, sapiente fugiat cupiditate velit impedit praesentium.</p>
                        <p>Reprehenderit hic illo, nulla autem odit molestiae molestias, dolores accusantium eos? Ut
                            aspernatur fuga labore eius sequi nihil sit iusto, enim. Aliquam, cumque! Quaerat
                            inventore illo dicta, exercitationem natus ducimus?</p>
                        <p class="mt-5">
                            <a href="#" class="btn btn-primary me-4">Be a Sponsor</a>
                            <a href="#" class="link-more">Learn More <span
                                    class="icon-chevron-right"></span></a>
                        </p>
                    </div>
                </div>

            </div>
            <div class="col-lg-6">
                <div class="overlap-imgs">
                    <img src="images/img_v_2-min.jpg" alt="Image" class="img-fluid rounded"
                        data-aos="fade-up" data-aos="100">
                    <img src="images/img_v_3-min.jpg" alt="Image" class="img-fluid rounded"
                        data-aos="fade-up" data-aos="200">
                </div>
            </div>
        </div>
    </div>
</div>


<div class="section cause-section bg-light">

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6 text-center" data-aos="fade-up" data-aos-delay="100">
                <span class="subheading mb-3">Causes</span>
                <h2 class="heading">Featured Causes</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Animi quaerat, eaque asperiores quos
                    natus, ratione.</p>

                <div id="features-slider-nav" class="mt-5 d-flex justify-content-center">
                    <button class="btn btn-primary prev d-flex align-items-center me-2" data-controls="prev">
                        <span class="icon-chevron-left"></span> <span class="ms-3">Prev</span></button>
                    <button class="btn btn-primary next d-flex align-items-center" data-controls="next"><span
                            class="me-3">Next</span> <span class="icon-chevron-right"></span></button>
                </div>
            </div>
        </div>
    </div>


		<div class="container mb-5">
			<div class="features-slider-wrap position-relative" data-aos="fade-up" data-aos-delay="200">
				<div class="features-slider" id="features-slider">
@foreach ($products as $product )
	
					<div class="item">
						<div class="causes-item bg-white">
							<a href="#"><img src='{{ $product->image }}' alt="Image" class="img-fluid mb-4 rounded"></a>
							<div class="px-4 pb-5 pt-3">

								<h3><a href="#">{{ $product->name }}</a></h3>
								<p>{{ $product->breif }}</p>

														@php
									$totalsproduct =0;
									$percant=0;
								@endphp
								@foreach ($volanters as $volanter )
@if ($volanter->product_id==$product->id)
	
@php
$totalsproduct +=$volanter->amount 
@endphp
@php
	
$percant= ( $totalsproduct  / $product->total) * 100
@endphp
@endif
@endforeach

								<div class="progress mb-2">
									<div class="progress-bar" role="progressbar" style="width: <?php echo $percant?>%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"> <?php echo $percant?>%</div>
								</div>

								<div class="d-flex mb-4 justify-content-between amount">
									<div>@php
									echo "$" .$totalsproduct 
									@endphp</div>
									
									<div>${{ $product->total }}</div>
								</div>
								<div>
									<a href="single/{{ $product->id}}" class="btn btn-primary">Donate Now</a>
								</div>
							</div>
						</div>
						
					</div>
					@endforeach





                </div>
            </div>
        </div>


    </div>



<div class="section flip-section secondary-bg" style="background-image: url('images/classroom-1.png')">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 mx-auto text-center">
                <span class="subheading-white mb-3 text-white" data-aos="fade-up">Help Now</span>
                <h3 class="mb-4 heading text-white" data-aos="fade-up">Let's Help The Unfortunate People </h3>
                <a href="#" class="btn btn-outline-white me-3" data-aos="fade-up"
                    data-aos-delay="100">Become a Volunteer</a> <a href="#" class="btn btn-outline-white"
                    data-aos="fade-up" data-aos-delay="200">Donate Now</a>
            </div>
        </div>
    </div>
</div>


	<div class="section bg-light">
		<div class="container">
			<div class="row justify-content-between">
				<div class="col-lg-5" data-aos="fade-up">
					<span class="subheading mb-3">Impact</span>
					<h2 class="heading mb-4">Explore Volunteer work and Impact in 2020</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing, elit. Inventore, vero quibusdam quisquam nisi officia obcaecati, modi impedit veniam nam possimus!</p>
					<p>Corporis culpa facilis, nesciunt repellat amet nihil voluptatibus repudiandae blanditiis officia, ullam adipisci molestiae minima magnam quas ex temporibus aliquid!</p>
				</div>		
				<div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
					<div class="row section-counter">
						<div class="col-lg-6">
							<div class="counter">
								<i class="flaticon-social-services d-block text-secondary"></i>
								
								<span class="number countup">3</span>
								<span class="d-block">New Causes</span>
							</div>

							<div class="counter">
								<i class="flaticon-charity-money d-block text-secondary"></i>
								@php
									$totals =0;
								@endphp
								@foreach ($volanters as $volanter )

     @php
		$totals +=$volanter->amount 
	 @endphp
								@endforeach
{{-- <span class="number countup">{{  $volanter->amount }} --}}
{{-- </span> --}}
								<span class="number">$<span class="countup"><?php echo  $totals ?></span>k</span>
								<span class="d-block">Fund Raised</span>
							</div>

                    </div>
                    <div class="col-lg-6">
                        <div class="counter mt-5">
                            <i class="flaticon-money-donation d-block text-secondary"></i>
                            <span class="number countup">4211</span>
                            <span class="d-block">Donors</span>
                        </div>

							<div class="counter">
								<i class="flaticon-organs-donation d-block text-secondary"></i>
								<span class="number countup">{{ count($volanters) }}</span>
								<span class="d-block">Volunteers</span>
							</div>
						</div>
					</div>
				</div>
			</div>		
		</div>		
	</div>

<div class="section bg-light pt-0">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-5 mb-5" data-aos="fade-up">
                <span class="subheading mb-1">News Update</span>
                <h2 class="heading mb-1">Our News</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                    laudantium voluptate, amet ad libero facilis nihil officiis.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="images/img_v_1-min.jpg" alt="Image"
                            class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>
                        <h3><a href="#">Food for the Hungry</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                            laudantium voluptate, amet ad libero facilis nihil officiis.</p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span
                                    class="icon-chevron-right"></span></a></p>


                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="images/img_v_2-min.jpg" alt="Image"
                            class="img-fluid mb-4 rounded"></a>
                    <div class="px-4 pb-3 pt-3">
                        <span class="date">May 11, 2020</span>
                        <h3><a href="#">Education for Children</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                            laudantium voluptate, amet ad libero facilis nihil officiis.</p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span
                                    class="icon-chevron-right"></span></a></p>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="causes-item bg-white">
                    <a href="#"><img src="images/img_v_3-min.jpg" alt="Image"
                            class="img-fluid mb-4 rounded"></a>
                    <span class="date">May 11, 2020</span>
                    <div class="px-4 pb-3 pt-3">
                        <h3><a href="#">Support Livelihood</a></h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta labore eligendi tempora
                            laudantium voluptate, amet ad libero facilis nihil officiis.</p>
                        <p><a href="#" class="d-flex align-items-center more2"><span>Read More</span> <span
                                    class="icon-chevron-right"></span></a></p>

                    </div>
                </div>
            </div>



        </div>


    </div>
</div>

<div class="section sec-instagram pb-0">
    <div class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-3" data-aos="fade-up">
                <span class="subheading mb-3">Instagram</span>
                <h2 class="heading">We Are In Instagram</h2>
            </div>
            <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
                <p>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Temporibus, aperiam sint voluptatum?
                    Molestiae debitis, ipsum, rem ipsa voluptatum cupiditate quaerat!</p>
            </div>
        </div>
    </div>

    <div class="instagram-slider-wrap" data-aos="fade-up" data-aos-delay="200">
        <div class="instagram-slider" id="instagram-slider">

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="images/img_v_8-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="images/img_v_2-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="images/img_v_3-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="images/img_v_4-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="images/img_v_5-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="images/img_v_6-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>

            <div class="item">
                <a class="instagram-item">
                    <span class="icon-instagram"></span>
                    <img src="images/img_v_7-min.jpg" alt="Image" class="img-fluid">
                </a>
            </div>


        </div>
    </div>

</div>


