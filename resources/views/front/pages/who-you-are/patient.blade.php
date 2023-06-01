@extends('layouts.front')

@section('meta')
  <title>A Patient-centric Licensed Supplier of Pharmaceuticals</title>
  <meta name="description" content="Smartway is a patient-centric UK based licensed supplier of pharmaceuticals who offers high quality and safe access to affordable generic drugs.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/patient-hero.jpg') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Patient-hero-mobile.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-2">
      Patient
    </h1>
    <p class="4xl:text-34px sm:text-2xl text-22px font-semibold -mt-1 4xl:leading-44px leading-tight sm:pr-0 pr-4 sm:mb-0 -mb-4">
      <span class="xl:block">Smartway is a licensed supplier of Pharmaceuticals and can only</span>
      <span class="xl:block">supply to Pharmacies and registered wholesalers. In the UK our</span>
      <span class="xl:block">distance pharmacy can supply patient directly.</span>
    </p>
  </div>
@endsection

@section('content')
  @include('front.partials.who-you-are')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-36 sm:mt-20 mt-8">
    <div class="grid lg:grid-cols-2">
      <div>
        <h2 class="quarto-font 4xl:text-64px xl:text-44px text-34px 4xl:leading-70px xl:leading-48px leading-40px lg:mb-14 mb-7 4xl:pr-10 lg:pr-20">
          Putting patients at the center of all we do.
        </h2>
        <img class="lg:hidden lg:w-auto sm:w-3/4 mb-7" src="{{ asset('image/checking-blood-pressure-2021-04-05-08-30-40-utc-2.png') }}">
        <p class="4xl:text-32px xl:text-21px lg:text-2xl text-lg 4xl:leading-45px xl:leading-28px leading-24px 4xl:-mr-2 4xl:pr-0 xl:pr-20 pr-4">
          At Smartway, we’re committed to empowering access to medicines on a global basis. We work closely with
          manufacturers, physicians and pharmacists to provide these medicines. Above all else, we put patients first –
          and we’ll do as much as possible to
          <span class="sm:inline block">support you.</span>
        </p>
        <h3 class="quarto-font 4xl:text-45px lg:text-31px text-34px 4xl:leading-45px lg:leading-34px leading-40px lg:mt-28 mt-6">
          We’ll use our regulatory knowledge and global network to deliver the products that you need.
        </h3>
      </div>
      <div class="lg:block hidden">
        <img class="ml-auto mr-0 mt-20 4xl:w-auto sm:w-3/4" src="{{ asset('image/patient_center.jpg') }}">
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 mt-16 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4 xl:mb-40 mb-20">
    <div class="grid xl:grid-cols-2 grid-cols-1 xl:gap-y-40 gap-y-20">
      <div class="xl:flex hidden items-center">
        <img class="my-auto mt-2" src="{{ asset('image/Private_Prescriptions-patients.jpg') }}">
      </div>
      <div class="xl:pl-28">
        <a href="{{ route('who-you-are.private-prescriptions') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none sm:mr-0 -mr-4 block">
          Smartway Pharmacy specialises in fulfilling private prescriptions for patients in an efficient and quality
          driven manner. We offer a full home delivery service.
        </a>
        <img class="xl:hidden 4xl:w-auto sm:w-3/4 my-7" src="{{ asset('image/Private_Prescriptions-patients.jpg') }}">
        <p class="lg:text-2xl sm:text-xl text-lg lg:leading-37px leading-24px mt-5 xl:mb-16 mb-9 lg:pr-0 pr-5">
          We provide a cost-effective, remote dispensing solution for patients who have previously experienced delays
          accessing their medicines, as the products were not readily available from their local pharmacy.
        </p>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('who-you-are.private-prescriptions') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>

      <div class="xl:pr-20">
        <h3 class="quarto-font 4xl:text-62px text-44px leading-none">Innovative New Therapies</h3>
        <img class="xl:hidden 4xl:w-auto sm:w-3/4 my-7" src="{{ asset('image/Innovative_Therapies.jpg') }}">
        <p class="lg:text-2xl sm:text-xl text-lg lg:leading-37px leading-24px mt-5">
          We partner with manufacturers to design and manage programs that allow access to therapies before they are
          commercially launched. We can empower access to a large number of therapies. We can only supply to a
          registered healthcare facility such as a hospital or pharmacy so please contact your physician to discuss more
          and direct them to Smartway. For more information,
          <span class="4xl:block">please contact us.</span>
        </p>
      </div>
      <div class="xl:flex hidden items-center">
        <img src="{{ asset('image/Innovative_Therapies.jpg') }}">
      </div>
    </div>
    <div class="text-center lg:mt-40 mt-20">
      <a href="{{ route('connect-with-us')}}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 4xl:px-20 px-10 block sm:inline-block">Contact
        us</a>
    </div>
  </section>
@endsection
