@extends('layouts.front')

@section('meta')
  <title>A Smarter Way to Manage Real-World Data</title>
  <meta name="description" content="Smartway creates a bridge between biologics and real world information. Let's talk about how you can harness the power of EAPs for Real World Data (RWD) and Real World Evidence (RWE).">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1250153388-header.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/Real_World_Data.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px lg:mb-0 mb-12">
      Real World Data
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 mt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.eap.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      <span class="4xl:block">EAPs are designed to allow patient access to</span>
      <span class="4xl:block">new therapies, but they can also provide an</span>
      <span class="4xl:block">opportunity to collect Real World Data</span>
      <span class="4xl:block">(RWD) and generate Real World</span>
      <span class="4xl:block">Evidence (RWE).</span>
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
        <span class="3xl:block">We’ll work with you to evaluate the correct level of RWD collection for your program, building this into our
          compliant program design.</span>
      <span class="3xl:block">We collect the data in our 21CFR Part 11 compliant management system SMARThub®.</span>
    </p>
    <hr class="h-0.5 bg-black lg:mt-40 lg:mb-36 mt-16 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mb-6">Data set design</h2>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="lg:mb-9 mb-6 lg-pr- pr-4">
        <span class="4xl:block">Alignment across functions in the sponsor company is key to RWD collection. The RWE generated may impact future
          clinical development</span>
        <span class="4xl:block">programs, market access and commercialization strategies. That’s why we’ve developed a
          series of tools and processes to aid this discovery</span>
        <span class="4xl:block">and alignment process.</span>
      </p>
      <p>
        <span class="4xl:block">One key question is what level of
          data should be collected. We use our experience in both data collection and physician/pharmacist</span>
        <span class="4xl:block">engagement
        combination with your therapy and product knowledge. As a result, we can develop an attainable, robust RWD set
          that aligns</span>
        <span class="4xl:block">with your objectives. This can then be used for further regulatory submissions or
          <span class="sm:inline-block block">reimbursement discussions.</span></span>
      </p>
    </div>
    <div class="lg:grid grid-cols-2 gap-5 lg:mt-40 mt-16 lg:mb-10 mb-16">
      <div class="flex items-center">
        <div>
          <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mb-8">Compliant design</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/Compliant_design.jpg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-14 pr-2">
            <p class="lg:mb-9 mb-6">
              EAP will normally be run across multiple jurisdictions. Depending on your program there may be obligations
              or
              limitations on the level of RWD collected.
            </p>
            <p>
              We use our regulatory knowledge and experience to develop compliant
              data sets in each country.
            </p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/Compliant_design.jpg') }}">
      </div>
    </div>
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="grid lg:grid-cols-2 gap-x-14">
      <div class="lg:block hidden flex justify-center items-center">
        <img src="{{ asset('image/SMARThub_EAP.svg') }}">
      </div>
      <div class="flex items-center">
        <div>
          <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mb-4 lg:mr-0 -mr-2">RWD – empowered by SMARThub</h2>
          <img class="lg:hidden sm:w-3/4 mt-8 mb-9" src="{{ asset('image/SMARThub_EAP.svg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-9 mb-6 lg-pr-0 pr-4">Our bespoke management system, SMARThub (Supporting
              Medicines Access in Real Time), allows us to collect data at
              any point in the physician or patient journey.</p>
            <p>
            <span class="4xl:block">SMARThub is an
              innovative system for</span>
              creating, collating and analysing bespoke
              data sets in a way that’s intuitive and 21CFR Part 11 compliant.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center lg:mt-36 mt-16 lg:mb-40 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Talk
        to the team</a>
    </div>
  </section>
  @include('front.partials.eap-link')
@endsection
