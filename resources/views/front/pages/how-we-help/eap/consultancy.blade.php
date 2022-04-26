@extends('layouts.front')

@section('meta')
  <title>How we help - EAP - Consultancy</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1127397327-header.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/Consultancy.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px sm:mb-0 mb-12">
      Consultancy
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 mt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.eap.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      <span class="4xl:block sm:mr-0 -mr-2">EAPs are complicated. They are affected by numerous variables – not just regulatory</span>
      <span class="4xl:block sm:pr-0 pr-4">jurisdictions, but also how
      they link to asset development and commercialization plans.</span>
    </h2>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="sm:mb-9 mb-6 sm:pr-0 pr-2">
        <span class="4xl:block">Our consultancy team can help you decide if an EAP is right for your asset, find the optimal timing, understand
          the regulatory structure, and</span>
        <span class="4xl:block">integrate your EAP with RWD and commercialisation.</span>
      </p>
      <p class="sm:pr-0 pr-2">
        <span class="4xl:block">Our consultancy team brings
          together experience in pharmaceutical commercialization, international regulatory law, and pharmacy –</span>
        <span class="4xl:block">domestically and internationally. We’ll work with you to develop the best solution for each potential therapy.</span>
      </p>
    </div>
    <div class="text-center lg:mt-40 mt-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Learn
        more</a>
    </div>
    <hr class="h-0.5 bg-black lg:mt-40 lg:mb-36 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <h2 class="lg:block hidden 4xl:text-32px xl:text-2xl text-lg 4xl:leading-37px xl:leading-28px leading-24px font-bold">Team experienced in</h2>
    <p class="block lg:hidden 4xl:text-32px xl:text-2xl text-lg 4xl:leading-37px xl:leading-28px leading-24px">
      Physicians want to do the best for their patients and often ask for access to innovative
      new therapies.</p>
    <div class="lg:grid flex flex-col-reverse grid-cols-2 sm:mt-14 mt-7">
      <div>
        <h2 class="lg:hidden block 4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mt-7 mb-8">Team experienced in</h2>
        <ul class="4xl:text-32px text-xl font-semibold lg:-tracking-0.8px -tracking-0.5px">
          <li class="flex lg:items-center">
            <div class="h-8 w-8 bg-persian-green rounded-full flex justify-center items-center mr-3.5">
              <img class="h-6 w-6" src="{{ asset('image/icon/Ic_check_26px.svg') }}">
            </div>
            Launch marketing
          </li>
          <li class="flex lg:items-center my-9">
            <div class="h-8 w-8 bg-persian-green rounded-full flex justify-center items-center mr-3.5">
              <img class="h-6 w-6" src="{{ asset('image/icon/Ic_check_26px.svg') }}">
            </div>
            International pharmaceutical law
          </li>
          <li class="flex lg:items-center my-9">
            <div class="h-8 w-8 bg-persian-green rounded-full flex justify-center items-center mr-3.5">
              <img class="h-6 w-6" src="{{ asset('image/icon/Ic_check_26px.svg') }}">
            </div>
            GxP regulations and implementation
          </li>
          <li class="flex lg:items-center my-9">
            <div class="h-8 w-8 bg-persian-green rounded-full flex justify-center items-center mr-3.5">
              <img class="h-6 w-6" src="{{ asset('image/icon/Ic_check_26px.svg') }}">
            </div>
            International pharmacy
          </li>
          <li class="flex lg:items-center my-9">
            <div class="h-8 w-8 bg-persian-green rounded-full flex justify-center items-center mr-3.5">
              <img class="h-6 w-6" src="{{ asset('image/icon/Ic_check_26px.svg') }}">
            </div>
            Pharmaceutical development
          </li>
          <li class="flex lg:items-center my-9">
            <div class="h-8 w-8 bg-persian-green rounded-full flex justify-center items-center mr-3.5">
              <img class="h-6 w-6" src="{{ asset('image/icon/Ic_check_26px.svg') }}">
            </div>
            Health economics
          </li>
          <li class="flex lg:items-center my-9 lg:pr-0">
            <div class="h-8 w-8 min-h-8 min-w-8 bg-persian-green rounded-full flex justify-center items-center mr-3.5">
              <img class="h-6 w-6" src="{{ asset('image/icon/Ic_check_26px.svg') }}">
            </div>
            <span class="lg:w-full w-3/4">Physician and HCP training and engagement</span>
          </li>
          <li class="flex lg:items-center">
            <div class="h-8 w-8 bg-persian-green rounded-full flex justify-center items-center mr-3.5">
              <img class="h-6 w-6" src="{{ asset('image/icon/Ic_check_26px.svg') }}">
            </div>
            Patient and charity engagement
          </li>
        </ul>
      </div>
      <div>
        <img class="lg:w-auto sm:w-3/4" src="{{ asset('image/iStock-1015425392.png') }}">
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:my-36 my-16">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="lg:grid grid-cols-2">
      <div>
        <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mb-6">Typical projects</h2>
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          <span class="4xl:block">Typically, our team works with functions across your</span>
          <span class="4xl:block">pharma biotech company, providing insight into:</span>
        </p>
        <img class="lg:hidden sm:w-3/4 block mt-8" src="{{asset('image/iStock-1217833715.png')}}">
        <ul class="4xl:text-22px text-xl font-bold lg:-tracking-0.9px -tracking-0.5px lg:mt-16 mt-8">
          <li class="flex lg:items-center items-baseline">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            <span class="lg:w-full w-11/12">Whether an EAP is right for your therapy/company</span>
          </li>
          <li class="flex lg:items-center items-baseline my-6">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            <span class="lg:w-full w-11/12 lg:mr-0 -mr-2">Integration into further development including real world data collection</span>
          </li>
          <li class="flex lg:items-center items-baseline my-6">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            <span class="lg:w-full w-11/12">Feasibility studies by country, region and globally</span>
          </li>
          <li class="flex lg:items-center items-baseline my-6">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            <span class="lg:w-full w-11/12">Preparation of business cases</span>
          </li>
          <li class="flex lg:items-center items-baseline">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            <span class="lg:w-full w-11/12">Development of EAP policies</span>
          </li>
        </ul>
      </div>
      <div class="lg:block hidden">
        <img src="{{asset('image/iStock-1217833715.png')}}">
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:mt-40 lg:mb-36 mt-16 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <h2 class="4xl:text-32px text-xl font-bold lg:mb-16 mb-8">Our consulting leads</h2>
    <div class="grid lg:grid-cols-3 lg:gap-5 gap-20 lg:mb-14 mb-16">
      <div>
        <img class="mb-3" src="{{asset('image/Josh-team.jpg')}}">
        <p class="text-lochmara lg:text-2xl text-xl font-bold">Josh Cocklin</p>
        <p class="text-lg lg:leading-28px leading-24px lg:mt-6 mt-2 lg:pr-0 pr-2">
          A legal adviser by training and leading regulatory and medical ethics expert within the UK and EU. He brings a
          rigorous legal and analytical mind to all the issues.
        </p>
      </div>
      <div>
        <img class="mb-3" src="{{ asset('image/Robert-team.jpg') }}">
        <p class="text-lochmara lg:text-2xl text-xl font-bold">Robert Donnell</p>
        <p class="text-lg lg:leading-28px leading-24px lg:mt-6 mt-2 lg:pr-0 pr-1">
          A 25-year veteran of the pharma industry who has worked in commercial and supply chain functions. He brings
          the knowledge of integration and hands on experience in international EAP.
        </p>
      </div>
      <div>
        <img class="mb-3" src="{{asset('image/Kirti-team.jpg')}}">
        <p class="text-lochmara lg:text-2xl text-xl font-bold">Kirti Patel</p>
        <p class="text-lg lg:leading-28px leading-24px lg:mt-6 mt-2 lg:pr-0 pr-1">
          A qualified pharmacist with a focus on international pharmacy, Kirti combines deep knowledge of practice and
          regulation with a patient-centric approach.
        </p>
      </div>
    </div>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-3">
      The team has worked on numerous consulting projects across regulatory jurisdictions, therapy areas, and innovative
      companies. They’re also supported by an expert team from across Smartway.
    </p>
    <div class="text-center lg:my-40 my-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">
        Talk to the team
      </a>
    </div>
  </section>
  @include('front.partials.eap-link')
@endsection
