@extends('layouts.front')

@section('meta')
  <title>Fast and Efficient Private Prescription Service</title>
  <meta name="description" content="Smartway offers fast and efficient private prescription service for medicines for healthcare professionals.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/hero-healthcare-professionals-private-prescription.jpg') }}">
  <img class="inline-block sm:hidden w-full"
       src="{{ asset('/image/Healthcare_who_you_are_Private_Prescription.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4 sm:mb-0 -mb-6">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-16">
      Private Prescriptions
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('who-you-are.healthcare-professional') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-44px text-34px 4xl:leading-102px xl:leading-48px leading-40px sm:mb-12 mb-6 4xl:-mr-2">
      The Smartway Pharmacy specialises in fulfilling private prescriptions for patients in an efficient and quality
      driven manner. We offer a full home delivery service.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-24 pr-4">
      A fully licenced UK Pharmacy, we have the strength of our global supply chain giving you the confidence in the
      supply integrity and passing on the cost savings to the patient. Our continued aim is to deliver exceptional
      pharmacy services to patients and healthcare professionals across the UK.
    </p>
    <hr class="h-0.5 bg-black lg:my-36 mt-16 mb-20">
    <div class="lg:grid grid-cols-2">
      <div class="lg:pr-10">
        <div>
          <h3 class="4xl:text-32px xl:text-2xl md:text-xl text-22px font-bold mb-6">
            RXPad</h3>
          <img class="lg:hidden lg:w-auto sm:w-3/4 my-8" src="{{ asset('image/RXPad.jpg') }}">
          <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-1">
            RXPad is an e-prescribing module developed by Smartway to enable seamless prescribing of private
            prescriptions by healthcare practitioners. RXPad removes the need for hand-written, paper-based
            prescriptions to be posted to the patient or pharmacy and allows for healthcare practitioners to incorporate
            the cost of medicines into patient’s treatment plan.
          </p>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/RXPad.jpg') }}">
      </div>
    </div>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:mt-20 mt-7">
      <p class="lg:mb-9 mb-6 lg:pr-6 pr-2">
        Join RXPad and discover why healthcare professionals in the UK trust us as their supply chain partner. Once you
        have registered, you will be able to login to your online account and start e-prescribing for your patients.
      </p>
      <p class="lg:mb-5 mb-2">
        You can also speak with a member of our pharmacy team today on +44 208 545 7731 to discuss the full range of
        products and services available to you, your clinic, and patients.
      </p>
      <a class="text-lochmara lg:mb-14 mb-7 block" href="https://www.rxpad.co.uk/">https://www.rxpad.co.uk/</a>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px font-bold lg:pr-24">
        Our pharmacy team is available from 9am to 5.30pm. If we are closed and you have an urgent medical query, please
        call 111 for out-of-hours NHS services.
      </p>
    </div>
    <div class="text-center lg:my-40 mt-16 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-20 px-10 block sm:inline-block">Contact
        Us</a>
    </div>
  </section>
@endsection
