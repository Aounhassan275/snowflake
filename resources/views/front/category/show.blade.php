@extends('front.layout.index')
@section('title')
<title>{{$category->name}} SERVICES | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')
<section class="breadcrumb breadcrumb_bg" style="background-image:url({{asset($category->image)}})">
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
@endsection