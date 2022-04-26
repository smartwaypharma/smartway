<section class="bg-cornflower lg:py-14 py-20 mb-5">
  <div class="container px-4 lg:max-w-7xl">
    <div class="lg:grid grid-cols-2 gap-20">
      <div class="flex lg:items-center lg:justify-end justify-center lg:mb-0 mb-14">
        <p class="4xl:text-48px text-44px quarto-font 4xl:leading-53px leading-48px">
          <span class="lg:block hidden">Please take a look</span>
          <span class="lg:block hidden">at how else we can</span>
          <span class="lg:block hidden">help you in Aid Dev.</span>
          <span class="lg:hidden">Please take a look</span>
          <span class="lg:hidden">at how else we can</span>
          <span class="lg:hidden">help you in Aid Dev.</span>
        </p>
      </div>
      <div class="4xl:text-2xl sm:text-lg text-xl font-bold flex items-center lg:justify-center -tracking-0.5px">
        <div class="4xl:w-full lg:w-5/6 w-full border-t-2 border-black">
          <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
             href="{{ route('how-we-help.aid-dev.index') }}">
            <span>Aid & Development</span> <img
                src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
          </a>
          @if(request()->route()->getName() != 'how-we-help.aid-dev.global-procurement')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.aid-dev.global-procurement') }}">
              <span>Pharmaceutical, Device and Equipment Supply</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.aid-dev.global-supply-chain-capability')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.aid-dev.global-supply-chain-capability') }}">
              <span>Global Distribution & Storage Network</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.aid-dev.kitting')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.aid-dev.kitting') }}#kitting">
              <span>Kitting</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.aid-dev.experience-and-expertise')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.aid-dev.experience-and-expertise') }}">
              <span>Project Management</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-we-are.media-and-resource-centre.index')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-we-are.media-and-resource-centre.index') }}">
              <span>Resource Centre</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>