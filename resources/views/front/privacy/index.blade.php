@extends('front.layout.index')
@section('title')
<title>PRIVACY POLICY | {{App\Models\Information::siteName()}}</title>
@endsection
@section('content')
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner">
                    <div class="breadcrumb_iner_item text-center">
                        <h2>Privacy Policy</h2>
                        <p>Home / Privacy Policy</p>
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
                    <img src="{{asset('front/img/about_img.png')}}" alt="#">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about_text">
                    <h2>Privacy Policy</h2>
                    <p>{!! App\Models\Information::privacyPolicy() !!}</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection