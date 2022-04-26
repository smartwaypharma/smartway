@extends('layouts.front')

@section('meta')
  <title>How we help - AID Dev - Global Supply Chain capability</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/hero-aid-dev-3.jpg') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/Aid_dev_Global_Distribution.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-4">
      <span class="sm:block inline">Global Distribution</span>
      <span class="sm:block inline">& Storage Network</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 mt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.aid-dev.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-5 4xl:pr-16 sm:mr-0 -mr-2">
      Smartway distributes lifesaving therapies to over 98 countries across the globe. In
      <span class="sm:inline block">the last 5 years,</span>
      <span class="sm:inline block">we’ve shipped 5</span>
      <span class="sm:inline block">million packs of</span>
      <span class="sm:inline block">medication worldwide.</span>
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-24">
      We use our fully owned and controlled strategic supply hubs in the EU, UK, UAE and India to provide quick,
      accurate supply, everywhere. All our hubs can also perform strategic stock holding and specialised kitting and
      packing.
    </p>
    <hr class="h-0.5 bg-black my-16">
  </section>
  <section>
    <div class="container 3xl:max-w-3xl px-4">
      <div class="grid lg:grid-cols-2 lg:mb-16">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">Global warehousing hubs</h2>
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-24">
            <p class="lg:mb-10 mb-6">
              Our fully licenced, high quality pharmaceutical warehousing is equipped to handle all types of
              pharmaceuticals, temperature ranges and medical devices. With in-house relabelling capability, we can
              quickly and effectively meet any labelling requirements.
            </p>
            <p>
              We handle the entire supply chain, monitoring
              shipments 24-7 from our supply chain control tower. We constantly monitor security and integrity,
              including temperature, humidity and
              GPS location. We also manage the entire import and customs
              clearance process.
            </p>
          </div>
        </div>
        <div class="flex justify-center items-center">
          <img src="{{ asset('image/logos-aid-dev.jpg') }}">
        </div>
      </div>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-36">
        Our hubs all work to our global standards and processes. They’re also linked to our global inventory and quality
        systems, giving consistent operations everywhere we operate.
      </p>
      <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-36 mt-16 mb-6">Emergency stock holding</h2>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <span class="4xl:block">With pharmaceutical warehouses at global distribution hubs like Dubai, we can hold strategic stocks for emergency
        deployment.</span>
        <span class="4xl:block">Our global presence and logistic control towers mean we have the infrastructure and capability to help you respond to</span>
        <span class="4xl:block">emergency situations.</span>
      </p>
      <div class="grid lg:grid-cols-2 lg:my-32 mt-32 mb-8">
        <div class="lg:flex hidden justify-center items-center">
          <img src="{{ asset('image/iStock-8864793782.png') }}">
        </div>
        <div class="lg:px-10">
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">In-house pharmacy & relabelling</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/iStock-8864793782.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-10 mb-6">
              Our in-house relabelling suite enables us to meet all regulatory requirements for relabelling.
            </p>
            <p class="lg:mb-10 mb-6">
              The facility
              is approved by the UK-MHRA and complies with all relevant international regulation.
            </p>
            <p class="lg:pr-0 pr-4">
              Smartway manages the
              whole process internally, with our regulatory and PM teams ensuring accurate and compliant delivery. This
              process is scoped out during the design and regulatory compliance stage.
            </p>
          </div>
        </div>
      </div>
      <div class="grid lg:grid-cols-2">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-8 mb-6">Sustainable transportation</h2>
          <img class="lg:hidden sm:w-1/2 w-3/4 mx-auto mb-10" src="{{ asset('image/UN_Logo.jpg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-32">
            <p class="lg:mb-10 mb-6">We have adopted the relevant UN Sustainable Development Goals. Our focus in
              transforming lives by empowering access to medicines globally feeds directly into
              Goal 3 – Good Health and Wellbeing.</p>
            <p class="lg:mb-10 mb-6">As a global distributor of medicines and pharmaceuticals, we focus on the reduction
              of carbon in our operations. We work in partnership with our clients to develop
              carbon neutral programs including working in partnership with a charitable project to
              trees for carbon capture.</p>
            <p>
              We have developed a series of innovative ways to deliver carbon neutral EAP
              programs for you.
            </p>
          </div>
        </div>
        <div class="lg:flex hidden justify-center items-center">
          <img src="{{ asset('image/UN_Logo.jpg') }}">
        </div>
      </div>
      <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-32 mt-16 mb-6">Smartway hubs – fully licenced</h2>
    </div>

    <div class="lg:mt-32 sm:px-0 px-4">
      @include('front.partials.slider')
    </div>
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="text-center lg:mt-64 mt-32 lg:mb-40 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Learn more</a>
    </div>
  </section>
  @include('front.partials.aid-dev-link')
@endsection
