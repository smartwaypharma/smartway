<section class="bg-cornflower lg:py-14 pt-14 pb-20 mb-5">
  <div class="container px-4 lg:max-w-6xl">
    <div class="lg:grid grid-cols-2 gap-5">
      <div class="flex lg:items-center justify-center lg:mb-0 mb-14">
        <p class="4xl:text-48px lg:text-44px text-38px quarto-font 4xl:leading-53px lg:leading-48px leading-41px">
          <span class="lg:block hidden">Please take a look at how</span>
          <span class="lg:block hidden">else we can help you in</span>
          <span class="lg:block hidden">Specialist Distribution.</span>
          <span class="lg:hidden block">Please take a look</span>
          <span class="lg:hidden block">at how else we can</span>
          <span class="lg:hidden block">help you in</span>
          <span class="lg:hidden block">Specialist Distribution.</span>
        </p>
      </div>
      <div class="4xl:text-2xl sm:text-lg text-xl font-bold flex items-center lg:justify-center -tracking-0.5px">
        <div class="w-full border-t-2 border-black">
          <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
             href="{{ route('how-we-help.distribution.index') }}">
            <span>Specialist Distribution</span> <img
                src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
          </a>
          @if(request()->route()->getName() != 'how-we-help.distribution.global-supply-chain-capability')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.distribution.global-supply-chain-capability') }}">
              <span>Global Supply Chain capability</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.distribution.uk-network')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.distribution.uk-network') }}">
              <span>Our UK & Ireland Network</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.distribution.end-to-end-service')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.distribution.end-to-end-service') }}">
              <span>End-to-End Service</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.distribution.stakeholder-support')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.distribution.stakeholder-support') }}">
              <span>Stakeholder Support</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
             href="{{ route('who-we-are.media-and-resource-centre.index') }}">
            <span>Resource Centre</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
