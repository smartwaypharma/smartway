<section class="bg-cornflower lg:py-14 pt-20 pb-20 mb-5">
  <div class="container px-4 max-w-6xl">
    <div class="lg:grid grid-cols-2 gap-5">
      <div class="flex lg:items-center lg:justify-end justify-center lg:mb-0 mb-14">
        <p class="4xl:text-48px lg:text-44px text-38px quarto-font 4xl:leading-53px lg:leading-48px leading-41px">
          <span class="lg:block hidden">Please take a look at</span>
          <span class="lg:block hidden">how else we can help</span>
          <span class="lg:block hidden">you in Comparator/</span>
          <span class="lg:block hidden">RLD Supply.</span>
          <span class="lg:hidden block">Please take a look</span>
          <span class="lg:hidden block">at how else we can</span>
          <span class="lg:hidden block">help you in Comparator/</span>
          <span class="lg:hidden block">RLD Supply.</span>
        </p>
      </div>
      <div class="4xl:text-2xl sm:text-lg text-xl font-bold flex items-center lg:justify-center -tracking-0.5px">
        <div class="lg:w-5/6 w-full border-t-2 border-black">
          <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
             href="{{ route('how-we-help.cts.index') }}">
            <span>Comparator/RLD Supply</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
          </a>
          @if(request()->route()->getName() != 'how-we-help.cts.global-procurement-network-comparator-rld-supply')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.cts.global-procurement-network-comparator-rld-supply') }}">
              <span>Global Procurement network</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.cts.global-supply-chain-capability')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.cts.global-supply-chain-capability') }}">
              <span>Global Supply Chain capability</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.cts.project-management')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.cts.project-management') }}">
              <span>Project Management</span> <img
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