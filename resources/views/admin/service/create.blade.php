@extends('admin.layout.index')

@section('title')
Create Service
@endsection
@section('styles')
<script src="{{asset('admin/global_assets/js/plugins/editors/summernote/summernote.min.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/editor_summernote.js')}}"></script>
<script src="{{asset('admin/global_assets/js/demo_pages/form_tags_input.js')}}"></script>
<script src="{{asset('admin/global_assets/js/plugins/forms/tags/tokenfield.min.js')}}"></script>
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Service</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div> 

            <div class="card-body">
                <form action="{{route('admin.service.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>Enter Service Title</label>
                            <input type="text" name="title" placeholder="Enter Service Title" class="form-control" required>
                        </div>   
                        <div class="form-group col-md-4">
                            <label>Enter Service Price</label>
                            <input type="number" name="price" placeholder="Enter Service Price" class="form-control" required>
                        </div>  
                        <div class="form-group col-md-4">
                            <label class="form-label">Service Category</label>
                            <select name="category_id" id="category_id" class="form-control select2" required>
                                <option selected disabled>Select</option>
                                @foreach(App\Models\Category::all() as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>                        
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="dune_bashing" > Dune Bashing in Land Cruiser</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="belly_dance" > Belly Dance</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="fire_show" > Fire Show</label>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="sand_boarding" > Sand-boarding</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="tanoura_show" > Tanoura Show</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="refreshments" > Refreshments</label>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="short_camel_ride" > Short Camel Ride</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="photography" > Opportunity of Photography</label>
                        </div>
                        <div class="form-group col-md-4">
                            <label><input type="checkbox" name="henaa_tattoo" > Henna Tattoo for Ladies</label>
                        </div>
                    </div> 
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Enter Service Image</label>
                            <input name="images[]" multiple type="file" class="form-input-styled" data-fouc required>
                        </div>   
                        <div class="form-group col-md-6">
                            <label>Display Order</label>
                            <input type="number" name="display_order" placeholder="Enter Display Order" class="form-control" required>
                        </div>   

                    </div>    
                    <div class="form-group col-md-12">
                        <label>Description</label>
                        <textarea class="form-control summernote"  id="description" name="description" required></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Create 
                            <i class="icon-plus22 ml-2"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>
@endsection