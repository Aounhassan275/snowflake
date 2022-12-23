@extends('front.layout.index')
@section('title')
<title>HOME | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')

@php 
$slider = App\Models\Slider::first();
@endphp
<section class="banner_part" style="background-image:url({{asset($slider->image)}})">
	<div class="container">
	  <div class="row align-items-center justify-content-center">
		<div class="col-lg-10">
		  <div class="banner_text text-center">
			<div class="banner_text_iner">
			  <h1> {{$slider->title}}</h1>
			  <p>{!! $slider->description !!}</p>
			  <a href="{{url('services')}}" class="btn_1">Discover Now</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</section>
  
{{-- <section class="best_services section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="section_tittle text-center">
					<h2>We Offered Best Services</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach(App\Models\Category::all()->take(6) as $category)
			<div class="col-lg-4 col-sm-6">
				<div class="single_ihotel_list">
					<img src="{{asset($category->image)}}" alt="">
					<h3> <a href="{{route('category.show',str_replace(' ', '_',$category->name))}}"> {{$category->name}}</a></h3>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section> --}}
{{-- <section class="best_services section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="section_tittle text-center">
					<h2>We Offered Best Services</h2>
				</div>
			</div>
		</div>
		<div class="row">
			@foreach(App\Models\Category::all()->take(6) as $category)
			<div class="col-lg-4 col-sm-6">
				<div class="single_ihotel_list">
					<img src="{{asset($category->image)}}" alt="">
					<h3> <a href="{{route('category.show',str_replace(' ', '_',$category->name))}}"> {{$category->name}}</a></h3>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</section> --}}
<section class="top_place section_padding">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-xl-6">
				<div class="section_tittle text-center">
					<p>What's New</p>
					<h2>Dubai Desert Safari Experiences</h2>
				</div>
			</div>
		</div>
		@php 
		$desert_safari_category = App\Models\Category::where('name','Desert Safari')->first();
		@endphp
		<div class="row">
			@foreach(App\Models\Service::where('category_id',@$desert_safari_category->id)->orderBy('display_order')->get()->take(8) as $service)
			<div class="col-lg-6 col-md-6">
				<div class="single_place">
					<img src="{{asset(@$service->images->first()->image)}}" alt="">
					<div class="hover_Text d-flex align-items-end justify-content-between">
						<div class="hover_text_iner">
							<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}" class="place_btn">Book Now</a>
							<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><h3>{{$service->title}}</h3></a>
							<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><p>{{$service->price}} AED Per Person</p></a>
							@if($service->dune_bashing)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Dune Bashing in Land Cruiser</span></a>
							</div>
							<br>
							@endif
							@if($service->belly_dance)
								<div class="place_review">
									<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
									<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Belly Dance</span></a>
								</div>
							<br>
							@endif
							@if($service->fire_show)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Fire Show</span></a>
							</div>
							<br>
							@endif
							@if($service->sand_boarding)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Sand-Boarding</span></a>
							</div>
							<br>
							@endif
							@if($service->tanoura_show)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Tanoura Show</span></a>
							</div>
							<br>
							@endif
							@if($service->refreshments)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Refreshments</span></a>
							</div>
							<br>
							@endif
							@if($service->short_camel_ride)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Short Camel Ride</span></a>
							</div>
							<br>
							@endif
							@if($service->photography)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Opportunity of Photography</span></a>
							</div>
							<br>
							@endif
							@if($service->henaa_tattoo)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Henna Tattoo for Ladies</span></a>
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
<section class="about_us section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_img">
                    <img src="{{asset(App\Models\Information::buggyImage())}}" alt="#">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_text">
                    <h5>About</h5>
                    <h2>Buggy Dubai tours</h2>
                    <p>{!! App\Models\Information::buggyContent() !!}</p>
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
					<p>What's New</p>
					<h2>Dubai Dune Buggy Experiences</h2>
				</div>
			</div>
		</div>
		@php 
		$dune_buggy_category = App\Models\Category::where('name','Dune Buggy')->first();
		@endphp
		<div class="row">
			@foreach(App\Models\Service::where('category_id',@$dune_buggy_category->id)->orderBy('display_order')->get()->take(8) as $service)
			<div class="col-lg-6 col-md-6">
				<div class="single_place">
					<img src="{{asset(@$service->images->first()->image)}}" alt="">
					<div class="hover_Text d-flex align-items-end justify-content-between">
						<div class="hover_text_iner">
							<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}" class="place_btn">Book Now</a>
							<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><h3>{{$service->title}}</h3></a>
							<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><p>{{$service->price}} AED Per Person</p></a>
							@if($service->dune_bashing)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Dune Bashing in Land Cruiser</span></a>
							</div>
							<br>
							@endif
							@if($service->belly_dance)
								<div class="place_review">
									<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
									<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Belly Dance</span></a>
								</div>
							<br>
							@endif
							@if($service->fire_show)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Fire Show</span></a>
							</div>
							<br>
							@endif
							@if($service->sand_boarding)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Sand-Boarding</span></a>
							</div>
							<br>
							@endif
							@if($service->tanoura_show)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Tanoura Show</span></a>
							</div>
							<br>
							@endif
							@if($service->refreshments)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Refreshments</span></a>
							</div>
							<br>
							@endif
							@if($service->short_camel_ride)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Short Camel Ride</span></a>
							</div>
							<br>
							@endif
							@if($service->photography)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Opportunity of Photography</span></a>
							</div>
							<br>
							@endif
							@if($service->henaa_tattoo)
							<div class="place_review">
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><i class="fas fa-star"></i></a>
								<a href="{{route('service.show',str_replace(' ', '_',$service->title))}}"><span> Henna Tattoo for Ladies</span></a>
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