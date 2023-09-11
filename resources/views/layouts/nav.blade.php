<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Untree.co">
    <link rel="shortcut icon" href="favicon.png">

    <meta name="description" content="Volunteer work in training and education " />
    <meta name="keywords" content="Volunteer training  education" />

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&family=Work+Sans:wght@400;700&display=swap"
        rel="stylesheet">


    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{asset('css/tiny-slider.css')}}">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="{{asset('css/flatpickr.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/glightbox.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">



    <title>Volunteer </title>

</head>


<body>

   

	<nav class="site-nav">
		<div class="container">
			<div class="menu-bg-wrap">
				<div class="site-navigation">
					<div class="row g-0 align-items-center">
						<div class="col-2">
							<a href="index.html" id='logo' class="logo m-0 float-start text-white">TechHub</a>
						</div>
						<div class="col-8 text-center">
                            
                           <ul class="js-clone-nav d-none d-lg-inline-block text-start site-menu mx-auto">
                                <li class="active"><a href="{{route('home')}}">Home</a></li>
                                <!-- <li><a href="">Browse projects</a></li> -->
                               <li><a href="{{route('causes')}}">Causes</a></li> 
                                <li><a href="{{route('about')}}">About</a></li>
                                <li><a href="{{route('news')}}">News</a></li>
                                <li><a href="{{route('contact')}}">Contact</a></li>
                                <li class="has-children">



                                    @if (Auth::check())
                                        <a href="#">
                                            <div>{{ Auth::user()->name }}</div>
                                            <ul class="dropdown">
                                    <li><a href="{{ route('profile.edit') }}"> {{ __('Profile') }}</a></li>
                                    <li>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit">

                                                {{ __('Log Out') }}</button>
                                        </form>
                                    </li>

                                </ul>
                                        </a>
                                    @else 
                                    <li><a href="{{route('login')}}">Login</a></li>
                                <li><a href="{{route('register')}}">Register</a></li>
                                    @endif
                    
                            </li>
							
							</ul>
						</div>
						<div class="col-2 text-end">
							<a href="#" class="burger ms-auto float-end site-menu-toggle js-menu-toggle d-inline-block d-lg-none light">
								<span></span>
							</a>

						
						</div>
					</div>

				</div>
			</div>
		</div>
	</nav>


   


















