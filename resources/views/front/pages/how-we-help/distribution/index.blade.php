@extends('layouts.front')

@section('meta')
  <title>How we help - Distribution</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/hero-spec-distr.jpg') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Reliable_Supply_mobile_hero.jpeg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-2">
      Specialist Distribution</h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-40 sm:mt-20 mt-8">
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px">
      Smartway is a specialist distributor working in defined areas of pharmaceutical distribution. Using our
      experience, knowledge and network, we’ve become global leaders in:
    </h2>
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 lg:mt-36 mt-16 lg:mb-40 mb-10">
      <div>
        <img class="lg:hidden sm:w-3/4 mb-10" src="{{ asset('image/distribution.jpg') }}">
        <ul class="4xl:text-32px text-xl font-semibold lg:-tracking-0.8px -tracking-0.5px">
          <li class="flex lg:items-center items-baseline">
            <div class="text-lg bg-persian-green text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">
              1
            </div>
            <span class="lg:w-full w-11/12">Specialist UK distribution</span>
          </li>
          <li class="flex lg:items-center items-baseline lg:my-11 my-5">
            <div class="text-lg bg-persian-green text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">
              2
            </div>
            <span class="lg:w-full w-11/12">Direct to patient delivery</span>
          </li>
          <li class="flex lg:items-center items-baseline lg:my-11 my-5">
            <div class="text-lg bg-persian-green text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">
              3
            </div>
            <span class="lg:w-full w-11/12">Global distribution to non-commercialized countries</span>
          </li>
          <li class="flex lg:items-center items-baseline lg:my-11 my-5">
            <div class="text-lg bg-persian-green text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">
              4
            </div>
            <span class="lg:w-full w-11/12 lg:pr-0 pr-20">Cannabis based medicinal products</span>
          </li>
          <li class="flex lg:items-center items-baseline lg:my-11 my-5">
            <div class="text-lg bg-persian-green text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">
              5
            </div>
            <span class="lg:w-full w-11/12">Orphan drug distribution</span>
          </li>
          <li class="flex lg:items-center items-baseline lg:mt-11 mt-0">
            <div class="text-lg bg-persian-green text-white w-8 h-8 rounded-full flex items-center justify-center mr-3">
              6
            </div>
            <span class="lg:w-full w-11/12 lg:pr-0 pr-20">Pre-approval or Early Access Programs</span>
          </li>
        </ul>
        <a href="{{ route('how-we-help.eap.index') }}"
           class="text-22px font-semibold -tracking-0.5px text-lochmara block lg:mt-4 mt-0 ml-10">(click here for more
          info)</a>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/distribution.jpg') }}">
      </div>
    </div>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-7">End-to-end solutions</h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-20">
      We provide end to end solutions for pharmaceutical and biotech, medical device, and diagnostic companies,
      delivering customized,
      <span class="sm:inline block">focussed distribution.</span>
    </p>
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold text-center">Why partner with Smartway?</p>
    <div class="xl:grid hidden grid-cols-5 gap-6 lg:mt-16 mt-7 4xl:text-22px text-lg pb-4 xl:px-0 px-6">
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/d-icn1.svg') }}"/>
        <p class="font-bold leading-tight mb-3">
          <span class="block">Global distribution/</span>
          <span class="block">hub network</span>
        </p>
        <p>
          Regular deliveries to over 98 countries.
        </p>
        <p>
          Own hubs in EU, UK, UAE, India.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
             src="{{ asset('image/d-icn2.svg') }}"/>
        <p class="font-bold leading-tight mb-3">
          <span class="block">Real time ordering</span>
          <span class="block">and monitoring</span>
        </p>
        <p>
          Supporting Medicines Access in Real Time with SMARTHub, our best in class, real time ordering and RWD
          collection portal.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/d-icn3.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Regulatory expertise
        </p>
        <p>
          <span class="block">Regulatory experts</span>
          <span class="block">in distribution</span>
          <span class="block">leaders in technology</span>
          <span class="block">to drive quality.</span>
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/d-icn4.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Approved supplier
        </p>
        <p class="mb-7 px-4">
          100% coverage of UK & Irish market.
        </p>
        <p>
          Approved NHS supplier.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-2">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/d-icn5.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Proven experienced team
        </p>
        <p class="px-6">
          A proven team with deep experience across therapy areas and regulatory jurisdictions.
        </p>
      </div>
    </div>
    <div class="xl:hidden lg:mt-16 mt-7 4xl:text-22px text-lg xl:px-0 px-4">
      <div class="why-partner-slider">
        <div class="glide__track" data-glide-el="track">
          <div class="glide__slides">
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-6 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/d-icn1.svg') }}"/>
              <p class="font-bold leading-tight mb-3">
                <span class="block">Global distribution/</span>
                <span class="block">hub network</span>
              </p>
              <p>
                Regular deliveries to over 98 countries.
              </p>
              <p>
                Own hubs in EU, UK, UAE, India.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/d-icn2.svg') }}"/>
              <p class="font-bold leading-tight mb-3">
                <span class="block">Real time ordering</span>
                <span class="block">and monitoring</span>
              </p>
              <p>
                Supporting Medicines Access in Real Time with SMARTHub, our best in class, real time ordering and RWD
                collection portal.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/d-icn3.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Regulatory expertise
              </p>
              <p>
                <span class="block">Regulatory experts</span>
                <span class="block">in distribution</span>
                <span class="block">leaders in technology</span>
                <span class="block">to drive quality.</span>
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-6 min-w-308px">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/d-icn4.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Approved supplier
              </p>
              <p class="mb-7 px-4">
                100% coverage of UK & Irish market.
              </p>
              <p>
                Approved NHS supplier.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-2 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/d-icn5.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Proven experienced team
              </p>
              <p class="px-6">
                A proven team with deep experience across therapy areas and regulatory jurisdictions.
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
    <div class="text-center mt-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">How
        can we help?</a>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4 lg:mb-40 mb-20">
    <div class="grid xl:grid-cols-2 grid-cols-1 lg:gap-y-40 gap-y-20">
      <div class="xl:pr-14">
        <a href="{{ route('how-we-help.distribution.global-supply-chain-capability') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Global Supply Chain Capability</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Global_Supply.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 lg:mb-20 mb-7">
          <p class="mb-9 xl:pr-8">
            We’ve built our UK and global network specifically for specialist distribution. Smartway is an audited,
            approved supplier to the NHS and supplies products to all UK NHS Trusts.
          </p>
          <p class="xl:pr-8">
            We use our fully owned and
            controlled strategic supply hubs in the EU, UK, UAE and India to provide quick, accurate supply to approved
            users across the world.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.distribution.global-supply-chain-capability') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read
          more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/Global_Supply.jpg') }}">
      </div>

      <div class="xl:flex hidden items-center">
        <img src="{{ asset('image/UK_Ireland.jpg') }}">
      </div>
      <div class="xl:pl-24 xl:pr-8">
        <a href="{{ route('how-we-help.distribution.uk-network') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Our UK & Ireland Network</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/UK_Ireland.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 mb-20">
          <p class="mb-9">
            Smartway is a trusted supplier to the NHS, private hospitals, pharmacy chains, and independent pharmacies
            throughout the UK & Ireland.
          </p>
          <p class="xl:pr-8">
            We’ve successfully partnered with manufacturers from across the world,
            providing them with distribution and order to cash services.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.distribution.uk-network') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read
          more</a>
      </div>

      <div class="xl:pr-20">
        <a href="{{ route('how-we-help.distribution.end-to-end-service') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">End-to-End Service</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/End-to-End.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 lg:mb-20 mb-7">
          <p class="mb-9 xl:pr-4">
            Smartway can provide you with end-to-end services from international supply chain, importation through 3PL,
            and order to cash services.
          </p>
          <p class="xl:pr-4">
            With fully operational hubs across the world and a single global management
            system (SMARThub®) you can be sure of seamless experience at every stage.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.distribution.end-to-end-service') }}"><img class="inline mr-4"
                                                                                   src="{{ asset('image/icon/icn.svg') }}">Read
          more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{asset('image/End-to-End.jpg')}}">
      </div>

      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/Stakeholder_Support.jpg') }}">
      </div>
      <div class="xl:pl-24 xl:pr-12">
        <a href="{{ route('how-we-help.distribution.stakeholder-support') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Stakeholder Support</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Stakeholder_Support.jpg') }}">
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 lg:mb-20 mb-7">
          We unapologetically put the patient at the heart of every program. We understand your objectives and deliver
          on them, but we never lose sight of the patient and the impact these programs can have on them and their
          families.
        </p>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.distribution.stakeholder-support') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read
          more</a>
      </div>

      <div class="xl:pr-28">
        <a href="{{ route('who-we-are.media-and-resource-centre.index') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Resource Centre</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-1156054183.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-6 lg:mb-16 mb-7">
          <p>
            Our team regularly provide updates and briefings on relevant topics including regulatory and market updates.
            We also run expert webinars and interactive training. For the latest news and articles please visit our
            resource centre.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('who-we-are.media-and-resource-centre.index') }}"><img class="inline mr-4"
                                                                                 src="{{ asset('image/icon/icn.svg') }}">Explore
          more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-1156054183.png') }}">
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ mix('js/why-partner-slider.js') }}" defer></script>
@endpush
