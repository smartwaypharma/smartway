@extends('layouts.front')

@section('meta')
  <title>How we help - International Supply & Unlicensed Medicines - Global Distribution</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('image/hero-global-distributions.jpg') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('image/IS_Global_Distribution.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-4 mb-16">
      Global Distribution
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="lg:block hidden quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 4xl:pr-36">
      Smartway distributes lifesaving therapies to over 98 countries. In the last 5 years, we have shipped 5 million
      packs of medication worldwide.
    </h2>
    <h2 class="lg:hidden quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 4xl:pr-36">
      Smartway supplies pharmaceuticals to over 98 countries across the globe. In the last 5 years, we’ve shipped 5 million packs of medication worldwide.
    </h2>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-16">
      <p class="lg:mb-10 mb-6">
        Smartway is an audited and approved supplier to the NHS and supplies unlicensed imports and specials to all UK
        NHS Trusts. We also supply wholesalers and specialist importers on a global level.
      </p>
      <p class="lg:mb-10 mb-6">
        With in-house relabelling
        capability, we can quickly and effectively meet over- labelling projects.
      </p>
      <p class="lg:pr-20">
        We handle the entire supply chain,
        monitoring shipments 24-7 from our supply chain control tower. We constantly monitor security and integrity,
        including temperature, humidity and GPS location. We also manage the entire import and customs clearance
        process.
      </p>
    </div>
    <hr class="h-0.5 bg-black lg:mt-40 mt-20 lg:mb-36 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="grid lg:grid-cols-2 lg:mb-32 mb-12">
      <div>
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">Our strategic supply hubs</h2>
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          <p class="lg:mb-10 mb-6">
            <span class="4xl:block"> We use our fully owned strategic supply hubs in the EU, UK, UAE</span>
            <span class="4xl:block">and India to provide quick, accurate supply to approved users</span>
            <span class="4xl:block">across the world. Every hub can also perform strategic
              <span class="sm:inline block">stock holding.</span>
            </span>
          </p>
          <p class="lg:mb-10 mb-6">
            <span class="4xl:block">Our fully licenced, high-quality pharmaceutical warehousing is</span>
            <span class="4xl:block">equipped to handle all types of pharmaceuticals, temperature</span>
            <span class="4xl:block">ranges and medical devices.</span>
          </p>
          <p>
            <span class="4xl:block">Smartway’s hubs all work to our global standards and processes.</span>
            <span class="4xl:block">They’re also linked to our global inventory and quality systems,</span>
            <span class="4xl:block">keeping our operations consistent worldwide.</span>
            </p>
        </div>
      </div>
      <div class="flex justify-center items-center lg:mt-0 mt-6">
        <img src="{{ asset('image/strategic_hubs_gra.jpg') }}">
      </div>
    </div>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">Emergency stock holding</h2>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:mb-38 mb-16">
      <p class="4xl:pr-32">
        Smartway holds strategic stock to minimise delays to your supply. These are held at our owned and controlled pharmaceutical warehouses,
        all located at global distribution hubs. Our global presence and logistic control towers mean we have the infrastructure and capability to
        help you respond to emergency situations.
      </p>
    </div>
  </section>
  <section>
    <div class="container 3xl:max-w-3xl px-4">
      <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6 lg:pr-0 pr-6">Smartway locations – fully licenced pharmaceutical supply hub</h2>
    </div>
    <div class="lg:mt-32 mt-8 lg:mb-60 mb-32 lg:px-0 px-4">
      @include('front.partials.slider')
    </div>
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="text-center lg:my-40 mt-16 mb-20">
      <a href="{{ route('connect-with-us') }}" class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Contact Us</a>
    </div>
  </section>
  @include('front.partials.isaui-link')
@endsection
