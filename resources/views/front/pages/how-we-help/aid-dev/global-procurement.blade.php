@extends('layouts.front')

@section('meta')
  <title>Sourcing Solutions for Medical, Pharmaceutical and Surgical Supplies</title>
  <meta name="description" content="We're the leading distributor that offers a wide choice of pharmaceuticals, medical devices & equipment supplies. Let Smartway help you find the best value. We are a leading supplier of pharmaceuticals, medical devices, disposables, and equipment. We provide better stock management services and supply solutions.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1214722898-header.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/Aid_dev_Device_Equipment_Supply.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none -mb-5">
      <span class="2xl:block">Pharmaceutical, Device</span>
      <span class="2xl:block">& Equipment Supply</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 pt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.aid-dev.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-5 4xl:pr-32">
      Smartway’s reputation is built on reliable, consistent supplies of pharmaceuticals, medical disposables, medical
      equipment and furniture.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-40 pr-4">
      At Smartway, we have an unrivalled supply network – from major pharmaceutical manufacturers in the USA and
      Europe to generic providers across India and China. In the last 5 years, we’ve supplied 5 million packs to
      global customers.
    </p>
    <hr class="h-0.5 bg-black mt-16 lg:mb-36 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="lg:block hidden 4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">A robust, global procurement network</p>
    <p class="lg:hidden 4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">The patient voice</p>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="mb-10">
        We develop long term relationships with our suppliers, enabling us to source products rapidly and at low cost.
      </p>
      <p class="4xl:pr-24 pr-4">
        With procurement hubs in India, China, EU and the USA, we constantly maintain our supply network. We ensure
        every supplier meets stringent regulatory requirements, whether direct funders or funder enabled. And we’re
        always growing our supply base, establishing new suppliers, new manufacturers, and innovative new products.
        Crucially, we work closely with our customers and advisory board to align our offering to the sector’s needs.
      </p>
    </div>
    <img class="mx-auto lg:mt-16 mt-0 lg:mb-28 mb-8 xl:w-full sm:w-3/4" src="{{ asset('image/Procurement_map_SW_locations.svg') }}">
    <div class="lg:grid grid-cols-2">
      <div class="flex items-center lg:pr-14">
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
    <div class="lg:grid grid-cols-2 lg:mt-40 mt-16">
      <div class="lg:block hidden">
        <img src="{{ asset('image/iStock-1329216955.png') }}">
      </div>
      <div class="lg:pl-10 lg:pr-4">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-7">
            Our product range</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/iStock-1329216955.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p>
              With so much hands-on experience, we intimately understand the products you need for your work. We have many
              of these products in stock and have rapid access to the others.
            </p>
            <ul class="4xl:text-22px text-lg font-bold mt-8">
              <li>Pharmaceuticals</li>
              <li class="lg:my-3 my-1">Medical kits</li>
              <li class="lg:my-3 my-1">Medical consumables</li>
              <li class="lg:my-3 my-1">Medical instruments</li>
              <li class="lg:my-3 my-1">Hospital & doctor’s room equipment</li>
              <li>Diagnostics</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center lg:mt-44 mt-16 lg:mb-40 mb-20">
      <a href="{{ route('connect-with-us') }}" class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Learn more</a>
    </div>
  </section>
  @include('front.partials.aid-dev-link')
@endsection
