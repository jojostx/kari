<x-guest-layout>
  <div>
    <!-- nav -->
    @include('layouts.guest-nav')

    <section class="relative flex flex-col p-12 bg-prism py-28 md:py-36">
      <div class="relative z-20 pt-4">
        <h1 class="mb-2 text-4xl font-bold tracking-wide text-black font-vesp lg:text-8xl lg:tracking-wider">
          Privacy <br> Policy</h1>
      </div>
    </section>

    <!-- faqs -->
    <section class="px-4 md:px-8">
      <div>
        <div class="px-4">
          <div class="flex flex-col w-full mx-auto md:w-11/12">
            <x-term>
              <x-slot name="term_heading">
                <p>Introduction</p>
              </x-slot>
              <x-slot name="term_body">
                <p class="font-normal text-gray-700">
                  Kari Investment, Ltd., United Kingdom company registered office: 14 Captains Gardens, Colchester, Essex. <br> United Kingdom. CO2 7FX ("Kari Investment", "us", "our", or "we"), focuses on assuring that the <a class="font-medium text-blue-600 hover:underline" href="{{ route('home') }}">KariInvestment.com</a> website ("Site") and the Kari Investment application (the "Application"), as well as the general ecosystem provides a safe environment for both website visitors and application users ("Customer", "You"). We need to collect, process and store some Personal and Navigational information in order to provide you with an ability to review the Kari Investment website content, allow for using Kari Investment application service and subscribe to it, submit support requests and product ideas for our consideration.
                </p>
                <p class="mt-4 font-normal text-gray-700">
                  We are dedicated to protecting your privacy. This Privacy Policy (herein the "Policy") applies to the Site and the Application, and it administers the ways we collect, process and store data. The Policy has a direct reference to the <a class="font-medium text-blue-600 hover:underline" href="{{ route('terms') }}"> Terms of Service</a> and applies to it. It also explains how website visitors and customers can exercise their rights to obtain, access, erase, use or rectify their Personal Information that was of their own free will submitted to us.
                </p>
                <p class="mt-4 font-normal text-gray-700">
                  When you browse the Site, subscribe to the Application plan, use the Application, leave support requests, submit product ideas, fill out a survey, add comments to the blog posts or perform an online payment, you give consent and fully agree to the Policy under which Kari Investment collects, processes, uses, stores and discloses Personal Information. If you do not agree with the points stated in this Policy, you should not browse the Site, use the Application, submit support requests and product ideas, and perform other activities, which may result in supplying us with your Personal and Navigational Information.
                </p>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>1. Application User and Site Visitor Data</p>
              </x-slot>
              <x-slot name="term_body">
                <div class="font-normal text-gray-700">
                  <p class="mb-4 font-bold">1.1 Data You Provide</p>
                  <p class="mb-4">
                    When you register an account, subscribe to the Application, participate in a survey, subscribe to the Application free or paid plan, email us or in any other way submit your Personal Information to us, Kari Investment may collect, process and store the following data: your first and last name, your email and posting address.
                  </p>
                  <p class="mb-4">
                    You will know when we gather your data through the Mailtrap website or Application, as you will provide your data on one of the Site's web pages and perform an action that will authorize it to be sent to us.
                  </p>
                </div>
                <div class="font-normal text-gray-700">
                  <p class="mb-4 font-bold">1.2 Data We Collect Automatically</p>
                  <p class="mb-4">
                    Kari Investment may collect information through our Site and Application.The data we gather from your device: it's type, IP address, the browser you are using, OS (operating system), as well as the referral site from which you entered the Kari Investment website. We may also monitor your online behavior, including the time of your visit, your online activity at the website including the URL clickstream through the Kari Investment website, the pages you visited, the time you spent viewing them, and the frequency of your visits. We gather this data automatically through the commonly used data-gathering technologies, like cookies and web beacons in order to understand how Customers and website visitors browse the Site and use the Application. This data helps us manage the Site and Application, analyze general online behavior and usage trends, and provide targeted advertisements. We also collect demographic information about our Application user and Site visitor base that helps us tailor both the Site's content and the Application functionality in order to meet your expectations and requirements.
                  </p>
                  <p class="mb-4">
                    When you browse the Site or use the Application, we collect Personal and Navigational Information along with the unique User IDs. In addition, we aggregate extra data that refers to the user flow, such as the start and the end of a web session, page views, purchase and checkout. We may associate this data with the information we store within the analytics software to Personal Information that you submitted to us. We do this to enhance our Application and Site content and UX, as well as use this data to improve the Application functionality, our marketing communication and analytics.
                  </p>
                </div>
                <div class="font-normal text-gray-700">
                  <p class="mb-4 font-bold">1.3 Facebook and Google Sign-in Authentication</p>
                  <p class="mb-4">
                    You may log into our Site and Application using either Facebook or Google Sign-in authentication system. When you use either Facebook or Google Sign-in authentication, you give us access to your full name and email address. This data is stored by us in compliance with the Privacy Policy.
                  </p>
                </div>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>
                  2. Types of Information
                </p>
              </x-slot>
              <x-slot name="term_body">
                <div class="font-normal text-gray-700">
                  <p class="mb-4 font-bold">2.1 Personal Information</p>
                  <p class="mb-4">
                    We may collect, use, store and transfer different kinds of personal information about you which we have grouped together follows:
                  </p>

                  <ul class="pl-10 mb-4 list-disc privacy">
                    <li>Identity Data includes first name, maiden name, last name, username or similar identifier and title.</li>
                    <li>Contact Data includes email address and telephone numbers.</li>
                    <li>Technical Data includes internet protocol (IP) address, your login data, browser type and version, time zone setting and location, browser plug-in types and versions, operating system and platform and other technology on the devices you use to access this Site.</li>
                    <li>Profile Data includes your username and password, your job title, your Academic information your interests, preferences, dislikes feedback and survey responses.</li>
                    <li>Usage Data includes information about how you use our Site, products and services.</li>
                    <li>Marketing and Communications Data includes your preferences in receiving marketing from us and our third parties and your communication preferences.</li>
                    <li>Content Data includes any content which you upload onto the Site such as comments and other text or images that contain personal data.</li>
                  </ul>
                  <p class="mb-4">
                    We also collect, use and share Aggregated Data such as statistical or demographic data for any purpose. Aggregated Data may be derived from your personal data but is not considered personal data in law as this data does not directly or indirectly reveal your identity. For example, we may aggregate your Usage Data to calculate the percentage of users accessing a specific Site feature. However, if we combine or connect Aggregated Data with your personal data so that it can directly or indirectly identify you, we treat the combined data as personal data which will be used in accordance with this privacy notice.
                  </p>
                  <p class="mb-4">
                    We do not collect any Special Categories of Personal Data about you (this includes details about your race or ethnicity, religious or philosophical beliefs, sex life, sexual orientation, political opinions, trade union membership, information about your health and genetic and biometric data). Nor do we collect any information about criminal convictions and offences.
                  </p>
                </div>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>
                  3. Use of the Information We Collect
                </p>
              </x-slot>
              <x-slot name="term_body">
                <div class="font-normal text-gray-700">
                  <p class="mb-2 font-bold">3.1 Compliance with this Privacy Policy</p>
                  <p class="mb-6">
                    Kari Investment uses the data it collects only in compliance and according to this Privacy Policy. Therefore, both the website visitors and the Application users should read carefully this Privacy Policy and other agreements published on the Site or as part of the Application before proceeding with browsing the site or using the Application.
                  </p>

                  <p class="mb-2 font-bold">3.2 How We Use Personal Information We Collect</p>
                  <p class="mb-6">
                    We use Personal Information we collect from our Application customers and Site visitors to:
                  </p>

                  <ul class="pl-10 mb-6 list-disc privacy">
                    <li>Enhance your user experience while browsing the Site and applying the Application for your projects.</li>
                    <li>Manage Site's content and customize it according to the user preferences.</li>
                    <li>Manage Site's and Application's security and system administration.</li>
                    <li>Create Kari Investment accounts.</li>
                    <li>Respond to customer support and other Site- or Application-related requests.</li>
                    <li>Communicate with the Application users, inform them about important product and company-related updates.</li>
                    <li>Contact the carefully-selected Application users to inform about other Kari Investment products and services that we think may be of interest to them.</li>
                    <li>Distribute other personalized marketing information.</li>
                    <li>Hold surveys, send out questionnaires that help us understand our customer requirements and expectations from the Application, Site, support or any other services that we provide.</li>
                    <li>Put together and analyze the statistic data of the Site and Application usage.</li>
                    <li>Conduct an investigation of unauthorized access and use of the Site or Application, fraud, breach and other illegitimate actions.</li>
                  </ul>
                  <p class="mb-2 font-bold">3.3 Service Providers</p>
                  <p class="mb-6">
                    Kari Investment applies different security technologies, guidelines and procedures to ensure complete security, as well as full confidentiality of the Personal Information you provide. We also take measures to avoid unauthorized access to personal data and electronic communication systems. Your Personal Information is securely stored on servers and protected from unauthorized usage, leak and exposure. The transfer of any sensitive data, to an authorized third party happens through the use of encryption (such as the Secure Socket Layer protocol and the Transport Layer Security) which guarantees complete safety and security of your data.
                  </p>
                  <p class="mb-2 font-bold">3.4 Personal Information Security</p>
                  <p class="mb-6">
                    Kari Investment may employ other organizations and persons ("Agents) to perform tasks or provide services to website visitors or Application users and may need to share your Personal or Navigational Information with them to provide data, products and services to you. These tasks and services may include marketing and support activities, analyzing different types of data, providing advisory and legal services. In all the cases when Kari Investment shares your information with such Agents, we will request for the agent to accept and strictly observe our Privacy Policy.
                  </p>
                  <p class="mb-2 font-bold">3.5 Social Media Features</p>
                  <p class="mb-6">
                    The Site incorporates some social media features and widgets. It allows to 'Share' - for Facebook, 'Tweet' - for Twitter and 'Share' - for Google+ content on certain Site's pages. These social media features (buttons) may gather some website visitor-related (IP address, page visits) information. The actions connected to the social media features and widgets are covered by the policy of the company which enables them.
                  </p>
                  <p class="mb-2 font-bold">3.6 Links and Third-Party Sites</p>
                  <p class="mb-6">
                    The Kari Investment Site includes links to third-party websites. These websites may offer certain services to end-users. Kari Investment does not take any responsibility for their content, services, administrators, practices and policies, and does not endorse them. Kari Investment also does not bear any responsibility for the privacy of information that you submit on these resources, since this Privacy Policy does not apply to them. We recommend you to familiarize with the Privacy Policy and other legal documents before submitting or sharing any personal information with them.
                  </p>
                  <p class="mb-2 font-bold">3.7 Third-Party Services</p>
                  <p class="mb-6">
                    The Site includes third-party systems that allow for support request or product-related idea submission, as well as adding comments to articles published on the website blog. The system, which accepts support requests and product ideas provides us with the name and email of a user who submitted it, so that our team can action and respond to these messages. The system, which enables users with the right to publish comments performs Personal Information collection, storing and processing on its side, giving us the right to monitor the comments that appear on the Site's blog.
                  </p>
                  <p class="mb-2 font-bold">3.8 Data Retention</p>
                  <p class="mb-6">
                    Kari Investment will retain your Personal Information for the period required to fulfil the obligations it took as an Application provider and Site owner, or unless a longer period of time is required by law for tax, legal or other regulatory reasons. Kari Investment will delete all Personal Information at an earliest date per your request.
                  </p>
                  <p class="mb-2 font-bold">3.9 Сompelled Disclosure</p>
                  <p class="mb-6">
                    Kari Investment reserves the right to disclose persoanl data to public authorities in accordance with a legal liability to perform their duties, such as customs and tax authorities, financial investigation units, judicial administration and other parties if the Federal Government of United Kingdom or the Kari Investment's representative member state law allows to exercise such disclosure in the public interest, including protection of your and other people's safety.
                  </p>
                </div>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>
                  4. Data Subject Rights
                </p>
              </x-slot>
              <x-slot name="term_body">
                <div class="font-normal text-gray-700">
                  <p class="mb-2 font-bold">4.1 Website Visitor and Application User Rights</p>
                  <p class="mb-6">
                    Our Site visitors and Application users have the following rights:
                  </p>

                  <ul class="pl-10 mb-6 list-disc privacy">
                    <li>To request access to your Personal Information.</li>
                    <li>To remove consent from being contacted by email, phone and other means of communication.</li>
                    <li>To request for all Personal Data that was received from you to be deleted from all our records.</li>
                    <li>To request that we update, correct or remove any omissions in your Personal Information that we store.</li>
                    <li>To opt out from all kinds of direct marketing and other communication.</li>
                    <li>To request us to delete your Personal Information.</li>
                    <li>To object the processing of your Personal Information, or ask us to restrict the processing of your Personal Information, or request portability of your Personal Information.</li>
                    <li>To withdraw your consent from collection and processing of your Personal Information at any time. <span class="text-base italic font-semibold"> Withdrawing your consent will not affect the lawfulness of any processing we conducted prior to your withdrawal, nor will it affect processing of your Personal Information conducted in reliance on lawful processing grounds other than consent.</span></li>
                    <li>Hold surveys, send out questionnaires that help us understand our customer requirements and expectations from the Application, Site, support or any other services that we provide.</li>
                    <li>Put together and analyze the statistic data of the Site and Application usage.</li>
                    <li>Conduct an investigation of unauthorized access and use of the Site or Application, fraud, breach and other illegitimate actions.</li>
                  </ul>

                  <p class="mb-6">
                    To complain to a data protection authority about our collection and use of your Personal Information. Contact details for data protection authorities in United Kingdom can be found <a class="font-medium text-blue-600 hover:underline" href="https://nitda.gov.ng/contact/" class="">here</a>
                  </p>
                  <p class="mb-6">
                    In order to exercise any of these rights, please email us at privacy@Kari Investment. We will provide response to your request as soon as possible, informing you about the steps we have taken to ensure that your rights are exercised.
                  </p>

                  <p class="mb-2 font-bold">4.2 Opting Out from Our Communication</p>
                  <p class="mb-6">
                    You may opt out from our marketing communications by pressing the 'unsubscribe' link, which is located at the bottom of our email, or sending your unsubscribe request at <a class="font-medium text-blue-600 hover:underline" href="mailto:privacy@KariInvestment.com" class="">privacy@KariInvestment.com</a>
                  </p>
                  <p class="mb-6">
                    You cannot unsubscribe from our transactional emailing (which also includes Welcome, Forgot password, Confirmation, as well as Critical Product updates), and other information which refers to your Kari Investment Application account.
                  </p>


                  <p class="mb-2 font-bold">4.3 Children's Information</p>
                  <p class="mb-6">
                    Our Site and Application are not intended for children's use. We do not knowingly accumulate any data from children under the age of 16. If you think that we might have gathered some information from children under the age of 16, please let us know at <a class="font-medium text-blue-600 hover:underline" href="mailto:privacy@KariInvestment.com" class="">privacy@KariInvestment.com</a> and we will delete this data from our databases and other applicable resources, if any.
                  </p>
                </div>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>
                  5. Sub-processors
                </p>
              </x-slot>
              <x-slot name="term_body">
                <div class="font-normal text-gray-700">
                  <p class="mb-6">
                    Kari Investment uses a range of third-party sub-processors that are authorized to process the Application user and customer data, and help us deliver the Application functionality, as well as the accompanying support services in full.
                  </p>

                  <table class="w-full border border-gray-300">
                    <tbody>
                      <tr class="font-bold bg-gray-300 table-heading">
                        <th>Entity Name</th>
                        <th>Purpose</th>
                        <th>Location</th>
                      </tr>
                      <tr class="text-sm md:text-base">
                        <td>Amazon Webservices, Inc.</td>
                        <td>Infrastructure</td>
                        <td>United States</td>
                      </tr>
                      <tr class="text-sm md:text-base">
                        <td>Google Inc.</td>
                        <td>Infrastructure</td>
                        <td>United States</td>
                      </tr>
                      <tr class="text-sm md:text-base">
                        <td>Facebook, Inc.</td>
                        <td>Marketing Analytics</td>
                        <td>United States</td>
                      </tr>
                      <tr class="text-sm md:text-base">
                        <td>Twitter, Inc.</td>
                        <td>Marketing Analytics</td>
                        <td>United States</td>
                      </tr>
                      <tr class="text-sm md:text-base">
                        <td>LinkedIn Ireland Unlimited Co</td>
                        <td>Marketing Analytics</td>
                        <td>Ireland</td>
                      </tr>
                      <tr class="text-sm md:text-base">
                        <td>Digital Ocean Co</td>
                        <td>Infrastructure</td>
                        <td>United States</td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>
                  6. General Clauses
                </p>
              </x-slot>
              <x-slot name="term_body">
                <div class="font-normal text-gray-700">
                  <p class="mb-2 font-bold">6.1 Changes to the Privacy Policy</p>
                  <p class="mb-6">
                    We reserve the right to review and make amendments to this Policy. When the changes are made, we will publish the new version of the Privacy Policy on our Site and update the 'effective' date, which is indicated in the top left corner of this Policy, to the day when the latest amendments were published on the Site.
                  </p>
                </div>
              </x-slot>
            </x-term>
            <x-term>
              <x-slot name="term_heading">
                <p>
                  7. Cookies
                </p>
              </x-slot>
              <x-slot name="term_body">
                <div class="font-normal text-gray-700">
                  <p class="mb-6">
                    Our Site uses cookies and similar technologies to distinguish you from other users of our Site. This helps us to provide you with a good experience when you browse our Site and allows us to improve our Site. We may also use such technologies to track you across the Internet and to display targeted advertisements to you on our Site and third party websites and social media platforms based on your preferences and likely interests.
                    <br>
                    <br>
                    <span class="text-base italic font-semibold">
                      A cookie is a small file of letters and numbers that we store on your browser or the hard drive of your computer if you agree. Cookies contain information that is transferred to your computer's hard drive.
                    </span>
                  </p>
                  <p class="mb-2 font-bold">7.1 Types of cookies we use on our Site are:</p>
                  <div class="mb-6">

                    <ul class="pl-10 mb-6 list-decimal privacy">
                      <li><span class="font-bold">Strictly Necessary Cookies.</span> We use Strictly Necessary Cookies to operate our Site. These cookies are essential to enable you to move around the Site, use its features and to log into secure areas of the Site.</li>
                      <li><span class="font-bold">Functionality Cookies.</span> We use Functionality Cookies to recognise you when you return to our Site. This enables us to personalise our content for you, greet you by name and remember your preferences and various settings on our Site.</li>
                      <li><span class="font-bold">Analytical/Performance Cookies.</span> These cookies collect information about how many people are using our Site and how they are moving around it when they re using it. For example, the pages visited most often, how people are moving from one link to another, and if they get error messages from certain pages. This helps us to improve the way our Site works, for example, by ensuring that users are finding what they are looking for easily.</li>
                      <li><span class="font-bold">Targeting Cookies.</span> These cookies are used to deliver advertisements that are more relevant to you and your interests. They remember that you have visited our website, the pages you visited and the links you have followed. This information may be shared with other organisations such as our advertising partners.</li>
                    </ul>

                    <p class="mb-6">
                      Please note that third parties (including, for example, advertising networks and providers of external services like web traffic analysis services) may also use cookies, over which we have no control. These cookies are likely to be Analytical/Performance Cookies or Targeting Cookies.
                      You can set your browser to refuse all or some browser cookies, or to alert you when websites set or access cookies. If you disable or refuse cookies, please note that some parts of this Site may become inaccessible or not function properly.
                    </p>

                  </div>
                </div>
              </x-slot>
            </x-term>
            <!-- <a class="cursor-pointer" target="_blank" href="mailto:help@marvelapp.com">Email us</a> -->
          </div>
        </div>
      </div>
    </section>

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