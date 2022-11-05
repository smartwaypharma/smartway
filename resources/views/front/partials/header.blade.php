<header id="top" class="w-full relative">
  <nav class="inset-x-0 z-50 absolute 4xl:text-2xl text-lg mt-2 sm:mt-10">
    <div class="container 3xl:max-w-3xl 4xl:pl-3 px-4">
      <div class="flex justify-between">
        <div class="flex space-x-4">
          <a href="{{ route('home') }}">
            {{--<img class="4xl:w-full md:w-64 w-32 ml-2" src="{{ asset('image/Smartway_main_logo.svg') }}" alt="Logo">--}}
            <img class="4xl:w-full md:w-64 w-32 ml-2" src="{{ asset('image/smartwayLogo.svg') }}" alt="Logo">
          </a>
        </div>
        <div class="hidden lg:flex items-center space-x-1 text-white -mb-4">
          <div
              class="dropdown 3xl:p-4 p-3 sm:text leading-40px relative {{ str_starts_with(request()->route()->getPrefix(), '/who-you-are') ? 'active' : '' }}">
            <span>Who you are</span>
            <ul class="dropdown-menu text-lg bg-persian-green absolute px-5 py-6 rounded-lg">
              <li><a href="{{ route('who-you-are.healthcare-professional') }}">Healthcare Professional</a></li>
              <li><a href="{{ route('who-you-are.pharma-and-biotech') }}">Pharma & Biotech</a></li>
              <li><a href="{{ route('who-you-are.wholesaler-distributor') }}">Wholesaler/Distributor</a></li>
              <li><a href="{{ route('who-you-are.aid-and-development') }}">Aid & Development</a></li>
              <li><a href="{{ route('who-you-are.patient') }}">Patient</a></li>
            </ul>
          </div>
          <div
              class="dropdown 3xl:p-4 p-3 sm:text leading-40px relative {{ str_starts_with(request()->route()->getPrefix(), '/who-we-are') ? 'active' : '' }}">
            <span>Who we are</span>
            <ul class="dropdown-menu text-lg bg-persian-green absolute px-5 py-6 rounded-lg">
              <li><a href="{{ route('who-we-are.our-history') }}">Our History</a></li>
              <li><a href="{{ route('who-we-are.meet-the-team') }}">Meet The Team</a></li>
              <li><a href="{{ route('who-we-are.regulatory-compliance') }}">Regulatory Compliance</a></li>
              <li><a href="{{ route('who-we-are.social-responsibility') }}">Social Responsibility</a></li>
              <li><a href="{{ route('who-we-are.media-and-resource-centre.index') }}">Media & Resource Centre</a></li>
              <li><a href="{{ route('who-we-are.careers') }}">Careers & Internships</a></li>
            </ul>
          </div>
          <div
              class="dropdown 3xl:p-4 p-3 sm:text leading-40px relative {{ str_starts_with(request()->route()->getPrefix(), 'how-we-help') ? 'active' : '' }}">
            <span>How we help</span>
            <ul class="dropdown-menu text-lg bg-persian-green absolute px-5 py-6 rounded-lg">
              <li><a href="{{ route('how-we-help.eap.index') }}">Early Access Programs</a></li>
              <li><a href="{{ route('how-we-help.cts.index') }}">Comparator/RLD Supply</a></li>
              <li><a href="{{ route('how-we-help.aid-dev.index') }}">Aid & Development</a></li>
              <li><a href="{{ route('how-we-help.hospital-and-pharmacy-supply.index') }}">Hospital & Pharmacy Supply</a></li>
              <li><a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}">International
                  Supply & Unlicensed Imports</a></li>
              <li><a href="{{ route('how-we-help.sexual-health.index') }}">Sexual Health Supply</a></li>
              <li><a href="{{ route('how-we-help.distribution.index') }}">Specialist Distribution</a></li>
            </ul>
          </div>
          <div class="pl-4">
            <a href="{{ route('connect-with-us') }}"
               class="button pt-3 pb-4 px-5 bg-persian-green rounded-full transition duration-300">Connect with
              us</a>
          </div>
        </div>

        <button type="button" id="mobile-menu-open"
                class="ml-auto text-white focus:outline-none flex items-center lg:hidden" aria-label="Open the menu">
          <svg class="fill-current w-5 h-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
          </svg>
        </button>
      </div>
    </div>
  </nav>

  <div id="mobile-menu"
       class="mobile-nav fixed inset-0 w-screen h-screen offscreen transition-transform lg:hidden bg-black pt-2 sm:pt-9">
    <div class="container 3xl:max-w-3xl pr-4 pl-5 lg:px-4">
      <div class="flex justify-between items-center pb-10 border-b border-white">
        <div class="flex items-center">
          <a href="/" class="block">
            <img class="4xl:w-full md:w-64 w-32" src="{{ asset('image/Smartway_main_logo.svg') }}" alt="Logo">
          </a>
        </div>

        <button type="button" id="mobile-menu-close" class="text-white focus:outline-none flex items-center"
                aria-label="Close the menu">
          <svg class="fill-current w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
            <path
                d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
          </svg>
        </button>
      </div>
      <div class="text-white text-26px font-light -tracking-0.65px mt-8 overflow-y-scroll" style="height: 65vh">
        <div
            class="dropdown mb-18px relative">
          <span>Who you are</span>
          <ul class="dropdown-menu px-5 pt-10 pb-4 hidden">
            <li class="mb-18px"><a href="{{ route('who-you-are.healthcare-professional') }}">Healthcare Professional</a>
            </li>
            <li class="mb-18px"><a href="{{ route('who-you-are.pharma-and-biotech') }}">Pharma & Biotech</a></li>
            <li class="mb-18px"><a href="{{ route('who-you-are.wholesaler-distributor') }}">Wholesaler/Distributor</a>
            </li>
            <li class="mb-18px"><a href="{{ route('who-you-are.aid-and-development') }}">Aid & Development</a></li>
            <li><a href="{{ route('who-you-are.patient') }}">Patient</a></li>
          </ul>
        </div>
        <div
            class="dropdown mb-18px relative">
          <span>Who we are</span>
          <ul class="dropdown-menu px-5 pt-10 pb-4 hidden">
            <li class="mb-18px"><a href="{{ route('who-we-are.our-history') }}">Our History</a></li>
            <li class="mb-18px"><a href="{{ route('who-we-are.meet-the-team') }}">Meet The Team</a></li>
            <li class="mb-18px"><a href="{{ route('who-we-are.regulatory-compliance') }}">Regulatory Compliance</a></li>
            <li class="mb-18px"><a href="{{ route('who-we-are.social-responsibility') }}">Social Responsibility</a></li>
            <li class="mb-18px"><a href="{{ route('who-we-are.media-and-resource-centre.index') }}">Media & Resource
                Centre</a>
            </li>
            <li><a href="{{ route('who-we-are.careers') }}">Careers & Internships</a></li>
          </ul>
        </div>
        <div
            class="dropdown mb-18px relative">
          <span>How we help</span>
          <ul class="dropdown-menu px-5 pt-10 pb-4 hidden">
            <li class="mb-18px"><a href="{{ route('how-we-help.eap.index') }}">Early Access Programs</a></li>
            <li class="mb-18px"><a href="{{ route('how-we-help.cts.index') }}">Comparator/RLD Supply</a></li>
            <li class="mb-18px"><a href="{{ route('how-we-help.aid-dev.index') }}">Aid & Development</a></li>
            <li class="mb-18px"><a href="{{ route('how-we-help.hospital-and-pharmacy-supply.index') }}">Hospital & Pharmacy Supply</a></li>

            <li class="mb-18px"><a href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}">International
                Supply & Unlicensed Imports</a></li>
            <li class="mb-18px"><a href="{{ route('how-we-help.sexual-health.index') }}">Sexual Health Supply</a></li>
            <li><a href="{{ route('how-we-help.distribution.index') }}">Specialist Distribution</a></li>
          </ul>
        </div>
        <a href="{{ route('connect-with-us') }}">Connect with us</a>
      </div>
    </div>
    <div class="flex justify-center items-end absolute bottom-10 left-0 right-0">
      <p class="text-lg text-white font-light mr-5">Follow Us:</p>
      <a href="https://www.linkedin.com/company/smartway-pharmaceuticals/?viewAsMember=true"><img src="{{ asset('image/icon/linkedin-icon.png') }}"></a>
    </div>
  </div>
  @yield('header-content')
</header>
