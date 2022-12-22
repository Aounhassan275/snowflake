@extends('front.layout.index')
@section('title')
<title>ABOUT US | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>About Us</h2>
                        <p>Home / About Us</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="about_us section_padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="about_img">
                    <img src="{{asset('about-us.jpg')}}" alt="#">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_text">
                    <h5>About Us</h5>
                    <h2>Buggy Dubai tours</h2>
                    <p>{!! App\Models\Information::aboutUs() !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection