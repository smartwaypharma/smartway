<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ @csrf_token() }}">
  <meta name="google-site-verification" content="a11LvvvDD3AijXGSlXvBW8Zx8-GhsVyl5izGywNqYdw" />
  @yield('meta')
  <link rel="icon" href="{{ asset('image/favicon.png') }}" sizes="16x16" type="image/png">
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
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
