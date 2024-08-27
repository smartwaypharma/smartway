@extends('layouts.front')

@section('meta')
  <title>Your Trusted Global Pharmaceutical Wholesaler</title>
  <meta name="description" content="Smartway is a global pharmaceutical wholesaler and distributor supplying pharmaceutical/generic medicines worldwide. Every day, our experts help to make medicines available to consumers across the world.">
@endsection

@section('header-content')
  <video id="desktopVideo" class="hidden sm:inline-block w-full" preload="auto" autoplay loop muted>
    <source src="{{ asset('video/Smartway_home_vid_150921.mp4') }}" type="video/mp4">
  </video>
  <div style="margin-left: -555px; margin-right: -555px;">
    <video id="mobileVideo" class="inline-block sm:hidden w-full" preload="yes" autoplay loop muted playsinline
           width="1500" height="844">
      <source src="{{ asset('video/Smartway_home_vid_150921.mp4') }}" type="video/mp4">
    </video>
  </div>
  {{--  <img class="inline-block sm:hidden w-full" src="{{ asset('image/teamworking-people-wearing-medical-masks-during-me-R2QCKWH.png') }}">--}}
  <div class="sm:hidden gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <h1 class="container 3xl:max-w-3xl absolute heading quarto-font 4xl:text-93px xl:text-7xl md:text-6xl sm:text-4xl text-42px leading-none text-white lg:px-36 px-4 lg:mb-0 sm:mb-10 mb-72">
    <span class="sm:block">Transforming lives by</span>
    <span class="sm:block">empowering access to</span>
    <span class="sm:block">medicines globally</span>
  </h1>
  <a href="#tween" class="sm:block hidden absolute right-0 left-0 bottom-10">
    <img class="transform rotate-90 mx-auto"
         src="{{ asset('image/icon/ic_arrow_forward_16px.svg') }}" alt="Smartway Pharmaceuticals - arrow forward icon" title="Smartway Pharmaceuticals - arrow forward icon">
  </a>
  <img id="soundButtonDesktop"
       class="sm:block hidden absolute bottom-5 left-14 cursor-pointer"
       data-state="mute"
       src="{{ asset('image/icon/Ic_volume_off_40px.png') }}" alt="Smartway Pharmaceuticals - volume off icon" title="Smartway Pharmaceuticals - volume off icon">
  <img id="soundButtonMobile"
       class="sm:hidden block absolute bottom-5 left-4 cursor-pointer"
       data-state="mute"
       src="{{ asset('image/icon/Ic_volume_off_40px.png') }}" alt="Smartway Pharmaceuticals - volume off icon" title="Smartway Pharmaceuticals - volume off icon">
@endsection

@section('content')
  <main id="tween" class="bg-lochmara">
    <section id="tween1">
      <div class="container 3xl:max-w-3xl xl:px-36 px-4 text-white lg:pt-16 pt-10">
        <h2 class="4xl:text-32px xl:text-2xl md:text-xl text-22px md:leading-37px leading-28px font-bold mb-5">We empower access to
          medicines on a global level.</h2>
        <div class="4xl:text-22px text-lg 4xl:leading-28px leading-24px lg:pr-4">
          <p class="lg:mb-7 mb-6">
            Using our experience, regulatory expertise and network of suppliers from over 25 countries, we provide
            access to over 87% of the world health system from our distribution hubs in the EU, UK, Dubai, India and
            more.
          </p>
          <p class="lg:mb-7 mb-6">
            We partner with healthcare professionals, pharmaceutical & biotech companies, wholesalers
            & distributors, aid organizations and patients to ensure access to medicines.
          </p>
          <p>
            From regulatory
            analysis to strategic plans, procurement and delivery, we provide best-in-class programs
            <span class="sm:inline block">and services.</span>
          </p>
        </div>
      </div>
      <div class="container 3xl:max-w-3xl xl:px-36 lg:pr-4 text-white lg:pb-40 pb-20">
        <div class="animated-block grid lg:grid-cols-2 grid-cols-1 lg:pb-48 pb-20 lg:mt-72px mt-8">
          <div class="4xl:text-54px 2xl:text-32px text-26px 2xl:leading-relaxed leading-45px">
            <div class="sm:sticky top-6rem 3xl:pl-0 pl-4 pr-4">
              <p class="4xl:text-32px xl:text-2xl md:text-xl text-22px md:leading-37px leading-28px font-bold lg:mb-12 sm:mb-6 lg:pr-0 pr-14">
                Over two decades of focused expertise.
              </p>
              <div class="sm:block hidden">
                <a href="#trigger1" class="block anchor" id="heading1">Aid & Development</a>
                <a href="#trigger2" class="block anchor" id="heading2">Comparator/RLD Supply</a>
                <a href="#trigger3" class="block anchor" id="heading3">Early Access Programs</a>
                <a href="#trigger4" class="block anchor" id="heading4">Hospital &<br> Pharmacy Supply</a>
                <a href="#trigger5" class="block anchor" id="heading5">International Supply & <br> Unlicensed
                  Imports</a>
                <a href="#trigger6" class="block anchor" id="heading6">Sexual Health Supply</a>
                <a href="#trigger7" class="block anchor" id="heading7">Specialist Distribution</a>
              </div>
            </div>
          </div>
          <div class="lg:pt-136px pt-28 lg:pl-8 pl-4 relative">
            <div class="lg:block hidden marker-line"></div>
            <div id="trigger1" class="lg:pt-40 pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">
                Aid & Development
              </p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3">
                We partner with NGOs, charities and
                multi-lateral organizations to provide
                pharmaceuticals, medical disposables,
                medical equipment and hospital and
                doctors’ furniture.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center"
                 href="{{ route('how-we-help.aid-dev.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}" alt="Smartway Pharmaceuticals - white icon" title="Smartway Pharmaceuticals - white icon">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/Aid_Dev.jpg') }}" alt="Smartway Pharmaceuticals - Aid & Development" title="Smartway Pharmaceuticals - Aid & Development">
            </div>
            <div id="trigger2" class="lg:pt-40 pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">
                Comparator/RLD Supply
              </p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3">
                We support manufacturers, CROs and CDMOs
                with supply of comparator,
                RLDs, samples and biosimilar samples.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center" href="{{ route('how-we-help.cts.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}" alt="Smartway Pharmaceuticals - white icon" title="Smartway Pharmaceuticals - white icon">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('/image/hero-cts.jpg') }}" alt="Smartway Pharmaceuticals - Comparator/RLD Supply" title="Smartway Pharmaceuticals - Comparator/RLD Supply">
            </div>
            <div id="trigger3" class="lg:pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">Early Access
                Programs (EAP)</p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3 4xl:-mr-4">
                We’ll partner with innovative Pharma and Biotech companies to design and manage global Early Access,
                Expanded Access, Named Patient and Compassionate Use Programs.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center" href="{{ route('how-we-help.eap.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}" alt="Smartway Pharmaceuticals - white icon" title="Smartway Pharmaceuticals - white icon">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/EAP.jpg') }}" alt="Smartway Pharmaceuticals - Early Access Programs (EAP)" title="Smartway Pharmaceuticals - Early Access Programs (EAP)">
            </div>
            <div id="trigger4" class="lg:pt-40 pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">
                Hospital & Pharmacy Supply
              </p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3">
                Thanks to our global sourcing network, we supply products that are in shortage, unlicensed medicines, imported medicines, specials, and not yet launched medicines to hospitals, pharmacies and globally.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center"
                 href="{{ route('how-we-help.hospital-and-pharmacy-supply.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}" alt="Smartway Pharmaceuticals - white icon" title="Smartway Pharmaceuticals - white icon">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/hero-hospital-pharmacy.jpg') }}" alt="Smartway Pharmaceuticals - Hospital & Pharmacy Supply" title="Smartway Pharmaceuticals - Hospital & Pharmacy Supply">
            </div>
            <div id="trigger5" class="lg:pt-40 pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">
                <span class="2xl:block">International Supply &</span>
                <span class="2xl:block">Unlicensed Imports</span>
              </p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3">
                We source and distribute on a global
                basis, supplying branded and generic
                pharmaceuticals not otherwise
                available in your country. We also supply a range of
                unlicensed medicines to hospitals and healthcare professionals in the UK, UAE and globally.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center"
                 href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}" alt="Smartway Pharmaceuticals - white icon" title="Smartway Pharmaceuticals - white icon">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/International.jpg') }}" alt="Smartway Pharmaceuticals - International Supply & Unlicensed Imports" title="Smartway Pharmaceuticals - International Supply & Unlicensed Imports">
            </div>
            <div id="trigger6" class="lg:pt-40 pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">
                Sexual Health Supply
              </p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3">
                We support UK hospitals and sexual
                health clinics with pharmaceuticals
                and medical disposables.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center"
                 href="{{ route('how-we-help.sexual-health.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}" alt="Smartway Pharmaceuticals - white icon" title="Smartway Pharmaceuticals - white icon">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('/image/hero-sexual-health.jpg') }}" alt="Smartway Pharmaceuticals - Sexual Health Supply" title="Smartway Pharmaceuticals - Sexual Health Supply">
            </div>
            <div id="trigger7" class="lg:pt-40 pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">
                Specialist Distribution
              </p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3">
                We work with Pharma and Biotech companies to deliver
                specialist distribution services. We operate in therapeutic and geographic areas that
                need specialist expertise.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center"
                 href="{{ route('how-we-help.distribution.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}" alt="Smartway Pharmaceuticals - white icon" title="Smartway Pharmaceuticals - white icon">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/hero-global-distributions.jpg') }}" alt="Smartway Pharmaceuticals - Specialist Distribution" title="Smartway Pharmaceuticals - Specialist Distribution">
            </div>
          </div>
        </div>
        <div id="markerEnd"></div>
      </div>
    </section>
    <section id="tween2" class="container 3xl:max-w-3xl px-4 lg:py-40 py-20">
      @if($posts->count() > 0)
        <h2 class="4xl:text-32px xl:text-2xl md:text-xl text-22px font-bold js-fade-in-up-tween">What’s
          new at Smartway</h2>
        <div class="grid lg:grid-cols-3 grid-cols-1 gap-5 lg:mt-38 mt-20 lg:pb-14 pb-8">
          @foreach($posts as $post)
            <div class="js-fade-in-up-tween text-lg lg:leading-28px leading-24px">
              <img class="lg:w-auto sm:w-3/4" src="{{ Illuminate\Support\Facades\Storage::url($post->hero_image_for_desktop) }}" alt="Smartway Pharmaceuticals - {{ $post->title }}" title="Smartway Pharmaceuticals - {{ $post->title }}">
              <p class="opacity-50 mt-3">{{ $post->created_at->format("d F Y") }}</p>
              <p class="font-bold mt-1 mb-2">{{ $post->category->name }}</p>
              <a href="{{ route('who-we-are.media-and-resource-centre.post', [$post->category->slug, $post->slug]) }}"
                 class="4xl:text-2xl lg:text-xl text-2xl leading-none font-bold text-lochmara mb-2">{{ $post->title }}</a>
              <p class="lg:mt-6 mt-2">{!! $post->getShortPostBody() !!}</p>
            </div>
          @endforeach
        </div>
        <a class="4xl:text-2xl text-base font-bold" href="{{ route('who-we-are.media-and-resource-centre.index') }}">
          <img class="inline mr-4 4xl:w-auto 4xl:h-auto w-5 h-5" src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">View
          All</a>
      @endif
    </section>
  </main>
  <div class="fixed left-0 top-0 z-999999 h-full w-full overflow-y-auto overflow-x-hidden outline-none hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="expopharm">
    <div class="fixed inset-0 bg-black opacity-50 transition-opacity"></div>
    <div class="fixed inset-0 z-10 overflow-y-auto">
      <div class="sm:w-full sm:max-w-lg h-full flex flex-col items-center justify-center p-4 sm:p-4 mx-auto">
        <div class="relative transform overflow-hidden rounded-3xl text-center shadow-xl transition-all w-full bg-lochmara border-2">
          <div class="text-center mt-3 ml-3 mr-3 mb-3">
            <h1 class="text-21px font-semibold text-white" id="modal-title">Are you going to Expopharm <br/> this October?</h1>
            <div class="mt-3">
              <p class="text-sm text-white font-semibold">You can book a one-on-one meeting with our commercial team and explore how we can collaborate and create a profitable partnership that benefits both of our businesses.</p>
            </div>
          </div>
          <div class="sm:px-6 flex items-center justify-center ml-3 mr-3 mb-5">
            <a type="button" href="https://calendly.com/smartway-commercial/smartway-expopharm24?month=2024-10" class="bg-persian-green text-white rounded-3xl border-2 py-2 px-4 text-xs font-bold mr-2" target="_blank">Book a meeting via Calendly</a>
            <a type="button" href="#!" class="js-modal-close bg-lochmara text-white rounded-3xl border-2 py-2 px-4 text-xs font-bold">Dismiss</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ mix('js/home.js') }}" defer></script>
@endpush
