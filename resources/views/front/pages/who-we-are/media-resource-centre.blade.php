@extends('layouts.front')

@section('meta')
  <title>News, Resources, Articles, Insights & White Papers</title>
  <meta name="description" content="Stay up to date with Smartway's latest blogs, news, whitepapers, and webinars. Rich and informative content part of our media and resource centre.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/modern-open-space-office-interior-with-blurred-bus-2021-04-05-22-56-05-utc.png') }}">
  <img class="inline-block sm:hidden w-full"
       src="{{ asset('/image/modern-open-space-office-interior-with-blurred-bus-2021-04-05-22-56-05-utc-mobile.png') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-44">
      <span class="block">Media &</span>
      <span class="block">Resource centre</span>
    </h1>
  </div>
@endsection

@section('content')
  <div id="filterModal" class="js-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-black text-white">
      <svg style="fill: white;" class="js-modal-close w-4 h-4 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-12 pb-16 px-5">
        <p class="text-22px font-bold mb-6">Filter by type</p>
        <div>
          @foreach($filters as $filter)
            <div>
              <label
                  class="filter-button-mobile js-filter-button {{ in_array($filter->id, $selectedFilters) ? 'selected' : '' }}"
                  data-name="{{$filter->name}}" data-id="{{$filter->id}}">
                <input class="js-filter-checkbox" type="checkbox" name="filter{{ $filter->id }}"
                       value="{{ $filter->id }}" {{ in_array($filter->id, $selectedFilters) ? 'checked' : '' }}>
                <span>{{ $filter->name }}</span>
              </label>
            </div>
          @endforeach
        </div>
        <div class="flex justify-center text-xl mt-48">
          <button type="button" class="underline mr-9 text-white js-clear-filters cursor-default">Clear all</button>
          <button type="button"
                  class="js-apply-filter-button bg-white text-black px-18px pt-2 pb-10.5px cursor-default">Apply Filters
          </button>
        </div>
      </div>
    </div>
  </div>
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <div class="xl:grid grid-cols-2">
      <div class="xl:mb-0 mb-8">
        <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mb-16 mb-7">News at
          Smartway</p>
        <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 lg:mb-6 mb-2">
          <span class="block">Views from</span>
          <span class="block">Inside Smartway</span>
        </h2>
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-24 pr-10">
          A collection of news, articles, insights, and white papers
        </p>
      </div>
      <div class="bg-persian-green text-center xl:py-6 pt-8 pb-10 px-6">
        <h3 class="quarto-font text-white 4xl:text-82px xl:text-54px lg:text-54px text-40px leading-none">Smartway
          Webinars</h3>
        <p class="text-white font-bold 4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:px-16 px-6 lg:mt-4 mt-1">
            - upcoming webinar soon to be announced
        </p>
        <p class="text-black font-bold 4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:px-16 px-6 lg:mt-4 mt-1">
         In the meantime, read our latest blog
        </p>
        <div class="hidden sm:inline-block text-center mt-8">
          <a href="{{ isset($ourLatestBlogLink) ? $ourLatestBlogLink->value : '' }}"
             class="button mt-6 sm:mt-0 block text-center sm:inline-block 4xl:text-28px lg:text-xl text-2xl font-semibold 4xl:py-5 py-3.5 4xl:px-11 px-8 bg-white rounded-full">
            {{ isset($latestBlogTitle) ? $latestBlogTitle->value : 'See Our Latest Blog' }}</a>
        </div>
        <div class="inline-block sm:hidden text-center mt-3">
          <a href="{{ isset($ourLatestBlogLink) ? $ourLatestBlogLink->value : '' }}"
             class="button mt-0 sm:mt-0 block text-center sm:inline-block 4xl:text-28px lg:text-xl text-sm font-semibold 4xl:py-5 py-3.5 4xl:px-11 px-8 bg-white rounded-full">
            {{ isset($latestBlogTitle) ? $latestBlogTitle->value : 'See Our Latest Blog' }}</a>
        </div>
      </div>
    </div>
    <div class="xl:block hidden">
      <form id="filterForm" class="bg-black text-white px-10 pt-10 pb-6 mt-16 4xl:text-2xl xl:text-xl text-2xl">
        @csrf
        <div class="flex justify-between">
          <div>
            <p class="font-semibold">Filter by type</p>
          </div>
          <div class="flex items-center">
            <button type="button" class="underline js-clear-filters cursor-default">Clear all</button>
          </div>
        </div>
        <div class="flex flex-wrap mt-5 -ml-3">
          @foreach($filters as $filter)
            <label
                class="filter-button-desktop js-filter-button {{ in_array($filter->id, $selectedFilters) ? 'selected' : '' }}"
                data-name="{{$filter->name}}" data-id="{{$filter->id}}">
              <input class="js-filter-checkbox" type="checkbox" name="filter{{ $filter->id }}"
                     value="{{ $filter->id }}" {{ in_array($filter->id, $selectedFilters) ? 'checked' : '' }}>
              <span class="ml-2">{{ $filter->name }}</span>
            </label>
          @endforeach
        </div>
      </form>
    </div>
    <div class="xl:hidden my-12">
      <div class="flex items-center justify-between">
        <p class="font-bold">Filter by type</p>
        <button class="js-modal-open" data-modal="filterModal"><img src="{{ asset('image/icon/filter_icn.svg') }}">
        </button>
      </div>
    </div>
    <div class="grid lg:grid-cols-3 gap-x-5 gap-y-16 lg:mt-20 js-posts">
      @foreach($posts as $post)
        <div class="text-lg lg:leading-28px leading-24px">
          <img class="lg:w-auto sm:w-3/4" src="{{ Illuminate\Support\Facades\Storage::url($post->hero_image_for_desktop) }}">
          <p class="opacity-50 mt-3">{{ $post->created_at->format("d F Y") }}</p>
          <p class="font-bold mt-1 mb-2">{{ $post->category->name }}</p>
          <a href="{{ route('who-we-are.media-and-resource-centre.post', [$post->category->slug, $post->slug]) }}"
             class="4xl:text-2xl lg:text-xl text-2xl leading-none font-bold text-lochmara mb-2">{{ $post->title }}</a>
          <p class="lg:mt-6 mt-2">{!! $post->getShortPostBody() !!}</p>
        </div>
      @endforeach
    </div>
    <div class="text-center lg:mt-40 mt-16 {{ $posts->currentPage() == $posts->lastPage() ? 'hidden' : '' }}">
      <button id="loadMoreButton" data-per-page="{{$posts->perPage()}}" data-page="{{$posts->currentPage() + 1}}"
              class="button lg:text-28px text-2xl font-semibold bg-persian-green text-white rounded-full py-14px lg:py-4 px-14 block sm:inline-block sm:w-auto w-full">
        Load More
      </button>
    </div>
  </section>
  <div class="lg:mt-40 mt-20">
    @include('front.partials.who-we-are-link')
  </div>
@endsection

@push('scripts')
  <script src="{{ mix('js/resource-center.js') }}" defer></script>
@endpush
