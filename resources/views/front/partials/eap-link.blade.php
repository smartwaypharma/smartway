<section class="bg-cornflower py-20 mb-5">
  <div class="container px-4 max-w-6xl">
    <div class="lg:grid md:grid-cols-2 gap-40">
      <div class="flex items-center 4xl:justify-center lg:justify-end justify-center lg:mb-0 mb-14">
        <p class="4xl:text-64px lg:text-44px text-38px quarto-font 4xl:leading-70px lg:leading-48px leading-41px">
          <span class="xs:block">Please take a look</span>
          <span class="xs:block">at how else we can</span>
          <span class="xs:block">help you in EAP.</span>
        </p>
      </div>
      <div class="4xl:text-2xl sm:text-lg text-xl font-bold">
        <div class="lg:max-w-md w-full border-t-2 border-black -tracking-0.5px lg-mx-0 mx-auto">
          <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
             href="{{ route('how-we-help.eap.index') }}">
            <span>Early Access Programs</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
          </a>
          @if(request()->route()->getName() != 'how-we-help.eap.what-is-an-eap')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.eap.what-is-an-eap') }}">
              <span>What is an EAP</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.eap.consultancy')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.eap.consultancy') }}">
              <span>Consultancy</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.eap.program-strategy-and-design')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.eap.program-strategy-and-design') }}">
              <span>Program Strategy & Design</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.eap.real-world-data')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.eap.real-world-data') }}">
              <span>Real World Data</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.eap.global-supply-chain-capability')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.eap.global-supply-chain-capability') }}">
              <span>Global Supply Chain capability</span> <img
                  src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.eap.project-management')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.eap.project-management') }}">
              <span>Project Management</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
            </a>
          @endif
          @if(request()->route()->getName() != 'how-we-help.eap.stakeholder-support')
            <a class="flex justify-between 4xl:py-4 lg:pt-1.5 lg:pb-2 py-3 border-b-2 border-black"
               href="{{ route('how-we-help.eap.stakeholder-support') }}">
              <span>Stakeholder support</span> <img src="{{ asset('image/icon/ic_arrow_forward_right_26.svg') }}">
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