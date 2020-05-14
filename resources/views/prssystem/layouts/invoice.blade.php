<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link href="{{config('global.THEME_URL_CSS').'/profile/bootstrap.min.css'}}" rel="stylesheet">
    <link href="{{config('global.THEME_URL_CSS').'/profile/style.css'}}" rel="stylesheet">
    <link href="{{config('global.THEME_URL_CSS').'/profile/font-awesome.css'}}" rel="stylesheet">
    <link href="{{config('global.THEME_URL_CSS').'/profile/icon-font.min.css'}}" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<script src="{{config('global.THEME_URL_JS').'/profile/'}}jquery-1.10.2.min.js"></script>
</head>
 <body class="sticky-header left-side-collapsed">
<section>
<!-- BEGIN MAIN CONTENT -->  
@include('prssystem.partials.leftsidebar')
<!-- main content start-->
<div class="main-content" style="margin:0px; ">
@include('prssystem.partials.notificationbar')
@yield('content')
</div>
<!-- END MAIN CONTENT -->
</section>
<!-- Scripts -->
<script src="{{config('global.THEME_URL_JS').'/profile/jquery.nicescroll.js'}}"></script>
<script src="{{config('global.THEME_URL_JS').'/profile/scripts.js'}}"></script>
<script src="{{config('global.THEME_URL_JS').'/profile/bootstrap.min.js'}}"></script>
<script>
CSRF_TOKEN="{{csrf_token()}}";
</script>
<script src="{{config('global.THEME_URL_JS').'/profile/custome.js'}}"></script>
</body>
</html>
