@extends('layouts.front')

@section('meta')
  <title>Supporting Stakeholders and Supporting Patients</title>
  <meta name="description" content="We work with you to develop your patient engagement program from scratch, or support you in its implementation. We are the patient's advocate. We work with stakeholders to develop and deliver programs that have a real positive impact on patients.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('image/ssd-hero.jpg') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('image/SD_Stakeholder_Support.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-4 mb-12">
      Stakeholder Support
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.distribution.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      We unapologetically put the patient at the heart of every program. We understand your objectives and deliver on
      them, but we never lose sight of the patient and the impact these programs can have on them and their families.
    </h2>
    <hr class="h-0.5 bg-black lg:my-36 mt-16 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="lg:grid grid-cols-2">
      <div class="lg:pr-20">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">
            The patient voice</h2>
          <img class="lg:hidden sm:3/4 my-8" src="{{ asset('image/patient_voice.jpg') }}">
          <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-4">
            Our superintendent pharmacist, Kirti Patel, ensures that the voice of the patient is heard in each and every
            program design phase. Working with our clients, we devise compliant patient advocacy engagement plans. We
            can then deliver that ourselves or work with your patient advocacy function. This engagement drives our
            program design in alignment with your objectives.
          </p>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/patient_voice.jpg') }}">
      </div>
    </div>
    <div class="lg:grid grid-cols-2 lg:mt-40 mt-16">
      <div class="lg:block hidden lg:mr-20">
        <img src="{{ asset('image/Stakeholder_training.jpg') }}">
      </div>
      <div class="lg:pl-10">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">
            Stakeholder training</h2>
          <img class="lg:hidden sm:3/4 my-8" src="{{ asset('image/Stakeholder_training.jpg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="lg:pr-10">
              Physicians and pharmacists are all supported with agreed training and information, made accessible through
              SMARThub® or in collaboration with your Medical Affairs team.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center sm:mt-36 mt-16 lg:mb-40 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="sm:inline hidden button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-20">Lean
        how we put the patient at the center</a>
      <a href="{{ route('connect-with-us') }}"
         class="sm:hidden button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Lean
        more</a>
    </div>
  </section>
  @include('front.partials.distribution-link')
@endsection
