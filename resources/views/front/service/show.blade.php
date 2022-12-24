@extends('front.layout.index')
@section('title')
<title>{{$service->title}} Service | {{App\Models\Information::siteName()}}</title>

<!-- DESCRIPTION -->
<meta name="description" content=" {{ $service->description }}" />

<!-- OG -->
<meta property="og:locale" content="en_GB" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{$service->title}}  | {{App\Models\Information::siteName()}}" />
<meta property="og:description" content="{{ $service->description }}" />
<meta property="og:url" content="{{Request::url()}}" />
<meta property="og:site_name" content="SNOFLAKE>COM" />
<meta property="article:publisher" content="{{App\Models\Information::facebook()}}" />
<meta property="og:image" content="{{asset($service->images->first()->image)}}" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="{{$service->title}} | {{App\Models\Information::siteName()}}" />
<meta name="twitter:description" content="{{ $service->description }}" />
<meta name="twitter:image" content="{{asset($service->images->first()->image)}}" />
@endsection
@section('style')
@endsection
@section('content')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>{{$service->title}} Service</h2>
                        <p>Home / Services / {{$service->title}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="event_part section_padding">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="event_slider owl-carousel">
            @foreach($service->images as $image)
            <div class="single_event_slider">
              <img src="{{@$image->image}}" alt="">
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="tour_details_content section_padding">
      <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <p>Booking Form</p>
              <form class="form-contact contact_form" action="{{route('admin.booking.store')}}" method="post">
                @csrf
                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Name</label>
                      <input class="form-control" name="name" id="name" type="text" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Email</label>
                      <input class="form-control" name="email" id="email" type="email" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Phone</label>
                      <input class="form-control" name="phone" id="phone" type="text" required>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Date</label>
                      <input class="form-control" name="date" type="date" required>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-group">
                      <label>Enquiry</label>
                      <textarea class="form-control w-100" name="message" id="message" cols="30" rows="3" required></textarea>
                    </div>
                  </div>
                </div>
                <div class="form-group mt-3" style="text-align:right!important;">
                  <button type="submit" class="button button-contactForm btn_1">Booked</button>
                </div>
              </form>
            </div>
              <div class="col-lg-12">
                  <div class="content_iner description_text">
                      {!! $service->description !!}
                  </div>
              </div>
          </div>
      </div>
  </section>
  
@endsection