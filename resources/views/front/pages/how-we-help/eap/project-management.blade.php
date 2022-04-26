@extends('layouts.front')

@section('meta')
  <title>How we help - EAP - Project Management</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1152449705-header.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/Project_Management.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-16">
      Project Management
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 mt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.eap.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      Your EAP project will be led by dedicated project managers while also bringing in expertise from across
      Smartway.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 2xl:pr-16">
        <span class="4xl:block">SMARThub® - Supporting Medicines Access in Real Time Hub, our bespoke management system. 21CFR Part 11 compliant
        the online system</span>
      <span class="4xl:block">provides an easy way for Physicians, Pharmacists and Hospitals to register to the program,
          order supplies and be provided with all</span>
      <span class="4xl:block">relevant information.</span>
    </p>
    <hr class="h-0.5 bg-black lg:mt-36 lg:mb-40 my-16">
    <div class="lg:grid grid-cols-2 lg:mb-32 mb-16">
      <div class="flex items-center lg:pr-20">
        <div>
          <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mt-2 mb-6">Project management systems</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/iStock-1187114666.png') }}">
          <p class="lg:block hidden 4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            Our project teams are led by qualified Agile project managers. They’ll guide your cross-functional teams
            from our clients through the entire design, implementation, fulfilment, and closure of projects. Each
            project is allocated a defined project manager and reserve project manager. Our systems, processes and
            procedures are all designed to work both digitally and with in-person meetings.
          </p>
          <p class="lg:hidden 4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px pr-2">
            Our hubs all work to our global standards and processes. They’re also linked to our global inventory and
            quality systems, giving consistent operations everywhere we operate.
          </p>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/iStock-1187114666.png') }}">
      </div>
    </div>
    <div class="grid lg:grid-cols-2">
      <div class="lg:flex hidden items-center">
        <img src="{{ asset('image/SMARThub EAP.svg') }}">
      </div>
      <div class="lg:pl-16">
        <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mb-4">SMARThub®</h2>
        <img class="lg:hidden sm:w-3/4 my-7" src="{{ asset('image/SMARThub EAP.svg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          <p class="lg:mb-9 mb-6 pr-8">
            SMARThub® - Supporting Medicines Access in Real Time Hub is our bespoke management system.
          </p>
          <p class="lg:mb-9 mb-6 pr-9">
            It has been
            designed specifically for EAP management, from single country programs to multi-year, multi-country
            programs.
          </p>
          <p class="lg:mb-9 mb-6 pr-3">
            SMARThub can be accessed on any PC or connected device, giving physicians, hospitals and
            pharmacists and easy way to register, order supplies, and receive useful information. advice and provides
            an
            easy way for Physicians, Pharmacists and Hospitals to register to the program, order supplies and be
            provided with all relevant information.
          </p>
          <p class="lg:mb-9 mb-6">
            The system can also be tailored to your individual requirements,
            from inclusion/exclusion criteria to RWD considerations. All while providing real-time reporting and
            complete visibility.
          </p>
          <p>
            With fully operational hubs across the world and a single global management system, you
            can be sure of seamless experience throughout your program.
          </p>
        </div>
      </div>
    </div>
    <div class="lg:grid grid-cols-2 lg:mt-36 mt-16 lg:mb-32 mb-16">
      <div class="flex items-center lg:pr-20">
        <div>
          <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mt-2 mb-6">Pharmacovigilance and Drug Safety
            reporting</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/iStock-1286220100.png') }}">
          <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-2">
            All our systems have built in reporting for drug safety issues or patient side effects. These can either be
            linked directly to your systems or our own through audited and approved partners, maintaining full drug
            safety
            databases and controls.
          </p>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/iStock-1286220100.png') }}">
      </div>
    </div>
    <div class="text-center lg:my-40 my-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Learn
        more</a>
    </div>
  </section>
  @include('front.partials.eap-link')
@endsection
