@extends('layouts.front')

@section('meta')
  <title>Project Management Solutions for the Aid & Development Sector</title>
  <meta name="description" content="With our specialized project management services, Smartway will monitor and manage your pharmaceutical programs from start to finish. Smartway has regulatory expetise, sound marketing, and bioanalytical consulting for pharmaceuticals and medical devices.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/businesspeople-brainstorming-in-a-meeting-WH57EEX-1080.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/Aid_dev_project_management.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-16">
      Project management
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.aid-dev.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px lg:mb-12 mb-6 4xl:pr-16 sm:tracking-normal -tracking-0.7px sm:mr-0 -mr-2">
      At Smartway, we combine deep Aid Dev sector knowledge with regulatory and pharmaceutical expertise. Your
      dedicated
      project managers will lead your program from concept to fruition, bringing in expertise from all Smartway
      functions.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-32">
      With fully operational hubs across the world and a single global management system, you can be sure of 24-7,
      seamless procurement and delivery of your supplies.
    </p>
    <hr class="h-0.5 bg-black lg:mt-36 lg:mb-40 my-16">
    <div class="lg:grid grid-cols-2 mb-16">
      <div class="flex items-center lg:pr-20">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-2 mb-6">Project management systems</h2>
          <img class="lg:hidden my-8" src="{{ asset('image/iStock-1187114666.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-10 mb-6 lg:pr-20">
              Our specialist team combines procurement professionals, pharmacists, project managers and international
              regulatory experts.
            </p>
            <p class="lg:pr-10 pr-2">
              Our project teams are led by qualified Agile project managers. They’ll guide your
              cross-functional teams from our clients through the entire design, implementation, fulfilment, and closure
              of projects. Each project is allocated a defined project manager and reserve project manager. Our systems,
              processes and procedures are all designed to work both digitally and with in-person meetings.
            </p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/iStock-1187114666.png') }}">
      </div>
    </div>
    <div class="lg:grid grid-cols-2 lg:mb-28 mb-16">
      <div class="lg:block hidden">
        <img src="{{ asset('image/SMARThub Aid & Development.svg') }}">
      </div>
      <div class="flex items-center lg:pl-10">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">Real-time inventory and ordering
            portals</h2>
          <img class="lg:hidden my-8" src="{{ asset('image/SMARThub Aid & Development.svg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:mb-10 mb-6 lg:pr-20">
              We can also implement real-time inventory and ordering portals for you, allowing your in-country teams to
              order and manage their own supplies.
            </p>
            <p class="lg:pr-10">
              SMARThub® - Supporting Medicines Access in Real Time Hub - is our
              bespoke management system. 21CFR Part 11 compliant, the online system provides you with secure ordering
              and inventory management support for teams across the world. The system can also be fully customised to
              your individual needs.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="lg:grid grid-cols-2 gap-5 lg:mb-32 mb-16">
      <div>
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-8">Regulatory & sector expertise</h2>
        <img class="lg:hidden my-8" src="{{ asset('image/regulatory_team.jpg') }}">
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-24">
          We believe regulatory expertise is core to our business success and how we work in partnership with NGOs. We
          bring the advantage of 25 years sourcing and supplying medicines globally. We also have a company objective that
          10% of all staff must be regulatory or pharmacy professionals, ensuring that this knowledge, approach and
          culture flows through the whole company.
        </p>
      </div>
      <div class="lg:block hidden">
        <img class="mt-20" src="{{ asset('image/regulatory_team.jpg') }}">
      </div>
    </div>
    <h2 class="4xl:text-32px xl:text-2xl text-lg 4xl:leading-37px leading-28px mb-14 lg:pr-0 pr-4">
      Our regulatory team is fully integrated into the Aid Dev project
      <span class="sm:inline block">management group.</span>
    </h2>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold">Meet the Team</h2>
    <div class="grid lg:grid-cols-3 gap-x-5 lg:gap-y-16 gap-y-8 lg:mt-20 mt-7">
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Robert-team.jpg') }}">
        <p class="text-lochmara font-bold mb-1.5">Robert Donnell</p>
        <p class="font-bold">Executive Vice President - Medicines Access</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Judith-team.jpg') }}">
        <p class="text-lochmara font-bold mb-1.5">Judith Asiimwe</p>
        <p class="font-bold">Project Manager</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Miral-team.jpg') }}">
        <p class="text-lochmara font-bold mb-1.5">Miral Patel</p>
        <p class="font-bold">Regulatory Lead</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Ross-team.png') }}">
        <p class="text-lochmara font-bold mb-1.5">Ross Hemson</p>
        <p class="font-bold">
          <span class="block">Associate Account Director</span>
          <span class="block">Aid & Development</span>
        </p>
      </div>
    </div>
    <div class="text-center lg:my-40 mt-16 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Talk to the team</a>
    </div>
  </section>
  @include('front.partials.aid-dev-link')
@endsection
