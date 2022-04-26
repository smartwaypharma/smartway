@extends('layouts.front')

@section('meta')
  <title>Home</title>
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
         src="{{ asset('image/icon/ic_arrow_forward_16px.svg') }}">
  </a>
  <img id="soundButtonDesktop"
       class="sm:block hidden absolute bottom-5 left-14 cursor-pointer"
       data-state="mute"
       src="{{ asset('image/icon/Ic_volume_off_40px.png') }}">
  <img id="soundButtonMobile"
       class="sm:hidden block absolute bottom-5 left-4 cursor-pointer"
       data-state="mute"
       src="{{ asset('image/icon/Ic_volume_off_40px.png') }}">
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
                <a href="#trigger1" class="block anchor" id="heading1">Early Access Programs</a>
                <a href="#trigger2" class="block anchor" id="heading2">Comparator/RLD Supply</a>
                <a href="#trigger3" class="block anchor" id="heading3">Aid & Development</a>
                <a href="#trigger4" class="block anchor" id="heading4">International Supply & <br> Unlicensed
                  Imports</a>
                <a href="#trigger5" class="block anchor" id="heading5">Sexual Health Supply</a>
                <a href="#trigger6" class="block anchor" id="heading6">Specialist Distribution</a>
              </div>
            </div>
          </div>
          <div class="lg:pt-136px pt-28 lg:pl-8 pl-4 relative">
            <div class="lg:block hidden marker-line"></div>
            <div id="trigger1" class="lg:pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">Early Access
                Programs (EAP)</p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3 4xl:-mr-4">
                We’ll partner with innovative Pharma and Biotech companies to design and manage global Early Access,
                Expanded Access, Named Patient and Compassionate Use Programs.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center" href="{{ route('how-we-help.eap.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/EAP.jpg') }}">
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
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('/image/hero-cts.jpg') }}">
            </div>
            <div id="trigger3" class="lg:pt-40 pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">
                Aid & Development
              </p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3">
                We partner with NGOs, charities and
                multi-lateral organizations to provide
                pharmaceuticals, medical disposables,
                medical equipment and hospital and
                doctor’s furniture.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center"
                 href="{{ route('how-we-help.aid-dev.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/Aid_Dev.jpg') }}">
            </div>
            <div id="trigger4" class="lg:pt-40 pt-20">
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
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/International.jpg') }}">
            </div>
            <div id="trigger5" class="lg:pt-40 pt-20">
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
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('/image/hero-sexual-health.jpg') }}">
            </div>
            <div id="trigger6" class="lg:pt-40 pt-20">
              <p class="heading 4xl:text-34px lg:text-2xl text-22px font-bold lg:mb-3 mb-7">
                Specialist Distribution
              </p>
              <p class="4xl:text-42px lg:text-2xl text-22px 4xl:leading-none lg:leading-32px leading-28px quarto-font lg:mb-20 mb-3">
                We work with Pharma and Biotech companies to deliver
                specialist distribution services. We operate in therapeutic and geographic areas that
                need specialist expertise and expertise.
              </p>
              <a class="4xl:text-2xl text-md font-bold flex items-center"
                 href="{{ route('how-we-help.distribution.index') }}">
                <img class="inline 4xl:w-auto 4xl:h-auto w-5 h-5 mr-3" src="{{ asset('image/icon/icn-white.svg') }}">Explore
                more</a>

              <img class="mt-5 lg:w-auto sm:w-3/4" src="{{ asset('image/hero-global-distributions.jpg') }}">
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
              <img class="lg:w-auto sm:w-3/4" src="{{ Illuminate\Support\Facades\Storage::url($post->hero_image_for_desktop) }}">
              <p class="opacity-50 mt-3">{{ $post->created_at->format("d F Y") }}</p>
              <p class="font-bold mt-1 mb-2">{{ $post->category->name }}</p>
              <a href="{{ route('who-we-are.media-and-resource-centre.post', [$post->category->slug, $post->slug]) }}"
                 class="4xl:text-2xl lg:text-xl text-2xl leading-none font-bold text-lochmara mb-2">{{ $post->title }}</a>
              <p class="lg:mt-6 mt-2">{!! $post->getShortPostBody() !!}</p>
            </div>
          @endforeach
        </div>
        <a class="4xl:text-2xl text-base font-bold" href="{{ route('who-we-are.media-and-resource-centre.index') }}">
          <img class="inline mr-4 4xl:w-auto 4xl:h-auto w-5 h-5" src="{{ asset('image/icon/icn.svg') }}">View
          All</a>
      @endif
    </section>
  </main>
@endsection

@push('scripts')
  <script src="{{ mix('js/home.js') }}" defer></script>
@endpush
