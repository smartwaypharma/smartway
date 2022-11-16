@extends('layouts.front')

@section('meta')
  <title>Smartway's History Timeline</title>
  <meta name="description" content="Smartway is the leading supplier and distributor of pharmaceuticals. We have a long history in helping patients in need of medicine worldwide. Learn about our history, mission and values.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/at-the-pharmacy-2021-04-05-14-41-53-utc-header.png') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/at-the-pharmacy-2021-04-05-14-41-53-utc.png') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-2">
      <span class="xl:block">Founded on trust,</span>
      <span class="xl:block">transparency</span>
      <span class="xl:block">and motivation</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-16 mt-8 lg:mb-40 mb-16">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mb-16 mb-7">A human centred
      approach</p>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 4xl:pr-10 sm:mr-2 -mr-2">
      The Smartway Pharmaceuticals story starts with an old-fashioned pharmacy in Battersea
      <span class="sm:inline block">and a lady who understood</span>
      the importance of trust <span class="sm:inline block">and motivation.</span>
    </h2>
    <p class="4xl:text-33px xl:text-2xl text-lg 4xl:leading-51px xl:leading-37px leading-24px 4xl:pr-40">
      With nobody to take over the family business, Mrs Elliot was inundated with offers for this great location in an
      up-and-coming part of London. But one offer stood out.
    </p>
    <div class="4xl:text-2xl xl:text-2xl text-lg 4xl:leading-37px xl:leading-37px leading-24px lg:mt-14 mt-7 4xl:pr-16">
      <p class="lg:mb-10 mb-7 lg:pr-0 pr-4">Three years after graduating from Portsmouth University, Hitu Patel was
        ready to build his own
        pharmacy business.
        He had drive, commitment, and a deep desire to give every patient an exceptional level of service.</p>
      <p class="lg:pr-0 pr-">What he didn’t
        have was money to pay for the business.</p>
    </div>
  </section>
  <section class="bg-lochmara text-white px-4 lg:pt-32 pt-16 lg:pb-28 pb-20">
    <div class="container 3xl:max-w-3xl text-center">
      <p class="quarto-font 4xl:text-80px xl:text-44px text-34px 4xl:leading-none xl:leading-48px leading-40px">
        <span class="md:block">“Without Mrs Elliot,</span>
        <span class="md:block">Smartway Pharmaceuticals wouldn’t exist.</span>
      </p>
      <p class="4xl:text-34px xl:text-2xl text-xl 4xl:leading-53px xl:leading-37px leading-31px font-light -tracking-0.95px italic sm:mt-12 mt-5 mb-4 px-4 sm:px-0">
        <span class="sm:block">Her generosity gave me my start in
          <span class="sm:inline block">pharmaceuticals but, more</span>
          importantly, it taught me the importance</span>
        <span class="sm:block">of care, collaboration and trust. These are the values that underpin everything we do. That’s</span>
        <span
            class="sm:block">as true today, operating around the world, as it was from that small pharmacy in Battersea.”</span>
      </p>
      <p class="4xl:text-34px xl:text-2xl text-22px font-semibold -tracking-0.65px italic">
        Hitu Patel, Founder
      </p>
    </div>
  </section>
  <section class="bg-persian-green text-white my-5 pt-20">
    <div class="container 3xl:max-w-3xl px-4 text-center">
      <p class="4xl:text-34px xl:text-2xl text-22px font-bold">
        A track record of success
      </p>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px max-w-6xl mx-auto">
        Since that first pharmacy, Smartway has come a long way. Today, we’re proud to give customers, partners and
        patients the same care and quality worldwide.
      </p>
    </div>
    <div class="timeline relative pb-16">
      <div id="timeline" class="overflow-x-auto">
        <div class="mt-28 flex items-baseline line1">
          <div class="min-w-4px bg-black relative mr-40" style="height: 342px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-60">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">1942</p>
              <p class="text-21px leading-28px font-semibold">Community Pharmacy founded in Battersea, London</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-64" style="height: 156px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-40">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">1994</p>
              <p class="text-21px leading-28px font-semibold">International supply starts</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-32" style="height: 156px;">
            <div
                class="circle-shadow absolute -top-40 w-188px h-188px rounded-full bg-lochmara flex flex-col justify-center items-center"
                style="left: -90px;">
              <p class="quarto-font text-69px font-light leading-none mb-2">1996</p>
              <p class="text-21px leading-28px font-semibold text-center">
                <span class="block">100K packs</span>
                <span class="block">sold</span>
              </p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-64" style="height: 156px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-52">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2001</p>
              <p class="text-21px leading-28px font-semibold">Sexual Health Supply commences</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-64" style="height: 260px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-52">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2006</p>
              <p class="text-21px leading-28px font-semibold">Supply to Aid Dev sectors starts</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-52" style="height: 156px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-40">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2008</p>
              <p class="text-21px leading-28px font-semibold">Operations in India opened</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-80" style="height: 240px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-64">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2009</p>
              <p class="text-21px leading-28px font-semibold">Supply of Comparators and RLD</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-72" style="height: 156px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-52">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2014</p>
              <p class="text-21px leading-28px font-semibold">Global HQ moved to Wimbledon, London</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-72" style="height: 260px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-52">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2018</p>
              <p class="text-21px leading-28px font-semibold">Operations in Kosovo commence</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-64" style="height: 156px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -top-1" style="right: -6px;"></div>
            <div class="absolute -top-10 left-5 w-40">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2021</p>
              <p class="text-21px leading-28px font-semibold">Smartway Ireland opens</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative" style="height: 156px;">
            <div
                class="circle-shadow absolute -top-40 w-188px h-188px rounded-full bg-lochmara flex flex-col justify-center items-center"
                style="left: -90px;">
              <p class="quarto-font text-69px font-light leading-none -mt-10">2021</p>
              <p class="text-21px leading-28px font-semibold text-center">
                <span class="block">Sunday Times</span>
                <span class="block">Top Track Award</span>
              </p>
            </div>
          </div>
          <div class="last"></div>
        </div>
        <div>
          <div id="line" class="h-9px bg-black absolute"></div>
        </div>
        <div class="flex items-top mb-64 line2">
          <div class="min-w-4px bg-black relative mr-48" style="height: 193px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -bottom-1" style="right: -6px;"></div>
            <div class="absolute -bottom-20 left-5 w-52">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">1992</p>
              <p class="text-21px leading-28px font-semibold">Hitu Patel acquires the Pharmacy</p>
            </div>
          </div>
          <div class="min-w-4px bg-black relative mr-64" style="height: 90px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -bottom-1" style="right: -6px;"></div>
            <div class="absolute -bottom-20 left-5 w-52">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">1996</p>
              <p class="text-21px leading-28px font-semibold">First EAP commenced</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-20" style="height: 185px;">
            <div
                class="circle-shadow absolute -bottom-40 w-188px h-188px rounded-full bg-lochmara flex flex-col justify-center items-center"
                style="left: -90px;">
              <p class="quarto-font text-69px font-light leading-none mb-2">1999</p>
              <p class="text-21px leading-28px font-semibold text-center">
                <span class="block">Million packs</span>
                <span class="block">sold</span>
              </p>
            </div>
          </div>
          <div class="min-w-4px bg-black relative mr-64" style="height: 90px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -bottom-1" style="right: -6px;"></div>
            <div class="absolute -bottom-20 left-5 w-44">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2006</p>
              <p class="text-21px leading-28px font-semibold">NHS provider of UL medicines</p>
            </div>
          </div>
          <div class="min-w-4px bg-black relative mr-74" style="height: 193px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -bottom-1" style="right: -6px;"></div>
            <div class="absolute -bottom-20 left-5 w-72">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2008</p>
              <p class="text-21px leading-28px font-semibold">
                <span class="block">Purpose built</span>
                <span class="block">warehouse established</span>
              </p>
            </div>
          </div>
          <div class="min-w-4px bg-black relative mr-64" style="height: 90px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -bottom-1" style="right: -6px;"></div>
            <div class="absolute -bottom-20 left-5 w-44">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2009</p>
              <p class="text-21px leading-28px font-semibold">Operations go 24-7</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-64" style="height: 185px;">
            <div
                class="circle-shadow absolute -bottom-40 w-188px h-188px rounded-full bg-lochmara flex flex-col justify-center items-center"
                style="left: -90px;">
              <p class="quarto-font text-69px font-light leading-none mb-2">2011</p>
              <p class="text-21px leading-28px font-semibold text-center">
                <span class="block">100</span>
                <span class="block">colleagues</span>
              </p>
            </div>
          </div>
          <div class="min-w-4px bg-black relative mr-84" style="height: 140px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -bottom-1" style="right: -6px;"></div>
            <div class="absolute -bottom-20 left-5 w-64">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2016</p>
              <p class="text-21px leading-28px font-semibold">Operations commenced in Dubai</p>
            </div>
          </div>
          <div class="min-w-5px bg-black relative mr-48" style="height: 185px;">
            <div
                class="circle-shadow absolute -bottom-40 w-188px h-188px rounded-full bg-lochmara flex flex-col justify-center items-center"
                style="left: -90px;">
              <p class="quarto-font text-69px font-light leading-none mb-2">2018</p>
              <p class="text-21px leading-28px font-semibold text-center">
                <span class="block">50 million</span>
                <span class="block">packs sold</span>
              </p>
            </div>
          </div>
          <div class="min-w-4px bg-black relative" style="height: 165px;">
            <div class="bg-lochmara w-4 h-4 rounded-full absolute -bottom-1" style="right: -6px;"></div>
            <div class="absolute -bottom-20 left-5 w-52">
              <p class="quarto-font text-69px font-light leading-none text-black mb-2">2021</p>
              <p class="text-21px leading-28px font-semibold">Relabelling suite brought online</p>
            </div>
          </div>
          <div class="last"></div>
        </div>
      </div>
    </div>
  </section>
  @include('front.partials.who-we-are-link')
@endsection

@push('scripts')
  <script src="{{ mix('js/our-history.js') }}" defer></script>
@endpush
