<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ @csrf_token() }}">
  <meta name="google-site-verification" content="Oamekb-kg2TL0a1zpQHfaWkAmRl2kiF9r479bEKHZpk" />
  @yield('meta')
  <link rel="icon" href="{{ asset('image/favicon.png') }}" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-68709470-1"></script>

  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-68709470-1');
  </script>
</head>
<body>
@include('front.partials.header')
@yield('content')

@include('front.partials.footer')
<script src="{{ mix('js/front.js') }}"></script>
<script src="{{ mix('js/chat.js') }}"></script>
@stack('scripts')
</body>
</html>
