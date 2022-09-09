@extends('layouts.front')

@section('meta')
  <title>Who we are – Careers</title>
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/professional-business-woman-in-motion-with-blur-in-2021-04-02-21-57-11-utc.png') }}">
  <img class="inline-block sm:hidden w-full"
       src="{{ asset('/image/professional-business-woman-in-motion-with-blur-in-2021-04-02-21-57-11-utc-mobile.png') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-2 mb-44">
      <span class="block">Careers &</span>
      <span class="block">Internships</span>
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-16 mt-8">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mb-16 mb-7">Make your mark</p>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 4xl:pr-40 pr-10">
      Feel at home among forward thinking industry changers.
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-2">
      <span class="xl:block">Become a member of a unique team that help people feel supported, empowered and at their best right across</span>
      <span class="xl:block">the medicines supply chain: practitioners, partners and, above all else, patients.</span>
    </p>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px lg:text-44px text-34px lg:my-10 mt-16 mb-16">
      Open positions
    </h2>
  </section>
  <section class="bg-persian-green 3xl:lg:py-36 pt-2 pb-10 mb-5 text-white">
    <div class="container 3xl:max-w-3xl px-4 lg:mt-0 mt-8">
      <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px lg:text-44px text-34px lg:my-5 mt-0 mb-5">
        Regulatory Assistant
      </h2>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-2 mb-5">
        <span class="xl:block">Smartway is looking to appoint a Regulatory Assistant</span>
      </p>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-2 mb-5">
        Location: London, UK Office
      </p>
      <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:my-5 mb-16 mb-7">Applications are accepted on a rolling basis
      </p>
      <a href="{{ route('who-we-are.uk-regulatory-assistant-application') }}" class="button pt-3 pb-4 px-10 bg-white-ice rounded-md transition duration-300 font-semibold text-black text-22px" type="submit">Apply</a>
    </div>
  </section>
  <section class="bg-lochmara 3xl:lg:py-36 pt-2 pb-10 mb-5 text-white">
    <div class="container 3xl:max-w-3xl px-4 lg:mt-0 mt-8">
      <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px lg:text-44px text-34px lg:my-5 mt-0 mb-5">
        Responsible Person
      </h2>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-2 mb-5">
        <span class="xl:block">Smartway is looking to appoint a Responsible Person</span>
      </p>
      <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px lg:pr-0 pr-2 mb-5">
        Location: London, UK Office
      </p>
      <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:my-5 mb-16 mb-7">Applications are accepted on a rolling basis
      </p>
      <a href="{{ route('who-we-are.responsible-person-application') }}" class="button pt-3 pb-4 px-10 bg-white-ice rounded-md transition duration-300 font-semibold text-black text-22px" type="submit">Apply</a>
    </div>
  </section>
  <section class="container 3xl:max-w-3xl px-4 xl:pb-40 pb-20">
    <hr class="h-0.5 bg-black lg:my-30 mt-16 mb-16">
    <div class="grid lg:grid-cols-2 grid-cols-1 xl:gap-y-40 gap-y-20">
      <div class="lg:pr-16">
        <a href="{{ route('who-we-are.speculative-application') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Speculative Application</a>
        <img class="lg:hidden my-7 4xl:w-auto sm:w-3/4" src="{{ asset('image/Speculative_Application.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="lg:mb-9 mb-5 sm:pr-0 pr-2">
            We are always interested in people who believe that they share our values and purpose. If you think you are
            a good fit for our business, send us your CV and cover letter.
          </p>
          <p class="lg:mb-9 mb-5 sm:pr-0 pr-4">
            We will review your enquiry and will be in touch if we have any open roles suitable to your skills and experience.
          </p>
          <p>
            <span class="sm:inline block">In the meantime, take a look at</span>
            <a href="{{ route('who-we-are.our-history') }}" class="text-lochmara">our history</a>
            and
            <a href="{{ route('who-we-are.meet-the-team') }}" class="text-lochmara">meet the team</a>
            pages and find out more
            about our culture <span class="sm:inline block">and business.</span>
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center" href="{{ route('who-we-are.speculative-application') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
      <div class="lg:block hidden">
        <img class="my-auto" src="{{ asset('image/Speculative_Application.jpg') }}">
      </div>

      <div class="lg:block hidden">
        <img src="{{ asset('image/Social_Responsibility.jpg') }}">
      </div>
      <div class="lg:pl-24 xl:pr-4">
        <a href="{{ route('who-we-are.social-responsibility') }}"
           class="quarto-font 4xl:text-62px text-44px leading-none">Environmental, Social & Corporate Responsibility</a>
        <img class="lg:hidden my-7 4xl:w-auto sm:w-3/4" src="{{ asset('image/Social_Responsibility.jpg') }}">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 xl:mb-16 mb-9">
          <p class="sm:pr-0 pr-2">
            We are committed to being socially accountable – to ourselves, our stakeholders and our customers. We
            understand that it isn’t enough to adhere to the regulations - that is a minimum expectation for us. We go
            above and beyond to ensure we can improve the lives of everyone we work with. As a woman owned ethic
            minority business, Smartway has always been champions of diversity and inclusion, striving to make it both
            inclusive and a transparent and safe place to work. And as a global business we realise we need to be
            conscious of our impact on the world and therefore we have committed to the UN Sustainable Development
            Goals, ensure we comply with anti-slavery policies and that we empower lives through access to our medicine.
          </p>
        </div>
        <a class="4xl:text-2xl xl:text-xl text-md font-bold flex items-center"
           href="{{ route('who-we-are.social-responsibility') }}"><img
              class="inline mr-4" src="{{ asset('image/icon/icn.svg') }}">Read more</a>
      </div>
    </div>
  </section>
  @include('front.partials.who-we-are-link')
@endsection

