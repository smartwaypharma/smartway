@extends('layouts.front')

@section('meta')
  <title>Who you are - Aid & Development</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/hero-aid-dev.jpg') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/who_you_are_Aid_Development.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px mb-2">
      Aid & Development
    </h1>
    <p class="4xl:text-34px sm:text-2xl text-22px font-semibold -mt-1 4xl:leading-44px leading-tight">
      <span class="xl:block">We work with NGOs, charities, governments</span>
      <span class="xl:block">and multi-lateral organizations on a global basis, supplying</span>
      <span class="xl:block">them with medicines and medical supplies.</span>
    </p>
  </div>
@endsection

@section('content')
  @include('front.partials.who-you-are')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-36 sm:mt-20 mt-8">
    <div class="grid lg:grid-cols-2">
      <div>
        <h2 class="quarto-font 4xl:text-64px xl:text-44px text-34px 4xl:leading-70px xl:leading-48px leading-40px lg:mb-14 mb-7 4xl:pr-0 xl:pr-16 pr-0">
          Helping you transform lives by empowering access to medicines.
        </h2>
        <img class="lg:hidden lg:w-auto sm:w-3/4 mb-7" src="{{ asset('image/transform_lives.jpg') }}">
        <p class="4xl:text-32px xl:text-21px lg:text-2xl text-lg 4xl:leading-45px xl:leading-28px leading-24px 4xl:-mr-4 xl:pr-28 pr-4">
          With 20 years in Aid Dev, our knowledge, procurement, and distribution networks are unrivalled. We’ll work
          with you to source and deliver pharmaceuticals, medical disposables, medical equipment, and hospital and
          doctor’s furniture.
        </p>
      </div>
      <div class="lg:block hidden">
        <img class="ml-auto mr-0" src="{{ asset('image/transform_lives.jpg') }}">
      </div>
    </div>
    <h3 class="quarto-font 4xl:text-45px lg:text-31px text-34px 4xl:leading-45px lg:leading-34px leading-40px lg:mt-24 mt-6">
      We’ll use our regulatory knowledge and global networks to deliver the products that you need.
    </h3>
    <hr class="h-0.5 bg-black lg:my-40 mt-16 mb-10">
  </section>
  <section class="lg:hidden relative pb-5 mb-28">
    <div class="blocks-slider text-white">
      <div class="glide__track" data-glide-el="track">
        <div class="glide__slides">
          <a href="{{ route('how-we-help.aid-dev.index') }}" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full"
                   style="background-image: url({{ asset('image/Pharmaceuticals_Disposables.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title two-lines 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">
              <span class="block">Pharmaceuticals &</span>
              <span class="block">Medical Disposables</span>
            </p>
            <p class="text top-7.5 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We supply WHO-</span>
              <span class="block">approved branded and</span>
              <span class="block">generic pharmaceuticals</span>
              <span class="block">and medical disposables</span>
              <span class="block">to over 98 countries.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.aid-dev.index') }}" class="image-box relative block">
            <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full"
                   style="background-image: url({{ asset('image/Medical_Devices.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title two-lines 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">
              <span class="block">Medical Equipment</span>
              <span class="block">& Devices</span>
            </p>
            <p class="text top-7.5 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We can manage global</span>
              <span class="block">supply and delivery of</span>
              <span class="block">equipment and devices</span>
              <span class="block">suitable for use in</span>
              <span class="block">Aid Dev.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.aid-dev.index') }}#kitting" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full"
                   style="background-image: url({{ asset('image/Specialist_Kitting.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Specialist Kitting</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">Including interagency</span>
              <span class="block">emergency health kits,</span>
              <span class="block">emergency reproductive</span>
              <span class="block">health kits, and tailored</span>
              <span class="block">medical/ emergency kits.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="lg:block hidden container 3xl:max-w-3xl px-4 mb-40">
    <div class="grid xl:grid-cols-3 grid-cols-2 gap-5 flex text-white">
      <a href="{{ route('how-we-help.aid-dev.index') }}" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full"
               style="background-image: url({{ asset('image/Pharmaceuticals_Disposables.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title two-lines 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">
          <span class="block">Pharmaceuticals &</span>
          <span class="block">Medical Disposables</span>
        </p>
        <p class="text top-7.5 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">We supply WHO-approved branded</span>
          <span class="block">and generic pharmaceuticals and</span>
          <span class="block">medical disposables to over</span>
          <span class="block">98 countries.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.aid-dev.index') }}" class="image-box relative block">
        <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full"
               style="background-image: url({{ asset('image/Medical_Devices.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title two-lines 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">
          <span class="block">Medical Equipment</span>
          <span class="block">& Devices</span>
        </p>
        <p class="text top-7.5 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">We can manage global supply and</span>
          <span class="block">delivery of equipment and devices</span>
          <span class="block">suitable for use in Aid Dev.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.aid-dev.index') }}#kitting" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full"
               style="background-image: url({{ asset('image/Specialist_Kitting.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Specialist Kitting</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">Including interagency emergency</span>
          <span class="block">health kits, emergency reproductive</span>
          <span class="block">health kits, and tailored medical/</span>
          <span class="block">emergency kits.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ mix('js/animate-blocks.js') }}" defer></script>
@endpush
