<section class="bg-cornflower lg:py-36 pt-14 pb-20 mb-5">
  <div class="container px-4 lg:max-w-7xl">
    <div class="lg:grid grid-cols-2 gap-20">
      <div class="flex items-center 4xl:justify-center lg:justify-end justify-center lg:mb-0 mb-12">
        <p class="4xl:text-64px lg:text-44px text-38px quarto-font 4xl:leading-70px lg:leading-48px leading-41px sm:pr-0 pr-14">
          <span class="lg:block hidden">Please take a</span>
          <span class="lg:block hidden">look at how</span>
          <span class="lg:block hidden">else we can</span>
          <span class="lg:block hidden">help you.</span>
          <span class="lg:hidden">Please take a look at</span>
          <span class="lg:hidden">how else we can</span>
          <span class="lg:hidden">help you</span>
        </p>
      </div>
      <div class="4xl:text-2xl sm:text-lg text-xl font-bold flex items-center -tracking-0.5px">
        <div class="4xl:w-3/4 lg:w-3/5 w-full border-t-2 border-black">
          @if(request()->route()->getName() != 'who-we-are.our-history')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-we-are.our-history') }}">
              <span>Our History</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-we-are.meet-the-team')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-we-are.meet-the-team') }}">
              <span>Meet The Team</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-we-are.regulatory-compliance')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-we-are.regulatory-compliance') }}">
              <span>Regulatory Compliance</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-we-are.social-responsibility')
          <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
             href="{{ route('who-we-are.social-responsibility') }}">
            <span>Social Responsibility</span> <img
                src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
          </a>
          @endif
          @if(request()->route()->getName() != 'who-we-are.media-and-resource-centre.index')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-we-are.media-and-resource-centre.index') }}">
              <span>Media & Resource Centre</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'who-we-are.careers')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('who-we-are.careers') }}">
              <span>Careers & Internships</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
        </div>
      </div>
    </div>
  </div>
</section>