<div id="c-mask" class="c-mask"></div>

<script src="<?php echo base_url();?>default/js/jquery.min6b47.js?v=1463765083"></script>
<script src="<?php echo base_url();?>default/js/tr.js"></script>
<script src="<?php echo base_url();?>default/js/sidebar.js"></script>
<script src="<?php echo base_url();?>default/js/promise.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/egg.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/flickity.pkgd.min.js"></script>
<script src="<?php echo base_url();?>default/js/flexibility.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/validate.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/skrollr.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/jquery.svg3dtagcloud.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/advert8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/typo8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/jquery.transform-0.9.5.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/owl.carousel.min-28d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/particles.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/swiper.min8d54.js?v=1551100772"></script>
<script src="<?php echo base_url();?>default/js/api.min158a.js?v=1551100879"></script>
<script src="<?php echo base_url();?>default/js/bundle.min158a.js?v=1551100879"></script>
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
<script type="text/javascript">jQuery(document).ready(function () {

$("#cemetery").owlCarousel({
    lazyLoad: true,
  autoplay: true,
  items: 6,
  responsive: {
        1199: {
            items: 6
        },
        1024: {
            items: 5
        },
        768: {
            items: 4
        },
        320: {
            items: 2
        }
  },
  onInitialized: function (event) {
  $("#cemetery").parent().css({opacity: 1})
}
});


$("#officesSlider").owlCarousel({
    lazyLoad: true,
    loop: true,
    autoplay: false,
    items: 4,
    margin: 1,
    nav: true,
    dots: false,
    smartSpeed: 600,
    responsive: {
        1024: {
            items: 3
        },
        768: {
            nav: true,
            items: 3,
            autoplay: false,
        },
        320: {
            nav: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 4000,
            autoplaySpeed: 800
        }
    }
});

});</script>

</body>
</html>