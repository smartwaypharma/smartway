@extends('layouts.front')

@section('meta')
    <title>Who we are - Careers & Internships - Responsible Person Application</title>
@endsection

@section('header-content')
    <img class="hidden sm:inline-block w-full" src="{{ asset('image/RPJobImg.jpg') }}">
    <img class="sm:hidden inline-block w-full" src="{{ asset('image/RPJobMobile.jpg') }}">
    <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
    <h1 class="container 3xl:max-w-3xl absolute heading quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px text-white leading-none lg:px-36 px-4 mb-2">
        <span class="block">Join our team</span>
    </h1>
@endsection

@section('content')
    <section class="container lg:mt-16 mt-8 lg:mb-38 mb-20 px-4">
        <div class="flex lg:justify-between justify-end pt-2 lg:pb-7 pb-4">
            <a class="hidden lg:block text-lg font-bold flex items-center" href="{{ route('who-we-are.careers') }}">
                <img class="inline transform rotate-180 mr-3 w-5 h-5"
                     src="{{ asset('image/icon/icn.svg') }}">Back</a>
            <a href="https://www.linkedin.com/company/smartway-pharmaceuticals/?viewAsMember=true" target="_blank"><img class="filter invert pr-6" src="{{ asset('image/icon/linkedin-icon.png') }}"></a>
        </div>
        <div class="lg:flex">
            <div class="lg:w-7/12 lg:pr-16 ">
                <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px lg:mb-12 mb-6 lg:pr-0 pr-3">
                    Become our <br> Responsible Person
                </h2>
                <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px">
                    <p class="lg:mb-9 mb-6">
                        <b>Location:</b> London office</p>

                    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px lg:mb-12 mb-6 lg:pr-0 pr-3">
                        Job description
                    </h2>
                    <p class="lg:mb-9 mb-6 lg:pr-0 pr-4">Smartway is a specialist distributor, partnering with healthcare professionals, pharmaceutical and biotech companies, aid organisations and charities to ensure medicines access to patients all over the world.</p>
                    <p class="lg:mb-9 mb-6 lg:pr-0 pr-4">We are looking for an additional Responsible Person to support continued business expansion. Day-to-day, the role will involve using our electronic Quality Management System and other custom-built systems to assure and monitor compliance within the business.</p>
                    <p class="lg:mb-9 mb-6 lg:pr-0 pr-4">The ideal candidate would have a degree in a life science and at least 2 years’ wholesale experience; applicants should meet the MHRA criteria for being an RP and have demonstrable experience of managing a Quality Management System within the UK or Ireland.</p>
                    <p class="lg:mb-4 mb-2 lg:pr-0 pr-4 bold">Experience in the following business models is desirable:  </p>
                    <div class="2xl:max-w-6xl xl:max-w-4xl 2xl:pl-0 xl:pl-0 post-content xl:pr-0">
                        <ul>
                            <li>Unlicensed import and distribution (from Listed and non-Listed countries under an MS Licence);</li>
                            <li>Distribution globally, including checking customs documentation;</li>
                            <li>Secondary packaging activities;</li>
                            <li>Import and export of medical devices and cosmetics;</li>
                            <li>Distribution of veterinary products;</li>
                            <li>Distribution of Controlled Drugs.</li>
                        </ul>
                    </div>
                </div>
                <hr class="h-0.1 mt-8 mb-3 bg-black lg:hidden">
            </div>
            <div>
                <form action="{{ route('who-we-are.responsible-person-application-form.submit') }}" method="POST" id="contactForm" class="lg:max-w-xl mx-auto lg:px-4">
                    @csrf
                    <input id="cv" name="cv" type="hidden">
                    <div class="w-full mb-11">
                        <input
                                name="name"
                                type="text"
                                class="w-full appearance-none outline-none py-4 border-b border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black js-field"
                                placeholder="Name*"
                                value="{{ old('name', '') }}"
                                />
                        <div class="text-red-500 text-xs js-error-message hidden" data-field="name"></div>
                    </div>
                    <div class="w-full mb-11">
                        <input
                                name="organisation"
                                type="text"
                                class="w-full appearance-none outline-none py-4 border-b border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black js-field"
                                placeholder="Organisation*"
                                value="{{ old('organisation', '') }}"
                                />
                        <div class="text-red-500 text-xs js-error-message hidden" data-field="organisation"></div>
                    </div>
                    <div class="w-full mb-11">
                        <input
                                name="job_title"
                                type="text"
                                class="w-full appearance-none outline-none py-4 border-b border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black js-field"
                                placeholder="Current Job Title*"
                                value="{{ old('job_title', '') }}"
                                />
                        <div class="text-red-500 text-xs js-error-message hidden" data-field="job_title"></div>
                    </div>
                    <div class="w-full mb-11">
                        <input
                                name="phone_number"
                                type="text"
                                class="w-full appearance-none outline-none py-4 border-b border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black js-field"
                                placeholder="Phone Number"
                                value="{{ old('phone_number', '') }}"
                                />
                        <div class="text-red-500 text-xs js-error-message hidden" data-field="phone_number"></div>
                    </div>
                    <div class="w-full mb-11">
                        <input
                                name="work_email"
                                type="text"
                                class="w-full appearance-none outline-none py-4 border-b border-black text-xl font-semibold text-black placeholder-dove-gray focus:placeholder-black js-field"
                                placeholder="Email*"
                                value="{{ old('work_email', '') }}"
                                />
                        <div class="text-red-500 text-xs js-error-message hidden" data-field="work_email"></div>
                    </div>
                    <div class="w-full pt-7 mb-11">
                        <label class="w-full appearance-none outline-none text-xl font-semibold text-dove-gray">
                            Cover Letter*
                        </label>
            <textarea
                    name="message" rows="4"
                    class="mt-4 w-full appearance-none outline-none p-4 border border-dove-gray text-xl font-semibold text-black js-field">{{ old('message', '') }}</textarea>
                        <div class="text-red-500 text-xs js-error-message hidden" data-field="message"></div>
                    </div>
                    <div class="w-full mb-11">
                        <div class="uppy-files"></div>
                        <div class="uppy-progress-bar"></div>
                        <div class="text-red-500 text-xs js-error-message hidden" data-field="cv"></div>
                        <div class="uploaded-files mt-4">
                            <p class="headline font-medium">Uploaded files:</p>
                            <ol></ol>
                        </div>
                    </div>
                    <div class="w-full">
                        <label class="inline-flex">
                            <input type="checkbox" name="policy"
                                   class="form-checkbox w-4 h-4 border-2 border-black rounded-sm text-black focus:outline-none">
                            <span class="-mt-1 ml-8 w-full appearance-none outline-none lg:text-xl text-lg font-semibold text-black">By submitting this form, I agree to Smartway’s Privacy Policy and Terms of Use.</span>
                        </label>
                        <div class="text-red-500 text-xs js-error-message js-custom-text hidden" data-field="policy">The agree to smartway’s privacy policy and terms of use field is
                            required.
                        </div>
                    </div>
                    <button class="4xl:text-28px lg:text-xl text-2xl font-semibold bg-persian-green text-white rounded-full 4xl:py-5 xl:py-4 py-3 4xl:px-20 px-10 block w-full mt-16" type="submit">
                        Submit
                    </button>
                </form>
            </div>
        </div>
    </section>
    @include('front.partials.who-we-are-link')
    <div class="js-success-modal fixed z-999999 inset-0 overflow-y-auto hidden" aria-labelledby="modal-title" role="dialog" aria-modal="true">
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
                    <img class="w-auto mx-auto px-5" src="{{ asset('image/Main_Logo_black.svg') }}" alt="Logo">
                    <p class="quarto-font xl:text-64px xl:leading-70px sm:text-54px sm:leading-53px text-42px leading-41px lg:my-10 my-7">Thank you for applying!</p>
                    <div class="lg:text-2xl sm:text-xl text-lg lg:leading-37px leading-24px max-w-810px mx-auto">
                        <p class="lg:mb-10 mb-6 lg:px-16 px-2">We’ve received your enquiry and one of our team members will respond to you within 4-5 working days.</p>
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
<script src="{{ mix('js/rp-application.js') }}" defer></script>
@endpush
