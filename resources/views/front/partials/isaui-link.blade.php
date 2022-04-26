<section class="bg-cornflower lg:py-14 pt-14 pb-20 mb-5">
  <div class="container px-4 lg:max-w-6xl">
    <div class="lg:grid grid-cols-2 gap-10">
      <div class="flex lg:items-center lg:justify-end justify-center lg:mb-0 mb-14">
        <p class="4xl:text-48px lg:text-44px text-38px quarto-font 4xl:leading-53px lg:leading-48px leading-41px lg:mr-0 -mr-2">
          <span class="sm:block">Please take a look at how</span>
          <span class="sm:block">else we can help you in</span>
          <span class="sm:block">International Supply &</span>
          <span class="sm:block">Unlicensed Imports.</span>
        </p>
      </div>
      <div class="4xl:text-2xl sm:text-lg text-xl font-bold flex items-center lg:justify-center -tracking-0.5px">
        <div class="w-full border-t-2 border-black">
          <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
             href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}">
            <span>
              <span class="lg:inline block">International Supply &</span>
              <span class="lg:inline block">Unlicensed Imports</span></span> <img
                src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
          </a>
          @if(request()->route()->getName() != 'how-we-help.international-supply-and-unlicensed-imports.reliable-supply')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.international-supply-and-unlicensed-imports.reliable-supply') }}">
              <span>Reliable supply, worldwide</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.international-supply-and-unlicensed-imports.global-distributions')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.international-supply-and-unlicensed-imports.global-distributions') }}">
              <span>Global Distribution</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.international-supply-and-unlicensed-imports.project-management')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.international-supply-and-unlicensed-imports.project-management') }}">
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