@extends('admin.master')
@section('title','Create')
@section('content')

	<div class="main-footer">

        <h3>Create New Product</h3>
        <form role="form" method="post" action="{{ url('/admin/product/store') }}" enctype="multipart/form-data" data-parsley-validate="">
            @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Poduct Name:</label>
                <input type="text" class="form-control" id="" name="name" value="{{ old('name') }}" required data-parsley-length="[10,25]">
              </div>
              <div class="form-group">
                <label for="">Poduct Description:</label>
                      <textarea class="form-control"  rows="7" name="description" required data-parsley-length="[10,8000]">{{old('description')}}</textarea>
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Poduct Price:</label>
                <input type="number" min="5.00" max="10000.00" class="form-control" id="exampleInputEmail1" required='' name="price" value="{{ old('price') }}">
              </div>
               <div class="form-group">
                    <label for="exampleInputEmail1">Product Category:<small> (You can select more than one)</small></label>
                    <select name="category[]" class="form-control selectpicker " required='' multiple >
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                 </select>
             </div>
              <div class="form-group">
                <label for="exampleInputFile">Product Image:</label>
                <div class="input-group">
                    <input type="file" name="image[]" required="" class="custom-file-input" data-parsley-max-file-size="3548" id="image" multiple >
                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                </div>
              </div>
            </div>
            <div class="card-body">
              <input type="submit" class="btn btn-primary" value="Submit">
            </div>
          </form>

	</div>

@endsection
