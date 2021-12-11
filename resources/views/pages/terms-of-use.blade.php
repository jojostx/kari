<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')

    <section class="relative flex flex-col p-12 bg-center bg-cover md:items-center md:text-center py-28 md:py-36 bg-pent-mobile lg:bg-pent lg:p-36 lg:py-48">
      <div class="absolute top-0 left-0 w-full h-full opacity-60 bg-gradient-to-r from-gray-800 to-blue-900">
      </div>
      <div class="relative z-20 pt-10">
        <h1 class="mb-2 text-3xl font-bold tracking-wide text-white md:text-4xl font-vesp lg:text-5xl lg:tracking-wider">
          Invest In One of the World's Largest and Stable Economy</h1>
      </div>

      <div class="relative z-20">
        <p class="max-w-sm mb-8 text-white lg:text-lg">
          Start investing in real estate with a stable ROI
        </p>
      </div>

      <div class="relative z-20 flex items-center space-x-2 md:justify-center">
        <x-animated-button href="{{ route('register') }}" class="border-2 border-white">Get Started</x-animated-button>
      </div>
    </section>

    <!-- faqs -->
    <div class="px-4">
      <div>
        <div class="px-4">
          <div class="flex flex-col w-full mx-auto md:w-11/12">
            <x-term>
              <x-slot name="term_heading">
                <p>Acceptance of Terms</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="mb-4 font-medium leading-tight uppercase md:mb-8 md:leading-snug">
                  IMPORTANT -- READ CAREFULLY: BY CREATING AN ACCOUNT OR BY UTILIZING THE Kari Investment SERVICE YOU AGREE TO BE BOUND BY THESE TERMS AND CONDITIONS.
                </p>
                <p class="font-normal text-gray-700">
                  Welcome to the <span><a class="font-medium text-blue-600 hover:underline" href="{{ route('home') }}">Kariinvestment.com</a></span> service and website (collectively, the "Service"). Your use of the Service is subject to these Terms of Service and Kari Investment’s <span><a class="font-medium text-blue-600 hover:underline" href="{{ route('privacy') }}">Privacy Policy</a></span> (collectively, the "Terms of Service" or “Agreement”). These Terms of Service are a legal agreement between You and <span class="font-boldr">Kari Investment ltd.</span> (“Kari Investment”), a United Kingdoms Companny, for use of the Kari Investment service. "You" refers to any individual who creates an account on the Service. If You do not agree with the terms of this Agreement, do not use the Service. Kari Investment reserves the right to update and change the Agreement from time to time without notice or acceptance by You. The Agreement will also be applicable to the use of the Service on tiers. By using the Service, You signify Your irrevocable acceptance of this Agreement. The website and any downloadable Material associated with the Service are protected by copyright laws and international copyright treaties, as well as other intellectual property laws and treaties.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Description of Service</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                  The Service includes, and is limited to, a service and web site that allows You access to and use of a single Kari Investment Account. "Kari Investment" referred to herein means an online platform that connects potential roommates by matching using collaborative filters and algorithms performed on the user supplied data. The Service may contain information, data, text, photographs, videos, audio clips, graphics, and interactive features generated, provided, or otherwise made accessible on or through the Service (collectively, “Content”). Subject to these Terms of Service, Kari Investment grants to You and each user of the Service a worldwide, non-exclusive, non-sublicensable and non-transferable license to use Content solely for purposes of using the Service. Use, reproduction, modification, distribution or storage of any Content for other than purposes of using the Service is expressly prohibited without prior written permission from us. You shall not sell, license, rent, or otherwise use or exploit any Content for commercial use or in any way that violates any third party right. For the purposes of these Terms of Service, “Content” also includes all User Content (as defined below).

                <p class="my-4 text-indent">A "Kari Investment Account" or "Account" referred to herein means a service or web site, provided by Kari Investment, where You may use Kari Investment to create, update, share, and send data, text, messages or other materials ("User Content").</p>

                Unless explicitly stated otherwise, any new features that augment or enhance the current Service, including the release of new tools and resources, shall be subject to the Agreement. In order to use the Service, You must obtain access to the World Wide Web, either directly or through devices that access web-based content. In addition, You must provide all equipment necessary to make such connection to the World Wide Web, including a computer and modem or other access device. You also understand and agree that the service may include certain communications from Kari Investment, such as service announcements, administrative messages, etc., and that these communications are considered part of the Service and You will not be able to opt out of receiving them. You agree not to access the Service by any means other than through the interfaces that are provided by Kari Investment for use in accessing the Service. Kari Investment will provide the Service in accordance with this Agreement. Kari Investment may at its sole discretion modify the features of the Service from time to time without prior notice.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Registration</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                  In order to use the Service, You must have a valid Account.
                  To acquire an Account for the Service, You must provide Kari Investment with an electronic mail address and other information ("Registration Data"). You are responsible for maintaining the confidentiality of the access data for Your Account, and are fully responsible for all activities that occur under Your Account. You agree to (a) immediately notify Kari Investment of any unauthorized use of Your Account or any other breach of security, and (b) ensure that You exit from Your Account at the end of each session. Kari Investment cannot and will not be liable for any loss or damage arising from Your failure to comply with this section. In consideration of use of the Service, You agree to: (a) provide true, accurate, current and complete information about Yourself as prompted by the Service's registration form, and (b) maintain and promptly update the Registration Data to keep it true, accurate, current and complete. Kari Investment assumes no duty to verify such information as further detailed in the CONTENT OF THE SERVICE section of these Terms of Service. If You provide any information that is untrue, inaccurate, not current or incomplete, or Kari Investment has reasonable grounds to suspect that such information is untrue, inaccurate, not current or incomplete, Kari Investment has the right to suspend or terminate Your Account and refuse any and all current or future use of the Service (or any portion thereof). By using the Service (and registering an Account on the Service), You represent and warrant that You are at least 16 years of age. No one under the age of 16 may use the Service. Kari Investment may, in its sole discretion, refuse to offer the Service to any person or entity and change its eligibility criteria at any time. You are solely responsible for ensuring that these Terms of Service are in compliance with all laws, rules and regulations applicable to you and the right to access the Service is revoked where these Terms of Service or use of the Service is prohibited or to the extent offering, sale or provision of the Service conflicts with any applicable law, rule or regulation.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Disclaimer of Warranties</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                  The Website and apps are provided "as is". Kari Investment Ltd and its suppliers and licensors hereby disclaim all warranties of any kind, express or implied, including, without limitation, the warranties of merchantability, fitness for a particular purpose and non-infringement. Neither Kari Investment Ltd nor its suppliers and licensors, makes any warranty that the Website and apps will be error free or that access thereto will be continuous or uninterrupted. You understand that you download from, or otherwise obtain content or services through, the Website at your own discretion and risk.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Indemnity</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                  You agree to indemnify, defend and hold harmless Kari Investment its affiliates, officers, directors, employees, consultants, agents, suppliers and Resellers from any and all third party claims, liability, damages and/or costs (including, but not limited to, attorneys fees as and when incurred) arising from Your use of the Service, Your use of Your Account, Your violation of these Terms of Service or the infringement or violation by You or any other User of Your Account, of any intellectual property relating to the Service (including without limitation Your User Content) or other right of any person or entity.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Limitation of Liability</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                  In no event will Kari Investment or its affiliates, suppliers or Resellers be liable for any special, incidental, indirect, exemplary or consequential damages whatsoever (including, without limitation, damages for loss of Personal funds, business interruption, loss of personal information, or any other pecuniary loss or damage) arising out of the use of or inability to use the Service, or the provision of or failure to provide technical or other support service, whether arising in tort (including negligence) contract or any other legal theory, even if Kari Investment, its affiliates, suppliers or Resellers have been advised of the possibility of such damages. In any case, Kari Investment’s, its affiliates', suppliers' and Resellers' maximum cumulative liability and Your exclusive remedy for any claims arising out of or related to this Agreement will be limited to the amount actually paid by You for the Service (if any) in the previous twelve (12) months.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Modification of Service</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                  Kari Investment reserves the right at any time and from time to time to modify or discontinue, temporarily or permanently, the Service (or any part thereof) with or without notice at any time. You agree that Kari Investment shall not be liable to You or to any third party for any modification, suspension, termination or discontinuance of the Service.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Termination, Breach, Suspension and Cancellation</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                  If You Violate any agreement or terms in this document, Kari Investment may disable Your access toyour account. Kari Investment may, at its sole discretion, at any time and for any reason, terminate the Service, terminate this Agreement, or suspend or terminate Your Account. In the event of suspension or termination, Your account will be disabled and You may not be granted access to Your Account or any files or other Content contained in Your Account. In the event of termination, Kari Investment may also withdraw and at its discretion reallocate the public web address of Your Account.

                  If You terminate Your Account, via means provided for cancellation on the <a href="{{ route('home') }}" class="font-semibold">Kari Investment</a>  website, or via telephone call or electronic mail to Kari Investment and You request that Kari Investment delete Your User Content contained in Your Account, Kari Investment will make all reasonable efforts to do so.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Proper Use</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                <p>
                  Kari Investment does not claim ownership over any User Content submitted on or through the Service. Your User Content belongs to You. However, by uploading any User Content to the Service, You agree that Kari Investment may store and display (only to You, to the extent that You make such User Content private) Your User Content solely as necessary in connection with the Service. To the extent You choose to share any of Your User Content with other users of the Service, You agree to allow these users (i.e., only the users you specify) to view Your User Content and, to the extent applicable, collaborate with You and Your User Content.
                </p>
                <p class="my-4 text-indent">
                  You understand that all User Content is the sole responsibility of the person from which such User Content originated. This means that You, and not Kari Investment, are entirely responsible for all User Content that You upload, post, transmit or otherwise make available via Your Account. Kari Investment does not control the User Content posted via the Service and, as such, does not guarantee the accuracy, integrity or quality of such User Content.
                </p>

                <p>
                  You understand that by using the Service, You may be exposed to User Content that is offensive, indecent or objectionable. Under no circumstances will Kari Investment be liable in any way for any User Content, including, but not limited to, for any errors or omissions in any Content, or for any loss or damage of any kind incurred as a result of the use of any Content posted, transmitted or otherwise made available via the Service. You acknowledge that Kari Investment does not pre-screen User Content, but that Kari Investment and its designees shall have the right (but not the obligation) in their sole discretion to refuse, modify or move any Content that is available via the Service. Without limiting the foregoing, Kari Investment and its designees shall have the right to remove any User Content that violates the Agreement or is otherwise objectionable. You agree that You must evaluate, and bear all risks associated with, the use of any Content, including any reliance on the accuracy, completeness, or usefulness of such Content. In this regard, You acknowledge that You may not reasonably rely on any Content created by Kari Investment or submitted to Kari Investment. You acknowledge and agree that Kari Investment may preserve User Content and may also disclose User Content if required to do so by law or in the good faith belief that such preservation or disclosure is reasonably necessary to:
                </p>


                <ul class="px-4 my-4 list-decimal">
                  <li>comply with legal process;</li>
                  <li>enforce the Agreement;</li>
                  <li>respond to claims that any Content violates the rights of third-parties; or</li>
                  <li>protect the rights, property, or personal safety of Kari Investment, its users and the public.</li>
                </ul>
                <p class="my-4 text-indent">
                  You understand that the technical processing and transmission of the Service, including Your User Content, may involve (a) transmissions over various networks; and (b) changes to conform and adapt to technical requirements of connecting networks or devices.
                </p>
                <p class="my-4 text-indent">
                  If Kari Investment discloses User Content to comply with legal process or respond to claims that any User Content violates the rights of third-parties, to the extent permitted by law, regulation or legal process, Kari Investment agrees to provide You with prompt notice of any such legal or governmental demand and reasonably cooperate with You in any effort to seek a protective order or otherwise to contest such required disclosure.
                </p>

                Should User Content be found or reported to be in violation with, but not limited to, the following terms, it will be in Kari Investment’s sole discretion as to what action should be taken. You agree that You will not:

                <ul class="px-4 my-4 list-disc">
                  <li>upload, post, transmit or otherwise make available any User Content that is unlawful, harmful, threatening, abusive, harassing, tortuous, defamatory, vulgar, obscene, libelous, invasive of another's privacy (up to, but not excluding any address, email, phone number, or any other contact information without the written consent of the owner of such information), hateful, or racially, ethnically or otherwise objectionable;</li>
                  <li>harm minors in any way;</li>
                  <li>impersonate any person or entity, including, but not limited to, a Kari Investment official, Kari Investment user or falsely state or otherwise misrepresent Your affiliation with a person or entity;</li>
                  <li>upload, post or otherwise transmit any User Content that You do not have a right to transmit under any law or under contractual or fiduciary relationships (such as inside information, proprietary and confidential information learned or disclosed as part of employment relationships or under nondisclosure agreements);</li>
                  <li>upload, post or otherwise transmit any User Content that infringes any patent, trademark, trade secret, copyright, rights of privacy or publicity, or other proprietary rights of any party;</li>
                  <li>"stalk" or otherwise harass another;</li>
                  <li>
                    promote or provide instructional information about illegal activities, promote physical harm or injury against any group or individual, or promote any act of cruelty to animals. This may include, without limitation, providing instructions on how to assemble bombs, grenades and other weapons or incendiary devices.
                    offer for sale or sell any item, good or service that (i) violates any applicable federal, state, or local law or regulation, (ii) You do not have full power and authority under all relevant laws and regulations to offer and sell, including all necessary licenses and authorizations, or (iii) Kari Investment determines, in its sole discretion, is inappropriate for sale through the Service provided by Kari Investment;
                  </li>
                  <li>
                    exceed the scope of the Service that You have signed up for; for example, accessing and using the tools that You do not have a right to use, or having humans share User logins, or deleting, adding to, or otherwise changing other people's User Content as an Account holder.
                  </li>
                </ul>


                <p class="my-4 text-indent">
                  If any user is reported to be in violation with the letter or spirit of these terms, Kari Investment retains the right to terminate such account at any time without further warning.
                </p>

                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Waiver and Severability</p>
              </x-slot>
              <x-slot name="term_body">
                Failure by either party to exercise any of its rights under, or to enforce any provision of, this Agreement will not be deemed a waiver or forfeiture of such rights or ability to enforce such provision. If any provision of this Agreement is held by a court of competent jurisdiction to be illegal, invalid or unenforceable, that provision will be amended to achieve as nearly as possible the same economic effect of the original provision and the remainder of this Agreement will remain in full force and effect.
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Choice of Law and Forum</p>
              </x-slot>
              <x-slot name="term_body">
                This Agreement shall be governed by and construed under the laws of the Federal Capital Territory, Nigeria, as applied to agreements entered into and to be performed in Nigeria by United Kingdoms residents. The parties consent to the exclusive jurisdiction and venue of the courts located in and serving the Federal Capital, Abuja, Nigeria.
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>Entire Agreement/General Provisions</p>
              </x-slot>
              <x-slot name="term_body">
                This Agreement embodies the entire understanding and agreement between the parties respecting the subject matter of this Agreement and supersedes any and all prior understandings and agreements between the parties respecting such subject matter. Kari Investment may change the terms of this Agreement at any time by posting modified terms on its website. This Agreement has been prepared in the English Language and such version shall be controlling in all respects and any non-English version of this Agreement is solely for accommodation purposes. Any and all rights and remedies of Kari Investment upon Your breach or other default under this Agreement will be deemed cumulative and not exclusive of any other right or remedy conferred by this Agreement or by law or equity on Kari Investment, and the exercise of any one remedy will not preclude the exercise of any other. The captions and headings appearing in this Agreement are for reference only and will not be considered in construing this Agreement. Notices to You may be made via either email or regular mail. The Service may also provide notices of changes to the Agreement or other matters by displaying notices or links to notices to You generally on the Service.
                <div class="mt-12">
                  All notices or other correspondence to <a href="{{ route('home') }}" class="font-semibold">Kari Investment</a> under this Agreement must be sent to the following electronic mail address for such purpose: <br>

                  <p class="my-4">
                    <span><a class="font-medium text-blue-600 hover:underline" target="_blank" href="mailto:support@KariInvestment.com.ng">support@Kariinvestment.com</a></span>
                  </p>
                  <p class="my-4">
                    Or the following physical address:
                  </p>



                  <strong>Kari Investment, Ltd.</strong> <br>
                  14 Captains Gardens, Colchester, Essex. <br> United Kingdom. CO2 7FX

                  <p class="mt-8">
                    Last revision: 13 September, 2020
                  </p>

                </div>
              </x-slot>
            </x-term>

            <!-- <a class="cursor-pointer" target="_blank" href="mailto:help@marvelapp.com">Email us</a> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Feedback Section -->
    <!-- @todo capture the feedback users ip address ,email (if logged in) and comments on how to improve the faq page -->
    <div class="pb-10 sm:py-14">
      <div class="flex flex-col items-center w-10/12 mx-auto">
        <p class="mb-4 text-xl font-semibold">Was this article helpful?</p>
        <form x-on:submit.prevent="submitForm('{{ route('help') }}')" x-data="form('feedback_Form')" method="POST" id="feedback_Form" class="flex flex-col items-center justify-center mb-4">
          @csrf

          <div class="flex mb-4">
            <input type="radio" x-on:change=" appear = false " name="feedback" value="1" id="positive" class="hidden positive-feedback">
            <label for="positive" class="w-10 mr-4 text-center positive-feedback-label hover:text-yellow-500">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="font-semibold">Yes</p>
            </label>
            <input type="radio" x-on:change=" appear = true " name="feedback" value="0" id="negative" class="hidden negative-feedback">
            <label for="negative" class="w-10 text-center negative-feedback-label hover:text-red-600">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
              <p class="font-semibold">No</p>
            </label>
          </div>

          <x-button type="Submit" class="flex items-center justify-center font-bold text-gray-100 bg-gray-800 rounded-full w-28 hover:text-gray-100 hover:bg-blue-500">
            Submit
          </x-button>
        </form>

        <div id="flash" class="hidden px-4 py-2 font-bold text-blue-600 bg-white border rounded-md shadow-md">
        </div>

      </div>
    </div>
    <!-- End of Feedback Section -->

    <!-- call to action //links to contact page -->
    <div class="flex justify-center bg-prism">
      <div class="flex flex-col items-center justify-between w-10/12 my-12 py-14 md:flex-row">
        <div class="max-w-lg p-8 border-2 border-gray-800 sm:p-10 md:mb-0">
          <p class="text-2xl font-bold md:text-3xl">Feel free to contact us if you have any other questions.</p>
        </div>

        <div class="w-1 h-12 border-l-2 border-gray-900 border-dashed md:border-t-2 md:w-full md:h-1"></div>

        <button class="flex-shrink-0 transition-all duration-100 hover:shadow-md">
          <x-animated-button href="{{ route('contact') }}" class="inline-block px-4 py-2 text-xl font-bold text-black border-2 border-black lg:px-6 lg:py-4 md:text-2xl hover:text-black animated-a">Get in touch</x-animated-button>
        </button>
      </div>
    </div>


    <section class="text-gray-600 border-t-8 border-gray-200 border-dashed body-font">
      <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-col w-full mb-12 text-center">
          <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Join Our NewsLetter</h1>
          <p class="max-w-md mx-auto text-base leading-relaxed lg:w-2/3">Recieve well curated information and news about investment opportunities when you sign up for our newsletter </p>
        </div>
        <div class="flex flex-col items-end w-full px-8 mx-auto space-y-4 lg:w-2/3 sm:flex-row sm:space-x-4 sm:space-y-0 sm:px-0">
          <div class="relative flex-grow w-full">
            <label for="full-name" class="text-sm leading-7 text-gray-600">Full Name</label>
            <input type="text" id="full-name" name="full-name" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200">
          </div>
          <div class="relative flex-grow w-full">
            <label for="email" class="text-sm leading-7 text-gray-600">Email</label>
            <input type="email" id="email" name="email" class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-transparent focus:ring-2 focus:ring-indigo-200">
          </div>
          <button class="px-8 py-2 text-lg text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Submit</button>
        </div>
      </div>
    </section>

    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>