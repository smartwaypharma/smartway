@extends('layouts.front')

@section('meta')
  <title>Your Global Partner for Early Access Programs</title>
  <meta name="description" content="Find out about our early and expanded access programs, compassionate use and named patient programs for innovative new medicines. We have a pool of experts to help you with early access program.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1267603648.png') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Early_Access_Programs.jpg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none mb-2">
      Early Access Programs</h1>
    <p class="4xl:text-34px sm:text-2xl text-22px 4xl:leading-44px leading-tight font-semibold -mt-1 w-11/12 sm:w-full">
      <span class="xl:block">Design, implementation and global management of Expanded Access,</span>
      <span class="xl:block">Early Access, Compassionate Use and Named Patient Programs</span>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-40 sm:mt-20 mt-8">
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px mb-12">
      <span class="4xl:block">Smartway designs, implements and manages</span>
      <span class="4xl:block">global programs that empower access to</span>
      <span class="4xl:block">innovative therapies.</span>
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px pr-5 sm:pr-0">
      <span class="4xl:block">We partner with pharma and biotech organizations to deliver customized programs that transform lives. These partnerships have made us a</span>
      <span class="4xl:block">leader in the provision of Expanded Access, Early Access, Compassionate Use and Named Patient Programs across 98 countries.</span>
    </p>
    <div class="lg:grid grid-cols-2 gap-5 sm:mt-32 mt-16">
      <div>
        <img class="mx-auto lg:mx-0 lg:w-auto sm:w-2/3 w-full" src="{{ asset('image/graphic.svg') }}">
      </div>
      <div class="flex items-center mt-20 lg:mt-0">
        <div>
          <p class="4xl:text-32px xl:text-2xl text-lg 4xl:leading-37px xl:leading-28px leading-24px font-semibold lg:mb-28 mb-16">
            <span class="xl:block">Over the last 20 years, we’ve gained the</span>
            <span class="xl:block">experience it takes to strategically advice,</span>
            <span class="xl:block">design, initiate and
            manage global or regional</span>
            <span class="xl:block">programs with you.</span>
          </p>
          <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mb-6 text-center lg:text-left">
            End-to-end solutions
          </p>
          <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
            <span
                class="4xl:block xs:inline block">We provide end-to-end solutions to manage complex EAPs. Whatever</span>
            <span class="4xl:block xs:inline block">your size and scale, we’re dedicated to
            empowering patient access to</span>
            <span class="4xl:block xs:inline block">the right therapy.</span>
          </p>
        </div>
      </div>
    </div>
    <div class="text-center lg:mt-32 mt-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">How
        can we help?</a>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold text-center">Why partner with Smartway?</p>
    <div class="xl:grid hidden grid-cols-5 gap-6 lg:mt-16 mt-7 4xl:text-22px text-lg pb-4 xl:px-0 px-6">
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-5">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/icn1.svg') }}"/>
        <p class="font-bold leading-tight mb-3">
          <span class="block">Global distribution/</span>
          <span class="block">hub network</span>
        </p>
        <p>
          Supply to over 98 countries with hubs in the EU, UK, UAE, India.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/icn2.svg') }}"/>
        <p class="font-bold leading-tight mb-3">
          <span class="block">Best in class</span>
          <span class="block">ordering/RWD portal</span>
        </p>
        <p>
          Supporting Medicines Access in Real Time with SMARTHub, our best in class, real time ordering and RWD
          collection portal.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
             src="{{ asset('image/icn3.svg') }}"/>
        <p class="font-bold leading-tight mb-3">
          <span class="block">Regulatory expertise</span>
          <span class="block">/knowledge</span>
        </p>
        <p>
          Regulatory experts in EAP design and management. Leaders in technology to drive quality.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/icn4.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Specialist provider
        </p>
        <p class="mb-7">
          A specialist provider - not an add-on to a group offering.
        </p>
        <p>
          Programs focused on transforming lives and meeting your objectives.
        </p>
      </div>
      <div class="bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4">
        <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/icn5.svg') }}"/>
        <p class="font-bold leading-tight mb-10">
          Experienced team
        </p>
        <p>
          A proven team with deep experience across therapy areas and regulatory jurisdictions.
        </p>
      </div>
    </div>
    <div class="xl:hidden lg:mt-16 mt-7 4xl:text-22px text-lg xl:px-0 px-4">
      <div class="why-partner-slider">
        <div class="glide__track" data-glide-el="track">
          <div class="glide__slides">
            <div class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-5 mr-6 my-2">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/icn1.svg') }}"/>
              <p class="font-bold leading-tight mb-3">
                <span class="block">Global distribution/</span>
                <span class="block">hub network</span>
              </p>
              <p>
                Supply to over 98 countries with hubs in the EU, UK, UAE, India.
              </p>
            </div>
            <div class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6 my-2">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/icn2.svg') }}"/>
              <p class="font-bold leading-tight mb-3">
                <span class="block">Best in class</span>
                <span class="block">ordering/RWD portal</span>
              </p>
              <p>
                Supporting Medicines Access in Real Time with SMARTHub, our best in class, real time ordering and RWD
                collection portal.
              </p>
            </div>
            <div class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6 my-2">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5"
                   src="{{ asset('image/icn3.svg') }}"/>
              <p class="font-bold leading-tight mb-3">
                <span class="block">Regulatory expertise</span>
                <span class="block">/knowledge</span>
              </p>
              <p>
                Regulatory experts in EAP design and management. Leaders in technology to drive quality.
              </p>
            </div>
            <div class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 mr-6 my-2">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/icn4.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Specialist provider
              </p>
              <p class="mb-7">
                A specialist provider - not an add-on to a group offering.
              </p>
              <p>
                Programs focused on transforming lives and meeting your objectives.
              </p>
            </div>
            <div class="glide__slide bg-alabaster rounded-10px card-box-shadow text-center pt-10 pb-20 px-4 my-2">
              <img class="circle-box-shadow w-50 h-50 rounded-full mx-auto mb-5" src="{{ asset('image/icn5.svg') }}"/>
              <p class="font-bold leading-tight mb-10">
                Experienced team
              </p>
              <p>
                A proven team with deep experience across therapy areas and regulatory jurisdictions.
              </p>
            </div>
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
    <div class="text-center mt-20">
      <a href="{{ route('connect-with-us') }}"
         class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">How
        can we help?</a>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4 xl:pb-40 pb-20">
    <div class="grid xl:grid-cols-2 grid-cols-1 xl:gap-y-40 gap-y-20">
      <div class="xl:pr-20">
        <a href="{{ route('how-we-help.eap.what-is-an-eap') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">What is an EAP?</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-1220518444.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="lg:mb-9 mb-5">
            An Early Access Program (EAP) gives access to innovative therapies that are not available in the country of
            treatment.
          </p>
          <p>
            EAP’s are known by differing names depending on the regulatory jurisdiction. These include Expanded
            Access, Early Access, Compassionate Use and Named Patient Programs.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center" href="{{ route('how-we-help.eap.what-is-an-eap') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-1220518444.png') }}">
      </div>

      <div class="xl:flex hidden items-center">
        <img src="{{ asset('image/iStock-1127397327.png') }}">
      </div>
      <div class="xl:pl-24 xl:pr-8">
        <a href="{{ route('how-we-help.eap.consultancy') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Consultancy</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-1127397327.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="xl:mb-9 mb-5">
            EAPs are complicated. They are affected by numerous variables – not just regulatory jurisdictions, but also
            how they link to asset development and commercialization plans.
          </p>
          <p>
            Our consultancy team can help you decide if an
            EAP is right for your asset, find the optimal timing, understand the regulatory structure, and integrate
            your
            EAP with RWD and commercialisation.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.eap.consultancy') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>

      <div class="xl:pr-16">
        <a href="{{ route('how-we-help.eap.program-strategy-and-design') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none sm:pr-0 pr-10 block">Program Strategy & Design</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Program Stategy & Design.jpeg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="xl:mb-9 mb-5">
            At Smartway, we see regulatory strategy and program design as being totally integrated. Our regulatory team
            comes with deep knowledge of the various regulatory schemes and jurisdictions around the world.
          </p>
          <p>
            We deliver
            programs focussed on your objectives, focussed on delivering success now, not trying to introduce other
            services or partner companies.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.eap.program-strategy-and-design') }}"><img class="inline mr-4"
                                                                                  src="{{ asset('image/icon/icn.svg') }}">Read
          more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/Program Stategy & Design.jpeg') }}">
      </div>

      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-1250153388.png') }}">
      </div>
      <div class="xl:pl-24 xl:pr-1">
        <a href="{{ route('how-we-help.eap.real-world-data') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Real World Data</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-1250153388.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="xl:mb-9 mb-5">
            EAPs are designed to allow patient access to new therapies, but they can also provide an opportunity to
            collect Real World Data (RWD) and generate Real World Evidence (RWE).
          </p>
          <p>
            We’ll work with you to evaluate the
            correct level of RWD collection for your program, building this into our compliant program design. We
            collect the data in our 21CFR Part 11 compliant management system SMARThub®
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.eap.real-world-data') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>

      <div class="xl:pr-12">
        <a href="{{ route('how-we-help.eap.global-supply-chain-capability') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none sm:pr-0 pr-10 block">Global Supply Chain
          Capability</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Global_Supply_Chain_Capability.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-28 mb-9">
          <p class="xl:mb-9 mb-5">
            Smartway distributes pre-approval therapies to over 98 countries across the globe. In the last 5 years,
            we’ve shipped over 5 million of medication worldwide.
          </p>
          <p>
            We use our fully owned and controlled strategic supply
            hubs in the EU, UK, UAE and India to provide quick, accurate supply, everywhere.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.eap.global-supply-chain-capability') }}"><img class="inline mr-4"
                                                                                     src="{{ asset('image/icon/icn.svg') }}">Read
          more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/Global_Supply_Chain_Capability.jpg')}}">
      </div>

      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-1152449705.png') }}">
      </div>
      <div class="xl:pl-24">
        <a href="{{ route('how-we-help.eap.project-management') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none block sm:mr-0 -mr-2">Project Management</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-1152449705.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="xl:mb-9 mb-5">
            Your EAP project will be led by dedicated project managers while also bringing in expertise from across
            Smartway.
          </p>
          <p>
            SMARThub® - Supporting Medicines Access in Real Time Hub, our bespoke management system. 21CFR
            Part 11 compliant the online system provides an easy way for Physicians, Pharmacists and Hospitals to
            register to the program, order supplies and be provided with all relevant information.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.eap.project-management') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>

      <div class="xl:pr-16">
        <a href="{{ route('how-we-help.eap.stakeholder-support') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Stakeholder Support</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/iStock-522306444.png') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p>
            We unapologetically put the patient at the heart of every program. We understand your objectives and deliver
            on them, but we never lose sight of the patient and the impact these programs can have on them and their
            families.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('how-we-help.eap.stakeholder-support') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/iStock-522306444.png') }}">
      </div>

      <div class="xl:flex hidden items-center">
        <img class="my-auto" src="{{ asset('image/Resource_Centre.jpg') }}">
      </div>
      <div class="xl:pl-24 xl:pr-5">
        <a href="{{ route('who-we-are.media-and-resource-centre.index') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Resource Centre</a>
        <img class="xl:hidden sm:w-3/4 my-7" src="{{ asset('image/Resource_Centre.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-28 mb-9">
          <p>
            EAP is a rapidly changing area. The Smartway team is constantly conducting regulatory horizon scanning and
            conducting global market research. We then analyse the information and changes and produce concise updates
            and briefings focused on the EAP market. We also run expert webinars and interactive training. For the
            latest news and articles please visit our resource centre.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('who-we-are.media-and-resource-centre.index') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script src="{{ mix('js/why-partner-slider.js') }}" defer></script>
@endpush
