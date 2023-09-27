@extends('layouts.front')

@section('meta')
  <title>Who you are - Aesthetics</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" style="transform: scale(-1, 1);"
       src="{{ asset('/image/hero-aesthetics.jpg') }}">
  <img class="inline-block sm:hidden w-full" style="transform: scale(-1, 1);"
       src="{{ asset('/image/Aesthetics-hero.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4 sm:mb-0 -mb-6">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none">
      Aesthetics
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('who-you-are.healthcare-professional') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-44px text-34px 4xl:leading-102px xl:leading-48px leading-40px sm:mb-12 mb-6">
      Specialising in the supply of Dermal Fillers and Skincare in an efficient and quality driven manner.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-24">
      As a fully licenced UK Pharmacy, we have the strength of our global supply chain giving you the confidence in the supply integrity and passing on the cost savings to the patient. Our continued aim is to deliver exceptional pharmacy services to patients and healthcare professionals across the UK. We offer a full home delivery service.
    </p>
    <hr class="h-0.5 bg-black lg:my-20 mt-16 mb-16">
    <h2 class="4xl:text-32px xl:text-2xl md:text-xl text-22px font-bold">Our products
      include:</h2>
    <ul class="4xl:text-32px text-2xl 4xl:leading-36px leading-28px font-semibold lg:-tracking-0.8px -tracking-0.6px mt-6">
      <li class="flex items-baseline">
        <div
            class="bg-persian-green text-white min-w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
        Botulinum Toxins
      </li>
      <li class="flex items-baseline lg:my-6 lg:my-4 my-6">
        <div
            class="bg-persian-green text-white min-w-4 h-4 rounded-full flex items-center justify-center mr-3 lg:pr-0 pr-4"></div>
        Dermal Fillers
      </li>
      <li class="flex items-baseline">
        <div
            class="bg-persian-green text-white min-w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
        <div>
          Skincare
        </div>
      </li>
    </ul>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:mt-16 mt-6">
      <p class="lg:pr-0 pr-10">
        To explore our complete range of products, please visit <a target="_blank" href="https://www.smartwayas.co.uk/" class="underline">Smartway Aesthetics</a> , where you will find information about our Aesthetics division and discover why healthcare professionals in the UK trust us as their supply chain partner.
      </p>
      <p class="lg:mt-16 mt-7 lg:pr-0 pr-3">
        Once you've registered with our pharmacy, you can log in to your online account, and access our competitive prices.
      </p>
    </div>
    <div class="text-center lg:my-20 mt-8 mb-8">
      <a target="_blank" href="https://www.smartwayas.co.uk/registration/"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-20 px-10 block sm:inline-block">Register with Smartway Aesthetics</a>
    </div>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:mt-16 mt-6 mb-16">
      <p class="lg:mt-16 mt-7 lg:pr-0 pr-3">
        Alternatively, you can contact a member of our pharmacy team today at <a target="_blank" href="tel:+442085457731" class="underline">+44 (0)208 545 7731</a> to discuss the comprehensive range of products and services available to you and your clinic.
      </p>
    </div>
    <div class="lg:grid grid-cols-2">
      <div class="lg:pr-20">
        <div>
          <h3 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mb-6">Ordering
            guidelines</h3>
          <img class="lg:hidden lg:w-auto sm:w-3/4 my-6" src="{{ asset('image/Ordering_guidelines.jpg') }}">
          <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            SmartRx, our e-prescribing software, is a digital platform which enables prescribers to electronically
            prescribe and transmit a prescription to our online pharmacy. We are registered with the General
            Pharmaceutical Council. The medication can be sent direct to a patient or to  your clinic.

          </p>
          <div class="lg:mt-16 mt-6">
          <a target="_blank" href="https://smartrx.co.uk/"
             class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-20 px-10 block sm:inline-block text-center">Find out more about SmartRx</a>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/Ordering_guidelines.jpg') }}">
      </div>
    </div>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:mt-20 mt-6">
      <p class="lg:pr-0 pr-2">
        Easy to use and efficient for your practice, e-prescription allows a prescriber to create a prescription
        or clinic order in seconds. Authorised clinic staff can also prepare a prescription for a prescriber to
        authorise, saving vital clinic time for
        your patients.
      </p>
      <h3 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold mt-16 lg:mb-5 mb-7">
        Prescriber registration</h3>
      <p class="lg:pr-0 pr-2">
        To place an order, you will need to register by following a few short steps - register or login as an existing
        prescriber.
      </p>
    </div>
    <div class="text-center lg:my-20 mt-16 mb-20">
      <a target="_blank" href="https://smartrx.co.uk/rxpad/registration"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-20 px-10 block sm:inline-block">Register/Login with SmartRx</a>
    </div>
  </section>
@endsection
