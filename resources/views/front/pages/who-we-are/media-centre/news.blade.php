@extends('layouts.front')

@section('meta')
  <title>Who we are – Media Centre - News</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ Illuminate\Support\Facades\Storage::url($post->hero_image_for_desktop) }}">
  <img class="inline-block sm:hidden w-full" src="{{ Illuminate\Support\Facades\Storage::url($post->hero_image_for_mobile) }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4 sm:mb-0 mb-44">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px font-medium -tracking-0.55px leading-none xl:max-w-6xl">
      {{ $post->title }}
    </h1>
    <p class="4xl:text-34px sm:text-2xl text-22px font-semibold">News</p>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-8"
       href="{{ route('who-we-are.media-and-resource-centre.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <p class="opacity-50 text-lg">{{ $post->created_at->format("jS F Y") }}</p>
    <p class="text-lg font-bold lg:mt-1 mt-2 lg:mb-6 mb-1">News</p>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px lg:mt-5 mt-6 4xl:w-1/2">
      {{ $post->title }}</h2>
  </section>
  <section class="container 3xl:max-w-3xl px-4 xl:mt-36">
    <div class="xl:hidden flex mt-8 mb-9">
      <img class="mr-5" src="{{ asset('image/icon/fb_icn.svg') }}">
      <img class="mr-5" src="{{ asset('image/icon/twitter_icn.svg') }}">
      <img class="mr-5" src="{{ asset('image/icon/linkedin_icn.svg') }}">
      <img src="{{ asset('image/icon/email_icn.svg') }}">
    </div>
    <div class="xl:flex">
      <div class="text-center xl:mb-0 mb-10">
        <a href="{{ route('connect-with-us') }}"
           class="button text-white mt-6 sm:mt-0 block text-center sm:inline-block 4xl:text-28px lg:text-xl text-2xl font-semibold 4xl:py-5 py-3.5 4xl:px-11 px-8 bg-persian-green rounded-full"">Get
          in touch</a>
      </div>
      <div class="2xl:max-w-6xl xl:max-w-4xl 2xl:pl-40 xl:pl-20 post-content xl:pr-12">
        {!! $post->post_body !!}
      </div>
      <div class="xl:block hidden ml-auto mr-0">
        <img class="mb-4" src="{{ asset('image/icon/fb_icn.svg') }}">
        <img class="mb-4" src="{{ asset('image/icon/twitter_icn.svg') }}">
        <img class="mb-4" src="{{ asset('image/icon/linkedin_icn.svg') }}">
        <img src="{{ asset('image/icon/email_icn.svg') }}">
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:my-36 my-16">
  </section>
  @if($moreArticles->count() > 0)
  <section class="container 3xl:max-w-3xl px-4 xl:mb-56 mb-16">
    <h3 class="4xl:text-32px xl:text-2xl md:text-xl text-22px font-bold mb-6">More articles and resources from our Media centre</h3>
    <div class="grid lg:grid-cols-3 gap-x-5 gap-y-16">
      @foreach($moreArticles as $article)
      <div class="text-lg lg:leading-28px leading-24px">
        <img class="lg:w-auto sm:w-3/4" src="{{ Illuminate\Support\Facades\Storage::url($article->hero_image_for_desktop) }}">
        <p class="opacity-50 mt-3">{{ $article->created_at->format("d F Y") }}</p>
        <p class="font-bold mt-1 mb-2">{{ $article->category->name }}</p>
        <a href="{{ route('who-we-are.media-and-resource-centre.post', [$article->category->slug, $article->slug]) }}"
           class="4xl:text-2xl lg:text-xl text-2xl leading-none font-bold text-lochmara mb-2">{{ $article->title }}</a>
        <p class="lg:mt-6 mt-2">{!! $article->getShortPostBody() !!}</p>
      </div>
      @endforeach
    </div>
  </section>
  @endif
@endsection
