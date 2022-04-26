@extends('layouts.front')

@section('meta')
  <title>How we help - CTS - Project Management</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/team-of-executives-in-the-meeting-at-office-BVMD7KT-1080.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/CTS_Project_Management.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-16">
      Project Management
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 mt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.cts.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 4xl:pr-4 sm:mr-0 -mr-4">
      At Smartway, we combine deep CTS knowledge with regulatory and pharmaceutical expertise. Your
      <span class="sm:inline block">dedicated</span>
      project
      managers will lead your program from concept to fruition, bringing in expertise from all Smartway functions.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-32 pr-4">
      With fully operational hubs across the world and a single global management system, you can be sure of 24-7,
      seamless procurement and delivery of your supplies.
    </p>
    <hr class="h-0.5 bg-black lg:mt-36 lg:mb-40 my-16">
    <div class="lg:grid grid-cols-2 lg:mb-32 mb-16">
      <div class="lg:pr-14">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-2 mb-9">Project management systems</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/iStock-1187114666.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-9 mb-6">
              Our specialist CTS team combines procurement professionals, pharmacists, project managers and
              international regulatory experts.
            </p>
            <p class="pr-2">
              <span class="4xl:block">Our project teams are led by qualified Agile project managers.</span>
              <span class="4xl:block">They’ll guide your cross-functional teams from our clients through</span>
              <span class="4xl:block">the entire design, implementation, fulfilment, and closure of</span>
              <span class="4xl:block">projects. Each project is allocated a defined project manager</span>
              <span class="4xl:block">and reserve project manager. Our systems, processes and</span>
              <span class="4xl:block">procedures are all designed to work both digitally and with</span>
              <span class="4xl:block">in-person meetings.</span>
            </p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/iStock-1187114666.png') }}">
      </div>
    </div>
    <div class="lg:grid grid-cols-2 lg:mt-40 mt-16 lg:mb-32 mb-16">
      <div class="lg:block hidden">
        <img src="{{ asset('image/ordering_portals.jpg') }}">
      </div>
      <div class="lg:pl-10 lg:pr-12">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-2 mb-6">Real-time inventory and ordering
            portals</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/ordering_portals.jpg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-9 mb-6">We can also implement real-time inventory and ordering portals for you, allowing
              your in-country teams to
              order and manage their own supplies.
            </p>
            <p class="lg:mb-9 mb-6">SMARThub® - Supporting Medicines Access in Real Time Hub - is our
              bespoke management system. 21CFR Part 11 compliant, the online system provides you with secure ordering
              and inventory management support for teams across the world.</p>
            <p class="4xl:pr-14 pr-2">This system is particularly useful for
              sampling and RLD procurement. It can also be fully customised to your individual needs.</p>
          </div>
        </div>
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:mt-36 lg:mb-40 my-16">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div>
      <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-9">Regulatory & CTS knowledge</h2>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-7">
        We believe regulatory expertise is core to our business success and how we work in partnership with NGOs. We
        bring the advantage of 25 years sourcing and supplying medicines globally. We also have a company objective that
        10% of all staff must be regulatory or pharmacy professionals, ensuring that this knowledge, approach and
        culture flows through the whole company.
      </p>
    </div>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-16 mt-6">Meet the team</h2>
    <div class="grid lg:grid-cols-3 gap-x-5 lg:gap-y-16 gap-y-8 lg:mt-20 mt-8">
      <div class="4xl:text-2xl text-xl">
        <img class="lg:mb-3 mb-2" src="{{ asset('image/Robert-team.jpg') }}">
        <p class="text-lochmara leading-37px font-bold mb-1">Robert Donnell</p>
        <p class="font-bold">Executive Vice President - Medicines Access</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="lg:mb-3 mb-2" src="{{ asset('image/Amish-team.jpg') }}">
        <p class="text-lochmara leading-37px font-bold mb-1">Amish Patel</p>
        <p class="font-bold">Business Development Manager</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="lg:mb-3 mb-2" src="{{ asset('image/Andrew-team.jpg') }}">
        <p class="text-lochmara leading-37px font-bold mb-1">Andrew Tunstell</p>
        <p class="font-bold">Regulatory Assistant</p>
      </div>
    </div>
    <div class="text-center lg:my-40 mt-16 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Talk
        to the team</a>
    </div>
  </section>
  @include('front.partials.cts-link')
@endsection
