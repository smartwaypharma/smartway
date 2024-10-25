@extends('layouts.front')

@section('meta')
  <title>A Trusted Global Procurement Network for Comparator and RLD Supply</title>
  <meta name="description" content="Smartway is a leading provider of comparators and RLDs, biosimilars and specialty products to the pharmaceutical and other healthcare industries worldwide. We're your trusted Global Procurement Network.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/hero-global-procurement.jpg') }}" alt="Smartway Pharmaceuticals - Global Procurement Network for Comparator and RLD Supply" title="Smartway Pharmaceuticals - Global Procurement Network for Comparator and RLD Supply">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/Global_Procurement-mobile.jpg') }}" alt="Smartway Pharmaceuticals - Global Procurement Network for Comparator and RLD Supply" title="Smartway Pharmaceuticals - Global Procurement Network for Comparator and RLD Supply">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px mb-4">
      <span class="3xl:block">Global Procurement</span>
      <span class="3xl:block">Network - Comparator,</span>
      <span class="3xl:block">RLD, Supply</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 pt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.cts.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      Smartway has become known for reliable, consistent supplies of comparators, RLDs and biosimilars.
    </h2>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-20">
      <p class="sm:mb-9 mb-6">
        We have an unrivalled supply network from major pharmaceutical manufacturers and distributors across 25
        countries.
      </p>
      <p class="sm:mb-9 mb-6">
        We develop long term relationships with our suppliers, so we can source products rapidly and at low
        cost. In the last 5 years alone, we’ve supplied 5 million packs to customers worldwide.
      </p>
      <p class="sm:mb-9 mb-6">
        With procurement hubs in
        India, China, EU, UK and the USA, we constantly maintain our supply network, ensuring suppliers meet the
        stringent regulatory approvals required for your trial. Our supply network ranges from direct manufacturers to
        approved authorised distributors in over 40 countries.
      </p>
      <p class="4xl:pr-20">
        We work closely with our customers and advisory board to
        ensure our offering is always aligned to the needs of the sector. Ultimately, we deliver products that meet the
        trial’s needs – quickly, accurately and responsibly.
      </p>
    </div>
    <hr class="h-0.5 bg-black lg:mt-40 mt-16 lg:mb-36 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="lg:grid grid-cols-2 lg:mt-24 mt-6 lg:mb-32 mb-16">
      <div class="lg:pr-20">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">
            <span class="xl:block">Safeguarding quality with audited,</span>
            <span class="xl:block">approved suppliers</span></h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/approved_suppliers.jpg') }}" alt="Smartway Pharmaceuticals - Safeguarding quality with audited, approved suppliers" title="Smartway Pharmaceuticals - Safeguarding quality with audited, approved suppliers">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p>
              Smartway only sources from audited and approved suppliers. Irrespective of country or jurisdiction,
              suppliers are expected to meet our stringent requirements. Our regulatory team includes pharmacists,
              regulatory lawyers, and trained professionals to audit and approve every supplier. That’s how we ensure
              the requirements of your trial are met.
            </p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/approved_suppliers.jpg') }}" alt="Smartway Pharmaceuticals - Safeguarding quality with audited, approved suppliers" title="Smartway Pharmaceuticals - Safeguarding quality with audited, approved suppliers">
      </div>
    </div>
    <div class="text-center sm:mt-36 mt-0 lg:mb-40 mb-20">
      <a href="{{ route('connect-with-us') }}" class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Learn more</a>
    </div>
  </section>
  @include('front.partials.cts-link')
@endsection
