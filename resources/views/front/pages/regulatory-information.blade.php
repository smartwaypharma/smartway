@extends('layouts.front')

@section('meta')
  <title>We are Regulated by MHRA for the Distribution of Medicines</title>
  <meta name="description" content="Smartway (UK) Ltd holds a WDA (human medicines) and a WDA (veterinary medicine) issued by the Medicines and Healthcare products Regulatory Agency (MHRA). We are a leading international wholesale distributor of pharmaceuticals in the UK.">
  <meta name="robots" content="noindex, noarchive">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/Regulatory_Information_hero.jpeg') }}" alt="Smartway Pharmaceuticals - Regulatory Information" title="Smartway Pharmaceuticals - Regulatory Information">
  <img class="sm:hidden inline-block w-full"
       src="{{ asset('/image/Regulatory_Information_hero_mobile.jpeg') }}" alt="Smartway Pharmaceuticals - Regulatory Information" title="Smartway Pharmaceuticals - Regulatory Information">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4 sm:mb-0 mb-32">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none text-42px -mb-5">
      Regulatory Information
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 xl:my-40 mt-11 mb-20">
    <h2 class="quarto-font xl:text-48px xl:leading-53px text-2xl leading-32px sm:pr-0 pr-3">Smartway Pharmaceuticals Limited is registered in England &
      Wales with
      registration number 08481191 and having
      its registered office at The Old Mill, 9 Soar Lane, Leicester, Leicestershire,LE3 5DE. Our business address is 10
      Lyon Road, London, SW19 2RL.</h2>
    <h3 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mt-16 mt-6 mb-7">Our regulators</h3>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="lg:mb-9 mb-5 4xl:pr-6 pr-2">We are regulated by the Medicines and Healthcare products Regulatory Agency (“MHRA”) and have been issued a Wholesale Distribution Authority (Human) (WDA(H)) 42332 for regulating our pharmaceutical distribution activities for human medicines. We also hold a WDA(V) 42332 for regulating our pharmaceutical distribution activities relating to veterinary and animal medicines. We also hold a Manufacturing Specials authorisation (MS) 42332 for regulating our manufacturing and import activities.</p>
      <p class="lg:mb-9 mb-5">
        In respect of our WDA(H), WDA(V) and MS, we are authorised to procure, hold, import, export and supply medicinal products from our authorised site at 10 Lyon Road, London, SW19 2RL.
      </p>
      <p class="4xl 4xl:pr-40 pr-4">We are also authorised by the Home Office in respect of controlled drugs, for which we are authorised to deal in Schedule 2, 3, 4 (Part I & II) and 5 medicines.</p>
    </div>
    <h3 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-16 mb-7">GPhC</h3>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="4xl:pr-6">
        Smartway Pharma Limited T/A Smartway Pharma is our onsite online pharmacy registered with the General
        Pharmaceutical Council, GPHC registration number: 9010774.
      </p>
    </div>
    <h3 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-16 mb-7">Authenticity of documents</h3>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="4xl:pr-16">
        If you require verification of documents that have been sent you purporting to be licences held by Smartway, you
        can verify their authenticity by contacting the Regulatory Department on the following email address:
        regulatory@smartwaypharma.co.uk.
      </p>
    </div>
    <h3 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-16 mb-7">Emergency</h3>
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="lg:mb-9 mb-5 4xl:-mr-4 sm:pr-0 pr-2">
        If you are a professional involved in the supply chain and require urgent assistance, including in respect of
        recalls, you can contact +44 20 8545 7711 or email regulatory@smartwaypharma.co.uk
      </p>
      <p>
        Any notification of recalls
        should be sent to (regulatory@smartwaypharma.co.uk)
      </p>
      <h3 class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold mt-16 mb-7">Regulatory/Legal Documents</h3>
      <p class="mt-10 text-left">
      <ul class="font-semibold 4xl:text-32px text-2xl lg:-tracking-0.8px -tracking-0.4px">
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/Modern_Slavery_Statement.pdf') }}" target="_blank" class="underline">Download our modern slavery statement</a>
        </li>
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/Privacy_Notice.pdf') }}" target="_blank" class="underline">Download our website privacy notice</a>
        </li>
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/Terms_and_conditions_of_supply.pdf') }}" target="_blank" class="underline">Download our terms and conditions of supply</a>
        </li>
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/Customer_information_sheet.pdf') }}" target="_blank" class="underline">Download our customer useful information sheet</a>
        </li>
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/Terms_and_conditions_of_purchase.pdf') }}" target="_blank" class="underline">Download our terms and conditions of purchase</a>
        </li>
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/Supplier_information_sheet.pdf') }}" target="_blank" class="underline">Download our supplier useful information sheet</a>
        </li>
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/ABC_policy.pdf') }}" target="_blank" class="underline">Download our anti-bribery and corruption policy</a>
        </li>
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/Environmental_Social_Corporate_Responsibility.pdf') }}" target="_blank" class="underline">Download our environmental, social, and corporate responsibility statement</a>
        </li>
        <li class="flex lg:items-center items-baseline mb-4">
          <div class="mr-2.5 4xl:w-19px w-3 4xl:h-19px h-3 rounded-full 4xl:border-6px border-3.5px border-lochmara mt-9 sm:mt-0"></div>
          <a href="{{ asset('pdf/CarbonReductionPlan.pdf') }}" target="_blank" class="underline">Download our carbon reduction plan</a>
        </li>
      </ul>
      </p>
    </div>
  </section>
@endsection
