@extends('admin.layout.index')

@section('title')
    Add Category
@endsection

@section('content')

<div class="row">
    <div class="col-md-12">
        <!-- Basic layout-->
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Add New Category</h5>
                <div class="header-elements">
                    <div class="list-icons">
                        <a class="list-icons-item" data-action="collapse"></a>
                        <a class="list-icons-item" data-action="remove"></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <form action="{{route('admin.category.store')}}" method="post" enctype="multipart/form-data" >
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label>Category Name</label>
                            <input name="name" type="text" class="form-control" placeholder="Enter Category Name" required>
                        </div>
                          <div class="form-group col-md-12">
                            <label>Category Image</label>
                            <input name="image" type="file" class="form-control"  required>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">Create <i class="icon-paperplane ml-2"></i></button>
                    </div>
                    
                </form>
            </div>
        </div>
        <!-- /basic layout -->

    </div>
</div>

<div class="card">

    <table class="table datatable-save-state">
        <thead>
            <tr>
                <th>#</th>
                <th>Category Image</th>
                <th>Category Name</th>
                <th>Action</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach (App\Models\Category::all() as $key => $category)
            <tr>
                <td>{{$key+1}}</td>
                <td><img src="{{asset($category->image)}}" style="width:100px;height:auto;"></td>
                <td>{{$category->name}}</td>
                
                <td>
                    <button data-toggle="modal" data-target="#edit_modal" name="{{$category->name}}"
                    id="{{$category->id}}" class="edit-btn btn btn-primary">Edit</button>
                </td>
                <td>
                    <form action="{{route('admin.category.destroy',$category->id)}}" method="POST">
                        @method('DELETE')
                        @csrf
                    <button class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<div id="edit_modal" class="modal fade">
    <div class="modal-dialog">
        <form id="updateForm" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title mt-0" id="myModalLabel">Update Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">??</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Category Name</label>
                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter Category Name" required>
                    </div>
                     <div class="form-group">
                        <label for="name">Category Image</label>
                        <input class="form-control" type="file" name="image" >
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
<script>
    $(document).ready(function(){
        $('.edit-btn').click(function(){
            let id = $(this).attr('id');
            let name = $(this).attr('name');
            $('#name').val(name);
            $('#id').val(id);
            $('#updateForm').attr('action','{{route('admin.category.update','')}}' +'/'+id);
        });
    });
</script>
@endsection