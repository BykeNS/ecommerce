
@if ($errors->any())
@foreach ($errors->all() as $error)

  <div class="alert alert-danger" >

          {{ $error }}
  </div>
@endforeach
@endif

@if(session('success'))

<script type="text/javascript">
    swal({

        text:"{{Session::get('success')}}",
        timer:6900,
        type:'success'
    })
    setTimeout(function () { 
      location.reload();
    }, 2600);
    {{-- .then((value) => {
      location.reload();
    }).catch(swal.noop); --}}

</script>
@endif

@if (session('danger'))

<div class="alert alert-danger alert-dismissible fade show" role="alert" style="text-align: center;" >

    <strong class="fas fa-exclamation-triangle">&nbsp; {{session('danger')}}</strong>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
      <span aria-hidden="true"><b>&times;</b></span>
    </button>
  </div>
@endif
