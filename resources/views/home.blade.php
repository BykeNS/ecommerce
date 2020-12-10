@extends('layouts.app')

@section('content')
<div class="container" >

    <div class="row justify-content-center">

        <div class="col-md-12">
            <div class="card" >
                <div class="card-header">Dashboard</div>

                <div class="card-body" id="app">
                    <spinner-test></spinner-test>
                    {{-- <loading-overlay-form></loading-overlay-form> --}}
                    {{-- <contact-form></contact-form> --}}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
