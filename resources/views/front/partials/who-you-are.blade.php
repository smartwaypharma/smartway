<section class="bg-morning-glory lg:py-14 py-20 mb-5 lg:pl-16">
  <div class="container px-4 lg:max-w-6xl">
    <div class="lg:grid grid-cols-2 gap-10">
      <div class="flex items-center 4xl:justify-center lg:justify-end justify-center">
        <p class="4xl:text-64px text-44px 4xl:leading-70px leading-48px quarto-font lg:mb-0 mb-14 lg:pl-4 pt-3">
          <span class="block">Working together</span>
          <span class="block">to empower access</span>
          <span class="block">to medicines</span>
        </p>
      </div>
      <div class="4xl:text-2xl sm:text-lg text-xl font-bold flex items-center justify-center -tracking-0.5px">
        <div class="4xl:w-5/6 lg:w-3/5 w-full border-t-2 border-black ml-0 mr-auto">
          @if(request()->route()->getName() != 'who-you-are.healthcare-professional')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-you-are.healthcare-professional') }}">
              <span>Healthcare Professional</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-you-are.pharma-and-biotech')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-you-are.pharma-and-biotech') }}">
              <span>Pharma & Biotech</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-you-are.wholesaler-distributor')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-you-are.wholesaler-distributor') }}">
              <span>Wholesaler/Distributor</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-you-are.aid-and-development')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-you-are.aid-and-development') }}">
              <span>Aid & Development</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-you-are.patient')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-you-are.patient') }}">
              <span>Patient</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>