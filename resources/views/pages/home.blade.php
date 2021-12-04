<x-guest-layout>
	<div>
		<!-- nav -->
		@include('layouts.guest-nav')

		<!-- banner  -->
		<section class="relative flex flex-col p-12 bg-center bg-cover md:items-center md:text-center py-28 md:py-36 bg-pent-mobile lg:bg-pent lg:p-36 lg:py-48">
			<div class="absolute top-0 left-0 w-full h-full opacity-60 bg-gradient-to-r from-gray-800 to-blue-900">
			</div>
			<div class="relative z-20 pt-10">
				<h1 class="mb-2 text-3xl font-bold tracking-wide text-white md:text-4xl font-vesp lg:text-5xl lg:tracking-wider">
					Find Your Dream Home</h1>
			</div>

			<div class="relative z-20">
				<p class="max-w-sm mb-8 text-white lg:text-lg">Lorem ipsum dolor sit, amet consectetur adipisicing
					elit.
				</p>
			</div>

			<div class="relative z-20 flex items-center space-x-2 md:justify-center">
				<x-animated-button href="{{ route('register') }}" class="border-2 border-white">Get Started</x-animated-button>
			</div>
		</section>


		<section class="container py-16">
			<div class="flex justify-center w-full py-12 mb-10 text-center lg:mb-14">
				<h1 class="text-3xl font-bold tracking-wide text-black md:text-4xl font-vesp lg:text-5xl lg:tracking-wider">What We Offer You</h1>
			</div>
			<article class="flex flex-row flex-wrap justify-center w-full lg:mb-24 md:justify-center">
				<div class="flex flex-col justify-center order-2 w-full py-10 text-center lg:w-1/2 md:text-left">
					<p class="font-semibold text-gray-400 uppercase opacity-75">Professional and hands-on</p>
					<h2 class="mt-6 mb-2 text-2xl font-extrabold text-gray-900 font-vesp lg:mt-2">24/7/365 Chat Support</h2>
					<p class="max-w-md text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident neque adipisci tempore dolorem velit, harum optio sapiente sit id vitae laudantium dolores Our team of experts will solve technical issues to get your websites up and running. Anytime.</p>
					<a href="/how-it-works" class="inline-flex py-2 text-blue-900 uppercase hover:text-blue-700">
						Learn More
						<svg version="1.1" viewBox="0 0 16 16" class="w-4 ml-2">
							<g stroke="currentColor" fill="none" fill-rule="evenodd">
								<path pid="0" d="M15 6.5H0M12 10l3-3.446L12 3"></path>
							</g>
						</svg></a>
				</div>
				<div class="max-w-lg sm:pr-12">
					<img class="w-full" src="{{ asset('images/house-1.jpg') }}" alt="">
				</div>
			</article>

			<article class="flex flex-row-reverse flex-wrap justify-center w-full lg:mb-24 md:justify-center">
				<div class="flex flex-col justify-center order-2 w-full py-10 text-center lg:w-1/2 md:text-left">
					<p class="font-semibold text-gray-400 uppercase opacity-75">Professional and hands-on</p>
					<h2 class="mt-6 mb-2 text-2xl font-extrabold text-gray-900 font-vesp lg:mt-2">24/7/365 Chat Support</h2>
					<p class="max-w-md text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident neque adipisci tempore dolorem velit, harum optio sapiente sit id vitae laudantium dolores Our team of experts will solve technical issues to get your websites up and running. Anytime.</p>
					<a href="/how-it-works" class="inline-flex py-2 text-blue-900 uppercase hover:text-blue-700">
						Learn More
						<svg version="1.1" viewBox="0 0 16 16" class="w-4 ml-2">
							<g stroke="currentColor" fill="none" fill-rule="evenodd">
								<path pid="0" d="M15 6.5H0M12 10l3-3.446L12 3"></path>
							</g>
						</svg></a>
				</div>
				<div class="max-w-lg sm:pr-12">
					<img class="w-full" src="{{ asset('images/london-desk.jpg') }}" alt="">
				</div>
			</article>

			<article class="flex flex-row flex-wrap justify-center w-full lg:mb-24 md:justify-center">
				<div class="flex flex-col justify-center order-2 w-full py-10 text-center lg:w-1/2 md:text-left">
					<p class="font-semibold text-gray-400 uppercase opacity-75">Professional and hands-on</p>
					<h2 class="mt-6 mb-2 text-2xl font-extrabold text-gray-900 font-vesp lg:mt-2">24/7/365 Chat Support</h2>
					<p class="max-w-md text-gray-600">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident neque adipisci tempore dolorem velit, harum optio sapiente sit id vitae laudantium dolores Our team of experts will solve technical issues to get your websites up and running. Anytime.</p>
					<a href="/how-it-works" class="inline-flex py-2 text-blue-900 uppercase hover:text-blue-700">
						Learn More
						<svg version="1.1" viewBox="0 0 16 16" class="w-4 ml-2">
							<g stroke="currentColor" fill="none" fill-rule="evenodd">
								<path pid="0" d="M15 6.5H0M12 10l3-3.446L12 3"></path>
							</g>
						</svg></a>
				</div>
				<div class="max-w-lg sm:pr-12">
					<img class="w-full" src="{{ asset('images/graph-desk.jpg') }}" alt="">
				</div>
			</article>
		</section>



		<!-- Feature Property -->
		<section class="px-4 py-4 bg-gray-200 lg:px-32 lg:py-20">
			<div class="">
				<h1 class="text-2xl font-bold text-center text-blue-600 font-vesp lg:text-4xl">Feature Property</h1>
				<div class="flex justify-center">
					<div class="w-40 h-1 bg-indigo-400 rounded"></div>
				</div>
			</div>
			<div class="mt-4 space-x-0 space-y-2 lg:flex lg:flex-nowrap lg:space-x-4 lg:space-y-0 lg:mt-20">
				<div class="p-4 bg-white rounded-lg">
					<img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="property">

					<div class="p-6">
						<h4 class="text-2xl font-bold cursor-pointer">Modern Design villa</h4>
						<!-- <div>
                                2 beds &bull; 2 baths
                            </div> -->
						<div class="mt-2">
							<span class="text-xl font-extrabold text-blue-600">$3000.00</span> /M
						</div>
						<div class="flex mt-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<!-- 4/5 starts (based on 13 reviews) -->
						</div>
					</div>
					<div class="flex justify-between p-4 text-gray-700 border-t border-gray-300">
						<div class="flex items-center">
							<svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
								</path>
							</svg>
							<p><span class="font-bold text-gray-900">3</span> Bedrooms</p>
						</div>
						<div class="flex items-center">
							<svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z">
								</path>
							</svg>
							<p><span class="font-bold text-gray-900">2</span> Bathrooms</p>
						</div>
					</div>

				</div>
				<div class="p-4 bg-white rounded-lg">
					<img src="https://images.unsplash.com/photo-1600992045264-136a22de917e?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NXx8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="property">

					<div class="p-6">
						<h4 class="text-2xl font-bold cursor-pointer">Modern Design villa</h4>
						<!-- <div>
                                2 beds &bull; 2 baths
                            </div> -->
						<div class="mt-2">
							<span class="text-xl font-extrabold text-blue-600">$3000.00</span> /M
						</div>
						<div class="flex mt-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<!-- 4/5 starts (based on 13 reviews) -->
						</div>
					</div>
					<div class="flex justify-between p-4 text-gray-700 border-t border-gray-300">
						<div class="flex items-center">
							<svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
								</path>
							</svg>
							<p><span class="font-bold text-gray-900">3</span> Bedrooms</p>
						</div>
						<div class="flex items-center">
							<svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z">
								</path>
							</svg>
							<p><span class="font-bold text-gray-900">2</span> Bathrooms</p>
						</div>
					</div>

				</div>
				<div class="p-4 bg-white rounded-lg">
					<img src="https://images.unsplash.com/photo-1507086182422-97bd7ca2413b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTB8fHJlYWxlc3RhdGV8ZW58MHx8MHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="property">

					<div class="p-6">
						<h4 class="text-2xl font-bold cursor-pointer">Modern Design villa</h4>
						<!-- <div>
                                2 beds &bull; 2 baths
                            </div> -->
						<div class="mt-2">
							<span class="text-xl font-extrabold text-blue-600">$3000.00</span> /M
						</div>
						<div class="flex mt-2">
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
								<path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z" />
							</svg>
							<!-- 4/5 starts (based on 13 reviews) -->
						</div>
					</div>
					<div class="flex justify-between p-4 text-gray-700 border-t border-gray-300">
						<div class="flex items-center">
							<svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path d="M0 16L3 5V1a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v4l3 11v5a1 1 0 0 1-1 1v2h-1v-2H2v2H1v-2a1 1 0 0 1-1-1v-5zM19 5h1V1H4v4h1V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1h2V4a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1zm0 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V6h-2v2a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V6H3.76L1.04 16h21.92L20.24 6H19zM1 17v4h22v-4H1zM6 4v4h4V4H6zm8 0v4h4V4h-4z">
								</path>
							</svg>
							<p><span class="font-bold text-gray-900">3</span> Bedrooms</p>
						</div>
						<div class="flex items-center">
							<svg class="w-6 h-6 mr-3 text-gray-600 fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<path fill-rule="evenodd" d="M17.03 21H7.97a4 4 0 0 1-1.3-.22l-1.22 2.44-.9-.44 1.22-2.44a4 4 0 0 1-1.38-1.55L.5 11h7.56a4 4 0 0 1 1.78.42l2.32 1.16a4 4 0 0 0 1.78.42h9.56l-2.9 5.79a4 4 0 0 1-1.37 1.55l1.22 2.44-.9.44-1.22-2.44a4 4 0 0 1-1.3.22zM21 11h2.5a.5.5 0 1 1 0 1h-9.06a4.5 4.5 0 0 1-2-.48l-2.32-1.15A3.5 3.5 0 0 0 8.56 10H.5a.5.5 0 0 1 0-1h8.06c.7 0 1.38.16 2 .48l2.32 1.15a3.5 3.5 0 0 0 1.56.37H20V2a1 1 0 0 0-1.74-.67c.64.97.53 2.29-.32 3.14l-.35.36-3.54-3.54.35-.35a2.5 2.5 0 0 1 3.15-.32A2 2 0 0 1 21 2v9zm-5.48-9.65l2 2a1.5 1.5 0 0 0-2-2zm-10.23 17A3 3 0 0 0 7.97 20h9.06a3 3 0 0 0 2.68-1.66L21.88 14h-7.94a5 5 0 0 1-2.23-.53L9.4 12.32A3 3 0 0 0 8.06 12H2.12l3.17 6.34z">
								</path>
							</svg>
							<p><span class="font-bold text-gray-900">2</span> Bathrooms</p>
						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- Our Services -->
		<section class="bg-white">
			<div class="px-6 py-16 mx-auto max-w-7xl">
				<div class="mb-8">
					<h1 class="text-2xl font-bold text-center text-blue-600 font-vesp lg:text-4xl">It's easy to get started.</h1>
					<div class="flex justify-center">
						<div class="h-1 bg-indigo-400 rounded w-44"></div>
					</div>
				</div>

				<div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Rent</h2>
						<p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
							aliquam ac
							volutpat, viverra magna risus aliquam massa.</p>
					</div>

					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Sell</h2>
						<p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
							aliquam ac
							volutpat,
							viverra magna risus aliquam massa.</p>
					</div>

					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Sell</h2>
						<p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
							aliquam ac
							volutpat,
							viverra magna risus aliquam massa.</p>
					</div>
					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Resell</h2>
						<p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
							aliquam ac
							volutpat,
							viverra magna risus aliquam massa.</p>
					</div>
					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Resell</h2>
						<p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
							aliquam ac
							volutpat,
							viverra magna risus aliquam massa.</p>
					</div>
					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Buy</h2>
						<p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
							aliquam ac
							volutpat,
							viverra magna risus aliquam massa.</p>
					</div>

				</div>
			</div>
		</section>

		<!-- newsletter -->
		<section class="text-gray-600 border-t-8 border-gray-200 border-dashed body-font">
			<div class="container px-5 py-24 mx-auto">
				<div class="flex flex-col w-full mb-12 text-center">
					<h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Join Our NewsLetter</h1>
					<p class="max-w-md mx-auto text-base leading-relaxed lg:w-2/3">Recieve well curated information and news about investment oppurtunities when you sign up for our newsletter </p>
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