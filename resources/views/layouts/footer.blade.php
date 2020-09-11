<div id="theme-cutomizer-out" class="theme-cutomizer sidenav row hidden">
</div>
<!-- BEGIN: Footer-->
<footer
    class="page-footer footer footer-static footer-dark gradient-45deg-indigo-purple gradient-shadow navbar-border navbar-shadow">
    <div class="footer-copyright">
        <div class="container">
            <span>&copy; {{date( 'Y' )}}
                <a href="{{route('/')}}">Cluster Management</a> All rights reserved.
            </span>
            <span class="right hide-on-small-only">Design and Developed by <a
                    href="{{route('/')}}">Acesoas</a></span>
        </div>
    </div>
</footer>

<!-- END: Footer-->
<!-- BEGIN VENDOR JS-->
<script src="{{asset('public')}}/app-assets/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<script src="{{asset('public')}}/app-assets/vendors/data-tables/js/jquery.dataTables.min.js"></script>
<script
    src="{{asset('public')}}/app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('public')}}/app-assets/vendors/data-tables/js/dataTables.select.min.js"></script>
<!-- END PAGE VENDOR JS-->
<?php if(current_page() == ''){ ?>
<!-- BEGIN PAGE LEVEL JS-->
<script src="{{asset('public')}}/app-assets/vendors/sparkline/jquery.sparkline.min.js"></script>
<script src="{{asset('public')}}/app-assets/vendors/chartjs/chart.min.js"></script>
<script src="{{asset('public')}}/app-assets/vendors/chartist-js/chartist.js"></script>
<script src="{{asset('public')}}/app-assets/vendors/chartist-js/chartist-plugin-tooltip.js"></script>
<script src="{{asset('public')}}/app-assets/vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
<script src="{{asset('public')}}/app-assets/js/scripts/dashboard-analytics.js"></script>
<!-- END PAGE LEVEL JS -->
<?php } ?>
<script src="{{asset('public')}}/app-assets/js/scripts/data-tables.js"></script>
<script src="{{asset('public')}}/app-assets/js/scripts/app-contacts.js"></script>
<!-- BEGIN CDN JS Libraries-->
<script type="text/javascript" src="https://malsup.github.io/jquery.form.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/gasparesganga-jquery-loading-overlay@2.1.6/dist/loadingoverlay.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/additional-methods.min.js"></script>
<script type="text/javascript"
        src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js"></script>
<!-- BEGIN Custom JS Libraries-->
<script src="{{asset('public')}}/js/scripts.js?{{md5_file(public_path('js/scripts.js'))}}"></script>
<script src="{{asset('public')}}/js/custom.js?{{md5_file(public_path('js/custom.js'))}}"></script>
<?php insert_js_file();?>
</body>
</html>
