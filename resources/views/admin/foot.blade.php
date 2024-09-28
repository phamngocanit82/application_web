<!--script src="/templates/default/admin/js/jquery-3.5.1.min.js"></script-->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<link  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<!-- feather icon js-->
<script src="/templates/default/admin/js/icons/feather-icon/feather.min.js"></script>
<script src="/templates/default/admin/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
@if(empty($page_type))
    <script src="/templates/default/admin/js/sidebar-menu.js"></script>
@endif

<script src="/templates/default/admin/js/config.js"></script>
<!-- Bootstrap js-->
<script src="/templates/default/admin/js/bootstrap/popper.min.js"></script>
<script src="/templates/default/admin/js/bootstrap/bootstrap.min.js"></script>
<!-- Plugins JS start-->
<script src="/templates/default/admin/js/range-slider/ion.rangeSlider.min.js"></script>
<script src="/templates/default/admin/js/range-slider/rangeslider-script.js"></script>
<script src="/templates/default/admin/js/touchspin/vendors.min.js"></script>
<script src="/templates/default/admin/js/touchspin/touchspin.js"></script>
<script src="/templates/default/admin/js/touchspin/input-groups.min.js"></script>
<script src="/templates/default/admin/js/owlcarousel/owl.carousel.js"></script>
<script src="/templates/default/admin/js/select2/select2.full.min.js"></script>
<script src="/templates/default/admin/js/select2/select2-custom.js"></script>
<script src="/templates/default/admin/js/tooltip-init.js"></script>
<script src="/templates/default/admin/js/product-tab.js"></script>
<script src="/templates/default/admin/js/photoswipe/photoswipe.min.js"></script>
<script src="/templates/default/admin/js/photoswipe/photoswipe-ui-default.min.js"></script>
<script src="/templates/default/admin/js/photoswipe/photoswipe.js"></script>

<!-- SweetAlert2 -->
<script src="/templates/default/admin/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/templates/default/admin/plugins/toastr/toastr.min.js"></script>

<!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="/templates/default/admin/js/script.js"></script>
<script>
    var body_content = document.getElementById('body_content');
    setTimeout(function () { body_content.style.display = 'block'; body_content.style.visibility = 'visible';}, 1);
</script>
@yield('foot')
@yield('ajax')