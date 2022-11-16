@extends('layouts.front')

@section('meta')
  <title>Your Reliable Supply of Medicines Sourced Worldwide</title>
  <meta name="description" content="Smartway is a reliable source for all healthcare products and medicine supplies worldwide. Smartway is known for reliable consistent supply of branded and generic pharmaceuticals, unlicensed medicines, veterinarian supplies and supplements. Our reliable supply of medicines sourced worldwide to meet consumer and market needs keeps us at the forefront of pharmaceutical distribution.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('image/hero-reliable-supply.jpg') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('image/IS_Reliable_Supply.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-4">
      <span class="block">Reliable Supply</span>
      <span class="block">of Medicines Sourced Worldwide</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      <span class="4xl:block">Smartway’s become known for reliable</span>
      <span class="4xl:block">consistent supply of branded and generic</span>
      <span class="4xl:block">pharmaceuticals, unlicensed medicines,</span>
      <span class="4xl:block">specials, veterinarian supplies</span>
      <span class="4xl:block">and supplements.</span>
    </h2>
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mb-14 mb-6">Our unrivalled supply network covers 25 countries worldwide.</p>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-20">
      <p class="lg:mb-10 mb-6">
        We develop long term relationships with our suppliers, so we can source products rapidly and at low cost. In the
        last 5 years, we’ve supplied 5 million packs to customers around the world.
      </p>
      <p class="pr-4">
        With procurement hubs in India,
        Australasia China, UK, EU and the USA, we constantly maintain our supply network, safeguarding both regulatory
        compliance and cost-effective supply.
      </p>
    </div>
    <hr class="h-0.5 bg-black lg:mt-40 mt-20 lg:mb-36 mb-16">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="lg:grid grid-cols-2">
      <div class="lg:pr-14">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">
            <span class="xl:block">Safeguarding quality with audited,</span>
            <span class="xl:block">approved suppliers</span></h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/iStock-1164357333.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p>
              Smartway only sources from audited and approved suppliers. Irrespective of country or jurisdiction,
              suppliers are expected to meet our stringent requirements. Our regulatory team includes pharmacists,
              regulatory lawyers, and trained professionals to audit and approve every supplier. That’s how we ensure
              the requirements of you and your funder are met.
            </p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/iStock-1164357333.png') }}">
      </div>
    </div>
    <div class="lg:grid grid-cols-2 lg:mt-36 mt-16">
      <div class="lg:block hidden">
        <img src="{{ asset('image/Relabelling.jpg') }}">
      </div>
      <div class="lg:pl-10">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">
            Relabelling</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/Relabelling.jpg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-10 mb-6">
              Our in-house relabelling suite enables us to meet all regulatory requirements for relabelling.
            </p>
            <p class="lg:mb-10 mb-6">
              The facility
              is approved by the UK-MHRA and complies with all relevant international regulation.
            </p>
            <p class="pr-3">
              Smartway manages the
              whole process internally, with our regulatory and PM teams ensuring accurate and compliant delivery. This
              process is scoped out during the design and regulatory compliance stage.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center lg:my-40 mt-16 mb-20">
      <a href="{{ route('connect-with-us') }}" class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Contact Us</a>
    </div>
  </section>
  @include('front.partials.hps-link')
@endsection
