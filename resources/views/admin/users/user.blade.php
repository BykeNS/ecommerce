@extends('admin.master')
@section('title','Users')
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
            {{--  @if($products->count() == 0)  --}}
            {{--  <div class="alert alert-warning">
                <strong>Hey!!!</strong> No Product Found.
            </div>  --}}
            {{--  @else  --}}

          <h1 class="card-title"><b>Users:</b></h1>

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
                      <th style="width: 10%"> Id</th>
                      <th style="width: 15% ">User Name</th>
                      <th style="width: 18%" >User email</th>
                      <th style="width: 18%" >Email verified</th>
                     
                  </tr>
              </thead>
              <tbody>

                  @foreach($users as $user)
                  <tr>
                       <td>
                           {{ $user->id }}
                      </td>
                      <td>
                          <ul class="inline-item">
                               {{ $user->name }}
                          </ul>
                      </td>
                      <td>
                        {{ $user->email }}
                     </td>

                      <td >
                        {{ $user->email_verified_at ? "Approved" : "Pending" }}
                      </td>

                  </tr>
                   @endforeach


              </tbody>
          </table>
        </div>

        <!-- /.card-body -->
      </div>


    </section>


  </div>
  <div class="text-center" style="margin-left: 650px;">
    {{--  {{ $products->links() }}  --}}
  </div>


@endsection
