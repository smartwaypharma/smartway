@extends('layouts.front')

@section('meta')
  <title>How we help - Aid & Development</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-519084632.png') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Aid_Development.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-0 mb-14">
      Aid & Development
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-40 mt-20">
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 4xl:-mr-4 sm:pr-0 pr-2">
      Our partners in charities, NGOs, governments and multi-lateral organisations are all dedicated to transforming
      lives. They’re improving health of people across the world and giving them access to the best
      <span class="4xl:block">healthcare possible.</span>
    </h2>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mb-14 mb-6">We’re dedicated to empowering that access to
      medicines.</h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      We use our knowledge, procurement and distribution networks built up over our 15 years of working in the Aid Dev
      sector to source and deliver pharmaceuticals, medical disposables, medical equipment, and hospital and doctors’
      furniture.
    </p>
    <div class="lg:grid grid-cols-2 gap-12 lg:mt-24 mt-6">
      <div class="flex items-center lg:pr-10">
        <div>
          <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mb-14">End-to-end solutions for Aid Dev</h2>
          <img class="lg:hidden my-2" src="{{ asset('image/End-to-end_gra.svg') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <p class="mb-6">
              We provide end-to-end solutions for the Aid Dev sector, delivered by an experienced team that’s dedicated
              to empowering patient access to the right therapies.
            </p>
            <p class="font-bold 4xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:pr-14">
              We place global sustainability and patients at the centre
              <span class="sm:inline block">of everything we do.</span>
            </p>
          </div>
        </div>
      </div>
      <div class="lg:block hidden">
        <img src="{{ asset('image/End-to-end_gra.svg') }}">
      </div>
    </div>
    <hr class="h-0.5 bg-black lg:mt-16 lg:mb-36 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold text-center">Why partner with Smartway?</p>
    <div class="xl:grid hidden grid-cols-5 gap-6 lg:mt-16 mt-7 4xl:text-22px text-lg pb-4 xl:px-0 px-6">
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-2">
        <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
          <img
              src="{{ asset('image/End-to-end.svg') }}"/>
        </div>
        <p class="font-bold leading-tight mb-3">
          <span class="block">End-to-end supply</span>
          <span class="block">chain management</span>
        </p>
        <p>
          <span class="block">Kitting.</span>
          <span class="block">Storage.</span>
          Emergency relief.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-2">
        <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
          <img
              src="{{ asset('image/Global_distribution.svg') }}"/>
        </div>
        <p class="font-bold leading-tight mb-3">
          <span class="block">Global distribution/</span>
          <span class="block">hub network</span>
        </p>
        <p>
          <span class="block">Global network of hubs.</span>
          <span class="block">98 countries distributed to.</span>
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 px-5 pb-16">
        <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
          <img
              src="{{ asset('image/Aid_Dev.svg') }}"/>
        </div>
        <p class="font-bold leading-tight mb-10">
          Aid Dev sector expertise
        </p>
        <p>
          Deep sector knowledge on a global basis.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-4">
        <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
          <img
              src="{{ asset('image/Stakeholder_support.svg') }}"/>
        </div>
        <p class="font-bold leading-tight mb-10">
          Stakeholder support
        </p>
        <p>
          Ethics and sustainability at the center of what we do.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-8">
        <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
          <img
              src="{{ asset('image/Global_procurement.svg') }}"/>
        </div>
        <p class="font-bold leading-tight mb-10">
          Global procurement
        </p>
        <p>
          <span class="block">25 countries.</span>
          Approved and audited supplier network. Pharmaceuticals, devices and equipment.
        </p>
      </div>
    </div>
    <div class="xl:hidden lg:mt-16 mt-7 4xl:text-22px text-lg xl:px-0 px-4">
      <div class="why-partner-slider">
        <div class="glide__track" data-glide-el="track">
          <div class="glide__slides">
            <div
                class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-2 mr-6 my-2">
              <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
                <img
                    src="{{ asset('image/End-to-end.svg') }}"/>
              </div>
              <p class="font-bold leading-tight mb-3">
                <span class="block">End-to-end supply</span>
                <span class="block">chain management</span>
              </p>
              <p>
                <span class="block">Kitting.</span>
                <span class="block">Storage.</span>
                Emergency relief.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-2 mr-6 my-2">
              <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
                <img
                    src="{{ asset('image/Global_distribution.svg') }}"/>
              </div>
              <p class="font-bold leading-tight mb-3">
                <span class="block">Global distribution/</span>
                <span class="block">hub network</span>
              </p>
              <p>
                <span class="block">Global network of hubs.</span>
                <span class="block">98 countries distributed to.</span>
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 px-5 pb-16 mr-6 my-2">
              <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
                <img
                    src="{{ asset('image/Aid_Dev.svg') }}"/>
              </div>
              <p class="font-bold leading-tight mb-10">
                Aid Dev sector expertise
              </p>
              <p>
                Deep sector knowledge on a global basis.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-4 my-2">
              <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
                <img
                    src="{{ asset('image/Stakeholder_support.svg') }}"/>
              </div>
              <p class="font-bold leading-tight mb-10">
                Stakeholder support
              </p>
              <p>
                Ethics and sustainability at the center of what we do.
              </p>
            </div>
            <div
                class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 lg:pb-20 pb-16 px-8 mr-6 my-2">
              <div class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5 bg-lochmara flex justify-center items-center">
                <img
                    src="{{ asset('image/Global_procurement.svg') }}"/>
              </div>
              <p class="font-bold leading-tight mb-10">
                Global procurement
              </p>
              <p>
                <span class="block">25 countries.</span>
                Approved and audited supplier network. Pharmaceuticals, devices and equipment.
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
    <div class="text-center lg:mt-20 mt-16">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">How
        can we help?</a>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4 lg:mb-40 mb-20">
    <div class="grid xl:grid-cols-2 grid-cols-1 lg:gap-y-40 gap-y-20">
      <div class="xl:pr-32">
        <a href="{{ route('how-we-help.aid-dev.global-procurement') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Pharmaceutical, Device & Equipment Supply</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-1214722898.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="lg:mb-9 mb-5">
            Smartway’s reputation is built on reliable, consistent supplies of pharmaceuticals, medical disposables,
            medical equipment and furniture.
          </p>
          <p>
            At Smartway, we have an unrivalled supply network – from major
            pharmaceutical manufacturers in the USA and Europe to generic providers across India and China. In the last
            5 years, we’ve supplied 5 million packs to global customers.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.aid-dev.global-procurement') }}"><img
              class="inline mr-4"
              src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-1214722898.png') }}">
      </div>

      <div class="xl:flex hidden items-center">
        <img src="{{ asset('image/Global_Distribution.jpg') }}">
      </div>
      <div class="xl:pl-24">
        <a href="{{ route('how-we-help.aid-dev.global-supply-chain-capability') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">
          <span class="4xl:block">Global Distribution &</span>
          <span class="4xl:block">Storage Network</span>
        </a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Global_Distribution.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9 xl:pr-5">
          <p class="lg:mb-9 mb-5">
            Smartway distributes lifesaving therapies to over 98 countries across the globe. In the 5 years, we’ve
            shipped 5 million packs of medication worldwide.
          </p>
          <p>
            We use our fully owned and controlled strategic supply hubs
            in the EU, UK, UAE and India to provide quick, accurate supply, everywhere. All our hubs can also perform
            strategic stock holding and specialised kitting and packing.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.aid-dev.global-supply-chain-capability') }}"><img class="inline mr-4"
                                                                                         src="{{ asset('image/icon/icn.svg') }}">Read
          more</a>
      </div>
    </div>

    <div id="kitting" class="grid xl:grid-cols-2 grid-cols-1 lg:mt-40 mt-20 lg:mb-40 mb-20">
      <div class="xl:pr-28">
        <a href="{{ route('how-we-help.aid-dev.kitting') }}#kitting"
           class="quarto-font 4xl:text-62px text-44px leading-none">Kitting</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-1272685075.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p>
            We offer a complete service from procurement to storage, distribution, and rapid deployment. We can procure
            and stock all interagency emergency health kits, emergency reproductive health kits and tailored
            medical/emergency kits.
          </p>
        </div>
        <button id="kittingButton" class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"><img
              class="inline mr-4 transform rotate-180"
              src="{{ asset('image/icon/read_less_icn.svg') }}"><span>Read more</span></button>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-1272685075.png') }}">
      </div>
    </div>
    <div id="kittingContent" class="hidden">
      <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:mt-20 mt-10 mb-20 lg:mb-0 4xl:pr-20">
        <p class="lg:mb-10 mb-6">Our team gives you the advantage of hands-on experience in specialized kitting and
          packing. We also comply with
          all relevant standards including WHO, UNICEF and ICRC MSF. </p>
        <p>
          With pharmaceutical GxP registered warehouses in the
          UK, EU, India, and UAE – as well as pharmaceutical relabelling and in-house pharmacies – we can produce any
          type
          of kit.
        </p>
      </div>
      <hr class="h-0.5 bg-black my-40 lg:block hidden">
    </div>

    <div class="grid xl:grid-cols-2 grid-cols-1 lg:gap-y-40 gap-y-20">
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/businesspeople-brainstorming-in-a-meeting-WH57EEX.png') }}">
      </div>
      <div class="xl:pl-24">
        <a href="{{ route('how-we-help.aid-dev.experience-and-expertise') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none sm:mr-0 -mr-4 block">Project Management</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/businesspeople-brainstorming-in-a-meeting-WH57EEX.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9 xl:pr-8">
          <p class="4xl:-mr-3">
            At Smartway, we combine deep Aid Dev sector knowledge with regulatory and pharmaceutical expertise. Your
            dedicated project managers will lead your program from concept to fruition, bringing in expertise from all
            Smartway functions. With fully operational hubs across the world and a single global management system, you
            can be sure of 24-7, seamless procurement and delivery of your supplies.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.aid-dev.experience-and-expertise') }}"><img class="inline mr-4"
                                                                                   src="{{ asset('image/icon/icn.svg') }}">Read
          more</a>
      </div>

      <div class="xl:pr-24">
        <a href="{{ route('who-we-are.media-and-resource-centre.index') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Resource Centre</a>
        <img class="lg:hidden my-7" src="{{ asset('image/iStock-1156054183.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p>
            It’s really important in the Aid Dev sector to be up to date with current market and regulatory changes.
            However, with competing pressures on your time it is difficult to get the necessary information. Our team
            regularly provide updates and briefings on relevant topics including regulatory and market updates. We also
            run expert webinars and interactive training. For the latest news and articles please visit our resource
            centre.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('who-we-are.media-and-resource-centre.index') }}">
          <img class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
      <div class="lg:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-1156054183.png') }}">
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ mix('js/why-partner-slider.js') }}" defer></script>
@endpush
