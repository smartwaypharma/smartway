@extends('layouts.front')

@section('meta')
  <title>We Provide a Fast and Efficient Private Prescription Service </title>
  <meta name="description" content="Ordering your medication online couldn't be easier at SmartWay. We provide a fast, efficient, and private prescription service to help you get your medicines quickly and conveniently.">

@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1281112563.png') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/who_you_are_Private_Prescription.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-2 mb-56">
      Private Prescriptions
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16" href="{{ route('who-you-are.patient') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-44px text-34px 4xl:leading-102px xl:leading-48px leading-40px sm:mb-12 mb-6 4xl:-mr-4">
      <a href="https://smartwaypharmacy.co.uk/" target="_blank" class="underline">Smartway Pharmacy</a> specialises in fulfilling private prescriptions for patients in an efficient and quality
      driven manner. We offer a full home delivery service.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-6">
      We provide a cost-effective, remote dispensing solution for patients who have previously experienced delays
      accessing their medicines, as the products were not readily available from their local pharmacy.
    </p>
    <hr class="h-0.5 bg-black lg:my-40 mt-16 mb-16">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="grid lg:grid-cols-2 lg:mb-40 mb-16">
      <div class="lg:pr-16">
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          Being part of Smartway, which has serviced the sector for decades, we can offer you:
        </p>
        <img class="lg:hidden lg:w-auto sm:w-3/4 my-7" src="{{ asset('image/iStock-1281481337.png') }}">
        <ul class="4xl:text-25px text-2xl 4xl:leading-34px leading-28px font-semibold -tracking-0.63px lg:mt-16 mt-8 lg:pr-0 pr-6">
          <li class="flex items-baseline">
            <div
                class="bg-persian-green text-white min-w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Competitive pricing for your medicines
          </li>
          <li class="flex items-baseline lg:my-6 my-4">
            <div
                class="bg-persian-green text-white min-w-4 h-4 rounded-full flex items-center justify-center mr-3 lg:pr-0 pr-4"></div>
            Experienced staff committed to high levels of customer service
          </li>
          <li class="flex items-baseline lg:my-6 my-4">
            <div
                class="bg-persian-green text-white min-w-4 h-4 rounded-full flex items-center justify-center mr-3 lg:pr-0 pr-4"></div>
            Safe and speedy delivery of your medicines
          </li>
          <li class="flex items-baseline">
            <div
                class="bg-persian-green text-white min-w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            <div>
              Reliability by ensuring good stock levels of a wide range of medicines including unlicensed medicines,
              which our parent
              <span class="sm:inline block">company specializes in.</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="lg:flex hidden justify-center items-center lg:mt-0 mt-6">
        <img src="{{ asset('image/iStock-1281481337.png') }}">
      </div>
    </div>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:font-bold lg:pr-5">
      We are committed to making our dispensing procedure efficient by investing in the development of our people and
      systems. An example of this is the recent launch of our innovative e-prescribing platform, RXPad, which enables
      clinicians to send prescriptions electronically to Smartway Pharmacy, eliminating the need for paper prescriptions
      to be posted to us, enabling patients to receive their medicines faster.
    </p>
    <div class="grid lg:grid-cols-2 lg:mt-36 mt-16 lg:mb-40 mb-16">
      <div class="lg:pr-14">
        <h2 class="4xl:text-32px xl:text-2xl md:text-xl text-22px font-bold mb-6">What are unlicensed
          medicines?</h2>
        <img class="lg:hidden lg:w-auto sm:w-3/4 my-7" src="{{ asset('image/iStock-1134381003.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          <p class="lg:mb-9 mb-6 lg:pr-0 pr-4">
            These are medicines that are not registered for use in the UK. Most of these medicines are registered in
            other countries. A UK registered healthcare professional may wish to prescribe an unlicensed medicine
            alternative to a UK registered medicine if they feel it is clinically necessary.
          </p>
          <p>
            We have the advantage of having access to many unlicensed medicines through our wholesale parent company,
            which is authorized to import such medicines.
          </p>
        </div>
      </div>
      <div class="lg:flex hidden justify-center items-center lg:mt-0 mt-6">
        <img src="{{ asset('image/iStock-1134381003.png') }}">
      </div>
    </div>
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="4xl:text-32px sm:text-xl text-22px 4xl:leading-36px leading-28px font-bold lg:text-center lg:mb-16 mb-6 lg:pr-0 pr-10">
      How to get your medicines dispensed</p>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p>Simply follow these easy steps:</p>
      <div class="flex items-baseline lg:my-10 my-8">
        <div class="text-lg bg-persian-green text-white min-w-8 h-8 rounded-full flex items-center justify-center mr-4">
          1
        </div>
        <p>Once you receive your prescription from your clinician, contact Smartway Pharmacy. We can provide you with
          a quote for your prescription. Either call us on
          <span class="sm:inline block"><a href="tel:+44 208 545 7718">+44 208 545 7718</a> or
          email us on
          <a class="text-lochmara -tracking-0.6px sm:inline block sm:mt-0 lg:mt-4 mt-2"
             href="mailto:info@smartwaypharmacy.co.uk">info@smartwaypharmacy.co.uk</a></span>
        </p>
      </div>
      <div class="flex items-baseline">
        <div class="text-lg bg-persian-green text-white min-w-8 h-8 rounded-full flex items-center justify-center mr-4">
          2
        </div>
        <p>
          If you are happy with our quote, we will ask you to post your prescription to us using our
          <span class="font-bold">Royal Mail Freepost</span>
          service. Simply write the following on the envelope containing your prescription:
        </p>
      </div>
      <div class="text-center my-16">
        <p class="4xl:text-32px sm:text-xl text-lg font-semibold lg:mb-8 mb-2">FREEPOST SMARTWAY PHARMACY</p>
        <p class="lg:px-0 px-6 lg:font-normal font-semibold">
          No need to affix a postage stamp and no need to write our address.
        </p>
      </div>
      <div class="flex items-baseline mb-10 lg:pr-10 pr-3">
        <div class="text-lg bg-persian-green text-white min-w-8 h-8 rounded-full flex items-center justify-center mr-4">
          4
        </div>
        <p>
          The Smartway Pharmacy team will contact you upon receipt of your prescription for payment. We can either take
          payment over the phone or we can send you a secure online payment link to your
          <span class="sm:inline block">email address.</span>
        </p>
      </div>
      <div class="flex items-baseline lg:pr-0 pr-4">
        <div class="text-lg bg-persian-green text-white min-w-8 h-8 rounded-full flex items-center justify-center mr-4">
          5
        </div>
        <p>
          Once payment has been received, your medicines will be dispatched for a next day tracked delivery using DPD.
          DPD will inform you of the approximate time of delivery in the morning of the delivery day either by text
          message or email.
        </p>
      </div>
      <p class="4xl:text-32px sm:text-xl text-2xl lg:font-normal font-semibold text-center lg:mt-28 mt-6">
        For further details or queries please contact Smartway Pharmacy by phone on
        <a class="sm:inline block" href="tel:+44 208 545 7718">+44 208 545 7718</a></p>
    </div>
    <div class="text-center lg:mt-20 mt-20 lg:mb-40 mb-20">
      <a href="{{ route('connect-with-us')}}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-20 px-10 block sm:inline-block">Contact
        us</a>
    </div>
  </section>
@endsection
