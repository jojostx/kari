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


		<section class="container py-16">
			<div class="flex justify-center w-full py-12 mb-10 text-center lg:mb-14">
				<h1 class="text-3xl font-bold tracking-wide text-black md:text-4xl font-vesp lg:tracking-wider">Why You Should Invest With Us</h1>
			</div>
			<article class="flex flex-row flex-wrap justify-center w-full lg:mb-24 md:justify-center">
				<div class="flex flex-col justify-center order-2 w-full py-10 text-center lg:w-1/2 md:text-left">
					<p class="font-semibold text-gray-400 uppercase opacity-75">Stable and Transparant</p>
					<h2 class="mt-6 text-2xl font-extrabold text-gray-900 font-vesp lg:mt-2">Currency Hedging</h2>
					<p class="max-w-md text-gray-600">Investing in the UK; one of the world’s largest economies ensures the security of investment funds. The rate fluctuation in the foreign market does not have an impact on your funds. We developed measures to mitigate volatility.</p>
					<a href="/how-it-works" class="inline-flex justify-center py-2 text-blue-900 uppercase lg:justify-start hover:text-blue-700">
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

			<article class="flex flex-row-reverse flex-wrap justify-center w-full lg:mb-24 md:justify-center">
				<div class="flex flex-col justify-center order-2 w-full py-10 text-center lg:w-1/2 md:text-left">
					<p class="font-semibold text-gray-400 uppercase opacity-75">Integrity and Openness </p>
					<h2 class="mt-6 text-2xl font-extrabold text-gray-900 font-vesp lg:mt-2">Security of Funds</h2>
					<p class="max-w-md text-gray-600">
					Kari Properties Limited operates with integrity and openness following the UK government compliance standards.
					We assure top safety of all investors’ funds under our investment cycle.
					</p>
					<a href="/how-it-works" class="inline-flex justify-center py-2 text-blue-900 uppercase lg:justify-start hover:text-blue-700">
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

			<article class="flex flex-row flex-wrap justify-center w-full lg:mb-24 md:justify-center">
				<div class="flex flex-col justify-center order-2 w-full py-10 text-center lg:w-1/2 md:text-left">
					<p class="font-semibold text-gray-400 uppercase opacity-75">Guaranteed and Safe</p>
					<h2 class="mt-6 text-2xl font-extrabold text-gray-900 font-vesp lg:mt-2">Excellent Annual Returns</h2>
					<p class="max-w-md text-gray-600">Unlike most private real estate investment companies, we offer our investors between 7% to 8.5% annual ROI and bonus payout.</p>
					<a href="/how-it-works" class="inline-flex justify-center py-2 text-blue-900 uppercase lg:justify-start hover:text-blue-700">
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
		
		<!-- Feature Investments -->
		<section class="px-4 py-12 bg-gray-200 md:py-12 lg:px-32 lg:py-20">
			<div class="pb-6">
				<h1 class="text-3xl font-bold text-center text-blue-600 font-vesp lg:text-4xl">Investment Plans</h1>
				<div class="flex justify-center mb-2">
					<div class="w-40 h-1 bg-indigo-400 rounded"></div>
				</div>
				<h1 class="text-lg font-medium text-center text-gray-700 lg:text-lg">Premium investments at a friendly price</h1>
			</div>
			<div class="mt-4 space-x-0 space-y-2 lg:flex lg:flex-nowrap lg:space-x-4 lg:space-y-0 lg:mt-20">
				<div class="p-4 bg-white rounded-lg">
					<img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="property">
					<div class="px-2 py-6">
						<h4 class="text-2xl font-bold cursor-pointer">Bronze <span class="text-base text-gray-500">(7%)</span></h4>
						<div class="mt-6 mb-4">
							<span class="text-xl font-extrabold text-blue-600">$25,000.00</span> Principal
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
					<div class="flex justify-between text-gray-700 border-t border-gray-300">
						<button class="w-full px-6 py-2 text-lg text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Learn More</button>
					</div>
				</div>
				
				<div class="p-4 bg-white rounded-lg">
					<img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="property">
					<div class="px-2 py-6">
						<h4 class="text-2xl font-bold cursor-pointer">Silver <span class="text-base text-gray-500">(7.5%)</span></h4>
						<div class="mt-6 mb-4">
							<span class="text-xl font-extrabold text-blue-600">$50,000.00</span> Principal
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
					<div class="flex justify-between text-gray-700 border-t border-gray-300">
						<button class="w-full px-6 py-2 text-lg text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Learn More</button>
					</div>
				</div>
				
				<div class="p-4 bg-white rounded-lg">
					<img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="property">
					<div class="px-2 py-6">
						<h4 class="text-2xl font-bold cursor-pointer">Gold <span class="text-base text-gray-500">(8%)</span></h4>
						<div class="mt-6 mb-4">
							<span class="text-xl font-extrabold text-blue-600">$150,000.00</span> Principal
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
					<div class="flex justify-between text-gray-700 border-t border-gray-300">
						<button class="w-full px-6 py-2 text-lg text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Learn More</button>
					</div>

				</div>
				
				<div class="p-4 bg-white rounded-lg">
					<img src="https://images.unsplash.com/photo-1601760562234-9814eea6663a?ixid=MnwxMjA3fDB8MHxzZWFyY2h8M3x8cmVhbGVzdGF0ZXxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="property">
					<div class="px-2 py-6">
						<h4 class="text-2xl font-bold cursor-pointer">Platinum <span class="text-base text-gray-500">(8.5%)</span></h4>
						<div class="mt-6 mb-4">
							<span class="text-xl font-extrabold text-blue-600">$200,000.00</span> Principal
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
					<div class="flex justify-between text-gray-700 border-t border-gray-300">
						<button class="w-full px-6 py-2 text-lg text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Learn More</button>
					</div>

				</div>
				
			</div>
		</section>

		<!-- Our Services -->
		<section class="bg-white">
			<div class="px-6 py-16 mx-auto max-w-7xl">
				<div class="mb-8">
					<h1 class="text-3xl font-bold text-center text-blue-600 font-vesp lg:text-4xl">It's easy to get started.</h1>
					<div class="flex justify-center">
						<div class="h-1 bg-indigo-400 rounded w-44"></div>
					</div>
				</div>

				<div class="grid gap-8 mt-10 md:grid-cols-2 lg:grid-cols-3">
					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Coming Soon</h2>
						<p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
							aliquam ac
							volutpat,
							viverra magna risus aliquam massa.</p>
					</div>
					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Coming Soon</h2>
						<p class="max-w-md mt-4 text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing Ac
							aliquam ac
							volutpat,
							viverra magna risus aliquam massa.</p>
					</div>
					<div class="px-6 py-8 bg-white rounded-md shadow-md">
						<h2 class="text-xl font-medium text-gray-800">Coming Soon</h2>
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