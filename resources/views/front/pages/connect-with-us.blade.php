@extends('layouts.front')

@section('meta')
  <title>Contact Us, So We Can Help</title>
  <meta name="description" content="Connect with us for professional advice and to explore how Smartway can help enhance your business. We look forward to speaking with you. If you have any enquiries don’t hesitate to contact us.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full" src="{{ asset('/image/african-american-businesswomen-talking-on-an-offic-38CT32K-header.png') }}" alt="Smartway Pharmaceuticals - Don’t hesitate to get in touch." title="Smartway Pharmaceuticals - Don’t hesitate to get in touch.">
  <img class="inline-block sm:hidden w-full" src="{{ asset('/image/connect_mobile_hero.jpeg') }}" alt="Smartway Pharmaceuticals - Don’t hesitate to get in touch." title="Smartway Pharmaceuticals - Don’t hesitate to get in touch.">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <h1 class="container 3xl:max-w-3xl absolute heading quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px text-white leading-none lg:px-36 pl-4 pr-24 mb-2">
    <span class="2xl:block">Don’t hesitate</span>
    <span class="2xl:block">to get in touch.</span>
  </h1>
@endsection

@section('content')
  <section class="container lg:mt-16 mt-9 lg:mb-38 mb-20 px-4 relative">
    <a href="https://www.linkedin.com/company/smartway-pharmaceuticals/?viewAsMember=true"
       class="flex justify-end lg:pt-2 lg:pb-7">
     <img class="filter invert lg:relative absolute -top-4" src="{{ asset('image/icon/linkedin-icon.png') }}" alt="Smartway Pharmaceuticals - linkedin icon" title="Smartway Pharmaceuticals - linkedin icon">
    </a>
    <div class="grid lg:grid-cols-2">
      <div>
        <h2 class="quarto-font 4xl:text-93px xl:text-54px text-4xl 4xl:leading-102px xl:leading-59px leading-40px lg:mb-10 mb-16">
          <span class="2xl:block">Let’s talk about</span>
          <span class="2xl:block">your needs, and</span>
          <span class="2xl:block">how we can help</span>
          <span class="2xl:block">build and scale a</span>
          <span class="2xl:block">solution together.</span>
        </h2>
          {{--<p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-10 lg:mb-5 mb-3 mt-14">To get in touch with our <b>pharmacy</b>, please use the contact <br>details provided below:</p>--}}
          <p class="text-persian-green 4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-10 lg:mb-5 mb-3 "><i class="fa fa-envelope"></i> <a href="mailto:info@smartwaypharma.co.uk" class="ml-4">info@smartwaypharma.co.uk</a></p>
          <p class="text-persian-green 4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px 4xl:pr-10 lg:mb-5 mb-3"><i class="fa fa-phone"></i> <a class=" ml-4" href="tel:+442085457711">0208 545 7711</a></p>
      </div>
      <div>
        <form class="max-w-xl mx-auto px-4" method="post" action="{{ route('connect-with-us-form.submit') }}">
          @csrf
          <div class="w-full mb-11">
            <input
                name="name"
                type="text"
                class="w-full appearance-none outline-none py-4 border-b @error('name') border-red-500 @enderror border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                placeholder="Name*"
                value="{{ old('name', '') }}"
            />
            @error('name')
            <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
          </div>
          <div class="w-full mb-11">
            <input
                name="organisation"
                type="text"
                class="w-full appearance-none outline-none py-4 border-b @error('organisation') border-red-500 @enderror border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                placeholder="Organisation*"
                value="{{ old('organisation', '') }}"
            />
            @error('organisation')
            <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
          </div>
          <div class="w-full mb-11">
            <input
                name="job_title"
                type="text"
                class="w-full appearance-none outline-none py-4 border-b @error('job_title') border-red-500 @enderror border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                placeholder="Job Title*"
                value="{{ old('job_title', '') }}"
            />
            @error('job_title')
            <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
          </div>
          <div class="w-full mb-11">
            <input
                name="phone_number"
                type="text"
                class="w-full appearance-none outline-none py-4 border-b @error('phone_number') border-red-500 @enderror border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                placeholder="Phone Number"
                value="{{ old('phone_number', '') }}"
            />
            @error('phone_number')
            <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
          </div>
          <div class="w-full mb-11">
            <input
                name="work_email"
                type="text"
                class="w-full appearance-none outline-none py-4 border-b @error('work_email') border-red-500 @enderror border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black"
                placeholder="Work Email*"
                value="{{ old('work_email', '') }}"
            />
            @error('work_email')
            <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
          </div>
          <div class="w-full pt-7 lg:mb-20 mb-8">
            <label class="w-full appearance-none outline-none text-xl font-semibold text-dove-gray">
              Message*
            </label>
            <textarea
                name="message" rows="4"
                class="mt-4 w-full appearance-none outline-none p-4 border @error('message') border-red-500 @enderror border-dove-gray text-xl font-semibold text-black">{{ old('message', '') }}</textarea>
            @error('message')
            <div class="text-red-500 text-xs">{{ $message }}</div>
            @enderror
          </div>
          
          <div class="w-full">
            <label class="inline-flex">
              <input type="checkbox" name="policy"
                     class="form-checkbox w-4 h-4 border-2 border-black rounded-sm text-black focus:outline-none">
              <span class="-mt-1 lg:ml-8 ml-4 w-full appearance-none outline-none lg:text-xl text-lg font-semibold text-black lg:tracking-normal -tracking-0.5px">By submitting this form, I agree to Smartway’s Privacy Policy and Terms of Use.</span>
            </label>
            @error('policy')
            <div class="text-red-500 text-xs">The agree to smartway’s privacy policy and terms of use field is required.</div>
            @enderror
          </div>
          <div class="w-full pt-7 text-center">
              <div class="cf-turnstile" data-sitekey="{{ env('TURNSTILE_SITE_KEY') }}"></div>
              @error('turnstile')
                <div class="text-red-500 text-xs">{{ $message }}</div>
              @enderror
          </div>
          <button class="4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 xl:py-4 py-3 4xl:px-20 px-10 block w-full mt-16" type="submit">
            Submit
          </button>
        </form>
      </div>
    </div>
  </section>

  <div class="js-modal fixed z-999999 inset-0 overflow-y-auto {{Session::has('success') ? '' : 'hidden'}}" aria-labelledby="modal-title" role="dialog" aria-modal="true">
    <div class="flex lg:items-end items-start justify-center min-h-screen pt-4 px-5 pb-20 text-center sm:block">
      <div class="fixed inset-0"
           style="background: rgba(0, 173, 164, 0.44); backdrop-filter: blur(15px); -webkit-backdrop-filter: blur(15px); filter: brightness(1);"
           aria-hidden="true"></div>
      <div
          class="inline-block bg-white rounded-3xl text-left overflow-hidden shadow-xl transform transition-all 3xl:mt-48 sm:mb-8 mt-12 sm:max-w-1120px w-full">
        <svg style="fill: black;" class="js-modal-close w-4 h-4 absolute lg:top-5 top-3 lg:right-5 right-4 cursor-pointer z-10"
             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
          <path
              d="M10 8.586L2.929 1.515 1.515 2.929 8.586 10l-7.071 7.071 1.414 1.414L10 11.414l7.071 7.071 1.414-1.414L11.414 10l7.071-7.071-1.414-1.414L10 8.586z"></path>
        </svg>
        <div class="text-center xl:py-36 lg:py-16 py-10 px-5">
          <img class="w-auto mx-auto px-5" src="{{ asset('image/Main_Logo_black.svg') }}" alt="Smartway Pharmaceuticals logo" title="Smartway Pharmaceuticals logo">
          <p class="quarto-font xl:text-64px xl:leading-70px sm:text-54px sm:leading-53px text-42px leading-41px lg:my-10 my-7">Thank you for contacting us!</p>
          <div class="lg:text-2xl sm:text-xl text-lg lg:leading-37px leading-24px max-w-810px mx-auto">
            <p class="lg:mb-10 mb-6 lg:px-16 px-2">We’ve received your enquiry and one of our team members will respond to you within 48
              hours.</p>
            <p>In the
              meantime, read our news via our <a class="text-lochmara" href="{{ route('who-we-are.media-and-resource-centre.index') }}">blogs</a> and follow us on <a
                  class="text-lochmara" href="https://www.linkedin.com/company/smartway-pharmaceuticals/?viewAsMember=true">LinkedIn</a>.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('scripts')
  <script src="{{ mix('js/connect-with-us.js') }}" defer></script>
  <script src="https://challenges.cloudflare.com/turnstile/v0/api.js" async defer></script>
@endpush
