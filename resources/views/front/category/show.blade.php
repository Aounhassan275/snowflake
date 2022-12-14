@extends('front.layout.index')
@section('title')
<title>{{$category->name}} SERVICES | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>{{$category->name}} Services</h2>
                        <p>Home . {{$category->name}} Services</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top_place section_padding">
	<div class="container">
		<div class="row">
			@foreach($category->services as $service)
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
@endsection