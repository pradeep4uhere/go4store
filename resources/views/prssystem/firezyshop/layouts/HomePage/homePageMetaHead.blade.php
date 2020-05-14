<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="noodp, noydir"/>
    <title>@yield('title')</title>

    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="news_keywords" content="@yield('keywords')"/>

    <meta itemprop="name" content="@yield('description')">
    <meta itemprop="description" content="@yield('description')">

    <meta itemprop="image" content="@yield('pageimage')"> 
    <link rel="amphtml" href="@yield('pageurl')"/>

    <meta name="author" content="{{env('APP_NAME')}}">
    <meta property="article:published_time" content="@yield('publishedTime')"/>
    <meta property="article:modified_time" content="@yield('modifiedTime')"/>
    <meta property="article:section" content="@yield('section')">
    <meta property="article:category" content="@yield('category')">
    <meta property="article:tag" content="@yield('tag')"/>

    <meta property="og:type" content="article"/>
    <meta name="twitter:creator" content="@yield('description')"/>
    <meta name="twitter:card" content="@yield('description')">
    <meta name="twitter:site" content="{{env('APP_URL')}}">
    <meta name="twitter:title" content="@yield('description')">
    <meta name="twitter:description" content="@yield('description')">
    <meta name="twitter:image" content="@yield('urlimage')">

    <meta property="og:title" content="@yield('title')"/>
    <meta property="og:url" content="@yield('url')"/>
    <meta property="og:image" content="@yield('urlimage')"/>
    <meta property="og:image:width" content="200"/>
    <meta property="og:image:height" content="250"/>
    <meta property="og:description" content="@yield('description')"/>
    <meta property="og:site_name" content="{{env('APP_NAME')}}"/>
    <meta name="atdlayout" content="article">
    <meta name="google-site-verification" content="etzoIjvG1TAYkwyVaWH0FSP4pgszMt8z2IIn9Kgd1Q8" />
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-132401162-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-132401162-1');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WHG5Z5T');</script>
<!-- End Google Tag Manager -->