@extends('layouts.front')

@section('meta')
  <title>{{ $post->metaTitle }}</title>
  <meta name="description" content="{{ $post->metaDescription }}">
  <meta name="keywords" content="{{ $post->metaKeyword }}">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ Illuminate\Support\Facades\Storage::url($post->hero_image_for_desktop) }}" alt="Smartway Pharmaceuticals - SmartNote" title="Smartway Pharmaceuticals - SmartNote">
  <img class="inline-block sm:hidden w-full"
       src="{{ Illuminate\Support\Facades\Storage::url($post->hero_image_for_mobile) }}" alt="Smartway Pharmaceuticals - SmartNote" title="Smartway Pharmaceuticals - SmartNote">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4 sm:mb-0 mb-44">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px font-medium -tracking-0.55px leading-none xl:w-1/2">
      SmartNote{{-- {{ $post->title }}--}}
    </h1>
    {{--<p class="4xl:text-34px sm:text-2xl text-22px font-semibold">SmartNote</p>--}}
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-8"
       href="{{ route('who-we-are.media-and-resource-centre.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Back</a>
    <p class="opacity-50 text-lg">{{ $post->created_at->format("jS F Y") }}</p>
    <p class="text-lg font-bold lg:mt-1 mt-2 lg:mb-6 mb-1">SmartNote</p>
    <p class="4xl:text-34px sm:text-2xl text-22px font-bold">Introduction</p>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px lg:mt-5 mt-6 lg:pr-0 pr-10">
      {{ $post->title }}</h2>
  </section>
  <section class="container 3xl:max-w-3xl px-4 xl:mt-36">
    {{--<div class="xl:hidden flex mt-8 mb-9">
      <img class="mr-5" src="{{ asset('image/icon/fb_icn.svg') }}">
      <img class="mr-5" src="{{ asset('image/icon/twitter_icn.svg') }}">
      <img class="mr-5" src="{{ asset('image/icon/linkedin_icn.svg') }}">
      <img src="{{ asset('image/icon/email_icn.svg') }}">
    </div>--}}
    <div class="xl:flex">
      <div class="text-center">
        <a href="{{ route('connect-with-us') }}"
           class="button text-white mt-6 sm:mt-0 block text-center sm:inline-block 4xl:text-28px lg:text-xl text-2xl font-semibold 4xl:py-5 py-3.5 4xl:px-11 px-8 bg-persian-green rounded-full"">Get
        in touch</a>
      </div>
      <div class="2xl:max-w-6xl xl:max-w-4xl 2xl:pl-40 xl:pl-20">
        <img class="xl:-ml-16 xl:mr-0 mx-auto xl:mt-0 mt-10 xl:w-full sm:w-2/3"
             src="{{ asset('image/SmartNote_logo.svg') }}" alt="Smartway Pharmaceuticals Logo" title="Smartway Pharmaceuticals Logo">
        <div class="post-content mt-16">
          {!! $post->post_body !!}
        </div>
        <div class="xl:flex xl:my-20 my-16">
          <div class="xl:block hidden mr-3">
            <img class="w-67px" src="{{ asset('image/pdf.svg') }}">
          </div>
          <div class="4xl:text-32px sm:text-2xl text-22px font-bold xl:text-left text-center">
            <p class="2xl:mt-1 2xl:mb-3 my-1">DOWNLOAD THIS SmartNote</p>
            <img class="xl:hidden w-67px mx-auto my-3" src="{{ asset('image/pdf.svg') }}">
            <p id="downloadButton" class="xl:leading-none leading-tight xl:px-0 px-4 cursor-pointer">{{ $post->title }} - SmartNote</p>
          </div>
        </div>
        <div class="post-content">
          {!! $post->text_under_pdf !!}
        </div>
        <div class="grid lg:grid-cols-2 gap-4 gap-y-16 lg:mt-16 mt-20 xl:pr-10">
          <div>
            @if ($post->first_team_member_image)   
              <img src="{{ Illuminate\Support\Facades\Storage::url($post->first_team_member_image) }}">
            @endif
            @if ($post->first_team_member_name)  
              <p class="text-21px font-bold text-lochmara lg:mt-2 mt-3">{{ $post->first_team_member_name }}</p>
            @endif
            @if ($post->first_team_member_position)
              <p class="text-xl font-bold xl:mt-0 mt-1">{{ $post->first_team_member_position }}</p>
            @endif
            @if ($post->first_team_member_text)    
              <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:mt-11 mt-6 xl:pr-14 pr-3">
                {{ $post->first_team_member_text }}
              </p>
            @endif
          </div>
          <div>
              @if ($post->second_team_member_image)    
                <img src="{{ Illuminate\Support\Facades\Storage::url($post->second_team_member_image) }}">
              @endif
              @if ($post->second_team_member_name)
                <p class="text-21px font-bold text-lochmara lg:mt-2 mt-3">{{ $post->second_team_member_name }}</p>
              @endif
              @if ($post->second_team_member_position)
                <p class="text-xl font-bold xl:mt-0 mt-1">{{ $post->second_team_member_position }}</p>
              @endif
              @if ($post->second_team_member_text)    
                <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:mt-11 mt-6 xl:pr-11 xl:pr-14 pr-3">
                  {{ $post->second_team_member_text }}
                </p>
              @endif
          </div>
        </div>
      </div>
      {{--<div class="xl:block hidden ml-auto mr-0">
        <img class="mb-4" src="{{ asset('image/icon/fb_icn.svg') }}">
        <img class="mb-4" src="{{ asset('image/icon/twitter_icn.svg') }}">
        <img class="mb-4" src="{{ asset('image/icon/linkedin_icn.svg') }}">
        <img src="{{ asset('image/icon/email_icn.svg') }}">
      </div>--}}
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
  <div class="js-modal fixed z-999999 inset-0 overflow-y-auto hidden" id="formModal" aria-labelledby="modal-title" role="dialog"
       aria-modal="true">
    <div class="flex lg:items-end items-start justify-center min-h-screen lg:pt-4 lg:px-5 lg:pb-20 text-center lg:h-auto h-full">
      <div class="fixed inset-0"
           style="background: rgba(0, 173, 164, 0.44); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); filter: brightness(1);"
           aria-hidden="true"></div>
      <div
          class="inline-block bg-white lg:rounded-3xl text-left overflow-hidden shadow-xl transform transition-all lg::mb-8 lg:mt-12 sm:max-w-1120px w-full lg:h-auto h-full overflow-y-scroll max-h-100vh">
        <svg style="fill: black;"
             class="js-modal-close w-4 h-4 absolute lg:top-5 top-3 lg:right-5 right-4 cursor-pointer z-10"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
        </svg>
        <div class="text-center lg:py-20 py-9 lg:px-28 px-4">
          <img class="w-auto mx-auto lg:px-5 px-10" src="{{ asset('image/Main_Logo_black.svg') }}" alt="Smartway Pharmaceuticals logo" title="Smartway Pharmaceuticals logo">
          <p class="quarto-font xl:text-44px text-34px xl:leading-48px leading-40px lg:my-4 mt-6 mb-2 sm:mx-0 -mx-4">In order to access this content, please fill
            out the form below and we’ll email this SmartNote to you.</p>
          <p class="lg:text-22px lg:leading-37px text-lg leading-24px">Smartway will never share your email address without your permission.</p>
          <form id="smartnoteForm" class="max-w-xl mx-auto lg:mt-12 mt-2 lg:px-4" method="post" action="{{ route('smartnote.download') }}">
            @csrf
            <input name="post_id" value="{{$post->id}}" hidden>
            <div class="w-full mb-11">
              <input
                  name="firstname"
                  type="text"
                  class="w-full appearance-none outline-none py-4 border-b border-black lg:text-xl text-lg font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                  placeholder="First name*"
              />
              <p class="js-errors js-error-firstname font-semibold lg:text-xl text-lg leading-22px text-right text-red-600"></p>
            </div>
            <div class="w-full mb-11">
              <input
                  name="lastname"
                  type="text"
                  class="w-full appearance-none outline-none py-4 border-b border-black lg:text-xl text-lg font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                  placeholder="Last name*"
              />
              <p class="js-errors js-error-lastname font-semibold lg:text-xl text-lg leading-22px text-right text-red-600"></p>
            </div>
            <div class="w-full mb-11">
              <input
                  name="email"
                  type="text"
                  class="w-full appearance-none outline-none py-4 border-b border-black lg:text-xl text-lg font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                  placeholder="Business Email*"
              />
              <p class="js-errors js-error-email font-semibold lg:text-xl text-lg leading-22px text-right text-red-600"></p>
            </div>
            <div class="w-full mb-11">
              <input
                  name="company"
                  type="text"
                  class="w-full appearance-none outline-none py-4 border-b border-black lg:text-xl text-lg font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                  placeholder="Company"
              />
            </div>
            <div class="w-full mb-11">
                <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
            </div>
            <button id="smartnoteSubmit" class="button w-full lg:mt-4 lg:text-28px text-2xl font-semibold bg-persian-green text-white rounded-full py-3"
                    type="submit">
              Submit
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="js-modal fixed z-999999 inset-0 overflow-y-auto hidden" id="messageModal" aria-labelledby="modal-title" role="dialog"
       aria-modal="true">
    <div class="flex lg:items-end items-start justify-center min-h-screen lg:pt-4 lg:px-5 lg:pb-20 text-center lg:h-auto h-full">
      <div class="fixed inset-0"
           style="background: rgba(0, 173, 164, 0.44); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); filter: brightness(1);"
           aria-hidden="true"></div>
      <div
          class="inline-block bg-white lg:rounded-3xl text-left overflow-hidden shadow-xl transform transition-all lg:mb-8 lg:mt-12 lg:max-w-1120px lg:h-auto w-full h-full">
        <svg style="fill: black;"
             class="js-modal-close w-4 h-4 absolute lg:top-5 top-3 lg:right-5 right-4 cursor-pointer z-10"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
        </svg>
        <div class="text-center lg:py-20 py-10 lg:px-24 px-4">
          <img class="w-auto mx-auto lg:px-5 px-10" src="{{ asset('image/Main_Logo_black.svg') }}" alt="Smartway Pharmaceuticals logo" title="Smartway Pharmaceuticals logo">
          <p class="quarto-font xl:text-64px xl:leading-70px sm:text-54px sm:leading-53px text-34px leading-41px mt-5 lg:mb-3 mb-1">
            Thank you!</p>
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-6 mb-8 lg:px-16 px-2 max-w-810px mx-auto">You will receive an email from us in the next few minutes, with the
              attached SmartNotes, in a PDF format.</p>
            <p class="lg:px-0 px-4">If you haven’t received this email, please contact us at <a class="text-persian-green"
                                                                           href="mailto:EAP@Smartwaypharma.com">EAP@Smartwaypharma.com</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ mix('js/smartnote.js') }}" defer></script>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endpush
