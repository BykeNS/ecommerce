@extends('admin.master')
@section('title','Dashboard')
@section('content')
<div class="content-wrapper">

    {{-- <!-- Content Header (Page header) --> --}}
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>

        </div>
      </div>
    </div>

    <section class="content">
      <div class="container-fluid">

        <div class="row">
          <div class="col-lg-3 col-6">

            <div class="small-box bg-info">
              <div class="inner">
                <h3>150</h3>
                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Bounce Rate</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{ $users->count() }}</h3>

                <p>User Registrations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>65</h3>

                <p>Unique Visitors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

        </div>

        </div>

      </div>

      <div class="col-md-2 offset-md-10 pb-2">
        <a href="{{ url('admin/product/create') }}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Add Product</a>
      </div>

      <div class="card">

        <div class="card-header">
            @if($products->count() == 0)
            <div class="alert alert-warning">
                <strong>Hey!!!</strong> No Product Found.
            </div>
            @else

          <h1 class="card-title"><b>Products:</b></h1>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>

        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%"> Id</th>
                      <th style="width: 15% ">Product Name</th>
                      <th style="width: 18%" >Product Images</th>
                      <th style="width: 18%" >Product Categories</th>
                      <th style="width: 18%">Product Description</th>
                      <th style="width: 8%" class="text-center">Price</th>
                      <th style="width: 15%" class="text-center">Action</th>
                  </tr>
              </thead>
              <tbody>

                  @foreach($products as $product)
                  <tr>
                      <td> {{ $product->id }}.</td>
                      <td style="font-weight: 600;"><a>{{ucfirst($product->name)}}</a> <br/>
                          <small> {{ $product->created_at }}</small>
                      </td>
                      <td>
                          <ul class="inline-item">
                            @foreach(explode(',' ,$product->image) as $image)
                            @if ($loop->first)
                              <li class="list-inline-item ">
                                  <img alt="Avatar" class="table m-3" src="{{ asset('images/'.$image) }}" style="width: 60px; height:60px;" lazy="loading">
                              </li>
                              @endif
                           @endforeach
                          </ul>
                      </td>
                      <td>
                        @foreach ($product->category as $category)
                        <div class=" mb-1">{{ $category->name }}</div>
                        @endforeach
                     </td>
                      <td class="project_progress">

                          <small>
                            {{ \Illuminate\Support\Str::limit($product->description ?? '',50,' ...') }}
                          </small>
                      </td>
                      <td class="project-state">
                          <h4 class="badge badge-dark">{{ $product->formatPrice() }} $</h4>
                      </td>
                      <td class="project-actions text-right">
                        <a href="{{ url('/admin/product/'.$product->slug) }}">
                            <button class="btn btn-primary btn-md">
                                <i class="fas fa-eye"></i></button></a>

                                <a href="{{ url('/admin/product/edit/'.$product->slug) }}">
                                    <button class="btn btn-info btn-md">
                                        <i class="fas fa-pencil-alt"></i></button></a>

                          <a href="{{url('/admin/product/delete/'.$product->slug)}}" >
                            <button onclick="return confirm('Are you sure you want to delete {{$product->name}}???');" class="btn btn-danger btn-md" > <i class="fas fa-trash"> </i></a>

                          </a>
                      </td>
                  </tr>
                  @endforeach

@endif
              </tbody>
          </table>
        </div>

        <!-- /.card-body -->
      </div>


    </section>


  </div>
  <div class="text-center" style="margin-left: 650px;">
    {{ $products->links() }}
  </div>


@endsection
