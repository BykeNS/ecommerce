<script src="{{ asset('admin/plugins/jquery/jquery.min.js') }}"></script>
{{-- <!-- jQuery UI 1.11.4 --> --}}
<script src="{{ asset('admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
{{-- <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip --> --}}
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
{{-- <!-- Bootstrap 4 --> --}}
<script src="{{ asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
{{-- <!-- ChartJS --> --}}
<script src="{{ asset('admin/plugins/chart.js/Chart.min.js') }}"></script>
{{-- <!-- Sparkline --> --}}
<script src="{{ asset('admin/plugins/sparklines/sparkline.js') }}"></script>
{{-- <!-- JQVMap --> --}}
{{--  <script src="{{ asset('admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>  --}}
{{--  <script src="{{ asset('admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>  --}}
{{-- <!-- jQuery Knob Chart --> --}}
<script src="{{ asset('admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
{{-- <!-- daterangepicker --> --}}
<script src="{{ asset('admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
{{-- <!-- Tempusdominus Bootstrap 4 --> --}}
<script src="{{ asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
{{-- <!-- Summernote --> --}}
<script src="{{ asset('admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
{{-- <!-- overlayScrollbars --> --}}
<script src="{{ asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
{{-- <!-- AdminLTE App --> --}}
<script src="{{ asset('admin/dist/js/adminlte.js') }}"></script>
{{-- <!-- AdminLTE dashboard demo (This is only for demo purposes) --> --}}
{{--  <script src="{{ asset('admin/dist/js/pages/dashboard.js') }}"></script>  --}}
{{-- <!-- AdminLTE for demo purposes --> --}}
<script src="{{ asset('admin/dist/js/demo.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script>
<script src="http://parsleyjs.org/dist/parsley.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
    $("#image").on("change", function() {
        if ($("#image")[0].files.length >= 4) {
            alert("You can select only 3 images");
        } else {
            $("#imageUploadForm").submit();
        }
    });
</script>
{{-- Toastr notifications --}}
{{--  <script src="{{ asset('admin/plugins/toastr/toastr.min.js') }}"></script>
<script>
    function toasterOptions() {
        toastr.options = {
            "closeButton": false,
            "debug": true,
            "newestOnTop": true,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": true,
            "onclick": null,
            "showEasing": "swing",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showMethod": "show",
            "hideMethod": "hide"
        };
    };
    @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toasterOptions();
            toastr.info("{{ Session::get('message') }}");
            break;

        case 'warning':
            toasterOptions();
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toasterOptions();
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toasterOptions();
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif




</script>
  --}}
