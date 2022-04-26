@extends('layouts.front')

@section('meta')
  <title>How we help - EAP - What is an EAP?</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1220518444-header.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/What_Early_Access_Program.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-5">
      <span class="block">What is an Early</span>
      <span class="block">Access Program?</span></h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 mt-20">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('how-we-help.eap.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      <span class="4xl:block">An Early Access Program (EAP) gives access</span>
      <span class="4xl:block">to innovative therapies that are not available</span>
      <span class="4xl:block">in the country of treatment.</span>
    </h2>
    <div class="lg:grid grid-cols-2">
      <div class="flex flex-col justify-center">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-20">
          <p class="lg:mb-6 mb-8">
            EAPs are known by differing names depending on the regulatory jurisdiction. These include Expanded Access,
            Early Access, Compassionate Use and Named Patient Programs.
          </p>
          <div class="lg:hidden sm:w-3/4 block mb-10">
            <img src="{{ asset('image/eap_gra.svg') }}">
          </div>
          <p class="pr-2 sm:pr-0">
            These solutions are all used when there’s significant unmet clinical need, when all other alternatives are
            exhausted, or when there’s no suitable treatment alternative.
          </p>
        </div>
      </div>
      <div class="hidden lg:block">
        <img src="{{ asset('image/eap_gra.svg') }}">
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:mt-40 lg:mb-36 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="4xl:text-32px xl:text-2xl text-lg 4xl:leading-37px xl:leading-28px leading-24px lg:mb-24 mb-8">
      Physicians want to do the best for their patients and often ask for access to innovative new therapies.
    </p>
    <h2 class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold lg:pr-0 pr-20">There are 2 main types of programs</h2>
    <div class="lg:grid grid-cols-2 gap-x-5 lg:mt-16 mt-8">
      <div>
        <p class="quarto-font 4xl:text-62px text-44px leading-none lg:mb-3 mb-6">Individual Patient Programs</p>
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-10">
          Physicians take responsibility for treating an individual patient with a medicine unlicensed in the treatment
          country. In some regulatory jurisdictions, this may require permission from the competent authority and, if
          so, this is granted for the individual patient.
        </p>
      </div>
      <div class="lg:mt-0 mt-12">
        <p class="quarto-font 4xl:text-62px text-44px leading-none lg:mb-3 mb-6">Group or Cohort Programs</p>
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-4 pr-1">
          A central protocol is approved by the relevant competent authority
          for a defined group of patients. This may be patients with a
          specific diagnosis, disease state, or patient profile.
        </p>
      </div>
    </div>
    <div class="overflow-x-scroll lg:mt-16 mt-20">
      <div class="grid grid-cols-8 gap-4 table-grid-template-columns border-b-2 border-lochmara">
        <div></div>
        <div class="px-3 py-9 bg-white-ice">
          <p class="text-xl font-bold">Who initiates</p>
        </div>
        <div class="pl-3 pr-9 py-9 bg-selago">
          <p class="text-xl font-bold">Entry criteria set by</p>
        </div>
        <div class="px-3 py-9 bg-white-ice">
          <p class="text-xl font-bold">Liability</p>
        </div>
        <div class="px-3 py-9 bg-selago">
          <p class="text-xl font-bold">Restricted to protocol use</p>
        </div>
        <div class="px-3 py-9 bg-white-ice">
          <p class="text-xl font-bold"><span class="block">Physician</span> <span class="block">re-imbursement</span></p>
        </div>
        <div class="px-3 py-9 bg-selago">
          <p class="text-xl font-bold">Can therapies be charged for</p>
        </div>
        <div class="px-3 py-9 bg-white-ice">
          <p class="text-xl font-bold">Examples</p>
        </div>
      </div>
      <div class="grid grid-cols-8 gap-4 table-grid-template-columns text-lg leading-25px font-bold text-lochmara border-dashed border-b-2 border-persian-green">
        <div class="px-3 py-8 bg-selago">
          <p>Individual or Named Patient Programs</p>
        </div>
        <div class="px-3 py-8 bg-white-ice">
          <p>Physician</p>
        </div>
        <div class="py-8 bg-selago">
          <p class="px-3 mb-7">Physician/ Regulator</p>
          <p class="pl-3 mb-7">(company may choose to supply only for certain pts)</p>
          <p class="px-3">In many
            countries Regulator may give permission</p>
        </div>
        <div class="px-3 py-8 bg-white-ice">
          <p>Physician/ Institution</p>
        </div>
        <div class="px-3 py-8 bg-selago">
          <img class="mx-auto" src="{{asset('image/cross.svg')}}">
        </div>
        <div class="px-3 py-8 bg-white-ice">
          <img class="mx-auto" src="{{asset('image/cross.svg')}}">
        </div>
        <div class="px-3 py-8 bg-selago">
          <img class="mx-auto" src="{{asset('image/checked.svg')}}">
          <p class="text-base text-center mt-3">In some countries</p>
        </div>
        <div class="pl-3 pr-6 py-8 bg-white-ice">
          <p class="mb-7">nATU – France</p>
          <p>Single patient IND – USA</p>
        </div>
      </div>
      <div class="grid grid-cols-8 gap-4 table-grid-template-columns text-lg leading-25px font-bold text-lochmara">
      <div class="px-3 pt-8 pb-4 bg-selago">
        <p>Group or Cohort Programs</p>
      </div>
      <div class="px-3 pt-8 pb-4 bg-white-ice">
        <p><span class="block">Pharma/</span> Biotech or Group of Physicians</p>
      </div>
      <div class="px-3 pt-8 pb-4 bg-selago">
        <p><span class="block">Pharma/</span> Biotech or Group of Physicians</p>
      </div>
      <div class="px-3 pt-8 pb-4 bg-white-ice">
        <p>
          <span class="block">Physician/</span>
          <span class="block">Pharma/</span>
          <span class="block">Biotech</span></p>
      </div>
      <div class="px-3 pt-8 pb-4 bg-selago">
        <img class="mx-auto" src="{{asset('image/checked.svg')}}">
      </div>
      <div class="px-3 pt-8 pb-4 bg-white-ice">
        <img class="mx-auto" src="{{asset('image/cross.svg')}}">
      </div>
      <div class="px-3 pt-8 pb-4 bg-selago">
        <img class="mx-auto" src="{{asset('image/cross.svg')}}">
      </div>
      <div class="pl-3 pr-6 pt-8 pb-4 bg-white-ice">
        <p>cATU – France EAMS – UK Treatment IND – USA</p>
      </div>
    </div>
    </div>
    <p class="4xl:text-32px text-22px 4xl:leading-36px leading-28px font-bold text-center mt-20 lg:mx-0 -mx-10px">
      For a country-by-country analysis of which program is right for you, please get in contact.
    </p>
    <div class="text-center lg:mt-40 lg:mb-32 my-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-16 px-10 block sm:inline-block">Get in touch</a>
    </div>
  </section>
  @include('front.partials.eap-link')
@endsection
