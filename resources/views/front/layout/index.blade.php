<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		@yield('title')
		<link rel="icon" href="{{asset('front/img/favicon.png')}}">
		<link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/animate.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/themify-icons.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/flaticon.css')}}">
		<link rel="stylesheet" href="{{asset('front/fontawesome/css/all.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/gijgo.min.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/nice-select.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
		<link rel="stylesheet" href="{{asset('front/css/style.css')}}">
		<link href="{{asset('admin/assets/css/toastr.css')}}" rel="stylesheet" type="text/css">
		@toastr_css
		@yield('style')
		<!-- Google tag (gtag.js) -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=G-FZV7HMGEFK"></script>
		<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-FZV7HMGEFK');
		</script>
	</head>
	<body>
		<header class="main_menu">
			<div class="sub_menu">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-sm-12 col-md-6">
							<div class="sub_menu_right_content">
								{{-- <span>Top destinations</span>
								<a href="#">Asia</a>
								<a href="#">Europe</a>
								<a href="#">America</a> --}}
							</div>
						</div>
						
						<div class="col-lg-6 col-sm-12 col-md-6">
							<div class="sub_menu_social_icon">
								<a href="{{App\Models\Information::facebook()}}" target="_blank"><img src="{{asset('facebook.png')}}" alt="logo" style="width:55px;"></a>
								<a href="{{App\Models\Information::twitter()}}" target="_blank"><img src="{{asset('twitter.png')}}" alt="logo" style="width:40px;"></a>
								<a href="{{App\Models\Information::instagram()}}" target="_blank"><img src="{{asset('instagram.png')}}" alt="logo" style="width:30px;"></a>
								<a href="https://wa.me/message/XBDRI4HIHSE3L1" target="_blank"><img src="{{asset('whatsapp.png')}}" alt="logo" style="width:30px;"></a>
								<a href="tel:{{App\Models\Information::phone()}}"><span><i class="flaticon-phone-call"></i><b>{{App\Models\Information::phone()}}</b></span></a> 
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="main_menu_iner">
				<div class="container">
					<div class="row align-items-center ">
						<div class="col-lg-12">
							<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
								<a class="navbar-brand" href="{{url('/')}}"> <img src="{{asset('logo.png')}}" alt="logo" style="width:100px;"> </a>
								<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
									<span class="navbar-toggler-icon"></span>
								</button>
								<div class="collapse navbar-collapse main-menu-item justify-content-center" id="navbarSupportedContent">
									<ul class="navbar-nav">
										<li class="nav-item">
											<a class="nav-link active {{Request::is('/')?'active':''}}" href="{{url('/')}}">Home</a>
										</li>
										<li class="nav-item">
											<a class="nav-link {{Request::is('services')?'active':''}}" href="{{url('services')}}">Services</a>
										</li>
										
										<li class="nav-item dropdown">
											<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Category
											</a>
											<div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
												@foreach(App\Models\Category::all()->take(2) as $category)
												<a class="dropdown-item" href="{{route('category.show',str_replace(' ', '_',$category->name))}}">{{$category->name}}</a>
												@endforeach
											</div>
										</li>
										<li class="nav-item">
											<a class="nav-link {{Request::is('about_us')?'active':''}}" href="{{url('about_us')}}">About Us</a>
										</li>
										<li class="nav-item">
											<a class="nav-link {{Request::is('contact_us')?'active':''}}" href="{{url('contact_us')}}">Contact Us</a>
										</li>
									</ul>
								</div>
								<a href="{{url('services')}}" class="btn_1 d-none d-lg-block">book now</a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</header>
		@yield('content')
		<footer class="footer-area">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-sm-6 col-md-4">
						<div class="single-footer-widget">
							<h4>Discover Destination</h4>
							<ul>
								@foreach(App\Models\Service::orderBy('display_order')->get()->take(8) as $service)
								<li><a href="{{route('service.show',str_replace(' ', '_',$service->title))}}">{{$service->title}}</a></li>
								@endforeach
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="single-footer-widget">
							<h4>Links</h4>
							<ul>
								<li><a href="{{url('/')}}">Home</a></li>
								<li><a href="{{url('services')}}">Services</a></li>
								<li><a href="{{url('about_us')}}">About Us</a></li>
								<li><a href="{{url('contact_us')}}">Contact Us</a></li>
								<li><a href="{{url('privacy_policy')}}">Privacy Policy</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6 col-md-4">
						<div class="single-footer-widget footer_icon">
							<h4>Contact Us</h4>
							<p>{{App\Models\Information::address()}}</p>
							<p><a href="tel:{{App\Models\Information::phone()}}" style="color:white;">{{App\Models\Information::phone()}}</a></p>
							<span><a href="mailto:{{App\Models\Information::email()}}" style="color:white;">{{App\Models\Information::email()}}</a></span>
							<div class="social-icons">
								<a href="{{App\Models\Information::facebook()}}" target="_blank"><img src="{{asset('facebook.png')}}" alt="logo" style="width:55px;"></a>
								<a href="{{App\Models\Information::twitter()}}" target="_blank"><img src="{{asset('twitter.png')}}" alt="logo" style="width:40px;"></a>
								<a href="{{App\Models\Information::instagram()}}" target="_blank"><img src="{{asset('instagram.png')}}" alt="logo" style="width:30px;"></a>
								<a href="https://wa.me/message/XBDRI4HIHSE3L1" target="_blank"><img src="{{asset('whatsapp.png')}}" alt="logo" style="width:30px;"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="container-fluid">
				<div class="row justify-content-center">
					<div class="col-lg-12">
						<div class="copyright_part_text text-center">
							<p class="footer-text m-0">
								Copyright @ 2022 All rights reserved by <a href="{{url('/')}}" target="_blank">SnowFlake</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<script src="{{asset('front/js/jquery-1.12.1.min.js')}}"></script>
		<script src="{{asset('front/js/popper.min.js')}}"></script>
		<script src="{{asset('front/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('front/js/jquery.magnific-popup.js')}}"></script>
		<script src="{{asset('front/js/owl.carousel.min.js')}}"></script>
		<script src="{{asset('front/js/masonry.pkgd.js')}}"></script>
		<script src="{{asset('front/js/jquery.nice-select.min.js')}}"></script>
		<script src="{{asset('front/js/gijgo.min.js')}}"></script>
		<script src="{{asset('front/js/jquery.ajaxchimp.min.js')}}"></script>
		<script src="{{asset('front/js/jquery.form.js')}}"></script>
		<script src="{{asset('front/js/jquery.validate.min.js')}}"></script>
		<script src="{{asset('front/js/mail-script.js')}}"></script>
		<script src="{{asset('front/js/contact.js')}}"></script>
		<script src="{{asset('front/js/custom.js')}}"></script>
		<script src="{{asset('admin/assets/js/toastr.js')}}"></script>
		@toastr_render
		<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"76dc85c4f9c36c90","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2022.11.0","si":100}' crossorigin="anonymous"></script>
	</body>
</html>