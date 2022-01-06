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
            <!-- <a class="cursor-pointer" target="_blank" href="mailto:help@marvelapp.com">Email us</a> -->
          </div>
        </div>
      </div>
    </section>

    <!-- call to action //links to contact page -->
    <x-get-in-touch>
      Feel free to contact us if you have any other questions.
    </x-get-in-touch>


    <livewire:static.forms.subscribe-to-newsfeed />

    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>