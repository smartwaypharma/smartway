@extends('layouts.front')

@section('meta')
  <title>The Project Management Experts, Making Pharmaceutical Projects Easy</title>
  <meta name="description" content="With a dedicated healthcare project manager, you will get the benefits of integrated expertise in medical education and regulatory affairs. We are specialists in Project Management, Strategy and Marketing Communications with clients spanning the clinical development to pharmacy markets.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/iStock-1187114666-header.png') }}" alt="Smartway Pharmaceuticals - Project Management" title="Smartway Pharmaceuticals - Project Management">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/IS_Project_Management.jpg') }}" alt="Smartway Pharmaceuticals - Project Management" title="Smartway Pharmaceuticals - Project Management">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none lg:mb-4 mb-14">
      Project Management
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 mt-8">
    <a class="hidden sm:block text-lg font-bold flex items-center mb-16"
       href="{{ route('how-we-help.international-supply-and-unlicensed-imports.index') }}">
      <img class="inline transform rotate-180 mr-3 w-5 h-5"
           src="{{ asset('image/icon/icn.svg') }}" alt="Smartway Pharmaceuticals - arrow icon" title="Smartway Pharmaceuticals - arrow icon">Back</a>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6">
      <span class="4xl:block">At Smartway, we combine sector knowledge</span>
      <span class="4xl:block">with regulatory and pharmaceutical expertise.</span>
      <span class="4xl:block">Your dedicated project managers will lead</span>
      <span class="4xl:block">your program from concept to fruition,</span>
      <span class="4xl:block">bringing in expertise from all</span>
      <span class="4xl:block">Smartway functions.</span>
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-24">
      With fully operational hubs around the world and a single global management system, you can be sure of a seamless
      experience throughout procurement and delivery.
    </p>
    <hr class="h-0.5 bg-black lg:mt-40 mt-20 lg:mb-36 mb-20">
  </section>
  <section class="container 3xl:max-w-3xl px-4">
    <div class="grid lg:grid-cols-2 lg:mb-40 mb-12">
      <div class="lg:pr-16">
        <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold mb-6">Project management systems</h2>
        <img class="lg:hidden sm:w-3/4 my-7" src="{{ asset('image/Project_management_systems.jpg') }}" alt="Smartway Pharmaceuticals - Project management systems" title="Smartway Pharmaceuticals - Project management systems">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
          <p class="lg:mb-10 mb-6">
            Our specialist international supply team includes procurement professionals, pharmacists, project managers and
            regulatory experts.
          </p>
          <p class="lg:pr-0 pr-4">
            Our project teams are led by qualified Agile project managers. They’ll guide your
            cross-functional teams from our clients through the entire design, implementation, fulfilment, and closure of
            projects. Each project is allocated a defined project manager and reserve project manager. Our systems,
            processes and procedures are all designed to work both digitally and with in-person meetings.
          </p>
        </div>
      </div>
      <div class="lg:flex hidden justify-center items-center lg:mt-0 mt-6">
        <img src="{{ asset('image/Project_management_systems.jpg') }}" alt="Smartway Pharmaceuticals - Project management systems" title="Smartway Pharmaceuticals - Project management systems">
      </div>
    </div>
    <h2 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px lg:leading-36px leading-28px font-bold lg:mt-32 mt-16 mb-6">Regulatory & market knowledge</h2>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-20">
      <p class="lg:mb-10 mb-6 lg:pr-0 pr-4">
        We believe that regulatory expertise is core to our business success. We’ve built that knowledge across 25 years
        of sourcing and supplying medicines globally. We also have a company objective that 10% of all staff must be
        regulatory or pharmacy professionals, ensuring that this knowledge, approach and culture flows through the whole
        company.
      </p>
      {{--<p>
        Our regulatory team is fully integrated with our commercial teams.
      </p>--}}
    </div>
    {{--<div class="grid xl:grid-cols-3 md:grid-cols-2 gap-x-5 lg:gap-y-20 gap-y-8 mt-28">
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Maysa-team.jpg') }}" alt="Smartway Pharmaceuticals - Maysa Gamal - Pharmacist – Regional Director - MENA" title="Smartway Pharmaceuticals - Maysa Gamal - Pharmacist – Regional Director - MENA">
        <p class="text-lochmara font-bold mb-1.5">Maysa Gamal</p>
        <p class="font-bold">Pharmacist – Regional Director - MENA</p>
      </div>

      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{asset('image/Kaushik_Patel.jpeg')}}" alt="Smartway Pharmaceuticals - Kaushik Patel - Chief Commercial Officer" title="Smartway Pharmaceuticals - Kaushik Patel - Chief Commercial Officer">
        <p class="text-lochmara font-bold mb-1.5">Kaushik Patel</p>
        <p class="font-bold">Chief Commercial Officer</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Arun_Dholariya.jpeg') }}" alt="Smartway Pharmaceuticals - Arun Dholariya - Group Manager – EU/UK Supply Chain" title="Smartway Pharmaceuticals - Arun Dholariya - Group Manager – EU/UK Supply Chain">
        <p class="text-lochmara font-bold mb-1.5">Arun Dholariya</p>
        <p class="font-bold">Group Manager – EU/UK Supply Chain</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Amish-team.jpg') }}" alt="Smartway Pharmaceuticals - Amish Patel - Associate Account Director – EU/UK Supply Chain" title="Smartway Pharmaceuticals - Amish Patel - Associate Account Director – EU/UK Supply Chain">
        <p class="text-lochmara font-bold mb-1.5">Amish Patel</p>
        <p class="font-bold">Associate Account Director – EU/UK Supply Chain</p>
      </div>

      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{asset('image/Judith-team.jpg')}}" alt="Smartway Pharmaceuticals - Judith Asiimwe - Senior Account Manager – N. America, Asia, Australasia" title="Smartway Pharmaceuticals - Judith Asiimwe - Senior Account Manager – N. America, Asia, Australasia">
        <p class="text-lochmara font-bold mb-1.5">Judith Asiimwe</p>
        <p class="font-bold">Senior Account Manager – N. America, Asia, Australasia</p>
      </div>

      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{ asset('image/Ross_team.jpg') }}" alt="Smartway Pharmaceuticals - Ross Hemson - Associate Account Director – Low & Middle Income Countries" title="Smartway Pharmaceuticals - Ross Hemson - Associate Account Director – Low & Middle Income Countries">
        <p class="text-lochmara font-bold mb-1.5">Ross Hemson</p>
        <p class="font-bold">Associate Account Director – Low & Middle Income Countries</p>
      </div>
      <div class="4xl:text-2xl text-xl">
        <img class="mb-3" src="{{asset('image/Jigar-team.jpg')}}" alt="Smartway Pharmaceuticals - Jigar Sharma - Senior Account Manager – EU/UK Supply Chain" title="Smartway Pharmaceuticals - Jigar Sharma - Senior Account Manager – EU/UK Supply Chain">
        <p class="text-lochmara font-bold mb-1.5">Jigar Sharma</p>
        <p class="font-bold">Senior Account Manager – EU/UK Supply Chain</p>
      </div>
    </div>--}}
    <div class="text-center lg:my-10 mt-10 mb-10">
      <a href="{{ route('connect-with-us') }}" class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block">Contact us</a>
    </div>
  </section>
  @include('front.partials.isaui-link')
@endsection
