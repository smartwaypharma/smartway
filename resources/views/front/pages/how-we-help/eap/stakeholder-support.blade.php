@extends('layouts.front')

@section('meta')
  <title>How we help - EAP - Stakeholder support</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-522306444-header.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/SD_Stakeholder_Support.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4 sm:mb-0 mb-14">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none">
      Stakeholder Support
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 mt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.eap.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 4xl:-mr-3">
      <span class="4xl:block">We unapologetically put the patient at the</span>
      <span class="4xl:block">heart of every program. We understand your</span>
      <span class="4xl:block">objectives and deliver on them, but we never</span>
      <span class="4xl:block">lose sight of the patient and the impact these</span>
      <span class="4xl:block">programs can have on them and their families.</span>
    </h2>
    <hr class="h-0.5 bg-black lg:my-36 my-16">
    <div class="lg:grid grid-cols-2 lg:mb-32 mb-16">
      <div class="lg:pr-20">
        <div>
          <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mt-2 mb-6">The patient voice</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/The_patient_voice.jpg') }}">
          <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-2">
            Our superintendent pharmacist, Kirti Patel, ensures that the voice of the patient is heard in each and every
            program design phase. Working with our clients, we devise compliant patient advocacy engagement plans. We
            can
            then deliver that ourselves or work with your patient advocacy function. This engagement drives our program
            design in alignment with your objectives.
          </p>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/The_patient_voice.jpg') }}">
      </div>
    </div>
    <div class="lg:grid grid-cols-2 lg:mt-40 mt-6">
      <div class="lg:block hidden">
        <img src="{{ asset('image/iStock-1215773097.png') }}">
      </div>
      <div class="lg:pl-24">
        <div>
          <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mt-2 mb-6">Stakeholder training</h2>
          <img class="lg:hidden sm:w-3/4 my-8" src="{{ asset('image/iStock-1215773097.png') }}">
          <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            Physicians and pharmacists are all supported with agreed training and information, made accessible through
            SMARThub® or in collaboration with your Medical Affairs team.
          </p>
        </div>
      </div>
    </div>
    <div class="text-center lg:mt-44 lg:mb-40 my-20">
      <a href="{{ route('connect-with-us') }}"
         class="hidden button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 sm:inline-block">Learn
        how we put the
        patient
        at the centre</a>
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 sm:hidden block">Learn more</a>
    </div>
  </section>
  @include('front.partials.eap-link')
@endsection
