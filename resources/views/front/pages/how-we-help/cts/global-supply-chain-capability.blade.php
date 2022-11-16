@extends('layouts.front')

@section('meta')
  <title>One Place to Manage All Your Global Supply Chain Needs</title>
  <meta name="description" content="Smartway provides a global supply chain service for pharmaceutical companies, helping them to manage their deliveries all over the world. Smartway has been proven to be very effective in providing a supply chain solution for the shipping of medicines.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/hero.jpg') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/IS_Global_Distribution.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-6">
      <span class="xl:block">Global Supply</span>
      <span class="xl:block">Chain Capability</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 mt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.cts.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 sm:mr-0 -mr-1 4xl:pr-28 pr-9">
      Smartway supplies pharmaceuticals to over 98 countries across the globe. In the last 5 years, we’ve shipped
      5
      million packs of medication worldwide.
    </h2>
    <div class="grid lg:grid-cols-2">
      <div>
        <div class="lg:mb-14 mb-0">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-9 mb-6 lg:pr-10">We use our fully owned and controlled strategic supply hubs in
              the EU, UK,
              UAE and India to provide
              quick, accurate supply, everywhere.</p>
            <p class="lg:mb-9 mb-6 lg:pr-14">Our fully licenced, high quality pharmaceutical warehousing is
              equipped to handle all types of pharmaceuticals, temperature ranges and medical devices.</p>
            <p class="lg:pr-10">We handle the
              entire supply chain, monitoring shipments 24-7 from our supply chain control tower. We
              constantly monitor
              security and integrity, including temperature, humidity and GPS location. We also manage the
              entire import
              and customs clearance process.</p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img class="mx-auto" src="{{ asset('image/warehouse.jpg') }}">
      </div>
    </div>
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-16 mt-8">
      <span
          class="4xl:block">With our in-house pharmacy, you can also add dispensing and direct to patient delivery</span>
      <span class="4xl:block">to your core program.</span>
    </p>
    <hr class="h-0.5 bg-black lg:mt-40 mt-16 lg:mb-20 mb-16">
  </section>
  <section>
    <div class="container 3xl:max-w-3xl px-4">
      <div class="grid lg:grid-cols-2 gap-x-20 gap-y-2">
        <div class="flex items-center">
          <div class="lg:mb-14 mb-0">
            <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">Our strategic hubs</h2>
            <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-20">
              <p class="lg:mb-9 mb-6">
                Our global network of GxP registered warehousing and distribution sites are located in strategic
                locations to allow a global network. We mitigate disturbance risk to the supply chain by holding stock
                in differing locations. They are linked to our global inventory and quality systems, giving consistent
                operations everywhere we operate.
              </p>
              <p>
                Smartway is required to adhere to the strictest of requirements across all jurisdictions we operate in.
                Whilst we comply with all relevant local regulation, we also ensure that all our sites comply to the
                highest level of global regulation – adopting the best practices from across the globe and applying it
                to all our regulated activities. This consistency in our approach means that wherever our clients work
                with us, they can be assured of consistently high standards.
              </p>
            </div>
          </div>
        </div>
        <div class="lg:flex hidden justify-center items-center">
          <img class="mx-auto" src="{{ asset('image/Image 17.jpeg') }}">
        </div>
      </div>
      <div class="lg:mt-o mt-7">
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-7">Emergency stock holding</h2>
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-32">
          We can hold strategic stocks for to minimise any delays to your supply. Our global presence and
          logistic
          control towers mean we have the infrastructure and capability to help you respond to emergency
          situations.
        </p>
      </div>
      <div class="grid lg:grid-cols-2 lg:mt-36 mt-16">
        <div class="flex items-center lg:pr-14">
          <div>
            <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-7">Sustainable transportation</h2>
            <img class="lg:hidden mt-10 mb-6 mx-auto" src="{{ asset('image/logo_un.jpg') }}">
            <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-20">
              <p class="lg:mb-9 mb-6">
                We have adopted the relevant UN Sustainable Development Goals. Our focus in transforming
                lives by empowering access to medicines globally feeds directly into Goal 3 – Good
                Health
                and Wellbeing.</p>
              <p class="lg:mb-9 mb-6">As a global distributor of medicines and pharmaceuticals, we focus
                on the reduction of carbon in our operations. We work in partnership with our clients to
                develop carbon neutral programs including working in partnership with a charitable
                project to trees for carbon capture.</p>
              <p>We have developed a series of innovative ways to deliver carbon
                neutral programs
                for you.</p>
            </div>
          </div>
        </div>
        <div class="lg:flex hidden justify-center items-center">
          <img src="{{ asset('image/logo_un.jpg') }}">
        </div>
      </div>
      <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-40 mt-16 lg:pr-0 pr-10">
        Smartway locations – fully licenced pharmaceutical supply hubs</h2>
    </div>
    <div class="lg:mt-32 mt-8 lg:mb-60 mb-32 sm:px-0 px-4">
      @include('front.partials.slider')
    </div>
  </section>
  <section>
    <div class="container 3xl:max-w-3xl px-4">
      <div class="text-center sm:mt-36 mt-0 lg:mb-40 mb-20">
        <a href="{{ route('connect-with-us') }}"
           class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Learn
          more</a>
      </div>
    </div>
  </section>
  @include('front.partials.cts-link')
@endsection
