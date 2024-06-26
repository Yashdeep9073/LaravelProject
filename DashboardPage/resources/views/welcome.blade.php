@extends('layout/masterLayout')

@section('title','Welcome')


@section('content')
<div class="w-full">
    <div class="relative w-full bg-white">
      <div class="mx-auto max-w-7xl lg:px-8">
        <div class="flex flex-col justify-center px-4 py-10 lg:px-6">
          <div class="mt-10 flex max-w-max items-center space-x-2 rounded-full border p-2">
            <p class="text-xs font-medium md:text-sm">
              Lorem ipsum dolor sit amet consectetur.
              <span class="ml-2 cursor-pointer font-bold">Read More →</span>
            </p>
          </div>
          <h1 class="mt-8 max-w-4xl text-3xl font-bold tracking-tight text-black md:text-4xl lg:text-6xl">
            People who really cares about your business
          </h1>
          <p class="mt-8 max-w-3xl text-lg text-gray-700">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia ipsam
            nulla aperiam quo possimus, nihil molestiae modi tenetur esse qui
            repudiandae cum fuga aspernatur ea?
          </p>
          <div class="mt-8">
            <button
              type="button"
              class="rounded-md bg-black px-3 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
            >
              Subscribe
            </button>
          </div>
        </div>
        <div class="rounded-lg bg-gray-200 p-4">
          <img
            class="aspect-[3/2] w-full rounded-lg bg-gray-50 object-cover lg:aspect-auto lg:h-[500px] lg:object-center"
            src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MjF8fHBlb3BsZXxlbnwwfHwwfHw%3D&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60"
            alt=""
          />
        </div>
      </div>
    </div>
    <div class="mx-auto my-12 max-w-7xl px-4 sm:px-6 md:my-24 lg:my-32 lg:px-8">
      <div class="mx-auto max-w-xl text-center">
        <div class="mx-auto inline-flex rounded-full bg-gray-100 px-4 py-1.5">
          <p class="text-xs font-semibold uppercase tracking-widest text-black">
            100+ Tailwind Components
          </p>
        </div>
        <h2 class="mt-6 text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
          DevUI helps you build beautiful website
        </h2>
        <p class="mt-4 text-base leading-relaxed text-gray-600">
          Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
          sint. Velit officia consequat duis enim velit mollit.
        </p>
      </div>
      <div class="mt-12 grid grid-cols-1 gap-y-8 text-center sm:grid-cols-2 sm:gap-12 lg:grid-cols-4">
        <div>
          <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gray-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="h-9 w-9 text-gray-700"
            >
              <line x1="12" y1="2" x2="12" y2="22"></line>
              <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg font-semibold text-black">Secured Payments</h3>
          <p class="mt-4 text-sm text-gray-600">
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
            sint. Velit officia consequat duis enim velit mollit.
          </p>
        </div>
        <div>
          <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gray-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="h-9 w-9 text-gray-700"
            >
              <polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"></polygon>
            </svg>
          </div>
          <h3 class="mt-8 text-lg font-semibold text-black">
            Fast &amp; Easy to Load
          </h3>
          <p class="mt-4 text-sm text-gray-600">
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
            sint. Velit officia consequat duis enim velit mollit.
          </p>
        </div>
        <div>
          <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gray-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="h-9 w-9 text-gray-700"
            >
              <path d="M12 3a6.364 6.364 0 0 0 9 9 9 9 0 1 1-9-9Z"></path>
            </svg>
          </div>
          <h3 class="mt-8 text-lg font-semibold text-black">
            Light &amp; Dark Version
          </h3>
          <p class="mt-4 text-sm text-gray-600">
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
            sint. Velit officia consequat duis enim velit mollit.
          </p>
        </div>
        <div>
          <div class="mx-auto flex h-20 w-20 items-center justify-center rounded-full bg-gray-100">
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="24"
              height="24"
              viewBox="0 0 24 24"
              fill="none"
              stroke="currentColor"
              stroke-width="2"
              stroke-linecap="round"
              stroke-linejoin="round"
              class="h-9 w-9 text-gray-700"
            >
              <polygon points="22 3 2 3 10 12.46 10 19 14 21 14 12.46 22 3"></polygon>
            </svg>
          </div>
          <h3 class="mt-8 text-lg font-semibold text-black">Filter Blocks</h3>
          <p class="mt-4 text-sm text-gray-600">
            Amet minim mollit non deserunt ullamco est sit aliqua dolor do amet
            sint. Velit officia consequat duis enim velit mollit.
          </p>
        </div>
      </div>
    </div>
    <section class="mx-auto max-w-7xl bg-gray-50 px-2 py-10 md:px-0">
      <div>
        <div class="mx-auto max-w-2xl lg:text-center">
          <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl">
            Frequently Asked Questions
          </h2>
          <p class="mt-4 max-w-xl text-base leading-relaxed text-gray-600 lg:mx-auto">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere,
            assumenda
          </p>
        </div>
        <div class="mx-auto mt-8 grid max-w-3xl grid-cols-1 gap-6 md:mt-16 md:grid-cols-2">
          <div>
            <h2 class="text-xl font-semibold text-black">
              How do I get started?
            </h2>
            <p class="mt-6 text-sm leading-6 tracking-wide text-gray-500">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
              aliquam adipisci iusto aperiam? Sint asperiores sequi nobis
              inventore ratione deleniti?
            </p>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-black">
              How do I get started?
            </h2>
            <p class="mt-6 text-sm leading-6 tracking-wide text-gray-500">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
              aliquam adipisci iusto aperiam? Sint asperiores sequi nobis
              inventore ratione deleniti?
            </p>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-black">
              How do I get started?
            </h2>
            <p class="mt-6 text-sm leading-6 tracking-wide text-gray-500">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
              aliquam adipisci iusto aperiam? Sint asperiores sequi nobis
              inventore ratione deleniti?
            </p>
          </div>
          <div>
            <h2 class="text-xl font-semibold text-black">
              How do I get started?
            </h2>
            <p class="mt-6 text-sm leading-6 tracking-wide text-gray-500">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat
              aliquam adipisci iusto aperiam? Sint asperiores sequi nobis
              inventore ratione deleniti?
            </p>
          </div>
        </div>
        <p class="mt-10 text-center text-gray-600">
          Can&#x27;t find what you&#x27;re looking for?{" "}
          <a href="#" title="" class="black font-semibold hover:underline">
            Contact us
          </a>
        </p>
      </div>
    </section>
    <section class="relative my-12 overflow-hidden py-10 md:my-24 lg:my-32">
      <div class="relative mx-auto max-w-7xl px-4">
        <div class="mx-auto max-w-5xl">
          <div class="flex flex-wrap items-center">
            <div class="w-full lg:-mr-2 lg:w-1/3">
              <div class="mx-auto max-w-sm rounded-md border border-gray-200 bg-white pb-20 pl-5 pr-8 pt-6 lg:pb-8">
                <span class="mb-2 block text-sm font-semibold text-gray-400">
                  PREMIUM
                </span>
                <span class="flex items-end">
                  <span class="text-4xl font-extrabold leading-none">$150</span>
                  <span class="text-sm font-semibold">/month</span>
                </span>
                <div class="mt-7 border-t border-gray-100 pt-5">
                  <ul class="mb-10">
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">No Discount</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Basic Support
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Ads Banner Free
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">Design Style</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Component Library
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        All limited links
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Own analytics platform
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">Chat support</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Optimize hashtags
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Unlimited users
                      </span>
                    </li>
                  </ul>
                  <button
                    type="button"
                    class="rounded-md border border-black px-3 py-2 text-sm font-semibold text-black shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
                  >
                    Choose Plan
                  </button>
                </div>
              </div>
            </div>
            <div class="-mt-4 w-full lg:-mt-0 lg:w-1/3">
              <div class="pt-22 relative mx-auto max-w-sm rounded-lg bg-black px-10 pb-16 ">
                <div class="absolute left-1/2 top-0 inline-flex -translate-x-1/2 -translate-y-1/2 transform items-center justify-center rounded-full bg-white p-2">
                  <div class="flex-shrink-0 rounded-full bg-black px-5 py-4 text-sm font-semibold uppercase text-white">
                    Most Popular
                  </div>
                </div>
                <span class="mb-2 block pt-10 text-sm font-semibold text-white">
                  GOLD
                </span>
                <span class="flex items-end text-white">
                  <span class="text-4xl font-extrabold leading-none">$100</span>
                  <span class="text-sm font-semibold">/month</span>
                </span>
                <div class="mt-7 border-t border-orange-500 pt-5">
                  <ul class="mb-10">
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">No Discount</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">Basic Support</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">Ads Banner Free</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">Design Style</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">
                        Component Library
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">
                        All limited links
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">
                        Own analytics platform
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">Chat support</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">
                        Optimize hashtags
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-white">Unlimited users</span>
                    </li>
                  </ul>
                  <button
                    type="button"
                    class="rounded-md bg-white px-3 py-2 text-sm font-semibold text-black shadow-sm hover:bg-gray-100 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-white"
                  >
                    Choose Plan
                  </button>
                </div>
              </div>
            </div>
            <div class="-mt-4 w-full lg:-ml-2 lg:-mt-0 lg:w-1/3">
              <div class="rounded-b-5xl lg:rounded-r-5xl mx-auto max-w-sm border border-gray-200 bg-white pb-8 pl-8 pr-5 pt-12 lg:rounded-b-none lg:pt-6">
                <span class="mb-2 block text-sm font-semibold text-gray-400">
                  PREMIUM
                </span>
                <span class="flex items-end">
                  <span class="text-4xl font-extrabold leading-none">$150</span>
                  <span class="text-sm font-semibold">/month</span>
                </span>
                <div class="mt-7 border-t border-gray-100 pt-5">
                  <ul class="mb-10">
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">No Discount</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Basic Support
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Ads Banner Free
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">Design Style</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Component Library
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        All limited links
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Own analytics platform
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">Chat support</span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Optimize hashtags
                      </span>
                    </li>
                    <li class="mb-6 flex items-center">
                      <span class="ml-2 text-sm text-gray-900">
                        Unlimited users
                      </span>
                    </li>
                  </ul>
                  <button
                    type="button"
                    class="rounded-md border border-black px-3 py-2 text-sm font-semibold text-black shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
                  >
                    Choose Plan
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="mx-auto my-12 max-w-7xl px-2 py-2 md:my-24 lg:my-32 lg:px-0">
      <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between">
        <div class="w-full md:w-2/3 lg:w-1/2">
          <h2 class="text-3xl font-bold text-black">
            Sign up for our weekly newsletter
          </h2>
          <p class="mt-4 text-gray-600">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at
            ipsum eu nunc commodo posuere et sit amet ligula.
          </p>
          <div class="mt-4">
            <p class="font-semibold text-gray-800">
              Trusted by over 100,000+ businesses and individuals
            </p>
            <div class="mt-2 flex items-center">
              <div class="flex space-x-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-5 w-5 text-yellow-400"
                >
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-5 w-5 text-yellow-400"
                >
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-5 w-5 text-yellow-400"
                >
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-5 w-5 text-yellow-400"
                >
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="24"
                  height="24"
                  viewBox="0 0 24 24"
                  fill="none"
                  stroke="currentColor"
                  stroke-width="2"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  class="h-5 w-5 text-yellow-400"
                >
                  <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                </svg>
              </div>
              <span class="ml-2 inline-block">
                <span class="text-sm font-semibold text-gray-800">
                  4.8/5 . 3420 Reviews
                </span>
              </span>
            </div>
          </div>
          <form class="mt-6">
            <div class="flex w-full max-w-md flex-col space-y-4">
              <input
                class="flex h-10 w-full rounded-md border border-black/30 bg-transparent px-3 py-2 text-sm placeholder:text-gray-600 focus:outline-none focus:ring-1 focus:ring-black/30 focus:ring-offset-1 disabled:cursor-not-allowed disabled:opacity-50"
                type="email"
                placeholder="Email"
              />
              <button
                type="button"
                class="w-full rounded-md bg-black px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-black/80 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-black"
              >
                Subscribe
              </button>
            </div>
          </form>
          <p class="mt-2">
            <span class="text-sm text-gray-600">
              By signing up, you agree to our terms of service and privacy policy.
            </span>
          </p>
        </div>
        <div class="mt-10 w-full md:w-2/3 lg:mt-0 lg:w-1/2">
          <img
            class="h-full w-full rounded-md object-cover"
            src="https://images.unsplash.com/photo-1541560052-77ec1bbc09f7?ixlib=rb-4.0.3&amp;ixid=MnwxMjA3fDB8MHxzZWFyY2h8MTF8fG5ld3NsZXR0ZXJ8ZW58MHx8MHx8&amp;auto=format&amp;fit=crop&amp;w=800&amp;q=60"
            alt="Newsletter"
          />
        </div>
      </div>
    </div>

  </div>
  
  @endsection

