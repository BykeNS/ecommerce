<script src="<?php echo e(asset('frontend/js/jquery-2.2.3.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/plugins/toastr/toastr.min.js')); ?>"></script>
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

</script>
<script>
    $(document).ready(function () {
        setTimeout(function() {
        $("#myModal").modal('show');
         }, 50000);
    });
</script>


<!--search jQuery-->
<script src="<?php echo e(asset('frontend/js/modernizr-2.6.2.min.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/classie-search.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/demo1-search.js')); ?>"></script>

<script src="<?php echo e(asset('frontend/js/minicart.js')); ?>"></script>
<script>
    googles.render();

    googles.cart.on('googles_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {}
        }
    });
</script>

<script>
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>


 
 
<script src="<?php echo e(asset('frontend/js/owl.carousel.js')); ?>"></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                900: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>


		<script src="<?php echo e(asset('frontend/js/imagezoom.js')); ?>"></script>

		<script src="<?php echo e(asset('frontend/js/easy-responsive-tabs.js')); ?>"></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
		<!-- FlexSlider -->
		<script src="<?php echo e(asset('frontend/js/jquery.flexslider.js')); ?>"></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>

<script src="<?php echo e(asset('frontend/js/move-top.js')); ?>"></script>
<script src="<?php echo e(asset('frontend/js/easing.js')); ?>"></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<script src="<?php echo e(asset('frontend/js/bootstrap.js')); ?>"></script>



<?php /**PATH C:\laragon\www\ecom\resources\views/frontend/include/scripts.blade.php ENDPATH**/ ?>