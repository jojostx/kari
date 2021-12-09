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
          Flexible Investment Plans With Excellent Interest Rates</h1>
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

    <!-- property search section -->
    <div class="m-4 lg:m-0">
      <div class="p-8 bg-white lg:flex lg:items-center lg:justify-center">
        <form class="space-y-4 lg:space-y-0 lg:flex lg:space-x-4 lg:flex-nowrap">
          <div class="">
            <label class="label">
              <span class="label-text">Property Type</span>
            </label>
            <select class="w-full font-normal select select-bordered">
              <option>Type</option>
              <option>Apartment</option>
              <option>House</option>
              <option>Villa</option>
              <option>Hotel</option>
            </select>
          </div>
          <div class="form-control">
            <label class="label">
              <span class="label-text">Location</span>
            </label>
            <input type="text" placeholder="property location" class="input input-bordered">
          </div>
          <div>
            <!-- <input type="number" class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2" placeholder="min" /> -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Minimum budget</span>
              </label>
              <div class="relative">
                <button disabled class="absolute top-0 left-0 px-2 text-gray-800 rounded-r-none btn">GBP</button>
                <input type="number" placeholder="Minimum" class="w-full pl-16 input input-bordered">
              </div>
            </div>
          </div>
          <div>
            <!-- <input type="number" class="w-full p-2 border border-gray-400 rounded outline-none focus:ring-2" placeholder="min" /> -->
            <div class="form-control">
              <label class="label">
                <span class="label-text">Maximum budget</span>
              </label>
              <div class="relative">
                <button disabled class="absolute top-0 left-0 px-2 text-gray-800 rounded-r-none btn">GBP</button>
                <input type="number" placeholder="Maximum" class="w-full pl-16 input input-bordered">
              </div>
            </div>
          </div>

          <div class="lg:flex lg:flex-col lg:justify-end">
            <button class="px-8 py-3 text-base text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">
              Search
            </button>
          </div>
        </form>
      </div>
    </div>


    <!-- assets -->
    <div class="flex justify-center p-24">
      <div class="max-w-4xl ">
        <div class="mb-8 card lg:card-side bordered">
          <figure>
            <img src="https://picsum.photos/id/1005/400/250">
          </figure>
          <div class="card-body">
            <h2 class="card-title">Horizontal
              <div class="mx-2 badge">NEW</div>
            </h2>
            <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p>
            <div class="card-actions">
              <button class="px-6 py-2 font-medium text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Get Started</button>
              <button class="px-6 py-2 font-medium text-gray-600 border-0 rounded btn-ghost focus:outline-none hover:bg-gray-300">More info</button>
            </div>
          </div>
        </div>
        <div class="mb-8 card lg:card-side bordered">
          <figure>
            <img src="https://picsum.photos/id/1005/400/250">
          </figure>
          <div class="card-body">
            <h2 class="card-title">Horizontal
              <div class="mx-2 badge">NEW</div>
            </h2>
            <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p>
            <div class="card-actions">
              <button class="px-6 py-2 font-medium text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Get Started</button>
              <button class="px-6 py-2 font-medium text-gray-600 border-0 rounded btn-ghost focus:outline-none hover:bg-gray-300">More info</button>
            </div>
          </div>
        </div>
        <div class="mb-8 card lg:card-side bordered">
          <figure>
            <img src="https://picsum.photos/id/1005/400/250">
          </figure>
          <div class="card-body">
            <h2 class="card-title">Horizontal
              <div class="mx-2 badge">NEW</div>
            </h2>
            <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p>
            <div class="card-actions">
              <button class="px-6 py-2 font-medium text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Get Started</button>
              <button class="px-6 py-2 font-medium text-gray-600 border-0 rounded btn-ghost focus:outline-none hover:bg-gray-300">More info</button>
            </div>
          </div>
        </div>
        <div class="mb-8 card lg:card-side bordered">
          <figure>
            <img src="https://picsum.photos/id/1005/400/250">
          </figure>
          <div class="card-body">
            <h2 class="card-title">Horizontal
              <div class="mx-2 badge">NEW</div>
            </h2>
            <p>Rerum reiciendis beatae tenetur excepturi aut pariatur est eos. Sit sit necessitatibus veritatis sed molestiae voluptates incidunt iure sapiente.</p>
            <div class="card-actions">
              <button class="px-6 py-2 font-medium text-white bg-gray-900 border-0 rounded focus:outline-none hover:bg-gray-700">Get Started</button>
              <button class="px-6 py-2 font-medium text-gray-600 border-0 rounded btn-ghost focus:outline-none hover:bg-gray-300">More info</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer -->
    @include('layouts.footer')
  </div>
</x-guest-layout>