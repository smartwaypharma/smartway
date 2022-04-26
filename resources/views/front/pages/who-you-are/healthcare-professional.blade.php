@extends('layouts.front')

@section('meta')
  <title>Who you are - Healthcare Professional</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/muslim-female-doctor-with-stethoscope-on-neck-posi-CQW7DU5-header.png') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Healthcare_Professional.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-40 px-4 sm:mt-4 sm:mb-0 -mb-3">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-2">
      <span class="block">Healthcare</span>
      <span class="block">Professional</span></h1>
    <p class="4xl:text-34px sm:text-2xl text-22px font-semibold -mt-1 4xl:leading-44px leading-tight">
      <span class="xl:block">We help healthcare professionals on a global</span>
      <span class="xl:block">basis, enabling access to the medicines they</span>
      <span class="xl:block">require to treat their patients.</span>
    </p>
  </div>
@endsection

@section('content')
  @include('front.partials.who-you-are')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-36 sm:mt-20 mt-8">
    <div class="grid lg:grid-cols-2">
      <div>
        <h2 class="quarto-font 4xl:text-64px xl:text-44px text-34px 4xl:leading-70px xl:leading-48px leading-40px xl:tracking-0.35px 4xl:mb-14 lg:mb-10 mb-7 4xl:pr-10 xl:pr-20 pr-10">
          As a healthcare professional, you want access to the right medicine at the right time for your patient.
        </h2>
        <img class="lg:hidden lg:w-auto sm:w-3/4 mb-7" src="{{ asset('image/Healthcare_Pro.jpg') }}">
        <p class="4xl:text-32px xl:text-21px lg:text-2xl text-lg 4xl:leading-45px xl:leading-28px leading-24px 4xl:-mr-2 4xl:pr-0 3xl:pr-4 xl:pr-20 pr-2">
          Smartway works in partnership with you to deliver that. We use global expertise and infrastructure to source
          and deliver whatever you need, wherever you need it. And with cutting edge technology, we deliver quality you
          can count on.
        </p>
      </div>
      <div class="lg:block hidden 4xl:pl-0 pl-5">
        <img class="ml-auto mr-0" src="{{ asset('image/Healthcare_Pro.jpg') }}">
      </div>
    </div>
    <h3 class="quarto-font 4xl:text-45px lg:text-31px text-34px 4xl:leading-45px lg:leading-34px leading-40px lg:mt-28 mt-6">
      No matter where you are, Smartway can help. From NHS hospitals to 98 countries worldwide, we empower access to
      medicines for healthcare professionals.
    </h3>
    <hr class="h-0.5 bg-black lg:my-40 mt-6 mb-10">
  </section>
  <section class="lg:hidden relative mb-28">
    <div class="blocks-slider text-white">
      <div class="glide__track" data-glide-el="track">
        <div class="glide__slides">
          <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Unlicensed_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Unlicensed Medicines</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We’re an approved NHS</span>
              <span class="block">supplier and provide</span>
              <span class="block">unlicensed medicines</span>
              <span class="block">to physicians and</span>
              <span class="block">pharmacists in the UK,</span>
              <span class="block">UAE and globally.</span>
            </p>
            <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.sexual-health.index') }}" class="image-box relative block">
            <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Sexual_Health_Supply.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Sexual Health Supply</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We regularly supply</span>
              <span class="block">UK hospitals and</span>
              <span class="block">sexual health clinics</span>
              <span class="block">with pharmaceuticals</span>
              <span class="block">and medical disposables.</span>
            </p>
            <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.eap.index') }}" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Innovative_New_Therapies.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Innovative New Therapies</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We partner with</span>
              <span class="block">manufacturers to design</span>
              <span class="block">and manage programs</span>
              <span class="block">that allow access to</span>
              <span class="block">therapies before they’re</span>
              <span class="block">commercially launched.</span>
              <span class="block">We can empower access</span>
              <span class="block">to a large number of</span>
              <span class="block">new therapies.</span>
            </p>
            <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('who-you-are.healthcare-professionals-private-prescriptions') }}" class="image-box relative block">
            <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Private_Prescriptions.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Private Prescriptions</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">Our UK pharmacy can</span>
              <span class="block">dispense any private</span>
              <span class="block">prescriptions direct to</span>
              <span class="block">your patients.</span>
            </p>
            <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('who-you-are.aesthetics') }}" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Aesthetics.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Aesthetics</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">Smartway can source,</span>
              <span class="block">supply and dispense</span>
              <span class="block">aesthetic treatments,</span>
              <span class="block">direct to your patients.</span>
            </p>
            <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
            <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-f h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Animal_Health.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Animal Health</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We work with</span>
                <span class="block">veterinarian practices</span>
                <span class="block">to help them access</span>
                <span class="block">treatments not </span>
                <span class="block">otherwise available in</span>
              <span class="block">their own
                country.</span>
            </p>
            <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="lg:block hidden container 3xl:max-w-3xl px-4 mb-40">
    <div class="grid xl:grid-cols-3 grid-cols-2 gap-5 flex text-white">
      <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Unlicensed_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Unlicensed Medicines</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font 4xl:leading-40px leading-tight absolute">
          <span class="block">We’re an approved NHS supplier</span>
          <span class="block">and provide unlicensed medicines</span>
          <span class="block">to physicians and pharmacists</span>
          <span class="block">in the UK, UAE and globally.</span>
        </p>
        <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.sexual-health.index') }}" class="image-box relative block">
        <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Sexual_Health_Supply.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Sexual Health Supply</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font 4xl:leading-40px leading-tight absolute">
          <span class="block">We regularly supply UK hospitals</span>
          <span class="block">and sexual health clinics</span>
          <span class="block">with pharmaceuticals and</span>
          <span class="block">medical disposables.</span>
        </p>
        <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.eap.index') }}" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Innovative_New_Therapies.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Innovative New Therapies</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font 4xl:leading-40px leading-tight absolute">
          <span class="block">We partner with manufacturers to</span>
          <span class="block">design and manage programs that</span>
          <span class="block">allow access to therapies before</span>
          <span class="block">they’re commercially launched.</span>
          <span class="block">We can empower access to a</span>
          <span class="block">large number of new therapies.</span>
        </p>
        <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('who-you-are.healthcare-professionals-private-prescriptions') }}" class="image-box relative block">
        <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Private_Prescriptions.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Private Prescriptions</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font 4xl:leading-40px leading-tight absolute">
          <span class="block">Our UK pharmacy can dispense any</span>
          <span class="block">private prescriptions direct to</span>
          <span class="block">your patients.</span>
        </p>
        <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('who-you-are.aesthetics') }}" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Aesthetics.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Aesthetics</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font 4xl:leading-40px leading-tight absolute">
          <span class="block">Smartway can source, supply and</span>
          <span class="block">dispense aesthetic treatments,</span>
          <span class="block">direct to your patients.</span>
        </p>
        <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
        <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Animal_Health.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Animal Health</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font 4xl:leading-40px leading-tight absolute">
          <span class="block">We work with veterinarian practices</span>
          <span class="block">to help them access treatments not</span>
          <span class="block">otherwise available in their</span>
          <span class="block">own country.</span>
        </p>
        <button class="link 4xl:text-2xl lg:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ mix('js/animate-blocks.js') }}" defer></script>
@endpush
