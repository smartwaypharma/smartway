@extends('layouts.front')

@section('meta')
  <title>How we help - Distribution - Global Supply Chain capability</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/d-gscc-hero.jpg') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/Specialist_Distribution.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-6">
      <span class="xl:block">Global Supply</span>
      <span class="xl:block">Chain Capability</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.distribution.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px lg:mb-12 mb-6 4xl:pr-24 sm:tracking-normal -tracking-0.7px sm:mr-0 -mr-4">
      We’ve built our UK and global network specifically for specialist distribution. Smartway is an audited, approved
      supplier to the NHS and supplies products to all UK NHS Trusts.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-32">
      We use our fully owned and controlled strategic supply hubs in the EU, UK, UAE and India to provide quick,
      accurate supply to approved users across
      <span class="sm:inline block">the world.</span>
    </p>
    <hr class="h-0.5 bg-black lg:mt-36 lg:mb-40 my-16">
    <div class="lg:grid grid-cols-2 mb-9">
      <div class="lg:pr-20">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">Our global network</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/global_network.jpg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-10 mb-6 lg:pr-20">
              Smartway distributes therapies to over 98 countries across the globe. In the last 5 years, we’ve shipped 5
              million packs of medication worldwide.
            </p>
            <p class="lg:pr-10 pr-2">
              Our fully licenced, high quality pharmaceutical warehousing is
              equipped to handle all types of pharmaceuticals, temperature ranges and medical devices. With in-house
              relabelling capability, we can also meet small scale over-labelling projects, quickly and effectively.
            </p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/global_network.jpg') }}">
      </div>
    </div>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      We handle the entire supply chain, monitoring shipments 24-7 from our supply chain control tower. We constantly
      monitor security and integrity, including temperature, humidity and GPS location. We also manage the entire import
      and customs clearance process.
    </p>
    <div class="lg:grid grid-cols-2 lg:mt-32 mt-16 lg:mb-28 mb-16">
      <div class="lg:block hidden">
        <img src="{{ asset('image/SMARThub Special Distribution.svg') }}">
      </div>
      <div class="flex items-center">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">Our strategic supply
            hubs</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/SMARThub Special Distribution.svg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-10 mb-6 lg:pr-20">
              We have our own physical hubs, all working to our global standards and processes.
            </p>
            <p class="lg:pr-10 pr-4">
              These hubs are all
              linked to SMARThub® - Supporting Medicines Access in Real Time Hub, our EAP management system, and our
              global Quality system, creating consistency in our operations everywhere.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="lg:grid grid-cols-2 gap-5 lg:mb-32 mb-16">
      <div>
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-8">In-house pharmacy & relabelling</h2>
        <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/Relabelling.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-4">
          <p class="lg:mb-9 mb-6">Our in-house relabelling suite enables us to meet your requirements for global
            supply.</p>
          <p class="lg:mb-9 mb-6">The facility is
            approved by the UK-MHRA and complies with all relevant international regulation.</p>
          <p class="lg:pr-0 pr-8">Smartway manages the whole
            process internally, with our regulatory and PM teams ensuring accurate and compliant delivery.</p>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/Relabelling.jpg') }}">
      </div>
    </div>
  </section>
  <section>
    <div class="container 3xl:max-w-3xl px-4">
      <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-36 mt-16 mb-6 lg:pr-0 pr-4">Smartway locations – fully licenced pharmaceutical supply hubs</h2>
    </div>

    <div class="lg:my-40 mt-8 lg:px-0 px-4">
      @include('front.partials.slider')
    </div>
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="text-center lg:mt-64 mt-32 lg:mb-40 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button lg:text-28px text-2xl font-semibold bg-persian-green text-white rounded-full py-14px lg:py-4 px-20 block sm:inline-block">Learn more</a>
    </div>
  </section>
  @include('front.partials.distribution-link')
@endsection
