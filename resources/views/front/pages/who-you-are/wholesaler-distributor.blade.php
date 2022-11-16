@extends('layouts.front')

@section('meta')
  <title>Working with the Aid & Development Sector</title>
  <meta name="description" content="We are a leading UK based pharmacy wholesaler and distributor of pharmaceuticals and branded medicines supplies.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/distribution-manager-2021-04-05-21-47-52-utc-header.png') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Wholesaler_Distributor.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-2">
      <span class="block">Wholesaler/</span>
      <span class="block">Distributor</span></h1>
    <p class="4xl:text-34px sm:text-2xl text-22px font-semibold -mt-1 4xl:leading-44px leading-tight sm:pr-0 pr-2 sm:mb-0 -mb-5">
      <span class="xl:block">We work with wholesalers and distributors in over</span>
      <span class="xl:block">98 countries, supplying them with products not</span>
      <span class="xl:block">otherwise
          available in their county. We source</span>
      <span class="xl:block">products from over 25 countries.</span>
    </p>
  </div>
@endsection

@section('content')
  @include('front.partials.who-you-are')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-36 sm:mt-20 mt-8">
    <div class="grid lg:grid-cols-2">
      <div>
        <h2 class="quarto-font 4xl:text-64px xl:text-44px text-34px 4xl:leading-70px xl:leading-48px leading-40px lg:mb-14 mb-7 4xl:pr-10 xl:pr-16 pr-4">
          We provide a reliable, global source of branded and generic pharmaceuticals from over
          <span class="4xl:block">98 countries.</span>
        </h2>
        <img class="lg:hidden lg:w-auto sm:w-3/4 mb-7" src="{{ asset('image/reliable_global.jpg') }}">
        <p class="4xl:text-32px xl:text-21px lg:text-2xl text-lg 4xl:leading-45px xl:leading-28px leading-24px 4xl:-mr-6 xl:pr-24 pr-4">
          From our bases in the EU, UK, India and UAE, we source globally to obtain the best prices for you. Our network
          of audited, approved suppliers has been built up over 25 years– and we can work with you to build your
          business.
        </p>
      </div>
      <div class="lg:block hidden">
        <img class="ml-auto mr-0" src="{{ asset('image/reliable_global.jpg') }}">
      </div>
    </div>
    <h3 class="quarto-font 4xl:text-45px lg:text-31px text-34px 4xl:leading-45px lg:leading-34px leading-40px lg:mt-24 mt-6">
      We’re trusted globally for quality, choice and reach. Contact us to discuss how we can help.
    </h3>
    <hr class="h-0.5 bg-black lg:my-40 mt-16 mb-10">
  </section>
  <section class="lg:hidden relative pb-5 mb-28">
    <div class="blocks-slider text-white">
      <div class="glide__track" data-glide-el="track">
        <div class="glide__slides">
          <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}"
             class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Branded_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Branded/Generic
              Medicines</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">Smartway can source</span>
              <span class="block">and supply branded and</span>
              <span class="block">generic pharmaceuticals</span>
              <span class="block">on a global basis.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
            <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Unlicensed_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Unlicensed Medicines</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We source from over</span>
              <span class="block">25 countries to supply</span>
              <span class="block">ULM to wholesalers</span>
              <span class="block">globally.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/EU_UK_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">EU/UK Medicines</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">With procurement hubs</span>
              <span class="block">across the UK and</span>
              <span class="block">Europe, we empower</span>
              <span class="block">access to medicines</span>
              <span class="block">from all countries.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
            <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/USA_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">USA Medicines</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">With procurement hubs</span>
              <span class="block">across the USA, we</span>
              <span class="block">empower access to</span>
              <span class="block">medicines from</span>
              <span class="block">all countries.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.eap.index') }}" class="image-box relative block">
            <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/Innovative_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Innovative New Medicines</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We partner with</span>
              <span class="block">manufacturers to design</span>
              <span class="block">and manage programs</span>
              <span class="block">that allow access to</span>
              <span class="block">therapies before they</span>
              <span class="block">are commercially</span>
              <span class="block">launched. We can</span>
              <span class="block">empower access to a</span>
              <span class="block">large number</span>
              <span class="block">of therapies.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
                  class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
              more
            </button>
          </a>
          <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
            <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
            <div class="image-container relative w-full h-full">
              <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
              <div class="image w-full h-full" style="background-image: url({{ asset('image/iStock-1044460686.png') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
            </div>
            <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Animal Health Medicines</p>
            <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute pr-14">
              <span class="block">We’re fully licensed for</span>
              <span class="block">animal health medicines</span>
              <span class="block">and can supply on a</span>
              <span class="block">global scale.</span>
            </p>
            <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
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
      <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}"
         class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Branded_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Branded/Generic
          Medicines</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">Smartway can source and supply</span>
          <span class="block">branded and generic pharmaceuticals</span>
          <span class="block">on a global basis.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
        <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Unlicensed_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Unlicensed Medicines</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">We source from over 25 countries to</span>
          <span class="block">supply ULM to wholesalers globally.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/EU_UK_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">EU/UK Medicines</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">With procurement hubs across the</span>
          <span class="block">UK and Europe, we empower access</span>
          <span class="block">to medicines from all countries.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
        <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/USA_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">USA Medicines</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">With procurement hubs across the</span>
          <span class="block">USA, we empower access to</span>
          <span class="block">medicines from all countries.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.eap.index') }}" class="image-box relative block">
        <div class="bg-lochmara absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/Innovative_Medicines.jpg') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Innovative New Medicines</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">We partner with manufacturers to</span>
          <span class="block">design and manage programs that</span>
          <span class="block">allow access to therapies before they</span>
          <span class="block">are commercially launched. We can</span>
          <span class="block">empower access to a large number</span>
          <span class="block">of therapies.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
              class="inline filter 4xl:w-7 4xl:h-7 lg:w-5 lg:h-5 w-7 h-7 invert 4xl:mr-4 mr-3" src="{{ asset('image/icon/icn.svg') }}">Explore
          more
        </button>
      </a>
      <a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}" class="image-box relative block">
        <div class="bg-persian-green absolute top-0 bottom-0 right-0 left-0"></div>
        <div class="image-container relative w-full h-full">
          <div class="gray-radial-gradient opacity-70 absolute top-0 bottom-0 right-0 left-0"></div>
          <div class="image w-full h-full" style="background-image: url({{ asset('image/iStock-1044460686.png') }});background-position: center;background-repeat: no-repeat;background-size: cover;"></div>
        </div>
        <p class="title 3xl:text-4xl xl:text-2xl text-22px font-bold absolute">Animal Health Medicines</p>
        <p class="text 3xl:text-34px 2xl:text-2xl xl:text-22px lg:text-2xl text-31px quarto-font leading-tight absolute">
          <span class="block">We’re fully licensed for animal</span>
          <span class="block">health medicines and can supply</span>
          <span class="block">on a global scale.</span>
        </p>
        <button class="link 4xl:text-2xl xl:text-17px text-2xl font-bold flex items-center absolute"><img
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
