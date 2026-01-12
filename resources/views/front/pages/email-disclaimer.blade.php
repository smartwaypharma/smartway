@extends('layouts.front')

@section('meta')
  <title>Email Disclaimer</title>
  <meta name="description" content="Email Disclaimer">
  <meta name="robots" content="noindex, nofollow">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full h-420px object-cover object-top"
       src="{{ asset('/image/email-disclaimer.png') }}" alt="Smartway Pharmaceuticals - Regulatory Information" title="Smartway Pharmaceuticals - Regulatory Information">
  <img class="sm:hidden inline-block w-full h-390px object-cover object-bottom"
       src="{{ asset('/image/email-disclaimer.png') }}" alt="Smartway Pharmaceuticals - Regulatory Information" title="Smartway Pharmaceuticals - Regulatory Information">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4 sm:mb-0 mb-32">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none text-42px -mb-5">
      Email Disclaimer
    </h1>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 xl:my-16 mt-11 mb-20">
    <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
      <p class="lg:mb-9 mb-5 4xl:pr-6 pr-2">
        This email disclaimer applies to all email communications and attachments sent by or on behalf of Smartway Pharmaceuticals Limited, whether or not this disclaimer is reproduced in the body of the email itself.
      </p>
      <p class="lg:mb-9 mb-5 4xl:pr-6 pr-2">
        Emails may contain confidential information. If you are not the intended recipient, please notify the sender and delete the message. Any unauthorised use, disclosure or copying is not permitted.
      </p>
      <p class="lg:mb-9 mb-5">
        Personal data is processed in accordance with applicable data protection laws and our published privacy information. While reasonable precautions are taken to ensure emails are free from viruses or other defects, Smartway Pharmaceuticals Limited accepts no responsibility for any loss or damage arising from their use.
      </p>
      <p class="lg:mb-9 mb-5">
        Any supply to, or purchase by, Smartway Pharmaceuticals Limited is conducted subject to our applicable terms and conditions, as amended from time to time. 
        These include (without limitation) our Terms and Conditions of Supply and Terms and Conditions of Purchasing, which are available at: <a href="{{ route('regulatory-information') }}" target="_blank" class="underline" rel="noopener noreferrer"><strong>Regulatory Information</strong></a>. 
        By continuing to engage with Smartway Pharmaceuticals Limited, you acknowledge that the applicable terms and conditions form part of our commercial relationship.
      </p>
      <p class="lg:mb-9 mb-5">
        Supplier Information Sheets, Customer Information Sheets and other corporate or regulatory materials published on our website are provided for general information and operational guidance only and do not, of themselves, form part of any contract unless expressly incorporated by written agreement.
      </p>
      <p class="lg:mb-9 mb-5">
        <strong>Last updated: 12 January 2026</strong>
      </p>
    </div>
  </section>
@endsection