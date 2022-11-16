@extends('layouts.front')

@section('meta')
  <title>A Trusted Supplier to the NHS</title>
  <meta name="description" content="Smartway is the UK and Ireland's largest supplier of Prescription Medicines to the NHS, Healthcare professionals, independent pharmacies and more.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/nhc-hero.jpg') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/SD_UK_Ireland.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-4">
      <span class="block">Our UK &</span>
      <span class="block">Ireland Network</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.distribution.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      Smartway is a trusted supplier to the NHS, private hospitals, pharmacy chains, and independent pharmacies
      throughout
      <span class="sm:inline block">the UK.</span>
    </h2>
    <div class="lg:grid grid-cols-2 lg:mt-36">
      <div class="lg:pr-14 flex items-center">
        <div>
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-9 mb-6">
              We’ve successfully partnered with manufacturers from across the world, providing them with distribution
              and order to cash services.
            </p>
            <p class="lg:mb-9 mb-6 lg:pr-4 pr-0">
              Using our direct accounts with hospitals, clinics and pharmacies, we can
              supply directly to end providers.
            </p>
            <img class="lg:hidden sm:w-3/4 w-11/12 mx-0 my-8" src="{{ asset('image/d-graphic.svg') }}">
            <p>
              We have daily deliveries to UK hospitals and pharmacies. We handle the entire supply chain, monitoring
              each shipment by our quality and regulatory team, who are constantly tracking security, temperature,
              humidity and the location.
            </p>
          </div>
        </div>
      </div>
      <div class="lg:flex hidden justify-center">
        <img src="{{ asset('image/d-graphic.svg') }}">
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:mt-40 mt-20 lg:mb-36 mb-16">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="lg:grid grid-cols-2">
      <div class="lg:pr-14">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">
            <span class="sm:inline block">UK Pharmaceutical</span>
            <span class="sm:inline block">hub warehousing</span></h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/warehouse.jpg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-9 mb-6">
              <span class="sm:inline block">Based in Wimbledon, our UK distribution</span>
              <span class="sm:inline block">hub is an MHRA-approved</span>
              <span class="sm:inline block">pharmaceutical warehouse with</span>
              <span class="sm:inline block">additional certification for</span>
              <span class="sm:inline block">device distribution.</span>
            </p>
            <p class="lg:mb-9 mb-6 lg:pr-4 pr-0">
              Our fully licenced, high quality pharmaceutical warehousing is
              equipped to handle all types of pharmaceuticals, temperature ranges and medical devices. With in-house
              relabelling capability, we can also meet small scale over-labelling projects, quickly
              <span class="4xl:block inline">and effectively.</span>
            </p>
            <p>
              With over 1000 pallet spaces, extensive temperature control,
              <span class="4xl:block inline">and controlled drug storage, it’s an ideal
                hub for UK-wide delivery.</span>
            </p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/warehouse.jpg') }}">
      </div>
    </div>
    <div class="lg:grid grid-cols-2 lg:mt-36 mt-16">
      <div class="lg:block hidden">
        <img src="{{ asset('image/patient.jpg') }}">
      </div>
      <div class="lg:pl-10">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">
            Direct to patient</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/patient.jpg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:pr-28 pr-0">
              In the UK, we can receive orders directly from patients and dispense prescriptions through our in-house
              pharmacy. This allows an effective home delivery option for your <span class="4xl:block inline">UK offering.</span>
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center lg:my-40 mt-16 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">
        Get in touch</a>
    </div>
  </section>
  @include('front.partials.distribution-link')
@endsection
