@extends('admin.layout.index')

@section('title')
    Admin Dashboard
@endsection

@section('content')
<div class="row">
    
    <div class="col-sm-12 col-xl-12">
        <a href="{{route('admin.service.index')}}">
            <div class="card card-body bg-blue-400 has-bg-image">
                <div class="media">

                    <div class="mr-3 align-self-center">
                        <i class="icon-unlink2 icon-3x opacity-75"></i>
                    </div>
                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\Service::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Services</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.slider.index')}}">
            <div class="card card-body bg-danger-400 has-bg-image">
                <div class="media">
                    <div class="mr-3 align-self-center">
                        <i class="icon-stack-picture icon-3x opacity-75"></i>
                    </div>
                    <div class="media-body text-right">
                    <h3 class="mb-0">{{App\Models\Slider::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Slider</span>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <div class="col-sm-6 col-xl-6">
        <a href="{{route('admin.messages.index')}}">
            <div class="card card-body bg-success-400 has-bg-image">
                <div class="media">
                    <div class="media-body align-self-center ">
                    <h3 class="mb-0">{{App\Models\Message::count()}}</h3>
                        <span class="text-uppercase font-size-xs">Total Messages </span>
                    </div>
                    <div class="ml-3 text-right">
                        <i class="icon-bubbles4 icon-3x opacity-75"></i>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection