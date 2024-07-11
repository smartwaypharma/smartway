@extends('layouts.front')

@section('meta')
  <title>Your One Source for End-to-End Supply Chain Solutions</title>
  <meta name="description" content="Smartway offers excellent and efficient services within the distribution network, taking away all of the complexities involved.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('image/end-to-end-hero.jpg') }}" alt="Smartway Pharmaceuticals - End to End Service" title="Smartway Pharmaceuticals - End to End Service">
  <img class="sm:hidden inline-block w-full" src="{{ asset('image/SD_End_Service.jpg') }}" alt="Smartway Pharmaceuticals - End to End Service" title="Smartway Pharmaceuticals - End to End Service">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px sm:mb-4 mb-12">
      End to End Service
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.distribution.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      Smartway can provide you with end-to-end services from international supply chain, importation through 3PL, and
      order to
      <span class="sm:inline block">cash services.</span>
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-24">
      With fully operational hubs across the world and a single global management system (SMARThub®) you can be sure of
      seamless experience at every stage.
    </p>
    <hr class="h-0.5 bg-black lg:my-36 mt-16 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="lg:grid grid-cols-2">
      <div class="lg:pr-28">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">
            Order to cash services</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/cash_services.jpg') }}" alt="Smartway Pharmaceuticals - Order to cash services" title="Smartway Pharmaceuticals - Order to cash services">
          <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-4">
            Smartway can fully manage the order and monies collection process, both within the UK and on a global basis.
            We have the experience and direct accounts with hospitals and pharmacies to handle this process efficiently.
          </p>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/cash_services.jpg') }}" alt="Smartway Pharmaceuticals - Order to cash services" title="Smartway Pharmaceuticals - Order to cash services">
      </div>
    </div>
    <div class="lg:grid grid-cols-2 lg:mt-10 mt-16">
      <div class="lg:flex justify-center hidden lg:mr-20">
        <img src="{{ asset('image/SMARThub Special Distribution.svg') }}" alt="Smartway Pharmaceuticals - Real Time inventory and ordering portals" title="Smartway Pharmaceuticals - Real Time inventory and ordering portals">
      </div>
      <div class="flex items-center lg:pl-10">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">
            Real Time inventory and ordering portals</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/SMARThub Special Distribution.svg') }}" alt="Smartway Pharmaceuticals - Real Time inventory and ordering portals" title="Smartway Pharmaceuticals - Real Time inventory and ordering portals">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-9 mb-6 lg:pr-14 pr-10">
              We can also implement real-time inventory and ordering portals for your brand.
            </p>
            <p class="lg:pr-14">
              SMARThub® - Supporting
              Medicines Access in Real Time Hub - is our bespoke management system. 21CFR Part 11 compliant, the online
              system provides you with secure ordering and inventory management support for teams across the world. The
              system can also be fully customised to your individual needs.
            </p>
          </div>
        </div>
      </div>
    </div>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mt-14 mb-4">Pharmacovigilance and Drug Safety reporting</h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-36">
      All our systems have built in reporting for any drug safety issues or patient side effects. These can be linked
      directly to your systems or, through audited and approved partners, we can maintain full drug safety databases and
      systems
      <span class="sm:inline block">for you.</span>
    </p>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold lg:mt-36 mt-16 mb-6">Regulatory & market knowledge</h2>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="mb-6 lg:pr-44">
        We believe regulatory expertise is core to our business success and how we supply our clients worldwide. We
        bring the advantage of 25 years sourcing and supplying medicines globally. We also have a company objective that
        10% of all staff must be regulatory or pharmacy professionals, ensuring that this knowledge, approach and
        culture flows through the whole company.
      </p>
      <p>
        Our regulatory team is fully integrated into our commercial teams.
      </p>
    </div>
  </section>
  <section class="container 3xl:max-w-3xl px-4 lg:mt-14 mt-6">
    {{--<h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">Meet the Team</h2>--}}
    {{--<div class="grid lg:grid-cols-3 gap-x-5 lg:gap-y-16 gap-y-8 lg:mt-20 mt-7">
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Dhruv-team.jpg') }}" alt="Smartway Pharmaceuticals - Dhruv Patel - Chief Operating Officer" title="Smartway Pharmaceuticals - Dhruv Patel - Chief Operating Officer">
        <p class="text-lochmara font-bold mb-1.5">Dhruv Patel</p>
        <p class="font-bold">Chief Operating Officer</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Robert-team.jpg') }}" alt="Smartway Pharmaceuticals - Robert Donnell - Executive Vice President - Medicines Access" title="Smartway Pharmaceuticals - Robert Donnell - Executive Vice President - Medicines Access">
        <p class="text-lochmara font-bold mb-1.5">Robert Donnell</p>
        <p class="font-bold">Executive Vice President - Medicines Access</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Kirti-team.jpg') }}" alt="Smartway Pharmaceuticals - Kirti Patel - Superintendent Pharmacist" title="Smartway Pharmaceuticals - Kirti Patel - Superintendent Pharmacist">
        <p class="text-lochmara font-bold mb-1.5">Kirti Patel</p>
        <p class="font-bold">Superintendent Pharmacist</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Nicole-team.jpg') }}" alt="Smartway Pharmaceuticals - Nicole Lyons - Regulatory Director" title="Smartway Pharmaceuticals - Nicole Lyons - Regulatory Director">
        <p class="text-lochmara font-bold mb-1.5">Nicole Lyons</p>
        <p class="font-bold">Regulatory Director</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Amy-team.jpg') }}" alt="Smartway Pharmaceuticals - Amy Searle - Project Manager" title="Smartway Pharmaceuticals - Amy Searle - Project Manager">
        <p class="text-lochmara font-bold mb-1.5">Amy Searle</p>
        <p class="font-bold">Project Manager</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Maysa-team.jpg') }}" alt="Smartway Pharmaceuticals - Maysa Gamal - Regional Sales Manager – MENA region" title="Smartway Pharmaceuticals - Maysa Gamal - Regional Sales Manager – MENA region">
        <p class="text-lochmara font-bold mb-1.5">Maysa Gamal</p>
        <p class="font-bold">Regional Sales Manager – MENA region</p>
      </div>
    </div>--}}
    <div class="text-center lg:my-10 my-10">
      <a href="{{ route('connect-with-us')}}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Contact us</a>
    </div>
  </section>
  @include('front.partials.distribution-link')
@endsection
