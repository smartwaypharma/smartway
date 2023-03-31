@extends('layouts.front')

@section('meta')
  <title>A One Stop Solution for All Your Sexual Health Supply Needs</title>
  <meta name="description" content="Smartway is the go to NHS provider for contraceptive medicine and medical disposable instruments. We specialize in providing the best quality Sexual Health Supplies at a reasonable price.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/hero-sexual-health.jpg') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Sexual_Health_Supply.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-4 -mb-8">
      Sexual Health Supply
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-40 sm:mt-20 mt-8">
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px lg:mb-12 mb-6 4xl:pr-40 lg:mr-0 -mr-2">
      Smartway Sexual Health is a leading distributor of contraceptive medicines and disposable instruments.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-28">
      Combining 23 years of experience with the infrastructure, scale and reach of Smartway, we’ll help you find the
      supplies you need with a seamless experience from first steps to arrival. So, you can focus on delivering
      exceptional care with confidence that you’re supported by the specialists in sexual health supply.
    </p>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-16 mt-6 mb-6">
      Smartway Sexual Health is the NHS go to provider for all things women’s health related.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-24">
      By offering the complete range of oral contraceptives – both branded and generic – as well as many of the leading
      IUCDs and IUSs, we can offer both competitive pricing and excellent customer service.
    </p>
    <div class="text-center mb-12">
      <div class="hidden sm:inline-block mt-12">
        <a href="{{ asset('pdf/Smartway_SHS_Catalogue_2022.pdf') }}" target="_blank"
           class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white text-center rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Download our Sexual Health Supplies Catalogue</a>
      </div>
      <div class="inline-block sm:hidden mt-12">
        <a href="{{ asset('pdf/Smartway_SHS_Catalogue_2022.pdf') }}" target="_blank"
           class="button 4xl:text-28px lg:text-xl text-sm font-semibold bg-persian-green text-white text-center rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Download our Sexual Health Supplies Catalogue</a>
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:my-20 my-10">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold text-center">Why partner with Smartway?</p>
    <div class="4xl:flex hidden lg:mt-16 mt-7 text-22px pb-4 xl:px-0 px-6">
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-5 min-w-308px mr-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/sh-icn1.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Approved supplier
        </p>
        <p class="mb-7 px-4">
          100% coverage of UK & Irish market.
        </p>
        <p>
          Approved NHS supplier.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 min-w-308px mr-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
             src="{{ asset('image/sh-icn2.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Project management
        </p>
        <p>
          Designated account managers will ensure all projects pulled through to completion.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 min-w-308px mr-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/sh-icn3.svg') }}"/>
        <p class="font-bold leading-tight mb-3">
          Regulatory expertise/ knowledge
        </p>
        <p>
          Regulatory expertise throughout the company, 10% of staff in regulatory. Leaders in technology to drive
          quality.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-6 min-w-308px mr-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/sh-icn4.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Quality is our priority
        </p>
        <p>
          Focused on providing the latest advances in Sexual Health and contraceptive needs for both the provider and
          end user.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-2 min-w-308px">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/sh-icn5.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Proven experienced team
        </p>
        <p class="px-4">
          A proven team with extensive knowledge and experience within the field of Sexual Health.
        </p>
      </div>
    </div>
    <div class="4xl:hidden lg:mt-16 mt-7 text-22px xl:px-0 px-4">
      <div class="why-partner-slider">
        <div class="glide__track" data-glide-el="track">
          <div class="glide__slides">
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-5 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/sh-icn1.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Approved supplier
              </p>
              <p class="mb-7 px-4">
                100% coverage of UK & Irish market.
              </p>
              <p>
                Approved NHS supplier.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/sh-icn2.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Project management
              </p>
              <p>
                Designated account managers will ensure all projects pulled through to completion.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/sh-icn3.svg') }}"/>
              <p class="font-bold leading-tight mb-3">
                Regulatory expertise/ knowledge
              </p>
              <p>
                Regulatory expertise throughout the company, 10% of staff in regulatory. Leaders in technology to drive
                quality.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/sh-icn4.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Quality is our priority
              </p>
              <p>
                Focused on providing the latest advances in Sexual Health and contraceptive needs for both the provider
                and
                end user.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-2 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/sh-icn5.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Proven experienced team
              </p>
              <p class="px-4">
                A proven team with extensive knowledge and experience within the field of Sexual Health.
              </p>
            </div>
          </div>
          <div class="glide__bullets" data-glide-el="controls[nav]">
            <button class="glide__bullet" data-glide-dir="=0"></button>
            <button class="glide__bullet" data-glide-dir="=1"></button>
            <button class="glide__bullet" data-glide-dir="=2"></button>
            <button class="glide__bullet" data-glide-dir="=3"></button>
            <button class="glide__bullet" data-glide-dir="=4"></button>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">How
        can we help?</a>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="grid lg:grid-cols-2 lg:mb-40 mb-12">
      <div class="lg:pr-16">
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">Committed to you</h2>
        <img class="lg:hidden sm:w-3/4 my-7" src="{{ asset('image/Committed_to_you.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          <p class="lg:mb-10 mb-6">
            Our Sexual Health team’s commitment to the customer allows us to authorise and approve new account
            applications within 24 hours. Often, this means goods can be dispatched the same day the account was set up.
            But we know great customer service is about more than speed. That’s why we go further to safeguard quality
            in everything we do, from the in-build controls of Smartway’s distribution infrastructure to clear,
            <span class="sm:inline block">constant communication.</span>
          </p>
          <p class="lg:pr-0 pr-4">
            We also have strong links into manufacturing and sourcing, so we can help identify new
            products and cost-saving alternatives.
          </p>
        </div>
      </div>
      <div class="lg:flex hidden justify-center items-center lg:mt-0 mt-6">
        <img src="{{ asset('image/Committed_to_you.jpg') }}">
      </div>
    </div>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-14 lg:mb-4 mb-6">Bespoke Kits</h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-10">
      Smartway can provide over 500 specifically designed kits to support the needs of
      your business. From medicines to disposable instruments, we’ll source, store and distribute any collaboration
      based on your individual requirements.</p>
    <div class="grid lg:grid-cols-2 lg:mt-28 mt-16">
      <div class="lg:pr-16">
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-10 mt-0 mb-6">Over labelling</h2>
        <img class="lg:hidden sm:w-3/4 my-7" src="{{ asset('image/Over_labelling.jpg') }}">
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          Our in-house over labelling department is there to support you through each stage of the process from label
          design
          to the finished product. We’ll take full responsibility of sourcing, designing and packing your product. In
          addition, our new state-of-the-art labelling machine is capable of delivering small bespoke quantities or
          scaling
          up to thousands of units per day.
        </p>
        <ul class="4xl:text-28px text-lg font-semibold -tracking-0.5px mt-6">
          <li class="flex items-center">
            <div class="bg-persian-green text-white w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Free label design
          </li>
          <li class="flex items-center lg:my-5 my-8">
            <div class="bg-persian-green text-white w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Next day delivery
          </li>
          <li class="flex items-center lg:my-5 my-8">
            <div class="bg-persian-green text-white w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Dedicated account manager
          </li>
          <li class="flex items-center">
            <div class="bg-persian-green text-white w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Competitive pricing
          </li>
        </ul>
      </div>
      <div class="lg:flex hidden justify-center items-center lg:mt-0 mt-6">
        <img src="{{ asset('image/Over_labelling.jpg') }}">
      </div>
    </div>
    <div class="text-center mt-20 lg:mb-40 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Send
        us your requirements</a>
    </div>
    <hr class="h-0.5 bg-black lg:mb-40 mb-16">
    <div class="grid lg:grid-cols-2">
      <div class="lg:pr-16">
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">Breakdown of medicine for waste
          reduction</h2>
        <img class="lg:hidden sm:w-3/4 my-7" src="{{ asset('image/waste_reduction.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          <p class="lg:mb-10 mb-6">Often, the NHS or private providers find that the required dose of a drug is less
            than the
            manufactured package.
            For example, tablets may come in a pack of 14, but only two tablets are required.
            <span class="4xl:block">This leads to waste and
              unnecessary costs.</span></p>
          <p class="lg:pr-14">
            We’ve partnered with the NHS to ensure this waste doesn’t continue. We can break down current
            medicines (subject to regulations) and repackage them in a more suitable form for the end user,
            significantly
            reducing waste.
          </p>
        </div>
      </div>
      <div class="lg:flex hidden justify-center items-center lg:mt-0 mt-6">
        <img src="{{ asset('image/waste_reduction.jpg') }}">
      </div>
    </div>
    <div class="grid lg:grid-cols-2 lg:mt-52 mt-16">
      <div class="lg:flex hidden justify-center items-center lg:mt-0 mt-6">
        <img src="{{ asset('image/logistics.jpg') }}">
      </div>
      <div class="lg:pl-16">
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6">Third-party logistics</h2>
        <img class="lg:hidden sm:w-3/4 my-7" src="{{ asset('image/logistics.jpg') }}">
        <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-10">
          With a UK head office and further hubs within Ireland, Kosovo, India, and Dubai, Smartway is the go-to partner
          for
          all your third-party logistical needs. We can offer a bespoke service to suit the ever-changing needs of your
          business.
        </p>
        <ul class="4xl:text-28px text-lg font-semibold -tracking-0.5px mt-6">
          <li class="flex items-center">
            <div class="bg-persian-green w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Storage
          </li>
          <li class="flex items-center lg:my-2 my-6">
            <div class="bg-persian-green w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Distribution
          </li>
          <li class="flex items-center lg:my-2 my-6">
            <div class="bg-persian-green w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Pick and packing
          </li>
          <li class="flex items-center">
            <div class="bg-persian-green w-4 h-4 rounded-full flex items-center justify-center mr-3"></div>
            Administrative support
          </li>
        </ul>
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 mt-20 mb-16">
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold">Meet the Team</h2>
    <div class="grid lg:grid-cols-3 gap-x-5 lg:gap-y-16 gap-y-8 lg:mt-20 mt-7">
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Giles-team.jpg') }}">
        <p class="text-lochmara font-bold mb-1.5">Giles Holford</p>
        <p class="font-bold">Head of Sexual Health</p>
      </div>
      {{--<div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Sharan-team.jpg') }}">
        <p class="text-lochmara font-bold mb-1.5">Sharan Sanghera</p>
        <p class="font-bold">Senior Procurement Manager</p>
      </div>--}}
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Miral-team.jpg') }}">
        <p class="text-lochmara font-bold mb-1.5">Miral Patel</p>
        <p class="font-bold">Regulatory Lead</p>
      </div>
    </div>
    <div class="text-center lg:my-40 mt-16 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Talk
        to the team</a>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ mix('js/why-partner-slider.js') }}" defer></script>
@endpush
