@extends('layouts.front')

@section('meta')
  <title>Fostering Environmental and Social Responsibility</title>
  <meta name="description" content="We not only ensure our patients continue to receive their medication and treatments for the years to come, we are also committed to our social and environmental responsibility.">
@endsection

@section('header-content')
  <img class="hidden sm:inline-block w-full"
       src="{{ asset('/image/Social_Responsibility.jpg') }}">
  <img class="sm:hidden inline-block w-full" src="{{ asset('/image/iStock-1269809465.png') }}">
  <div class="gray-radial-gradient opacity-60 absolute top-0 bottom-0 right-0 left-0"></div>
  <div class="container 3xl:max-w-3xl absolute heading text-white lg:px-36 px-4">
    <h1 class="quarto-font 4xl:text-120px xl:text-85px md:text-6xl sm:text-4xl text-42px leading-none sm:mb-2 mb-40">
      <span class="block">Environmental,</span>
      <span class="block">Social & Corporate</span>
      <span class="block">Responsibility</span>
    </h1>
    <p class="text-22px leading-28px sm:hidden">Setting the standard</p>
  </div>
@endsection

@section('content')
  <section class="container 3xl:max-w-3xl px-4 lg:mt-20 lg:mb-40 mb-20 mt-8">
    <p class="4xl:text-32px xl:text-2xl text-22px 4xl:leading-37px leading-28px font-bold lg:mb-16 mb-7">Setting the standard</p>
    <h2 class="quarto-font 4xl:text-93px xl:text-62px lg:text-44px text-34px 4xl:leading-102px xl:leading-70px lg:leading-48px leading-40px sm:mb-12 mb-6 4xl:pr-4 sm:mr-0 -mr-2">
      We recognise the privileged role that we have in the global distribution of pharmaceutical and medicines supply
    </h2>
    <p class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px pr-2">
      At Smartway, we appreciate that we are privileged to be able to transform the lives of patients across the globe
      by empowering access to medicine and pharmaceuticals. More than just recognising our role, we understand that we
      are a vital part of the medicines supply chain and have been for decades. This means that the patient always comes
      first.
    </p>
    <hr class="h-0.5 bg-black lg:mt-36 4xl:mb-80 xl:mb-40 mt-16 mb-20">
    <div class="js-article">
      <div class="grid xl:grid-cols-2 grid-cols-1">
        <div class="xl:pr-16">
          <h3
              class="quarto-font 4xl:text-62px text-44px leading-none">Ethics</h3>
          <img class="xl:hidden 4xl:w-auto sm:w-3/4 my-7"
               src="{{ asset('image/iStock-175254297.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5 sm:pr-0 pr-1">
            <p>
              We are committed to conducting our business in an ethical manner. For us, ethics is the consistent
              application of clear ethical values set by Smartway that influence the behaviour of the company as a whole
              and the individuals within it. For Smartway, ethics mean more than just meeting the minimum expectations
              but instead, having clear practical ways of making decisions that align with
              <span class="block">our ethical values.</span>
            </p>
          </div>
        </div>
        <div class="xl:block hidden">
          <img src="{{ asset('image/iStock-175254297.png') }}">
        </div>
      </div>
      <button class="js-article-button 4xl:text-2xl xl:text-xl text-md font-bold flex items-center lg:my-20 my-8"><img
            class="inline mr-4 transform rotate-180"
            src="{{ asset('image/icon/read_less_icn.svg') }}"><span>Read more</span>
      </button>
      <div class="js-article-content hidden">
        <div
            class="lg:text-2xl lg:leading-37px leading-28px text-xl lg:pr-14 -tracking-0.45px">
          <p class="mb-9">To achieve this, we have set rigorous standards of ethics, conduct and behaviour throughout
            our operations,
            regardless of which country they take place in. These apply to all of the decisions and actions that we
            take.
            In putting the patient first, we are not afraid to make decisions even if they appear contrary to our own
            commercial interests.</p>
          <p class="mb-9">We have rigorous recruitment criteria, meaning that we only employ those who share our
            values and the commitment to patients throughout the globe. We also apply these criteria to the stakeholders
            that we work with, such as our suppliers, our customers and our logistics partners, for example. We monitor
            these behaviours through audits, compliance reviews, employee feedback and whistleblowing reports. Where
            those
            values are not applied or met, we will take action to put it right.</p>
          <p class="mb-9">We have a dedicated regulatory, quality
            and compliance team with all of the resources they need to ensure that we meet the high standards. The team
            is
            led by a senior manager, who is able to make decisions about resourcing, innovation and targets/KPIs. The
            effectiveness of the team is measured and reviewed to ensure that objectives are being met.</p>
          <p>We regularly
            cooperate on a voluntary basis with regulators across the globe to support investigations intended to
            disrupt
            the introduction of falsified, sub-standard or poor quality medicines. We also take part in regular industry
            events to share our knowledge, to help others do the same and learn from the experience of our industry
            colleagues.</p>
        </div>
      </div>
      <hr class="h-0.5 bg-black lg:mt-40 mt-20">
    </div>
    <div class="js-article">
      <div class="grid xl:grid-cols-2 grid-cols-1 lg:mt-40 mt-20">
        <div class="xl:block hidden">
          <img src="{{ asset('image/iStock-938516440.png') }}">
        </div>
        <div class="xl:pl-28 4xl:-mr-10">
          <h3
              class="quarto-font 4xl:text-62px text-44px leading-none sm:pr-0 pr-4">Equality, Diversity & Inclusion</h3>
          <img class="xl:hidden 4xl:w-auto sm:w-3/4 my-7"
               src="{{ asset('image/iStock-938516440.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5">
            <p>
              We are committed to having a workforce that is diverse and having a culture of genuine inclusion, which
              champions equality. For us, equality, diversity and inclusion are about having a workforce that reflects
              the global communities that we ultimately serve. We are committed to breaking down barriers and seeing the
              value in the equality of employees across countries and cultures, of all levels and backgrounds.
            </p>
          </div>
        </div>
      </div>
      <button class="js-article-button 4xl:text-2xl xl:text-xl text-md font-bold flex items-center lg:my-20 my-8"><img
            class="inline mr-4 transform rotate-180"
            src="{{ asset('image/icon/read_less_icn.svg') }}"><span>Read more</span>
      </button>
      <div class="js-article-content hidden">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mb-20 lg:mb-0">
          <p class="mb-9 4xl:-mr-6">
            To achieve this, we ensure that when we recruit, we do so solely on the basis of merit, and to the exclusion
            of discriminatory or unfair characteristics. These decisions are made having regard for our own ethical
            values.
          </p>
          <p class="mb-9">
            We have clear procedures in the form of employee handbooks, employment policies and recruitment and
            monitoring procedures, which are consistently applied in a non-discriminatory way. We will ensure fair and
            equal pay, irrespective of the characteristics of our employees. We expect all of our employees to treat
            each other with respect and dignity.
          </p>
          <p class="mb-9">
            We proactively monitor our recruitment practices and our workforce
            statistics to ensure we reflect the communities that we serve and to ensure that there are no unintended
            practices that are unfair. We will adopt fair processes to investigate discriminatory conduct. Where we
            identify poor conduct or culture, or discrimination in whatever form, we will take corrective action in
            accordance with the law to achieve that.
          </p>
          <p class="4xl:pr-8">
            We are proud to say that not only are we owned by ethnic minority
            women, but data suggests that our existing global operation represents true diversity and inclusion in
            respect of gender, age and ethnicity. To meet our own commitment to inclusion, we are already a registered
            ‘Disability Confident’ (UK government scheme) employer. So far, we have employees from over 20 countries
            across the world. We have also pledged our support for the UN LGBTI global business standards and have
            implemented these policies into our recruitment, retention and reward policies and practices.
          </p>
        </div>
      </div>
      <hr class="h-0.5 bg-black lg:mt-40 mt-20">
    </div>
    <div class="js-article">
      <div class="grid xl:grid-cols-2 grid-cols-1 lg:mt-40 mt-20">
        <div class="xl:pr-16">
          <h3
              class="quarto-font 4xl:text-62px text-44px leading-none">Governance</h3>
          <img class="xl:hidden 4xl:w-auto sm:w-3/4 my-7"
               src="{{ asset('image/iStock-1167595391.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5">
            <p>
              We are committed to upholding the principles of effective corporate governance. For us, governance is
              about setting the right culture for all of those who work for or with Smartway to promote the long term
              success of the company in accordance with our own values and standards. Culture starts at the top. This
              means ensuring that we are well led, we are compliant with all of the regulatory, ethical and legal
              obligations, that our service is effective and that patients’ needs are met.
            </p>
          </div>
        </div>
        <div class="xl:block hidden">
          <img src="{{ asset('image/iStock-1167595391.png') }}">
        </div>
      </div>
      <button class="js-article-button 4xl:text-2xl xl:text-xl text-md font-bold flex items-center lg:my-20 my-8"><img
            class="inline mr-4 transform rotate-180"
            src="{{ asset('image/icon/read_less_icn.svg') }}"><span>Read more</span>
      </button>
      <div class="js-article-content hidden">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mb-20 lg:mb-0">
          <p class="mb-9 4xl:pr-8">
            To deliver this, we have a clearly defined mission statement: transforming lives by empowering access to
            medicines globally. This mission statement is our DNA. We ensure that not only is it visible on our website,
            our marketing literature, our public announcements and our recruitment adverts, but it is also the guiding
            force by which decisions are made at all levels of our business.
          </p>
          <p class="mb-9 4xl:pr-10">
            At a basic level, our senior management
            team set clear values which promote good, ethical and patient-centred behaviours. This provides a foundation
            for effective decision making throughout all of our global operations. We have formalised this in our
            policies, procedures and employee handbook, covering the expectations we have of all of our staff. This also
            includes procedures on managing conflicts of interest, whistleblowing, anti-bribery and corruption and
            modern slavery.
          </p>
          <p class="mb-9 4xl:pr-10">
            The majority of our business operations are managed by our quality system. We have developed
            this system with these ethical values in mind, to ensure that the right decisions are made within a defined
            framework. We have a quality manual, which sets out the expectations and principles that apply. Our quality
            documents are drafted to comply with domestic legislation and best practice, taking account of our own risk
            appetite. It also affords appropriate discretion to competent professionals, so that they can make pragmatic
            decisions enabling medicines to reach patients.
          </p>
          <p class="4xl:pr-12">
            Our senior managers take part in regular meetings to ensure
            effective oversight of our business. These meetings include stakeholders from across the business, including
            our regulatory colleagues, to ensure that the senior management team are aware of trends and issues, as well
            as strategic opportunities. Our senior managers have access to a wide range of data to support their
            decision-making processes.
          </p>
        </div>
      </div>
      <hr class="h-0.5 bg-black lg:mt-40 mt-20">
    </div>
    <div class="js-article">
      <div class="grid xl:grid-cols-2 grid-cols-1 lg:mt-40 mt-20">
        <div class="xl:block hidden">
          <img src="{{ asset('image/iStock-1201112520.png') }}">
        </div>
        <div class="xl:pl-28 4xl:-mr-4 4xl:pr-4">
          <h3
              class="quarto-font 4xl:text-62px text-44px leading-none">Sustainability</h3>
          <img class="xl:hidden 4xl:w-auto sm:w-3/4 my-7"
               src="{{ asset('image/iStock-1201112520.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5">
            <p>
              We are committed to operating our business in a sustainable manner across our entire operations. We
              recognise that, as we have a complex global supply chain, there are things that we can do to help end
              unfair and unlawful practices, promote equality and the environment, as well as address social justice and
              humanitarian issues.
            </p>
          </div>
        </div>
      </div>
      <button class="js-article-button 4xl:text-2xl xl:text-xl text-md font-bold flex items-center lg:my-20 my-8"><img
            class="inline mr-4 transform rotate-180"
            src="{{ asset('image/icon/read_less_icn.svg') }}"><span>Read more</span>
      </button>
      <div class="js-article-content hidden">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mb-20 lg:mb-0">
          <p class="mb-9 4xl:pr-8">
            To meaningfully contribute to the global sustainability agenda, we have adopted the relevant UN Sustainable
            Development Goals, which set out a pathway to ending poverty, hunger, inequality, and for providing
            protection for the environment and natural resources across the globe. It is hoped that this will be
            achieved by 2030. To meet this target, action by governments, commercial and NGO, and individuals will be
            required. Smartway will do its bit to help deliver this vision.
          </p>
          <p class="mb-9 4xl:pr-19 mr-1">
            Our initial focus in transforming lives by
            empowering access to medicines globally feeds directly into Goal 3 – Good Health and Wellbeing. We will use
            our knowledge, expertise and infrastructure to provide that access to patients across the globe. However, we
            can meet the other goals. With operations across the world that help us distribute pharmaceuticals to
            patients, Smartway can make an impact on many of the other sustainable development goals.
          </p>
          <p class="mb-9 4xl:pr-28">
              As a global distributor of medicines and pharmaceuticals, we focus on the reduction
              of carbon in our operations. We work in partnership with our clients to develop
              carbon neutral programs including working in partnership with a charitable project to
              trees for carbon capture.
          </p>
          <p class="4xl:pr-4"> As part of our ethical values, we will continue to support
            charitable causes through donations, fundraising and raising awareness on important and relevant issues. We
            will continue to provide our expertise to help influence domestic and foreign policy.
          </p>
        </div>
      </div>
      <hr class="h-0.5 bg-black lg:mt-40 mt-20">
    </div>
    <div class="js-article">
      <div class="grid xl:grid-cols-2 grid-cols-1 lg:mt-40 mt-20">
        <div class="xl:pr-28">
          <h3
              class="quarto-font 4xl:text-62px text-44px leading-none sm:pr- pr-20">Anti corruption & Slavery</h3>
          <img class="xl:hidden 4xl:w-auto sm:w-3/4 my-7"
               src="{{ asset('image/iStock-1282328162.png') }}">
          <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mt-5">
            <p>
              We are committed to eliminating and preventing all forms of corruption, abuse and slavery from our global
              supply chain. We recognise that, because our supply chain spans jurisdictions with different views on
              acceptable business practices, we must do our bit to prevent these practices.
            </p>
          </div>
        </div>
        <div class="xl:block hidden">
          <img src="{{ asset('image/iStock-1282328162.png') }}">
        </div>
      </div>
      <button class="js-article-button 4xl:text-2xl xl:text-xl text-md font-bold flex items-center lg:my-20 my-8"><img
            class="inline mr-4 transform rotate-180"
            src="{{ asset('image/icon/read_less_icn.svg') }}"><span>Read more</span>
      </button>
      <div class="js-article-content hidden">
        <div class="4xl:text-2xl sm:text-xl text-lg 4xl:leading-37px leading-24px mb-20 lg:mb-0">
          <p class="mb-9 4xl:pr-8">
            To do this, we have policies in place to manage the risks of these practices. This defines that we adopt a
            zero-tolerance approach to any form of corruption or abuse in our operations. We expressly prohibit all
            forms of bribes or analogous inducements, whether that be paying for them or receiving them. We take the
            same approach to forced labour, modern slavery or human rights abuses. This is regardless of whether it is
            considered acceptable in the relevant jurisdiction or not.
          </p>
          <p class="mb-9 4xl:pr-10">
            To prevent working with such organisations, we
            employ onboarding processes for suppliers, customers and other supply chain partners, which assess
            suitability across a range of parameters using a range of information sources. This assessment period is
            ongoing throughout the life of our relationship. We will not work with anybody that does not meet our
            rigorous standards.
          </p>
          <p class="mb-9 4xl:pr-16">
            To ensure that such behaviours are eliminated, we have a whistleblowing procedure that
            enables the reporting of information to designated members of our senior management team, who are empowered
            to make immediate decisions to arrest any risk of working with anybody that would be in contravention of our
            ethical values. These reports can be made anonymously or openly.
          </p>
          <p class="4xl:pr-10">
            As a policy decision, we will cooperate
            with regulators and take legal action of our own. We have legal protection in place which allows us to take
            robust action against those who engage in such conduct within the supply chain.
          </p>
          <p class="mt-10 4xl:pr-10 text-center">
            <a href="{{ asset('pdf/Modern_Slavery_Statement.pdf') }}" class="button 4xl:text-28px lg:text-xl text-2xl font-semibold bg-lochmara text-white rounded-full 4xl:py-5 py-3 px-10 block sm:inline-block" target="_blank">Download our modern slavery statement</a>
          </p>
        </div>
      </div>
      <hr class="h-0.5 bg-black lg:mt-40 mt-20">
    </div>
  </section>
  @include('front.partials.who-we-are-link')
@endsection
