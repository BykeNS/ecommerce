<script src="<?php echo e(asset('admin/plugins/jquery/jquery.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script src="<?php echo e(asset('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/chart.js/Chart.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/sparklines/sparkline.js')); ?>"></script>




<script src="<?php echo e(asset('admin/plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/moment/moment.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/daterangepicker/daterangepicker.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/summernote/summernote-bs4.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>

<script src="<?php echo e(asset('admin/dist/js/adminlte.js')); ?>"></script>



<script src="<?php echo e(asset('admin/dist/js/demo.js')); ?>"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/dropzone.min.js"></script>
<script src="http://parsleyjs.org/dist/parsley.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>
<script>
    $("#image").on("change", function() {
        if ($("#image")[0].files.length >= 5) {
            alert("You can select only 4 images");
        } else {
            $("#imageUploadForm").submit();
        }
    });
</script>


<?php /**PATH C:\laragon\www\ecom\resources\views/admin/include/scripts.blade.php ENDPATH**/ ?>