@extends('layouts.front')

@section('meta')
  <title>Meet Some of Our Employees</title>
  <meta name="description" content="Learn about some of Smartway's diverse and dynamic team. Over 100 employees worldwide.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/Meet_the_team_new_hero.jpeg') }}">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/Meet_the_team_new_hero.jpeg') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl font-medium -tracking-0.55px text-42px leading-none lg:mt-0 xl:mt-36">
      <span class="sm:block">Meet some of our 100+</span>
      <span class="sm:block">employees</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <p class="4xl:text-32px xl:text-2xl md:text-xl text-22px md:leading-37px leading-28px font-bold lg:mb-14 mb-7">Welcome from Josh
      Cocklin,
      Chief Executive</p>
    <h2 class="quarto-font 4xl:text-80px lg:text-45px text-34px 4xl:leading-102px lg:leading-48px leading-40px sm:mb-10 mb-6">
      Innovation meets resilience and stability
    </h2>
    <div class="4xl:text-33px xl:text-2xl md:text-xl text-lg 4xl:leading-51px xl:leading-42px leading-24px 2xl:pr-56">
      <p class="lg:mb-12 mb-6">
        <span
            class="4xl:block">At Smartway Pharmaceuticals, we pride ourselves on our ability to hold our position</span>
        <span class="4xl:block">at the forefront of pharmaceutical and healthcare products. But what makes this</span>
        <span class="4xl:block">possible is the same set of core values that have been with us from our earliest beginnings.</span>
        <span
            class="4xl:block">More than two decades ago, Smartway was founded on timeless principles like quality,</span>
        <span class="4xl:block">ethics, and impact. We entered the industry providing an unparalleled level of care to our</span>
        <span class="4xl:block">partners and our customers, in turn empowering them to deliver unparalleled care to their</span>
        <span class="4xl:block">patients. Today, those core values remain intact.</span>
      </p>
      <p>
        Despite our ability to adapt to changing needs, global markets, and new
        opportunities, Smartway is – and has always been – robust, strong, and steadfast in its commitment to those who
        rely on us, wherever they may be in the world.
      </p>
    </div>
    <hr class="h-0.5 bg-black lg:my-40 my-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4 lg:mb-40 mb-20">
    <div class="grid xl:grid-cols-3 md:grid-cols-2 gap-5">
      <div>
        <h2 class="quarto-font 4xl:text-94px md:text-6xl text-50px 4xl:leading-103px leading-59px lg:mb-13 mb-6 lg:pr-0 pr-6">
          <span class="sm:block">Meet some</span>
          <span class="sm:block">of our +100</span>
          <span class="sm:block">employees</span>
        </h2>
        <p class="4xl:text-32px xl:text-2xl md:text-xl text-22px md:leading-37px leading-28px font-bold lg:mb-0 mb-4">
          <span class="block">Working together to build</span>
          <span class="block">better experiences</span>
        </p>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="joshModal"
           data-slide="0">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Josh.jpg') }}">
        </div>
        <div
            class="bg-persian-green text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px h-28 scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5">Josh Cocklin</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Chief Executive</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="kirtiModal"
           data-slide="1">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Kirti_new_modal.jpeg') }}">
        </div>
        <div
            class="bg-persian-green text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5">Kirti Patel</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Chair</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="kaushikModal"
           data-slide="2">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Kaushik.jpg') }}">
        </div>
        <div
            class="bg-persian-green text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5">Kaushik Patel</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Chief Commercial Officer</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="dhruvModal"           data-slide="3">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Dhruv.jpg') }}">
        </div>
        <div
            class="bg-persian-green text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5">Dhruv Patel</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Chief Operating Officer</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4"
           data-modal="robertModal" data-slide="4">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Robert.jpg') }}">
        </div>
        <div
            class="bg-persian-green text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5">Robert Donnell</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">EVP – Medicines Access</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="rupiModal"
           data-slide="5">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Rupi.jpg') }}">
        </div>
        <div
                class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-3">Rupi Bhasin</p>
          <p class="4xl:text-28px text-2xl leading-28px font-medium">
            <span class="block">Director of Digital Health</span>
          </p>
        </div>
      </div>

      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4"
           data-modal="nicoleModal"
           data-slide="6">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Nicole.jpg') }}">
        </div>
        <div
            class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-2">Nicole Lyons</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Head of Regulatory Affairs</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4"
           data-modal="purveshModal"
           data-slide="7">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Purvesh.jpg') }}">
        </div>
        <div
            class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-2">Purvesh Patel</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Head of Supply Chain UK</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="gilesModal"
           data-slide="8">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Giles.jpg') }}">
        </div>
        <div
            class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-2">Giles Holford</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Head of Sexual Health</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4"
           data-modal="andreModal"
           data-slide="9">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Andre.jpg') }}">
        </div>
        <div
                class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-2">Andre Censi</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Global Sales Director</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4"
           data-modal="judithModal"
           data-slide="10">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Judith.jpg') }}">
        </div>
        <div
                class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-2">Judith Asiimwe</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Project Manager</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="rossModal"
           data-slide="11">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Ross.jpg') }}">
        </div>
        <div
                class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-3">Ross Hemson</p>
          <p class="4xl:text-28px text-2xl leading-28px font-medium">
            <span class="block">Associate Account Director</span>
            <span class="block">Aid & Development</span>
          </p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="annaModal"
           data-slide="12">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Anna.jpg') }}">
        </div>
        <div
            class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-2">Anna Vassova</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Marketing Manager</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="arunModal"
           data-slide="13">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Arun.jpg') }}">
        </div>
        <div
                class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-2">Arun Dholariya</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Senior Manager, EU Supply Chain</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4" data-modal="maysaModal"
           data-slide="14">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Maysa.jpg') }}">
        </div>
        <div
            class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-3">Maysa Gamal</p>
          <p class="4xl:text-28px text-2xl leading-28px font-medium">
            <span class="block">Regional Sales Manager</span>
            <span class="block">MENA region</span>
          </p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4"
           data-modal="andrewModal" data-slide="15">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Andrew.jpg') }}">
        </div>
        <div
            class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center  ">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-2">Andrew Tunstell</p>
          <p class="4xl:text-4xl text-2xl font-medium -tracking-0.55px">Regulatory Assistant</p>
        </div>
      </div>
      <div class="overflow-hidden js-team-modal-open cursor-pointer md:w-full sm:w-3/4"
           data-modal="harshadModal" data-slide="16">
        <div class="4xl:h-581px 2xl:h-520px lg:h-420px md:h-390px">
          <img class="zoom w-full h-auto" src="{{ asset('image/Harshad.jpg') }}">
        </div>
        <div
            class="bg-lochmara text-white flex flex-col items-center justify-center transform 4xl:h-185px h-120px scale-100 text-center">
          <p class="4xl:text-52px text-28px font-bold leading-none lg:mb-0 mb-2.5 mb-3">Harshad
            Chotaliya</p>
          <p class="4xl:text-28px text-2xl leading-28px font-medium">
            <span class="block">Software Engineer &</span>
            <span class="block">Web Application Developer</span></p>
        </div>
      </div>
    </div>
  </section>
  @include('front.partials.who-we-are-link')
  <div class="fixed z-999999 inset-0 overflow-y-auto hidden" id="teamModal" aria-labelledby="modal-title" role="dialog"
       aria-modal="true">
    <div class="flex items-center justify-center min-h-screen text-center">
      <div class="fixed inset-0"
           style="background: rgba(255, 255, 255, 0.44); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px);"
           aria-hidden="true"></div>
      <img id="teamModalClose" class="absolute top-5 right-5 cursor-pointer z-999999"
           src="{{asset('image/icon/Ic_close_36px.png')}}">
      <div
          class="inline-block align-bottom rounded-lg text-left transform transition-all sm:align-middle w-full">
        <p class="text-center text-32px font-bold mb-11">Meet some of our 100+ employees</p>
        <div class="team-slider">
          <div class="glide__track" data-glide-el="track">
            <div class="glide__slides">
              {{--1.Josh--}}
              <div class="glide__slide bg-midnight text-white px-20 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 67%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p class="2xl:mb-9 mb-5">With unrivalled experience in healthcare compliance and regulation, Josh
                        leads
                        Smartway with the
                        advantage of insight from across the pharmaceutical and medical landscape. His experience
                        includes
                        over 12 years’ in regulatory compliance and investigations. He combines his diligent, strategic
                        approach with a constant commitment to ethics and responsible business. Josh has also advised on
                        a
                        large number of regulatory issues, including those involving the MHRA, GPhC, GMC and HMRC.</p>
                      <p>Today, Josh
                        uses this breadth of experience to inform Smartway’s overall strategic direction, manage our
                        relationship with regulators, and identify important new opportunities.</p>
                    </div>
                    <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                    <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                      We are always exploring new opportunities and developing new ways to grow Smartway on a global
                      scale.
                      But, above all else, we remain committed to our key values: ethics, care, quality and patients.
                      Nothing is more important.”
                    </p>
                    <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Josh Cocklin, Chief
                      Executive</p>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Josh-details.jpg') }}">
                </div>
              </div>
              {{--2.Kirti--}}
              <div class="glide__slide bg-outer-space text-white px-20 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 67%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p class="2xl:mb-9 mb-5">
                        With extensive experience growing successful pharmacy businesses, Kirti plays an important role
                        in
                        maintaining Smartway’s commitment to clinical excellence and quality.
                      </p>
                      <p class="2xl:mb-9 mb-5">After qualifying as a
                        pharmacist in 1991, Kirti’s pharmaceutical experience crossed the entire spectrum. She spent
                        time
                        managing branches for Lloyds Pharmacy, as well as refurbishing, updating and growing independent
                        pharmacies while also co-founding Smartway Pharmaceuticals.</p>
                      <p>
                        Today, with both pharmacies now sold,
                        Kirti equips Smartway with her patient-centric approach, extensive experience and insight into
                        the
                        real needs of practitioners and patients alike.
                      </p>
                    </div>
                    <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                    <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                      Alongside my husband, I have always been deeply involved in Smartway. Now, I’m able to focus all
                      my
                      energy, enthusiasm and expertise into growing our business on a global scale.”
                    </p>
                    <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Kirti Patel, Chair</p>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Kirti_new_modal.jpeg') }}">
                </div>
              </div>
              {{--3.Kaushik--}}
              <div class="glide__slide bg-midnight text-white px-20 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 67%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p class="2xl:mb-9 mb-5">
                        With a long history at Smartway as our first employee and then a stakeholder in the business, Kaushik has a uniquely in-depth perspective on everything we do, including our investment priorities. He shares our values, priorities and commitment to quality, informing our strategic direction and ongoing growth.
                      </p>
                      <p>Throughout his time at Smartway, Kaushik has experienced the business as a Warehouse Manager and, later, a successful Sales Executive and Manager. Now, as our Chief Commercial Officer, Kaushik spearheads our initiatives to deliver for patients and healthcare professionals on a global scale, develop new markets and maximise profitability.</p>
                    </div>
                    <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                    <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                      Smartway is defined by its commitment to quality, something I’ve seen first-hand at every level of the business. As CCO, I help lead our growth in a way that makes sense for the competitive landscape and emerging global priorities, without compromising on those core values that make us unique.”
                    </p>
                    <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Kaushik Patel, Chief Commercial Officer</p>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Kaushik_detail.jpg') }}">
                </div>
              </div>
              {{--4.Dhruv--}}
              <div class="glide__slide bg-outer-space text-white px-20 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 67%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p>
                        With a track record of commercial success, Dhruv Patel helps Smartway think, plan and act
                        strategically to not only reduce our commercial risk, but also grow sustainably and responsibly.
                        As a qualified pharmacist, Dhruv’s experience has included managing brand name pharmacies,
                        pharmaceutical sales teams and more. The breadth of these roles means Dhruv uniquely understands
                        the importance of patient and practitioner experience, as well as the commercial realities of
                        running and growing a successful business. Today, he identifies strategic opportunities for
                        Smartway, as well as new ways to drive efficiency and performance in our existing operations.
                      </p>
                    </div>
                    <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                    <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                      Since I joined Smartway, we’ve grown globally with offices in Dubai, the Balkans, and big plans
                      for
                      the future. I think the secret to this growth is our people – it’s their dedication and commitment
                      that makes Smartway a success.”
                    </p>
                    <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Dhruv Patel, Chief
                      Operating
                      Officer</p>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Dhruv-details.jpg') }}">
                </div>
              </div>
              {{--5.Robert--}}
              <div class="glide__slide bg-french-gray pl-20 pr-8 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 73%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light -tracking-0.7px">
                      <p>
                        Robert Donnell is EVP of Medicines Access at Smartway Pharma, where he leads our Medicines
                        Access
                        business. A Health Economist by training he has 25 years’ experience in the Pharmaceutical
                        Industry first with P&G and then AZ across Sales and Marketing and Supply Chain.
                      </p>
                      <p class="2xl:mb-9 mb-5">
                        In the last 15
                        years he has specialized in the design and initiation of Medicines Access Programs where he has
                        been responsible for designing and implementing</p>
                      <ul class="2xl:mb-9 mb-5">
                        <li>– Expanded Access Programs working across all
                          therapy areas including Oncology, Rare and Gene Therapies.
                        </li>
                        <li>– Clinical Trial Supply solutions for
                          RLD and comparators.
                        </li>
                        <li>– Provision of Medicines to global NGOs and charities.</li>
                      </ul>
                      <p>
                        He is a respected
                        industry leader who frequently lectures at conferences across the world. Robert seeks first to
                        understand the objectives and needs of our clients before using his and the team’s expertise to
                        put into place robust, compliant and innovative solutions to achieve results.
                      </p>
                    </div>
                    <div class="pl-48">
                      <img class="my-4" style="filter: brightness(0);" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        Increasing access to medicines is so important, I am pleased to be part of the wider Smartway
                        team
                        that is focused on achieving access across the globe.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Robert Donnell, EVP –
                        Medicines
                        Access</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Robert-details.jpg') }}">
                </div>
              </div>
              {{--6.Rupi--}}
              <div class="glide__slide bg-french-gray pl-20 pr-8 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 67%;">
                    <div
                            class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p class="2xl:mb-9 mb-5">
                        With over 30 years as a pharmacist and working in senior healthcare management at Wallgreen
                        Boots Alliance, Rupi joined Smartway in 2021 as Director of Digital Health. Leveraging his
                        experience in patient safety, governance and personnel management, Rupi leads the Smartway
                        Pharmacy and offering for direct to patient and home delivery.
                      </p>
                      <p>Rupi qualified as a Pharmacist in 1997 from Kings’ College London before holding a portfolio of
                        management positions covering multiple roles in the UK. He has spent time developing new
                        healthcare partnerships with the NHS and others in the private sectors. Rupi chairs Local
                        Pharmaceutical Committee (LPC), an independent and representative group of pharmacy
                        professionals which negotiates and discusses pharmacy services with commissioners.</p>
                    </div>
                    <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                    <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                      I am firmly committed to using all of my healthcare experience to help patients get access to the
                      medicines they need. I firmly believe in using technology and digital automation has serious value
                      in improving the patient journey.”
                    </p>
                    <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5 ">Rupi Bhasin,
                      Director of Digital Health</p>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Rupi_detail.jpg') }}">
                </div>
              </div>
              {{--7.Nicole--}}
              <div class="glide__slide bg-midnight text-white pl-20 pr-6 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 71%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light -tracking-0.5px">
                      <p class="2xl:mb-9 mb-5">
                        With 11 years’ experience handling, studying and regulating pharmaceuticals, Nicole brings a
                        wealth of expertise in regulatory compliance across all areas of medical distribution. Her
                        experience crosses community pharmacy, pharmaceutical companies, and a degree in Pharmaceutical
                        and Cosmetic Science. To date, she has been involved in over 15 MHRA inspections.
                      </p>
                      <p>
                        Nicole joined
                        Smartway in 2020 to help with our Brexit contingency planning, helping us develop our regulatory
                        resource to execute on growth plans outside the European Union. As a specialist in worldwide
                        import and export, Nicole became our Responsible Person (Import) in January 2021 and is the
                        Responsible Person for our HPRA-approved site in Ireland.
                      </p>
                    </div>
                    <div class="pl-10 pr-12">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        Seeing how much patients and their families rely on quality medicines shaped my career. It
                        drives me
                        to ensure product integrity is upheld for each and every order. I’m very proud to be part of
                        Smartway, where people share the same values – patients always come first, even as we expand
                        globally.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Nicole Lyons, Head of
                        Regulatory
                        Affairs</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Nicole-details.jpg') }}">
                </div>
              </div>
              {{--8.Purvesh--}}
              <div class="glide__slide bg-spindle pl-20 pr-6 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 67%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light -tracking-0.5px">
                      <p class="2xl:mb-9 mb-5">
                        Following on-the-ground experience in India as a hospital pharmacist, Purvesh came to the UK to study for an MBA in Business Administration (International). He first joined Smartway in 2012 as a warehouse operative, securing valuable insight into how we work, our values, our compliance practices and our supply management processes.
                      </p>
                      <p>
                        After a short break to get more experience in a community pharmacy in the UK, Purvesh returned to Smartway in a new role inside our procurement team. His in-depth knowledge of the pharmacy business underpins his current role as our Head of UK Supply Chain. Today, Purvesh leads our various supply chain initiatives, spends time optimising our distribution network and maintains close relationships with various partners across the globe. Ultimately, he helps guarantee continued supply by building and managing a resilient, thriving ecosystem of suppliers and manufacturers.
                      </p>
                    </div>
                    <div class="pl-16 pr-5">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        In my varied experience across Smartway, I have noticed that our values are incredibly consistent. Everyone is committed to quality and protecting supply for practitioners and patients. It’s great to work at a place where we all share the same vision and priorities.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Purvesh Patel,
                        Head of Supply Chain UK </p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Purvesh-details.jpg') }}">
                </div>
              </div>
              {{--9.Giles--}}
              <div class="glide__slide bg-french-gray pl-20 pr-6 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 70%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light -tracking-0.5px">
                      <p class="2xl:mb-9 mb-5">
                        Giles is Smartway’s Head of Sexual Health, using over 17 years’ experience in pharmaceuticals,
                        sexual health and women’s health to build our newest division from the ground up.
                      </p>
                      <p class="2xl:mb-9 mb-5">
                        Previously,
                        Giles spent many years on the road promoting an extensive range of contraceptive products. This
                        unique, on the ground experience gives Giles real insight into the needs of practitioners and
                        patients, underpinning our Sexual Health division with a real focus on customer service and
                        reliability.
                      </p>
                      <p>
                        Since joining in June 2021, Giles has helped the department grow into a thriving
                        business.
                      </p>
                    </div>
                    <div class="pl-48 pr-10">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        I joined Smartway because the leadership team shares my passion and values. Everything is
                        focused on the needs of the patient, then addressing those needs in a reliable, efficient way.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Giles Holford, Head
                        of Sexual
                        Health</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Giles-details.jpg') }}">
                </div>
              </div>
              {{--10.Andre--}}
              <div class="glide__slide bg-spindle pl-20 pr-6 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 70%;">
                    <div
                            class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light -tracking-0.5px">
                      <p class="2xl:mb-9 mb-5">
                        Since starting in unlicensed medicines over a decade ago, Andre has spearheaded numerous Hospital Market Entry projects and access routes in countries where direct to hospital isn’t possible. He brings a uniquely global perspective, not just managing shortages in Europe and the UK, but also unlicensed medicines and contract licensing in Latin America.
                      </p>
                      <p>
                        As our Global Sales Director working closely with our COO, Andre is a patient-centric, ethically-minded leader to define and deliver our global sales strategy. Throughout, he leverages his unparalleled knowledge in unlicensed medicines to solve complex challenges for our customers worldwide.
                      </p>
                    </div>
                    <div class="pl-28 pr-12">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        The medicines supply chain is often really complex and, throughout my experience, my passion has been solving those big challenges. I look for ways to get patients what they need – and go above and beyond to add value wherever I can.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Andre Censi,
                        Global Sales Director</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Andre_detail.jpg') }}">
                </div>
              </div>
              {{--11.Judith--}}
              <div class="glide__slide bg-midnight text-white pl-20 pr-16 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 69%;">
                    <div
                            class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light -tracking-0.5px">
                      <p class="2xl:mb-9 mb-5">
                        With a passion for helping patients around the world get the best therapies and treatments,
                        Judith joined the pharmaceutical industry following postgraduate studies in Law. Today, she uses
                        her legal knowledge and over a decade’s pharmaceutical experience to help customers source the
                        niche therapies they need.
                      </p>
                      <p>
                        Judith’s strengths are in building long-term, sustainable partnership
                        with stakeholders, delivering consistently high levels of project management for her clients.
                        Day-to-day, she specialises in solving complex supply and regulatory in an efficient, effective
                        way.
                      </p>
                    </div>
                    <div class="pl-52">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        Smartway has a global reach and is always willing to go further for practitioners and patients.
                        I joined because it’s an opportunity to use my expertise in a way that genuinely helps people
                        get the medicines they need.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Judith Aslimwe,
                        Project
                        Manager</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Judith-details.jpg') }}">
                </div>
              </div>
              {{--12.Ross--}}
              <div class="glide__slide bg-french-gray pl-20 pr-10 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 67%;">
                    <div
                            class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p class="2xl:mb-9 mb-5">
                        Ross qualified as an Electrical and Mechanical Engineer starting his career in large scale
                        public
                        sector works. He then transferred to the logistics sector before moving into Healthcare. </p>
                      <p>
                        Ross
                        has worked in Medicines Access for over 5 years and specialises in building long term strategic
                        partnerships with organisations. He brings both his engineering background and logistics
                        experience to the Health and Medicines Access sector. He is very active in the voluntary sector
                        leading several community and development organisations. At Smartway he leads our Account &
                        Project Management function within the Aid and Development sector.
                      </p>
                    </div>
                    <div class="pl-36 pr-1">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        The ability to make a real difference to people’s lives by working with NGOs and charities to
                        get
                        them the medicines and equipment the patients need is an amazing opportunity. We see the
                        difference we allow others to make and it is so rewarding.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Ross Hemson,
                        Associate Account
                        Executive – Aid &
                        Development</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Ross-details.jpg') }}">
                </div>
              </div>
              {{--13.Anna--}}
              <div class="glide__slide bg-spindle pl-20 pr-6 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 70%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light -tracking-0.5px">
                      <p class="2xl:mb-9 mb-5">
                        Anna came to the UK from Slovakia to study BSc (Hons) Psychology and has since gained over four
                        years’ experience working in marketing and communications. From campaigns to brand strategy,
                        social media and market research, her degree gives her unique insight into how people think and
                        make decisions.
                      </p>
                      <p>
                        At Smartway, Anna is focused on helping people make better decisions with the
                        aim to improve their lives and wellbeing. She consistently improves our brand identity and
                        communication strategy, looking for new ways to inform and engage the people we can help. She is
                        also currently completing her MSc in Behaviour Change at University College London.
                      </p>
                    </div>
                    <div class="pl-28 pr-12">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        I’m very interested in the healthcare sector and, at Smartway, I’m able to help people make
                        informed decisions, while also getting the opportunity to learn and develop. We all share the
                        same commitment to hard work, dedication and innovation.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Anna Vassova,
                        Marketing
                        Manager</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Anna-details.jpg') }}">
                </div>
              </div>
              {{--14.Arun--}}
              <div class="glide__slide bg-midnight text-white px-20 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 69%;">
                    <div
                            class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p class="2xl:mb-9 mb-5">
                        With diverse experience including managing a team of 18 people in the food production space, Arun intimately understands the importance of a robust supply chain where access, control and quality are paramount. As the Senior Manager for the EU Supply Chain, Arun leads the team in sales and purchasing, developing strong relationships with the partners and suppliers that make our work possible.
                      </p>
                      <p>
                        Before becoming a Senior Manager, Arun spent over a decade within Smartway with roles including Warehouse Operative, Goods Out Supervisor, and Warehouse Manager. He brings a pragmatic, practical sensibility that ensures our supply chain is always running smoothly.
                      </p>
                    </div>
                    <div class="pl-28">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        I’ve grown throughout my experience at Smartway and now, leading and managing the EU supply chain for PI, I help make sure our customers can help patients get what they need.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Arun Dholariya,
                        Senior Manager, EU Supply Chain</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Arun_detail.jpg') }}">
                </div>
              </div>
              {{--15.Maysa--}}
              <div class="glide__slide bg-outer-space text-white pl-20 pr-16 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 68%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light -tracking-0.5px">
                      <p class="2xl:mb-9 mb-5">
                        A qualified pharmacist with specialist experience in regulatory affairs across the Middle East
                        and North Africa, Maysa leads sales projects with a deep understanding of the local regulatory
                        landscape and healthcare systems.
                      </p>
                      <p>
                        Day-to-day, Maysa ensures al local MENA regulations are met
                        throughout our processes, while also managing our Dubai warehouse and logistics. At the same
                        time, she supports our complex, global operations, combining her MENA-specific knowledge with
                        experience in cross-border distribution.
                      </p>
                    </div>
                    <div class="pl-40">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        Working at Smartway is being part of a truly global business – a team that has reach everywhere
                        in the world, but also recognises and invests in nuanced local requirements and regulatory
                        obligations.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Maysa Gamal, Regional
                        Sales
                        Manager (MENA)</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Maysa-details.jpg') }}">
                </div>
              </div>
              {{--16.Andrew--}}
              <div class="glide__slide bg-spindle pl-20 pr-12 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 69%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p class="2xl:mb-9 mb-5">
                        After studying Chemistry at the University of Nottingham, Andrew joined Smartway immediately
                        after graduating. He uses his interest in medicinal chemistry and passion for helping patients
                        in his role as a Regulatory Assistant, working closely with an experienced and supportive
                        regulatory team.
                      </p>
                      <p>
                        Andrew is also focused on keeping our internal systems and processes efficient,
                        up-to-date, and in-line with new technology – a key element of regulatory compliance and
                        continually improving quality in everything we do. His important work helps protect the
                        pharmaceutical supply chain and, ultimately, patients.
                      </p>
                    </div>
                    <div class="pl-28">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        Working at Smartway is fast-paced, but also supportive. I feel encouraged to further my career
                        as a regulatory professional, particularly with so much development and recruitment happening at
                        Smartway.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Andrew Tunstell,
                        Regulatory
                        Assistant</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Andrew-details.jpg') }}">
                </div>
              </div>
              {{--17.Harshad--}}
              <div class="glide__slide bg-french-gray pl-20 pr-16 py-5 relative overflow-hidden flex items-center">
                <div>
                  <div class="ml-auto mr-0 relative z-20" style="width: 68%;">
                    <div
                        class="5xl:text-2xl 2xl:text-22px text-xl 5xl:leading-34px 2xl:leading-28px leading-24px font-light">
                      <p class="2xl:mb-9 mb-5">
                        With a decade’s experience in software and a degree in Information Technology, Harshad is a
                        technical expert at the forefront of new technologies and approaches. His expertise includes
                        front-end and back-end development in JAVA and PHP, HTML/HTML5, CSS/CSS3, and more. Crucially,
                        he has a uniquely perosnal approach to technology, focusing on the needs of people first at
                        every stage of application development, then finding the right solution to fit.
                      </p>
                      <p>
                        Harshad is also
                        a strong leader, managing a team’s capability and keeping complex projects on-track. At
                        Smartway, he leads our web and digital team, keeping us up to date with changing software trends
                        and customer requirements.
                      </p>
                    </div>
                    <div class="pl-44">
                      <img class="mt-8 mb-4" src="{{asset('image/quote-persian-green.svg')}}">
                      <p class="quarto-font 5xl:text-44px 2xl:text-40px text-34px 5xl:leading-53px leading-none">
                        What gets me excited is learning something new or discovering a new technology. At Smartway, I’m
                        always looking for new ways that we can innovate everything we offer our customers.”
                      </p>
                      <p class="italic 2xl:text-26px text-2xl font-semibold -tracking-0.55px mt-5">Harshad Chotaliya,
                        Software
                        Engineer & Web Application Developer</p>
                    </div>
                  </div>
                  <img class="absolute bottom-0 left-0 5xl:h-full 5xl:max-w-55% max-w-47% h-auto w-auto z-0"
                       src="{{ asset('image/Harshad-details.jpg') }}">
                </div>
              </div>
            </div>

            <div class="glide__bullets" data-glide-el="controls[nav]">
              <button class="glide__bullet" data-glide-dir="=0"></button>
              <button class="glide__bullet" data-glide-dir="=1"></button>
              <button class="glide__bullet" data-glide-dir="=2"></button>
              <button class="glide__bullet" data-glide-dir="=3"></button>
              <button class="glide__bullet" data-glide-dir="=4"></button>
              <button class="glide__bullet" data-glide-dir="=5"></button>
              <button class="glide__bullet" data-glide-dir="=6"></button>
              <button class="glide__bullet" data-glide-dir="=7"></button>
              <button class="glide__bullet" data-glide-dir="=8"></button>
              <button class="glide__bullet" data-glide-dir="=9"></button>
              <button class="glide__bullet" data-glide-dir="=10"></button>
              <button class="glide__bullet" data-glide-dir="=11"></button>
              <button class="glide__bullet" data-glide-dir="=12"></button>
              <button class="glide__bullet" data-glide-dir="=13"></button>
              <button class="glide__bullet" data-glide-dir="=14"></button>
              <button class="glide__bullet" data-glide-dir="=15"></button>
              <button class="glide__bullet" data-glide-dir="=16"></button>
            </div>
          </div>
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">
              <img class="transform rotate-180 opacity-30" src="{{ asset('image/icon/Ic_chevron_right_36px.png') }}">
            </button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">
              <img src="{{ asset('image/icon/Ic_chevron_right_36px.png') }}">
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="joshModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-midnight">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Josh-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #01213B00, #01213B7E, #01213B, #01213B);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6 pr-2">With unrivalled experience in healthcare compliance and regulation, Josh leads
            Smartway with the
            advantage of insight from across the pharmaceutical and medical landscape. His experience
            includes
            over 12 years’ in regulatory compliance and investigations. He combines his diligent, strategic
            approach with a constant commitment to ethics and responsible business. Josh has also advised on
            a
            large number of regulatory issues, including those involving the MHRA, GPhC, GMC and HMRC.</p>
          <p>Today, Josh
            uses this breadth of experience to inform Smartway’s overall strategic direction, manage our
            relationship with regulators, and identify important new opportunities.</p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          We are always exploring new opportunities and developing new ways to grow Smartway on a global
          scale.
          But, above all else, we remain committed to our key values: ethics, care, quality and patients.
          Nothing is <span class="block">more important.”</span>
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">Josh Cocklin, Chief Executive</p>
      </div>
    </div>
  </div>
  <div id="kirtiModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-outer-space">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Kirti_new_modal.jpeg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #292F3700, #292F3780, #292F37, #292F37);"></div>
        </div>
        <div class="text-lg leading-24px mt-8 pr-2">
          <p class="mb-6">
            With extensive experience growing successful pharmacy businesses, Kirti plays an important role in
            maintaining Smartway’s commitment to clinical excellence and quality.
          </p>
          <p CLASS="mb-6">
            After qualifying as a pharmacist in
            1991, Kirti’s pharmaceutical experience crossed the entire spectrum. She spent time managing branches for
            Lloyds Pharmacy, as well as refurbishing, updating and growing independent pharmacies while also co-founding
            Smartway Pharmaceuticals.
          </p>
          <p>
            Today, with both pharmacies now sold, Kirti equips Smartway with her
            patient-centric approach, extensive experience and insight into the real needs of practitioners and patients
            alike.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          <span class="block">Alongside my husband,</span> I have always been deeply involved in Smartway. Now, I’m able
          to focus all my energy,
          enthusiasm
          <span class="block">and expertise into growing</span>
          our business on a
          <span class="block">global scale.”</span>
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Kirti Patel,</span>
          <span class="block">Chair</span>
        </p>
      </div>
    </div>
  </div>
  <div id="kaushikModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-midnight">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
                d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
              class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Kaushik_detail.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #01213B00, #01213B7E, #01213B, #01213B);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6 pr-2">With a long history at Smartway as our first employee and then a stakeholder in the business, Kaushik has a uniquely in-depth perspective on everything we do, including our investment priorities. He shares our values, priorities and commitment to quality, informing our strategic direction and ongoing growth.</p>
          <p>Throughout his time at Smartway, Kaushik has experienced the business as a Warehouse Manager and, later, a successful Sales Executive and Manager. Now, as our Chief Commercial Officer, Kaushik spearheads our initiatives to deliver for patients and healthcare professionals on a global scale, develop new markets and maximise profitability.</p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          Smartway is defined by its commitment to quality, something I’ve seen first-hand at every level of the business. As CCO, I help lead our growth in a way that makes sense for the competitive landscape and emerging global priorities, without compromising on those core values that make us unique.”</span>
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">Kaushik Patel, Chief Commercial Officer</p>
      </div>
    </div>
  </div>
  <div id="dhruvModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-outer-space">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Dhruv-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #292F3700, #292F3780, #292F37, #292F37);"></div>
        </div>
        <div class="text-lg leading-24px mt-8 pr-3">
          <p>
            With a track record of commercial success, Dhruv Patel helps Smartway think, plan and act strategically to
            not only reduce our commercial risk, but also grow sustainably and responsibly. As a qualified pharmacist,
            Dhruv’s experience has included managing brand name pharmacies, pharmaceutical sales teams and more. The
            breadth of these roles means Dhruv uniquely understands the importance of patient and practitioner
            experience, as well as the commercial realities of running and growing a successful business. Today, he
            identifies strategic opportunities for Smartway, as well as new ways to drive efficiency and performance in
            our existing operations.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          Since I joined Smartway, we’ve grown globally with offices in Dubai, the Balkans, and big plans for the
          future. I think the secret to this growth is our people – it’s their dedication and commitment that makes
          Smartway a success.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Dhruv Patel,</span>
          <span class="block">Chief Operating Officer</span>
        </p>
      </div>
    </div>
  </div>
  <div id="robertModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden"
       aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-french-gray">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center text-white">Meet some of our 100+ employees</p>
        <div class="relative -mx-5">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Robert.png') }}">
          <div class="h-10 absolute -bottom-1 left-0 right-0"
               style="background: linear-gradient(180deg, #BFC3CB00, #BFC3CB80, #BFC3CBEB, #BFC3CB);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p>
            Robert Donnell is EVP of Medicines Access at Smartway Pharma, where he leads our Medicines
            Access
            business. A Health Economist by training he has 25 years’ experience in the Pharmaceutical
            Industry first with P&G and then AZ across Sales and Marketing and Supply Chain.
          </p>
          <p class="mb-6">
            In the last 15
            years he has specialized in the design and initiation of Medicines Access Programs where he has
            been responsible for designing and implementing</p>
          <ul class="mb-6">
            <li>– Expanded Access Programs working across all
              therapy areas including Oncology, Rare and Gene Therapies.
            </li>
            <li>– Clinical Trial Supply solutions for
              RLD and comparators.
            </li>
            <li>– Provision of Medicines to global NGOs and charities.</li>
          </ul>
          <p>
            He is a respected
            industry leader who frequently lectures at conferences across the world. Robert seeks first to
            understand the objectives and needs of our clients before using his and the team’s expertise to
            put into place robust, compliant and innovative solutions to achieve results.
          </p>
        </div>
        <img class="my-8" style="filter: brightness(0)" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px pr-1">
          Increasing access to medicines is so important, I am pleased to be part of the wider Smartway team that is
          focused on achieving access across the globe.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Robert Donnell,</span>
          <span class="block">EVP – Medicines Access</span>
        </p>
      </div>
    </div>
  </div>
  <div id="rupiModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-french-gray">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
                d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
              class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Rupi_detail.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #01213B00, #01213B7E, #01213B, #01213B);"></div>
        </div>
        <div class="text-lg leading-24px mt-8 pr-2">
          <p class="mb-6">
            With over 30 years as a pharmacist and working in senior healthcare management at Wallgreen Boots Alliance,
            Rupi joined Smartway in 2021 as Patient Services Director. Leveraging his experience in patient safety,
            governance and personnel management, Rupi leads the Smartway Pharmacy and offering for direct to patient and
            home delivery.
          </p>
          <p>
            Rupi qualified as a Pharmacist in 1997 from Kings’ College London before holding a portfolio of management
            positions covering multiple roles in the UK. He has spent time developing new healthcare partnerships with
            the NHS and others in the private sectors. Rupi chairs Local Pharmaceutical Committee (LPC), an independent
            and representative group of pharmacy professionals which negotiates and discusses pharmacy services with
            commissioners.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          I am firmly committed to using all of my healthcare experience to help patients get access to the medicines
          they need. I firmly believe in using technology and digital automation has serious value in improving the
          patient journey.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Rupi Bhasin,</span>
          <span class="block">Director of Digital Health</span>
        </p>
      </div>
    </div>
  </div>
  <div id="nicoleModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden"
       aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-midnight">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Nicole-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #01213B00, #01213B7E, #01213B, #01213B);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            With 11 years’ experience handling, studying and regulating pharmaceuticals, Nicole brings a wealth of
            expertise in regulatory compliance across all areas of medical distribution. Her experience crosses
            community pharmacy, pharmaceutical companies, and a degree in Pharmaceutical and Cosmetic Science. To date,
            she has been involved in over 15 MHRA inspections.
          </p>
          <p>
            Nicole joined Smartway in 2020 to help with our Brexit
            contingency planning, helping us develop our regulatory resource to execute on growth plans outside the
            European Union. As a specialist in worldwide import and export, Nicole became our Responsible Person
            (Import) in January 2021 and is the Responsible Person for our HPRA-approved site in Ireland.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          Seeing how much patients and their families rely on quality medicines shaped my career. It drives me to ensure
          product integrity is upheld for each and every order. I’m very proud to be part of Smartway, where people
          share the same values – patients always come first, even as we expand globally.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Nicole Lyons,</span>
          <span class="block">Head of Regulatory Affairs</span>
        </p>
      </div>
    </div>
  </div>
  <div id="purveshModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden"
       aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-spindle">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center text-white">Meet some of our 100+ employees</p>
        <div class="relative -mr-20 pr-5">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Purvesh-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #BED9EF00, #BED9EF80, #BED9EFEB, #BED9EF);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            Following on-the-ground experience in India as a hospital pharmacist, Purvesh came to the UK to study for an MBA in Business Administration (International). He first joined Smartway in 2012 as a warehouse operative, securing valuable insight into how we work, our values, our compliance practices and our supply management processes.
          </p>
          <p>
            After a short break to get more experience in a community pharmacy in the UK, Purvesh returned to Smartway in a new role inside our procurement team. His in-depth knowledge of the pharmacy business underpins his current role as our Head of UK Supply Chain. Today, Purvesh leads our various supply chain initiatives, spends time optimising our distribution network and maintains close relationships with various partners across the globe. Ultimately, he helps guarantee continued supply by building and managing a resilient, thriving ecosystem of suppliers and manufacturers.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          In my varied experience across Smartway, I have noticed that our values are incredibly consistent. Everyone is committed to quality and protecting supply for practitioners and patients. It’s great to work at a place where we all share the same vision and priorities.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Purvesh Patel,</span>
          <span class="block">Head of Supply Chain UK</span>
        </p>
      </div>
    </div>
  </div>
  <div id="gilesModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-french-gray">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center text-white">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Giles-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #BFC3CB00, #BFC3CB80, #BFC3CBEB, #BFC3CB);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            Giles is Smartway’s Head of Sexual Health, using over 17 years’ experience in pharmaceuticals, sexual health
            and women’s health to build our newest division from the ground up.
          </p>
          <p class="mb-6">
            Previously, Giles spent many years on
            the road promoting an extensive range of contraceptive products. This unique, on the ground experience gives
            Giles real insight into the needs of practitioners and patients, underpinning our Sexual Health division
            with a real focus on customer service and reliability.
          </p>
          <p>
            Since joining in June 2021, Giles has helped the
            department grow into a thriving business.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          I joined Smartway because the leadership team shares my passion and values. Everything is focused on the needs
          of the patient, then addressing those needs in a reliable,
          <span class="block">efficient way.”</span>
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Giles Holford,</span>
          <span class="block">Head of Sexual Health</span>
        </p>
      </div>
    </div>
  </div>
  <div id="andreModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden"
       aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-spindle">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
                d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
              class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center text-white">Meet some of our 100+ employees</p>
        <div class="relative -mr-20 pr-5">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Andre_detail.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #BED9EF00, #BED9EF80, #BED9EFEB, #BED9EF);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            Since starting in unlicensed medicines over a decade ago, Andre has spearheaded numerous Hospital Market Entry projects and access routes in countries where direct to hospital isn’t possible. He brings a uniquely global perspective, not just managing shortages in Europe and the UK, but also unlicensed medicines and contract licensing in Latin America.
          </p>
          <p>
            As our Global Sales Director working closely with our COO, Andre is a patient-centric, ethically-minded leader to define and deliver our global sales strategy. Throughout, he leverages his unparalleled knowledge in unlicensed medicines to solve complex challenges for our customers worldwide.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          The medicines supply chain is often really complex and, throughout my experience, my passion has been solving those big challenges. I look for ways to get patients what they need – and go above and beyond to add value wherever I can.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Andre Censi,</span>
          <span class="block">Global Sales Director</span>
        </p>
      </div>
    </div>
  </div>
  <div id="judithModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden"
       aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-midnight">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Judith-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #01213B00, #01213B7E, #01213B, #01213B);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            With a passion for helping patients around the world get the best therapies and treatments, Judith joined
            the pharmaceutical industry following postgraduate studies in Law. Today, she uses her legal knowledge and
            over a decade’s pharmaceutical experience to help customers source the niche therapies they need.
          </p>
          <p>
            Judith’s
            strengths are in building long-term, sustainable partnership with stakeholders, delivering consistently high
            levels of project management for her clients. Day-to-day, she specialises in solving complex supply and
            regulatory in an efficient, effective way.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px pr-1">
          Smartway has a global reach and is always willing to go further for practitioners and patients. I joined
          because it’s an opportunity to use my expertise in a way that genuinely helps people get the medicines
          <span class="block">they
            need.”</span>
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          Judith Aslimwe, Project Manager
        </p>
      </div>
    </div>
  </div>
  <div id="rossModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-french-gray">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
                d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
              class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center text-white">Meet some of our 100+ employees</p>
        <div class="relative -mx-5">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Ross-details.jpg') }}">
          <div class="h-10 absolute -bottom-1 left-0 right-0"
               style="background: linear-gradient(180deg, #BFC3CB00, #BFC3CB80, #BFC3CBEB, #BFC3CB);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            Ross qualified as an Electrical and Mechanical Engineer starting his career in large scale public sector
            works. He then transferred to the logistics sector before moving into Healthcare.
          </p>
          <p>
            Ross has worked in
            Medicines Access for over 5 years and specialises in building long term strategic partnerships with
            organisations. He brings both his engineering background and logistics experience to the Health and
            Medicines Access sector. He is very active in the voluntary sector leading several community and development
            organisations. At Smartway he leads our Account & Project Management function within the Aid and Development
            sector.
          </p>
        </div>
        <img class="my-8" style="filter: brightness(0)" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          The ability to make a real difference to people’s lives by working with NGOs and charities to get them the
          medicines and equipment the patients need is an amazing opportunity. We see the difference we allow others to
          make and it is
          <span class="block">so rewarding.”</span>
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Ross Hemson,</span>
          <span class="block">Associate Account Executive –</span>
          <span class="block">Aid & Development</span>
        </p>
      </div>
    </div>
  </div>
  <div id="annaModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-spindle">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
                d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
              class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center text-white">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Anna-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #BED9EF00, #BED9EF80, #BED9EFEB, #BED9EF);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            Anna came to the UK from Slovakia to study BSc (Hons) Psychology and has since gained over four years’
            experience working in marketing and communications. From campaigns to brand strategy, social media and
            market research, her degree gives her unique insight into how people think and make decisions.
          </p>
          <p>
            At Smartway,
            Anna is focused on helping people make better decisions with the aim to improve their lives and wellbeing.
            She consistently improves our brand identity and communication strategy, looking for new ways to inform and
            engage the people we can help. She is also currently completing her MSc in Behaviour Change at University
            College London.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px -mr-3">
          I’m very interested in the healthcare sector and, at Smartway, I’m able to help people make informed
          decisions, while also getting the opportunity to learn and develop. We all share the same commitment to hard
          work, dedication and innovation.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5 -mr-3">
          Anna Vassova, Marketing Manager
        </p>
      </div>
    </div>
  </div>
  <div id="arunModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden"
       aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-midnight">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
                d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
              class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Arun_detail.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #01213B00, #01213B7E, #01213B, #01213B);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            With diverse experience including managing a team of 18 people in the food production space, Arun intimately understands the importance of a robust supply chain where access, control and quality are paramount. As the Senior Manager for the EU Supply Chain, Arun leads the team in sales and purchasing, developing strong relationships with the partners and suppliers that make our work possible.
          </p>
          <p>
            Before becoming a Senior Manager, Arun spent over a decade within Smartway with roles including Warehouse Operative, Goods Out Supervisor, and Warehouse Manager. He brings a pragmatic, practical sensibility that ensures our supply chain is always running smoothly.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px pr-1">
          I’ve grown throughout my experience at Smartway and now, leading and managing the EU supply chain for PI, I help make sure our customers can help patients get what they need.”</span>
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          Arun Dholariya, Senior Manager, EU Supply Chain
        </p>
      </div>
    </div>
  </div>
  <div id="maysaModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-outer-space">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full text-white pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Maysa-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #292F3700, #292F3780, #292F37, #292F37);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            A qualified pharmacist with specialist experience in regulatory affairs across the Middle East and North
            Africa, Maysa leads sales projects with a deep understanding of the local regulatory landscape and
            healthcare systems.
          </p>
          <p>
            Day-to-day, Maysa ensures al local MENA regulations are met throughout our processes,
            while also managing our Dubai warehouse and logistics. At the same time, she supports our complex, global
            operations, combining her MENA-specific knowledge with experience in cross-border distribution.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          Working at Smartway is being part of a truly global business – a team that has reach everywhere in the world,
          but also recognises and invests in nuanced local requirements and regulatory obligations.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Maysa Gamal,</span>
          <span class="block">Regional Sales Manager (MENA)</span>
        </p>
      </div>
    </div>
  </div>
  <div id="andrewModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden"
       aria-labelledby="modal-title"
       role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-spindle">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center text-white">Meet some of our 100+ employees</p>
        <div class="relative">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Andrew-details.jpg') }}">
          <div class="h-10 absolute -bottom-1 left-0 right-0"
               style="background: linear-gradient(180deg, #BED9EF00, #BED9EF80, #BED9EFEB, #BED9EF);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            After studying Chemistry at the University of Nottingham, Andrew joined Smartway immediately after
            graduating. He uses his interest in medicinal chemistry and passion for helping patients in his role as a
            Regulatory Assistant, working closely with an experienced and supportive regulatory team.
          </p>
          <p>
            Andrew is also
            focused on keeping our internal systems and processes efficient, up-to-date, and in-line with new technology
            – a key element of regulatory compliance and continually improving quality in everything we do. His
            important work helps protect the pharmaceutical supply chain and, ultimately, patients.
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px -mr-1">
          Working at Smartway is fast-paced, but also supportive. I feel encouraged to further
          <span class="block">my career as a regulatory</span>
          professional, particularly with so much development and recruitment happening at Smartway.”
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Andrew Tunstell,</span>
          <span class="block">Regulatory Assistant</span>
        </p>
      </div>
    </div>
  </div>
  <div id="harshadModal" class="js-team-modal fixed z-999999 inset-0 overflow-y-auto hidden"
       aria-labelledby="modal-title" role="dialog"
       aria-modal="true">
    <div class="flex items-start justify-center min-h-screen text-center bg-french-gray">
      <svg style="fill: white;" class="js-modal-close w-6 h-6 absolute top-5 right-5 cursor-pointer z-10"
           xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
        <path
            d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
      </svg>
      <div
          class="inline-block align-bottom text-left transform transition-all sm:align-middle w-full pt-9 pb-16 px-5">
        <p class="text-22px font-semibold text-center text-white">Meet some of our 100+ employees</p>
        <div class="relative -mr-14">
          <img class="mx-auto max-w-400px w-full" src="{{ asset('image/Harshad-details.jpg') }}">
          <div class="h-10 absolute bottom-0 left-0 right-0"
               style="background: linear-gradient(180deg, #BFC3CB00, #BFC3CB80, #BFC3CBEB, #BFC3CB);"></div>
        </div>
        <div class="text-lg leading-24px mt-8">
          <p class="mb-6">
            With a decade’s experience in software and a degree in Information Technology, Harshad is a technical expert
            at the forefront of new technologies and approaches. His expertise includes front-end and back-end
            development in JAVA and PHP, HTML/HTML5, CSS/CSS3, and more. Crucially, he has a uniquely perosnal approach
            to technology, focusing on the needs of people first at every stage of application development, then finding
            the right solution to fit.
          </p>
          <p>
            Harshad is also a strong leader, managing a team’s capability and keeping complex
            projects on-track. At Smartway, he leads our web and digital team, keeping us up to date with changing
            software trends and <span class="block">customer requirements.</span>
          </p>
        </div>
        <img class="my-8" src="{{asset('image/quote-persian-green.svg')}}">
        <p class="quarto-font text-34px leading-40px">
          What gets me excited is learning something new or discovering a new technology. At Smartway, I’m always
          looking for new ways that we can innovate everything we offer
          <span class="block">our customers.”</span>
        </p>
        <p class="italic text-22px leading-28px font-semibold -tracking-0.5px mt-5">
          <span class="block">Harshad Chotaliva, </span>
          <span class="block">Software Engineer</span>
          <span class="block">& Web Application Developer</span>
        </p>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ mix('js/team-slider.js') }}" defer></script>
@endpush
