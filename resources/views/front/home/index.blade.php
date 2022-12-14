@extends('front.layout.index')
@section('title')
<title>HOME | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')
<section class="banner_part">
	<div class="container">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-10">
				<div class="banner_text text-center">
					<div class="banner_text_iner">
						<h1> Saintmartine</h1>
						<p>Let’s start your journey with us, your dream will come true</p>
						<a href="{{url('services')}}" class="btn_1">Discover Now</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="best_services section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="section_tittle text-center">
					<h2>We Offered Best Services</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-sm-6">
				<div class="single_ihotel_list">
					<img src="{{asset('front/img/services_1.png')}}" alt="">
					<h3> <a href="#"> Availability Daily</a></h3>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single_ihotel_list">
					<img src="{{asset('front/img/services_2.png')}}" alt="">
					<h3> <a href="#"> Instant Confirmation</a></h3>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single_ihotel_list">
					<img src="{{asset('front/img/services_3.png')}}" alt="">
					<h3> <a href="#"> Pick up & Drop Back</a></h3>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single_ihotel_list">
					<img src="{{asset('front/img/services_4.png')}}" alt="">
					<h3> <a href="#"> Duration: 06:00 Hrs (Approx)</a></h3>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single_ihotel_list">
					<img src="{{asset('front/img/gallery/gallery_5.png')}}" height="190" width="263" alt="">
					<h3> <a href="#"> English/Arabic Tour Guide</a></h3>
				</div>
			</div>
			<div class="col-lg-4 col-sm-6">
				<div class="single_ihotel_list">
					<img src="{{asset('front/img/ind/industries_1.png')}}" height="190" width="263" alt="">
					<h3> <a href="#"> Pickup Time:14:00 Hrs</a></h3>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="top_place section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="section_tittle text-center">
					<h2>Top Services / Trips</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach(App\Models\Service::orderBy('display_order')->get()->take(8) as $service)
			<div class="col-lg-6 col-md-6">
				<div class="single_place">
					<img src="{{asset(@$service->images->first()->image)}}" alt="">
					<div class="hover_Text d-flex align-items-end justify-content-between">
						<div class="hover_text_iner">
							<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}" class="place_btn">Book</a>
							<h3>{{$service->title}}</h3>
							<p>{{$service->price}} AED</p>
							@if($service->dune_bashing)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Dune Bashing in Land Cruiser</span>
							</div>
							<br>
							@endif
							@if($service->belly_dance)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Belly Dance</span>
							</div>
							<br>
							@endif
							@if($service->fire_show)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Fire Show</span>
							</div>
							<br>
							@endif
							@if($service->sand_boarding)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Sand-Boarding</span>
							</div>
							<br>
							@endif
							@if($service->tanoura_show)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Tanoura Show</span>
							</div>
							<br>
							@endif
							@if($service->refreshments)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Refreshments</span>
							</div>
							<br>
							@endif
							@if($service->short_camel_ride)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Short Camel Ride</span>
							</div>
							<br>
							@endif
							@if($service->photography)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Opportunity of Photography</span>
							</div>
							<br>
							@endif
							@if($service->henaa_tattoo)
							<div class="place_review">
								<a href="#"><i class="fas fa-star"></i></a>
								<span> Henna Tattoo for Ladies</span>
							</div>
							@endif
						</div>
						{{-- <div class="details_icon text-right">
							<i class="ti-share"></i>
						</div> --}}
					</div>
				</div>
			</div>
			@endforeach
			{{-- <a href="{{url('services')}}" class="btn_1 text-cnter">Discover More</a> --}}
		</div>
	</div>
</section>
<section class="client_review section_padding">
	<div class="container">
		<div class="row ">
			<div class="col-xl-6">
				<div class="section_tittle">
					<h2>What they said</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<div class="client_review_slider owl-carousel">
					@foreach(App\Models\Review::orderBy('position')->get() as $review)
					<div class="single_review_slider">
						<div class="place_review">
							<a href="#"><i class="fas fa-star"></i></a>
							<a href="#"><i class="fas fa-star"></i></a>
							<a href="#"><i class="fas fa-star"></i></a>
							<a href="#"><i class="fas fa-star"></i></a>
							<a href="#"><i class="fas fa-star"></i></a>
						</div>
						<br>
						<p>{!! $review->message !!} </p>
						<h5> - {{$review->name}}</h5>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>
</section>
@endsection