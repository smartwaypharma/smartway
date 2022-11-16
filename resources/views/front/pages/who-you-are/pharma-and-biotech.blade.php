@extends('layouts.front')

@section('meta')
  <title>A Trusted Partner to Pharmaceutical and Biotech Companies</title>
  <meta name="description" content="Smartway is a leading source of Scientific and Medical Equipment for Pharmaceutical and Biotech companies. We provide EAP, Comparator supply provider and Distributor to Pharmaceuticals and Biotechs.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1298788278-header.png') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Pharmaceutical_Biotech_companies.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4 sm:mb-0 -mb-3">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-2">
      <span class="block">Pharmaceutical and</span>
      <span class="block">Biotech companies</span></h1>
    <p class="4xl:text-34px sm:text-2xl text-22px font-semibold -mt-1 4xl:leading-44px leading-tight sm:pr-0 pr-4">
      <span class="xl:block">We work with pharma, biotech and device companies</span>
      <span class="xl:block">on a global basis, providing them with specialist services</span>
      <span class="xl:block">across international sourcing
        <span class="sm:inline block">and supply.</span></span>
    </p>
  </div>
@endsection

@section('content')
  @include('front.partials.who-you-are')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-36 sm:mt-20 mt-8">
    <div class="grid lg:grid-cols-2">
      <div>
        <h2 class="quarto-font 4xl:text-64px xl:text-44px text-34px 4xl:leading-70px xl:leading-48px leading-40px lg:mb-14 mb-7 lg:pr-10">
          A global leader in EAP, Comparator supply and Specialist distribution.
        </h2>
        <img class="lg:hidden lg:w-auto sm:w-3/4 mb-7" src="{{ asset('image/iStock-1124534777.png') }}">
        <p class="4xl:text-32px xl:text-21px lg:text-2xl text-lg 4xl:leading-45px xl:leading-28px leading-24px 4xl:pr-16 xl:pr-32 pr-4">
          Global networks and global regulatory knowledge is what Smartway is about. We work with you to design the
          optimal program or supply strategy for your business.
        </p>
      </div>
      <div class="lg:block hidden">
        <img class="ml-auto mr-0" src="{{ asset('image/iStock-1124534777.png') }}">
      </div>
    </div>
    <h3 class="quarto-font 4xl:text-45px lg:text-31px text-34px 4xl:leading-45px lg:leading-34px leading-40px lg:mt-24 mt-6">
      We use our Regulatory knowledge and global networks to deliver <span class="sm:inline hidden">you</span> the programs and products that you need.
    </h3>
    <hr class="h-0.5 bg-black lg:my-40 mt-16 mb-10">
  </section>
  <section class="lg:hidden relative pb-5 mb-28">
    <div class="blocks-slider text-white">
      <div class="glide__track" data-glide-el="track">
        <div class="glide__slides">
          <a href="{{ route('how-we-help.eap.index') }}" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/who-you-are-Early_Access_Programs.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Early Access Programs</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We partner with</span>
              <span class="block">manufacturers to design</span>
              <span class="block">and manage global Early</span>
              <span class="block">Access, Expanded</span>
              <span class="block">Access, Named Patient</span>
              <span class="block">and Compassionate</span>
              <span class="block">Use Programs.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.cts.index') }}" class="image-box relative block">
            <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Comparator_RLD_Supply.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Comparator/RLD Supply</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
              <span class="block">We regularly supply</span>
              <span class="block">CROs, CDMOs and</span>
              <span class="block">manufacturers with</span>
              <span class="block">comparators, RLDs,</span>
              <span class="block">samples and biosimilar</span>
              <span class="block">samples.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.distribution.index') }}" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/who-you-are-Specialist_Distribution.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Specialist Distribution</p>
            <div
                class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We work in focused,</span>
              <span class="block">niche areas of</span>
              <span class="block">pharmaceutical</span>
              <span class="block">distribution:</span>
              <ul class="list-decimal text-xl 4xl:mt-6 ml-5">
                <li><span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">Specialist UK distribution</span></li>
                <li class="4xl:my-2"><span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">Direct to patient delivery</span></li>
                <li class="4xl:my-2">
                  <span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">Global distribution to</span>
                  <span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">unregistered countries</span>
                </li>
                <li class="4xl:my-2"><span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">CBD medicinal products</span></li>
                <li><span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">Orphan drug distribution</span></li>
              </ul>
            </div>
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
      <a href="{{ route('how-we-help.eap.index') }}" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/who-you-are-Early_Access_Programs.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Early Access Programs</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
          We partner with manufacturers to design and manage global Early Access, Expanded Access, Named Patient and
          Compassionate Use Programs.
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.cts.index') }}" class="image-box relative block">
        <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Comparator_RLD_Supply.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Comparator/RLD Supply</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          We regularly supply CROs, CDMOs and manufacturers with comparators, RLDs, samples and biosimilar samples.
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.distribution.index') }}" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/who-you-are-Specialist_Distribution.jpg')}});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Specialist Distribution</p>
        <div
            class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
          We work in focused, niche areas of pharmaceutical distribution:
          <ul class="list-decimal text-xl 4xl:mt-6 ml-5">
            <li><span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">Specialist UK distribution</span></li>
            <li class="4xl:my-2"><span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">Direct to patient delivery</span></li>
            <li class="4xl:my-2">
              <span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">Global distribution to</span>
              <span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">unregistered countries</span>
            </li>
            <li class="4xl:my-2"><span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">CBD medicinal products</span></li>
            <li><span class="block 3xl:text-32px  xl:text-22px lg:text-2xl md:text-31px text-xl leading-36px ml-4">Orphan drug distribution</span></li>
          </ul>
        </div>
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
