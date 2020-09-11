<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <script type="application/javascript">
        var DOMAIN_URL = "<?php echo url( '/' ) ?>";
    </script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description"
          content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords"
          content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Dashboard Analytics | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="{{asset('public')}}/app-assets/favicon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public')}}/app-assets/favicon.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/app-assets/vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public')}}/app-assets/vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public')}}/app-assets/vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public')}}/app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public')}}/app-assets/vendors/data-tables/css/select.dataTables.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="{{asset('public')}}/app-assets/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('public')}}/app-assets/css/themes/vertical-modern-menu-template/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/app-assets/css/pages/dashboard.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/app-assets/css/pages/data-tables.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/app-assets/css/pages/app-sidebar.css">
    <link rel="stylesheet" type="text/css" href="{{asset('public')}}/app-assets/css/pages/app-contacts.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: CDN JS -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/blueimp-JavaScript-Templates/3.11.0/js/tmpl.min.js"></script>
    <!-- END : BEGIN: CDN JS -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('public')}}/app-assets/css/custom/custom.css?{{md5_file(public_path('app-assets/css/custom/custom.css'))}}">
    <?php insert_tpl_file(); ?>
</head>
<!-- END: Head-->
<body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns"
    data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">
@include('layouts.nav')
