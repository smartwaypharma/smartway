@extends('layouts.front')

@section('meta')
  <title>Supplying Comparators, RLDs and Biosimilars Worldwide </title>
  <meta name="description" content="Smartway is a full-service comparator, RLD, and biosimilar supplier. We supply reliable custom-made products for medical research, clinical trials and commercialization.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/hero-cts.jpg') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Comparator_RLD_Supply.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-6 sm:mb-0">
      <span class="block">Comparator/</span>
      <span class="block">RLD Supply</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-40 mt-20">
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      Smartway partners with manufacturers, CROs and CDMOs to supply
      <span class="block sm:inline">comparators,</span>
      <span class="block sm:inline">RLDs and</span>
      <span class="block sm:inline">biosimilars on a</span>
      <span class="block sm:inline">global scale.</span>
    </h2>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="lg:mb-9 mb-5 4xl:pr-20 pr-1">
        With our global supply chain built up over 30 years, we have unrivalled access to pharmaceuticals – both direct
        from manufacturers and from our global supply chain across 98 countries.
      </p>
      <p class="lg:mb-9 mb-5">
        We distribute globally using our
        strategic hubs in the EU, UK, UAE and India to ensure rapid, secure delivery.
      </p>
      <p class="lg:mb-6 4xl:pr-24 pr-4">
        With our knowledge of the
        pharmaceutical supply chain and distribution, we’ll manage the entire process so your trials can progress
        without delay to manage the entire process so your trials can progress with no delays.
      </p>
      <p class="lg:block hidden font-bold">
        We’re dedicated to empowering access to medicines.
      </p>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 mt-16 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold text-center">Why partner with Smartway?</p>
    <div class="xl:grid hidden grid-cols-5 gap-6 lg:mt-16 mt-7 4xl:text-22px text-lg pb-4 xl:px-0 px-6">
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-2">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/cts-icn1.svg') }}"/>
        <p class="font-bold leading-tight mb-3">
          <span class="block">Global supply</span>
          <span class="block">chain capability</span>
        </p>
        <p>
          <span class="4xl:block">End-to-end supply</span>
          <span class="4xl:block">chain management.</span>
          <span class="4xl:block">98 countries distributed to.</span>
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/cts-icn2.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Extensive product range
        </p>
        <p>
          Widest range of product availability.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
             src="{{ asset('image/cts-icn3.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Manufacturer relationship
        </p>
        <p>
          Long term direct relationships.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/cts-icn4.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Project management
        </p>
        <p class="px-4">
          Designated account managers with specialist expertise.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/cts-icn5.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Global procurement
        </p>
        <p class="px-6">
          25 countries. Approved and audited supplier network.
        </p>
      </div>
    </div>
    <div class="xl:hidden lg:mt-16 mt-7 4xl:text-22px text-lg xl:px-0 px-4">
      <div class="why-partner-slider">
        <div class="glide__track" data-glide-el="track">
          <div class="glide__slides">
            <div
                class="glide__slide my-2 bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-2 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/cts-icn1.svg') }}"/>
              <p class="font-bold leading-tight mb-3">
                <span class="block">Global supply</span>
                <span class="block">chain capability</span>
              </p>
              <p>
                <span class="4xl:block">End-to-end supply</span>
                <span class="4xl:block">chain management.</span>
                <span class="4xl:block">98 countries distributed to.</span>
              </p>
            </div>
            <div
                class="glide__slide my-2 bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/cts-icn2.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Extensive product range
              </p>
              <p>
                Widest range of product availability.
              </p>
            </div>
            <div class="glide__slide my-2 bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/cts-icn3.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Manufacturer relationship
              </p>
              <p>
                Long term direct relationships.
              </p>
            </div>
            <div
                class="glide__slide my-2 bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/cts-icn4.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Project management
              </p>
              <p class="px-4">
                Designated account managers with specialist expertise.
              </p>
            </div>
            <div class="glide__slide my-2 bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-4">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/cts-icn5.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Global procurement
              </p>
              <p class="px-6">
                25 countries. Approved and audited supplier network.
              </p>
            </div>
          </div>

          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
            <button class="glide__bullet" data-glide-dir="=4"></button>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center lg:mt-20 mt-16">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">How
        can we help?</a>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4 lg:mb-40 mb-20">
    <div class="grid xl:grid-cols-2 grid-cols-1 lg:gap-y-40 gap-y-20">
      <div class="xl:pr-10">
        <a href="{{ route('how-we-help.cts.global-procurement-network-comparator-rld-supply') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Global Procurement Network - Comparator,
          <span class="block sm:inline-block">RLD, Supply</span>
        </a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Global_Procurement.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="lg:mb-9 mb-5 xl:pr-0 pr-4">
            Smartway has become known for reliable, consistent supplies of comparators, RLDs and biosimilars.
          </p>
          <p class="xl:pr-0 pr-4">
            We have an unrivalled supply network from major pharmaceutical manufacturers and distributors across 25
            countries.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.cts.global-procurement-network-comparator-rld-supply') }}"><img
              class="inline mr-4"
              src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/Global_Procurement.jpg') }}">
      </div>

      <div class="xl:flex hidden items-center">
        <img src="{{ asset('image/Global_Supply.jpg') }}">
      </div>
      <div class="xl:pl-24 xl:pr-9">
        <a href="{{ route('how-we-help.cts.global-supply-chain-capability') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">
          <span class="block">Global Supply</span>
          <span class="block">Chain Capability</span>
        </a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Global_Supply.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="lg:mb-9 mb-5">
            Smartway supplies pharmaceuticals to over 98 countries across the globe. In the last 5 years, we’ve shipped
            5 million packs of medication worldwide.
          </p>
          <p>
            We use our fully owned and controlled strategic supply hubs in the
            EU, UK, UAE and India to provide quick, accurate supply, everywhere.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.cts.global-supply-chain-capability') }}">
          <img class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>

      <div class="xl:pr-24">
        <a href="{{ route('how-we-help.cts.project-management') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none sm:mr-0 -mr-4 block">
          Project Management</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/team-of-executives-in-the-meeting-at-office-BVMD7KT.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p>
            At Smartway, we combine deep CTS knowledge with regulatory and pharmaceutical expertise. Your dedicated
            project managers will lead your program from concept to fruition, bringing in expertise from all Smartway
            functions. With fully operational hubs across the world and a single global management system, you can be
            sure of 24-7, seamless procurement and delivery of your supplies.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.cts.project-management') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/team-of-executives-in-the-meeting-at-office-BVMD7KT.png') }}">
      </div>

      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-1156054183.png') }}">
      </div>
      <div class="xl:pl-24 xl:pr-4">
        <a href="{{ route('who-we-are.media-and-resource-centre.index') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Resource Centre</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-1156054183.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p>
            Our team regularly provide updates and briefings on relevant topics including regulatory and market updates.
            We also run expert webinars and interactive training. For the latest news and articles please visit our
            resource centre.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('who-we-are.media-and-resource-centre.index') }}">
          <img class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ mix('js/why-partner-slider.js') }}" defer></script>
@endpush
