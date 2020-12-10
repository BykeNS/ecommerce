@extends('admin.master')
@section('title','Edit')
@section('content')
<div class="main-footer">
    @foreach($products as $product)


<h1>Edit {{ $product->name }}</h1>

<section class="content">
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
    <form role="form" method="post" action="{{ url('/admin/product/update/'.$product->slug) }}" enctype="multipart/form-data" data-parsley-validate="">
        @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="inputName">Product Name:</label>
              <input type="text" id="inputName" class="form-control" value="{{ $product->name }}" name="name">
            </div>
            <div class="form-group">
              <label for="inputDescription">Project Description:</label>
              <textarea id="inputDescription" class="form-control" rows="6" name="description">{{ $product->description }}</textarea>
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
              <label for="inputClientCompany">Price:</label>
              <input type="number" id="price" class="form-control" value="{{ $product->price }}" name="price">
            </div>
            <div class="form-group">
              <label for="inputProjectLeader">Product Images:</label><br>
              @foreach(explode(',' ,$product->image) as $image)
              @if ($loop->first)
              <img src="{{ asset('/images/'.$image) }}" class="img-thumbnail" style="width: 85px; height: 85px;">
              @endif
              @if ($loop->index)
              <img src="{{ asset('/images/'.$image) }}" class="img-thumbnail" style="width: 85px; height: 85px;margin-left:24px;">
              @endif
              @endforeach
              <div class="form-group"><br>
                <label for="exampleInputFile">Add Images:<small> (You can select more than one)</small></label>
                <div class="input-group">
                    <input type="file" name="image[]"  class="custom-file-input" data-parsley-max-file-size="3548" id="image" multiple >
                    <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          {{--  <!-- /.card-body -->  --}}
        </div>
        <div class="row">
            <div class="col-12">
              <input type="submit" value="Save Changes" class="btn btn-primary ">
            </div>
          </div>
          <form>
        {{--  <!-- /.card -->  --}}
      </div>
    </div>
  </section>
</div>

@endsection
