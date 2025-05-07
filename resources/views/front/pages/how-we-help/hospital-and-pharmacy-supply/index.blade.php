@extends('layouts.front')

@section('meta')
  <title>A Trusted & Reliable Supplier of Hospitals and Pharmacies</title>
  <meta name="description" content="Smartway provides a variety of unlicensed medicines, medicine on shortage, emergency medicine, and other hospital and pharmacy supply worldwide. Smartway is a trusted and reliable supplier of hospital and healthcare supplies, unlicensed medicines, and emergency medical supplies.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/hero-hospital-pharmacy.jpg') }}" alt="Smartway Pharmaceuticals - Hospital & Pharmacy Supply" title="Smartway Pharmaceuticals - Hospital & Pharmacy Supply">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/hero-hospital-pharmacy-mobile.jpg') }}" alt="Smartway Pharmaceuticals - Hospital & Pharmacy Supply" title="Smartway Pharmaceuticals - Hospital & Pharmacy Supply">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-3">
      Hospital & Pharmacy Supply
    </h1>
    <p class="4xl:text-34px sm:text-2xl text-22px 4xl:leading-44px leading-tight font-semibold -mt-1 w-11/12 sm:w-full">
      <span class="xl:block">Shortages, Unlicensed Medicines, Imported Medicines, Specials, Not yet</span>
      <span class="xl:block">Launched Medicines and Emergency Supply</span>
    </p>
  </div>
  <div class="hidden lg:block bg-lochmara text-center w-full absolute bottom-0 xl:py-5 py-5 px-5">
    <div class="container 3xl:max-w-3xl">
      <h3 class="text-white 4xl:text-25px text-lg leading-32px">
        <a href="https://www.smartwaypharma.co.uk/who-we-are/media-and-resource-centre/news/introducing-smartmed-smartways-new-portal-for-unlicensed-medicines">
          <span class="block font-bold pb-3">SmartMed is Launching Soon!</span>
          <span class="block">Developed by Smartway, this new digital portal will give healthcare professionals faster, easier access to essential information on unlicensed medicines — helping them make better informed decisions for their patients.</span>
        </a>
      </h3>
    </div>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-40 mt-10">
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px lg:mb-12 mb-6">
      <span class="4xl:block">Smartway is the global leader in empowering</span>
      <span class="4xl:block">access to medicines and pharmaceuticals that are in shortage or not immediately available.</span>
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      We help ﻿healthcare professionals including ﻿physicians and pharmacists ﻿urgently ﻿obtain the medicines ﻿for hospitals and pharmacies ﻿which they cannot get ﻿for their patients ﻿through their normal distribution channels. <br />
      In the last almost 30 years, we’ve built a global supply network for a wide range of ﻿medicines.
    </p>
    <div class="text-center lg:my-40 mt-16">
      <a href="mailto:ulm@smartwaypharma.co.uk"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Click here for urgent assistance</a>
    </div>
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 lg:mt-44 mt-9 lg:mb-40 mb-16">
      <div>
        <img class="lg:hidden mb-9" src="{{ asset('image/iStock-1251044352.png') }}" alt="Smartway Pharmaceuticals - Smartway is the global leader in empowering.." title="Smartway Pharmaceuticals - Smartway is the global leader in empowering..">
        <ul class="font-semibold 4xl:text-32px text-2xl lg:-tracking-0.8px -tracking-0.4px">
          <li class="flex lg:items-center items-baseline">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            Shortage & Emergency Supply
          </li>
          <li class="4xl:my-11 my-5 flex lg:items-center items-baseline">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            Imports to UK, EU and UAE
          </li>
          <li class="4xl:my-11 my-5 flex lg:items-center items-baseline">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            Unlicensed medicines
          </li>
          <li class="4xl:my-11 my-5 flex lg:items-center items-baseline">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            Specials
          </li>
          <li class="4xl:my-11 my-5 flex lg:items-center items-baseline">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            Not yet launched medicines
          </li>
          <li class="flex lg:items-center items-baseline">
            <div class="h-14px w-14px bg-persian-green rounded-full ml-3 mr-5"></div>
            Unavailable medicines
          </li>
        </ul>
      </div>
      <div class="lg:flex hidden items-center">
        <img src="{{ asset('image/iStock-1251044352.png') }}" alt="Smartway Pharmaceuticals - Smartway is the global leader in empowering.." title="Smartway Pharmaceuticals - Smartway is the global leader in empowering..">
      </div>
    </div>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="lg:mb-10 mb-6">
        With our global supply chain and strategic procurement hubs in EU, UK, USA, India and Australasia, we can deliver urgent medicines for ﻿you﻿ and your patients﻿﻿ directly to your hospital, pharmacy or other healthcare setting. Direct from manufacturers or through our audited, approved suppliers, we have unrivalled access to medicines﻿ that are in short supply.
      </p>
      <p class="lg:mb-10 mb-6">
        We can also deliver quickly and securely, distributing directly to hospitals, pharmacies and globally.
      </p>
      <p class="4xl:pr-16">
        Smartway’s been directly supplying hospitals in the UK,
        EU and UAE for over 25 years. We’re an approved supplier and registered under all relevant
        tenders/framework agreements and we use our distribution knowledge to help you get supplies when and where you
        want them.
      </p>
    </div>
    <h2 class="lg:block hidden 4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-14">We are dedicated to empowering access to medicines.</h2>
    <div class="grid lg:grid-cols-2 grid-cols-1 gap-5 lg:mt-44 mt-9 lg:mb-40 mb-16">
      <div>
        <a href="{{ route('how-we-help.sexual-health.index') }}"><img src="{{ asset('image/SexualHealthH.jpg') }}" alt="Smartway Pharmaceuticals - Sexual Health Supply" title="Smartway Pharmaceuticals - Sexual Health Supply"></a>
      </div>
      <div>
        <a href="{{ route('how-we-help.eap.index') }}"><img src="{{ asset('image/EarlyAccessH.jpg') }}" alt="Smartway Pharmaceuticals - Early Access Programs" title="Smartway Pharmaceuticals - Early Access Programs"></a>
      </div>
    </div>
    {{--<div class="text-center lg:my-40 mt-16">
      <a href="{{ route('how-we-help.sexual-health.index') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Click here for Sexual Health Supply
      </a>
      <a href="{{ route('how-we-help.eap.index') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Click here for exclusive supply and innovative new medicines
      </a>
    </div>--}}
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold text-center">Why partner with Smartway?</p>
    <div class="4xl:flex hidden lg:mt-16 mt-7 text-22px pb-4 xl:px-0 px-6">
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-5 min-w-308px mr-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/isui-icn1.svg') }}" alt="Smartway Pharmaceuticals - Approved supplier" title="Smartway Pharmaceuticals - Approved supplier"/>
        <p class="font-bold leading-tight mb-10">
          Approved supplier
        </p>
        <p>
          Audited and approved by NHS, MHRA and MoH.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 min-w-308px mr-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/isui-icn2.svg') }}" alt="Smartway Pharmaceuticals - End-to-end supply chain management" title="Smartway Pharmaceuticals - End-to-end supply chain management"/>
        <p class="font-bold leading-tight mb-3 px-6">
          End-to-end supply chain management
        </p>
        <p class="px-7">
          Regular deliveries to over 98 countries. Own hubs in EU, UK, UAE, India.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 min-w-308px mr-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
             src="{{ asset('image/isui-icn3.svg') }}" alt="Smartway Pharmaceuticals - Direct manufacturer relationships" title="Smartway Pharmaceuticals - Direct manufacturer relationships"/>
        <p class="font-bold leading-tight mb-3">
          Direct manufacturer relationships
        </p>
        <p class="mb-7">
          Long term direct relationships.
        </p>
        <p class="px-7">
          Widest range of product availability.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 min-w-308px mr-6">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/isui-icn4.svg') }}" alt="Smartway Pharmaceuticals - Project management" title="Smartway Pharmaceuticals - Project management"/>
        <p class="font-bold leading-tight mb-10">
          Project management
        </p>
        <p>
          Designated account managers with specialist expertise on hand.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 min-w-308px">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/isui-icn5.svg') }}" alt="Smartway Pharmaceuticals - Global procurement" title="Smartway Pharmaceuticals - Global procurement"/>
        <p class="font-bold leading-tight mb-10">
          Global procurement
        </p>
        <p class="px-5">
          40 countries. Approved and audited supplier network.
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
                   src="{{ asset('image/isui-icn1.svg') }}" alt="Smartway Pharmaceuticals - Approved supplier" title="Smartway Pharmaceuticals - Approved supplier"/>
              <p class="font-bold leading-tight mb-10">
                Approved supplier
              </p>
              <p>
                Audited and approved by NHS, MHRA and MoH.
              </p>
            </div>
            <div
                    class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/isui-icn2.svg') }}" alt="Smartway Pharmaceuticals - End-to-end supply chain management" title="Smartway Pharmaceuticals - End-to-end supply chain management"/>
              <p class="font-bold leading-tight mb-3 px-6">
                End-to-end supply chain management
              </p>
              <p class="px-7">
                Regular deliveries to over 98 countries. Own hubs in EU, UK, UAE, India.
              </p>
            </div>
            <div
                    class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/isui-icn3.svg') }}" alt="Smartway Pharmaceuticals - Direct manufacturer relationships" title="Smartway Pharmaceuticals - Direct manufacturer relationships"/>
              <p class="font-bold leading-tight mb-3">
                Direct manufacturer relationships
              </p>
              <p class="mb-7">
                Long term direct relationships.
              </p>
              <p class="px-7">
                Widest range of product availability.
              </p>
            </div>
            <div
                    class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/isui-icn4.svg') }}" alt="Smartway Pharmaceuticals - Project management" title="Smartway Pharmaceuticals - Project management"/>
              <p class="font-bold leading-tight mb-10">
                Project management
              </p>
              <p>
                Designated account managers with specialist expertise on hand.
              </p>
            </div>
            <div
                    class="glide__slide bg-alabaster bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/isui-icn5.svg') }}" alt="Smartway Pharmaceuticals - Global procurement" title="Smartway Pharmaceuticals - Global procurement"/>
              <p class="font-bold leading-tight mb-10">
                Global procurement
              </p>
              <p class="px-5">
                40 countries. Approved and audited supplier network.
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
  <section class="container 3xl:max-w-3xl px-4 lg:mb-40 mb-20">
    <div class="grid xl:grid-cols-2 grid-cols-1 lg:gap-y-40 gap-y-20">
      <div class="xl:pr-24">
        <a href="{{ route('how-we-help.hospital-and-pharmacy-supply.reliable-supply') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Reliable Supply of Medicines Sourced Worldwide</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Reliable_Supply.jpg') }}" alt="Smartway Pharmaceuticals - Reliable Supply of Medicines Sourced Worldwide" title="Smartway Pharmaceuticals - Reliable Supply of Medicines Sourced Worldwide">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 lg:mb-36 mb-10">
          <p class="mb-9">
            Smartway’s become known for reliable consistent supply of branded and generic pharmaceuticals, unlicensed
            medicines, specials, veterinarian supplies and supplements.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.hospital-and-pharmacy-supply.reliable-supply') }}"><img
                  class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Explore
          more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img src="{{ asset('image/Reliable_Supply.jpg') }}" alt="Smartway Pharmaceuticals - Reliable Supply of Medicines Sourced Worldwide" title="Smartway Pharmaceuticals - Reliable Supply of Medicines Sourced Worldwide">
      </div>

      <div class="xl:flex hidden items-center">
        <img src="{{ asset('image/NHS.jpg') }}" alt="Smartway Pharmaceuticals - Approved Supplier" title="Smartway Pharmaceuticals - Approved Supplier">
      </div>
      <div class="xl:pl-28">
        <a href="#"
           class="quarto-font 4xl:text-62px text-44px leading-none">Approved Supplier</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/NHS.jpg') }}" alt="Smartway Pharmaceuticals - Approved Supplier" title="Smartway Pharmaceuticals - Approved Supplier">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 lg:mb-16 mb-10">
          <p class="mb-9">
            Smartway is an approved supplier to hospitals and pharmacies across the world.
          </p>
          <p class="xl:pr-10">
            We have been an approved supplier to the NHS for over 25 year and now supply hospitals and pharmacies on a global basis.
          </p>
        </div>
        {{--<a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.international-supply-and-unlicensed-imports.global-distributions') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Explore
          more</a>--}}
      </div>

      <div class="xl:pr-24">
        <a href="{{ route('how-we-help.hospital-and-pharmacy-supply.global-distributions') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Global Distribution</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Global_Distribution.jpg') }}" alt="Smartway Pharmaceuticals - Global Distribution" title="Smartway Pharmaceuticals - Global Distribution">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 lg:mb-16 mb-10">
          <p class="mb-9">
            Smartway distributes lifesaving therapies to over 98 countries. In the last five years, we have shipped 5
            million packs of medication worldwide.
          </p>
          <p class="xl:pr-10">
            Smartway is an audited and approved supplier to the NHS and supplies
            unlicensed imports and specials to all UK NHS Trusts. We also supply hospitals, wholesalers, and specialist importers on a global level.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.hospital-and-pharmacy-supply.global-distributions') }}"><img
                  class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Explore
          more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img src="{{ asset('image/Global_Distribution.jpg') }}" alt="Smartway Pharmaceuticals - Global Distribution" title="Smartway Pharmaceuticals - Global Distribution">
      </div>

      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/Hospital_Project_Management.jpg') }}" alt="Smartway Pharmaceuticals - Project Management" title="Smartway Pharmaceuticals - Project Management">
      </div>
      <div class="xl:pl-28">
        <a href="{{ route('how-we-help.hospital-and-pharmacy-supply.project-management') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none sm:mr-0 -mr-2 block">Project Management</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-11871146662.png') }}" alt="Smartway Pharmaceuticals - Project Management" title="Smartway Pharmaceuticals - Project Management">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 lg:mb-16 mb-10">
          <p>
            At Smartway, we combine sector knowledge with regulatory and pharmaceutical expertise. Your dedicated
            project managers will lead your program from concept to fruition, bringing in expertise from all Smartway
            functions. With fully operational hubs around the world and a single global management system, you can be
            sure of a seamless experience throughout procurement
            <span class="4xl:block">and delivery.</span>
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-centerr"
           href="{{ route('how-we-help.hospital-and-pharmacy-supply.project-management') }}"><img
                  class="inline mr-4"
                  src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Explore
          more</a>
      </div>

      <div class="xl:pr-28 xl:pr-5">
        <a href="{{ route('who-we-are.media-and-resource-centre.index') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Resource Centre</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Resource_Centre.jpg') }}" alt="Smartway Pharmaceuticals - Resource Centre" title="Smartway Pharmaceuticals - Resource Centre">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-28 mb-9">
          <p>
            Our team regularly provide updates and briefings on relevant topics including regulatory and market updates.
            We also run expert webinars and interactive training. For the latest news and articles please visit our
            resource centre.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center" href="{{ route('who-we-are.media-and-resource-centre.index') }}"><img
                  class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Read more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/Resource_Centre.jpg') }}" alt="Smartway Pharmaceuticals - Resource Centre" title="Smartway Pharmaceuticals - Resource Centre">
      </div>

    </div>
    {{--  <hr class="h-0.5 bg-black lg:my-40 mt-20 mb-16">
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold">Meet the Team</h2>
    <div class="grid lg:grid-cols-3 gap-x-5 lg:gap-y-16 gap-y-8 lg:mt-20 mt-7">
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Dhruv-team.jpg') }}" alt="Smartway Pharmaceuticals - Dhruv Patel - Chief Operating Officer" title="Smartway Pharmaceuticals - Dhruv Patel - Chief Operating Officer">
        <p class="text-lochmara font-bold mb-1.5">Dhruv Patel</p>
        <p class="font-bold">Chief Operating Officer</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Judith-team.jpg') }}" alt="Smartway Pharmaceuticals - Judith Asiimwe - Project Manager" title="Smartway Pharmaceuticals - Judith Asiimwe - Project Manager">
        <p class="text-lochmara font-bold mb-1.5">Judith Asiimwe</p>
        <p class="font-bold">Project Manager</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Rupi_team.jpg') }}" alt="Smartway Pharmaceuticals - Rupi Bhasin - Director of Digital Health" title="Smartway Pharmaceuticals - Rupi Bhasin - Director of Digital Health">
        <p class="text-lochmara font-bold mb-1.5">Rupi Bhasin</p>
        <p class="font-bold">Director of Digital Health</p>
      </div>
    </div>
    <div class="text-center lg:my-40 mt-16 mb-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Talk
        to the team</a>
    </div>  --}}
  </section>
@endsection

@push('scripts')
<script src="{{ mix('js/why-partner-slider.js') }}" defer></script>
@endpush