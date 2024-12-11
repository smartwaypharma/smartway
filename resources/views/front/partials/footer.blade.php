<footer class="bg-black text-white">
  <div class="container 3xl:max-w-3xl px-4">
    <div class="sm:flex justify-between items-center 2xl:py-20 lg:py-14 py-10">
      <div>
        <a href="/">
          <img class="2xl:w-64 w-44" src="{{ asset('image/Smartway_main_logo.svg') }}" alt="Smartway Pharmaceuticals logo" title="Smartway Pharmaceuticals logo">
        </a>
      </div>
      <a href="{{ route('connect-with-us') }}"
         class="button mt-6 sm:mt-0 block text-center sm:inline-block 4xl:text-28px lg:text-xl text-2xl font-semibold 4xl:py-5 py-3.5 4xl:px-11 px-8 bg-persian-green rounded-full">Get
        in
        touch</a>
    </div>
    <hr class="divide-white pb-2">
    <div class="flex 2xl:pt-16 lg:pt-11 pt-6 2xl:mb-36 mb-6">
      <div class="lg:w-70p sm:grid lg:grid-cols-3 sm:grid-cols-2 2xl:gap-x-4 gap-y-4 col text-lg">
        <div>
          <p class="4xl:text-2xl lg:text-base text-2xl font-bold 2xl:mb-7 sm:mb-4 mb-7">CONTACT</p>
          <address class="mb-7">Headquarters<br>
            Smartway Pharmaceuticals Ltd. <br>
            10 Lyon Road, <br>
            London SW19 2RL
          </address>
          <p class="mb-7">Telephone <a class="text-lochmara" href="tel:+44 20 8545 7711">+44 20 8545 7711</a></p>
          <p>Email <a href="mailto:info@smartwaypharma.co.uk" class="text-lochmara">support</a></p>
        </div>
        <hr class="sm:hidden divide-white my-9">
        <div class="4xl:pl-10 lg:pl-4 pl-0">
          <p class="4xl:text-2xl lg:text-base text-2xl font-bold 2xl:mb-7 sm:mb-4 mb-7">INFO</p>
          <p class="2xl:mb-5 sm:mb-2 mb-5">Registered in the UK: 8481191</p>
          <p class="2xl:mb-5 sm:mb-2 mb-5"><a href="{{ route('regulatory-information') }}">Regulatory Information</a></p>
          <p class="mb-5"><a href="{{ asset('pdf/Terms_and_conditions_of_supply.pdf') }}" target="_blank">Terms and Conditions</a></p>
          <p class="2xl:mb-5 sm:mb-2 mb-5"><a href="{{ route('connect-with-us') }}" class="text-persian-green"><b>See our Christmas operating schedule</b></a></p>
        </div>
        <hr class="sm:hidden divide-white my-8">
        <div class="lg:pl-10 pl-0">
          <p class="4xl:text-2xl lg:text-base text-2xl font-bold 2xl:mb-5 sm:mb-3 mb-5">STRATEGIC HUBS</p>
          <p>Dubai</p>
          <p>EU/Ireland</p>
          <p>EU/Romania</p>
          <p>UK</p>
          <p>India</p>
          <p>USA</p>
        </div>
        <hr class="sm:hidden divide-white my-7">
        <div class="block lg:hidden">
          <p class="4xl:text-2xl lg:text-base text-2xl font-bold mb-7">CAREERS</p>
          <p class="text-22px sm:text-2xl mb-6 -mr-3 sm:mr-0">Do your best work among a caring community of diverse
            talents.</p>
          <a class="text-2xl flex" href="{{ route('who-we-are.careers') }}">
            <img class="mr-2.5" src="{{ asset('image/icon/ic_arrow_forward_16px.svg') }}" alt="Smartway Pharmaceuticals - arrow forward icon" title="Smartway Pharmaceuticals - arrow forward icon">
            Join us</a>
        </div>
      </div>
      <div class="w-30p hidden lg:block">
        <div class="2xl:pl-20 pl-16 border-l">
          <p class="4xl:text-2xl lg:text-base text-2xl font-bold 2xxl:mb-7 mb-4">CAREERS</p>
          <p class="4xl:text-2xl lg:text-base text-2xl 2xl:mb-7 mb-3">Do your best work among a caring community of diverse talents.</p>
          <a class="4xl:text-2xl sm:text-17px flex" href="{{ route('who-we-are.careers') }}">Join us
            <img class="ml-2.5" src="{{ asset('image/icon/ic_arrow_forward_16px.svg') }}" alt="Smartway Pharmaceuticals - arrow forward icon" title="Smartway Pharmaceuticals - arrow forward icon"></a>
        </div>
      </div>
    </div>
    <div class="flex flex-col-reverse sm:flex-row sm:justify-between sm:items-center pb-10">
      <div class="text-sm flex items-end sm:items-center">
        <div
            class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-persian-green mt-9 sm:mt-0"></div>
        <span>© Copyright Smartway {{ now()->format('Y') }}. All rights reserved.</span></div>
      <a href="https://www.linkedin.com/company/smartway-pharmaceuticals/?viewAsMember=true" target="_blank">
        <img class="2xl:w-auto 2xl:h-auto w-7 h-7" src="{{ asset('image/icon/linkedin-icon.png') }}" alt="Smartway Pharmaceuticals - linkedin icon" title="Smartway Pharmaceuticals - linkedin icon">
      </a>
    </div>
  </div>
  <script type="text/javascript">
    _linkedin_partner_id = "3232052";
    window._linkedin_data_partner_ids = window._linkedin_data_partner_ids || [];
    window._linkedin_data_partner_ids.push(_linkedin_partner_id);
  </script><script type="text/javascript">
    (function(l) {
      if (!l){window.lintrk = function(a,b){window.lintrk.q.push([a,b])};
        window.lintrk.q=[]}
      var s = document.getElementsByTagName("script")[0];
      var b = document.createElement("script");
      b.type = "text/javascript";b.async = true;
      b.src = "https://snap.licdn.com/li.lms-analytics/insight.min.js";
      s.parentNode.insertBefore(b, s);})(window.lintrk);
  </script>
  <noscript>
    <img height="1" width="1" style="display:none;" alt="" src="https://px.ads.linkedin.com/collect/?pid=3232052&fmt=gif" />
  </noscript>
</footer>
