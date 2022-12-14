@extends('admin.layout.index')

@section('title')
{{$service->title}} Service
@endsection
@section('styles')
<script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">{{$service->title}} Service</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('admin.service.update',$service->id)}}" method="post" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <input type="hidden" name="id" placeholder="Enter Service Title" class="form-control" value="{{$service->id}}" required>  
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Enter Service Title</label>
                            <input type="text" name="title" placeholder="Enter Service Title" value="{{$service->title}}" class="form-control" required>
                        </div>   
                        <div class="form-group col-md-4">
                            <label>Enter Service Price</label>
                            <input type="number" name="price" placeholder="Enter Service Price" value="{{$service->price}}"  class="form-control" required>
                        </div>  
                        <div class="form-group col-md-4">
                            <label class="form-label">Service Category</label>
                            <select name="category_id" id="category_id" class="form-control select2" required>
                                <option  disabled>Select</option>
                                @foreach(App\Models\Category::all() as $category)
                                <option @if($service->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>                        
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->dune_bashing) checked @endif  name="dune_bashing" > Dune Bashing in Land Cruiser</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->belly_dance) checked @endif name="belly_dance" > Belly Dance</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->fire_show) checked @endif name="fire_show" > Fire Show</label>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->sand_boarding) checked @endif name="sand_boarding" > Sand-boarding</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->tanoura_show) checked @endif name="tanoura_show" > Tanoura Show</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->refreshments) checked @endif name="refreshments" > Refreshments</label>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->short_camel_ride) checked @endif name="short_camel_ride" > Short Camel Ride</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->photography) checked @endif name="photography" > Opportunity of Photography</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" @if($service->henaa_tattoo) checked @endif name="henaa_tattoo" > Henna Tattoo for Ladies</label>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Display Order</label>
                            <input type="number" name="display_order" placeholder="Enter Display Order" class="form-control" value="{{$service->display_order}}" required>
                        </div>   

                    </div>    
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea class="form-control summernote"  id="description" name="description" required>{{$service->description}}</textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Updated 
                            <i class="icon-plus22 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">View Service Images</h5>
        <div class="header-elements">
            <div class="list-icons">
                <a data-toggle="modal" data-target="#add_image_model" href="#" class="btn btn-success">Add New Image</a>
                <a class="list-icons-item" data-action="collapse"></a>
                <a class="list-icons-item" data-action="reload"></a>
                <a class="list-icons-item" data-action="remove"></a>
            </div>
        </div>
    </div>

    <table class="table  datatable-basic datatable-row-basic">
        <thead>
            <tr>
                <th>Sr#</th>
                <th>Service Image</th>
                <th>Action</th>
            </tr> 
        </thead>
        <tbody>
            @foreach ($service->images as $key => $image)
            <tr> 
                <td>{{$key+1}}</td>
                <td><img src="{{asset($image->image)}}" height="100" width="100" alt=""></td>
                <td class="text-center">
                    <form action="{{route('admin.service_image.destroy',$image->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                        <button class="btn"><i class="icon-trash"></i></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="add_image_model" class="modal fade">
    <div class="modal-dialog">
        <form action="{{route('admin.service_image.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Add Service Image</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="title">Service Image</label>
                        <input class="form-control" type="hidden"  name="service_id" value="{{$service->id}}">
                        <input class="form-control" type="file" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary waves-effect" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary waves-effect waves-light">Update</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
@endsection