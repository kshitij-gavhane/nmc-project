<!DOCTYPE html>
<html x-data="data()" lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Invoice - customer-dashboard</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
  </head>
  <body>
    <div
      class="flex h-screen bg-gray-50 dark:bg-gray-900"
      :class="{ 'overflow-hidden': isSideMenuOpen }"
    >
      <!-- Desktop sidebar -->
      <aside
        class="z-20 hidden w-64 overflow-y-auto bg-white dark:bg-gray-800 md:block flex-shrink-0">
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Customer Panel (v1)
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="index.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="cards.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Shop</span>
              </a>
            </li> 
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="tables.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-4">Invoices</span>
              </a>
            </li>          
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="modals.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                  ></path>
                </svg>
                <span class="ml-4">Payment</span>
              </a>
            </li>
            
            <!-- blank -->
          </ul>
        </div>
      </aside>
      <!-- Mobile sidebar -->
      <!-- Backdrop -->
      <div
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 z-10 flex items-end bg-black bg-opacity-50 sm:items-center sm:justify-center"
      ></div>
      <aside
        class="fixed inset-y-0 z-20 flex-shrink-0 w-64 mt-16 overflow-y-auto bg-white dark:bg-gray-800 md:hidden"
        x-show="isSideMenuOpen"
        x-transition:enter="transition ease-in-out duration-150"
        x-transition:enter-start="opacity-0 transform -translate-x-20"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in-out duration-150"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0 transform -translate-x-20"
        @click.away="closeSideMenu"
        @keydown.escape="closeSideMenu"
      >
        <div class="py-4 text-gray-500 dark:text-gray-400">
          <a
            class="ml-6 text-lg font-bold text-gray-800 dark:text-gray-200"
            href="#"
          >
            Customer
          </a>
          <ul class="mt-6">
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="index.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                  ></path>
                </svg>
                <span class="ml-4">Dashboard</span>
              </a>
            </li>
          </ul>
          <ul>
            <!-- form removed by AI -->
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="cards.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                  ></path>
                </svg>
                <span class="ml-4">Shop</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <a
                class="inline-flex items-center w-full text-sm font-semibold transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200"
                href="modals.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"
                  ></path>
                </svg>
                <span class="ml-4">Payment</span>
              </a>
            </li>
            <li class="relative px-6 py-3">
              <span
                class="absolute inset-y-0 left-0 w-1 bg-purple-600 rounded-tr-lg rounded-br-lg"
                aria-hidden="true"
              ></span>
              <a
                class="inline-flex items-center w-full text-sm font-semibold text-gray-800 transition-colors duration-150 hover:text-gray-800 dark:hover:text-gray-200 dark:text-gray-100"
                href="tables.php"
              >
                <svg
                  class="w-5 h-5"
                  aria-hidden="true"
                  fill="none"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path d="M4 6h16M4 10h16M4 14h16M4 18h16"></path>
                </svg>
                <span class="ml-4">Invoices</span>
              </a>
            </li>
          </ul>
        </div>
      </aside>
      <div class="flex flex-col flex-1 w-full">
        <header class="z-10 py-4 bg-white shadow-md dark:bg-gray-800">
          <div
            class="container flex items-center justify-between h-full px-6 mx-auto text-purple-600 dark:text-purple-300"
          >
            <!-- Mobile hamburger -->
            <button
              class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-purple"
              @click="toggleSideMenu"
              aria-label="Menu"
            >
              <svg
                class="w-6 h-6"
                aria-hidden="true"
                fill="currentColor"
                viewBox="0 0 20 20"
              >
                <path
                  fill-rule="evenodd"
                  d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                  clip-rule="evenodd"
                ></path>
              </svg>
            </button>
            <!-- Search input -->
            <div class="flex justify-center flex-1 lg:mr-32">
              <div
                class="relative w-full max-w-xl mr-6 focus-within:text-purple-500"
              >
                <div class="absolute inset-y-0 flex items-center pl-2">
                  <svg
                    class="w-4 h-4"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                      clip-rule="evenodd"
                    ></path>
                  </svg>
                </div>
                <input
                  class="w-full pl-8 pr-2 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                  type="text"
                  placeholder="Search for projects"
                  aria-label="Search"
                />
              </div>
            </div>
            <ul class="flex items-center flex-shrink-0 space-x-6">
              <!-- Theme toggler -->
              <!-- Theme toggler -->
              <!-- Notifications menu -->
              <li class="relative">
                <button
                  class="relative align-middle rounded-md focus:outline-none focus:shadow-outline-purple"
                  @click="toggleNotificationsMenu"
                  @keydown.escape="closeNotificationsMenu"
                  aria-label="Notifications"
                  aria-haspopup="true"
                >
                  <svg
                    class="w-5 h-5"
                    aria-hidden="true"
                    fill="currentColor"
                    viewBox="0 0 20 20"
                  >
                    <path
                      d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z"
                    ></path>
                  </svg>
                  <!-- Notification badge -->
                  <span
                    aria-hidden="true"
                    class="absolute top-0 right-0 inline-block w-3 h-3 transform translate-x-1 -translate-y-1 bg-red-600 border-2 border-white rounded-full dark:border-gray-800"
                  ></span>
                </button>
                <template x-if="isNotificationsMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeNotificationsMenu"
                    @keydown.escape="closeNotificationsMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:text-gray-300 dark:border-gray-700 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Messages</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          13
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Sales</span>
                        <span
                          class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-red-600 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-600"
                        >
                          2
                        </span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center justify-between w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <span>Alerts</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
              <!-- Profile menu -->
              <li class="relative">
                <button
                  class="align-middle rounded-full focus:shadow-outline-purple focus:outline-none"
                  @click="toggleProfileMenu"
                  @keydown.escape="closeProfileMenu"
                  aria-label="Account"
                  aria-haspopup="true"
                >
                  <img
                    class="object-cover w-8 h-8 rounded-full"
                    src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                    alt=""
                    aria-hidden="true"
                  />
                </button>
                <template x-if="isProfileMenuOpen">
                  <ul
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100"
                    x-transition:leave-end="opacity-0"
                    @click.away="closeProfileMenu"
                    @keydown.escape="closeProfileMenu"
                    class="absolute right-0 w-56 p-2 mt-2 space-y-2 text-gray-600 bg-white border border-gray-100 rounded-md shadow-md dark:border-gray-700 dark:text-gray-300 dark:bg-gray-700"
                    aria-label="submenu"
                  >
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                          ></path>
                        </svg>
                        <span>Profile</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="#"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"
                          ></path>
                          <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li class="flex">
                      <a
                        class="inline-flex items-center w-full px-2 py-1 text-sm font-semibold transition-colors duration-150 rounded-md hover:bg-gray-100 hover:text-gray-800 dark:hover:bg-gray-800 dark:hover:text-gray-200"
                        href="logout.php"
                      >
                        <svg
                          class="w-4 h-4 mr-3"
                          aria-hidden="true"
                          fill="none"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                          stroke-width="2"
                          viewBox="0 0 24 24"
                          stroke="currentColor"
                        >
                          <path
                            d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1"
                          ></path>
                        </svg>
                        <span>Log out</span>
                      </a>
                    </li>
                  </ul>
                </template>
              </li>
            </ul>
          </div>
        </header>
        <main class="h-full pb-16 overflow-y-auto">
          <div class="container grid px-6 mx-auto">
            <h2
              class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
              Invoice Details
            </h2>
<!-- -->
            <!-- With actions -->
            <h4
              class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
            >
              All Invoices
            </h4>
            <div class="w-full overflow-hidden rounded-lg shadow-xs">
              <div class="w-full overflow-x-auto">
                <table class="w-full whitespace-no-wrap">
                  <thead>
                    <tr
                      class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                    >
                      <th class="px-4 py-3">Client</th>
                      <th class="px-4 py-3">Amount</th>
                      <th class="px-4 py-3">Status</th>
                      <th class="px-4 py-3">Date</th>
                      <th class="px-4 py-3">Actions</th>
                    </tr>
                  </thead>
                  <tbody
                    class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                  >
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <div>
                            <p class="font-semibold">Hans Burger</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              10x Developer
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        &#8377; 46200.00
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          Unpaid
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        6/10/2020
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit" 
                            onclick="window.location.href='modals.php';"
                          >
                          <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.928 12.989c0.006-0.656 0-1.306 0-1.961v-1.961c0-0.072 0.022-0.111 0.078-0.15 0.639-0.444 1.339-0.672 2.122-0.617 0.694 0.050 1.261 0.389 1.561 1.206 0.183 0.494 0.228 1.011 0.228 1.539 0 0.483-0.039 0.961-0.189 1.422-0.317 0.989-1.039 1.372-1.983 1.328-0.65-0.028-1.217-0.278-1.744-0.65-0.050-0.044-0.078-0.089-0.072-0.156zM15.533 13.8c0.255 0.1 0.516 0.111 0.783 0.083 0.645-0.067 1.217-0.317 1.739-0.694 0.050-0.033 0.072-0.072 0.072-0.139-0.006-0.217 0-0.439 0-0.655 0-0.222-0.006-0.444 0-0.667 0-0.078-0.022-0.111-0.1-0.122-0.389-0.050-0.772-0.122-1.161-0.161-0.389-0.033-0.778-0.017-1.156 0.105-0.372 0.122-0.65 0.345-0.761 0.728-0.089 0.3-0.089 0.6 0.005 0.9 0.089 0.306 0.289 0.511 0.578 0.622zM32 6.222v19.556c0 1.472-1.194 2.667-2.667 2.667h-26.667c-1.472 0-2.667-1.194-2.667-2.667v-19.556c0-1.472 1.194-2.667 2.667-2.667h26.667c1.472 0 2.667 1.194 2.667 2.667zM20.472 7.55c0.022 0.095 0.050 0.189 0.089 0.283 0.917 2.256 1.828 4.517 2.75 6.772 0.078 0.194 0.094 0.356 0.011 0.55-0.156 0.344-0.272 0.7-0.433 1.039-0.145 0.306-0.372 0.528-0.706 0.622-0.233 0.061-0.472 0.072-0.717 0.050-0.117-0.011-0.233-0.039-0.35-0.044-0.156-0.011-0.233 0.061-0.239 0.222-0.006 0.156-0.006 0.311 0 0.461 0.005 0.255 0.089 0.372 0.344 0.417 0.261 0.044 0.522 0.089 0.789 0.094 0.794 0.017 1.428-0.3 1.839-0.995 0.161-0.272 0.311-0.561 0.428-0.855 1.1-2.783 2.194-5.572 3.289-8.361 0.033-0.083 0.061-0.167 0.072-0.256 0.022-0.133-0.039-0.2-0.172-0.205-0.311-0.005-0.617 0-0.928 0-0.172 0-0.294 0.078-0.355 0.239-0.022 0.061-0.050 0.128-0.072 0.189l-1.617 4.65c-0.117 0.339-0.233 0.672-0.361 1.033-0.022-0.050-0.033-0.078-0.044-0.105-0.6-1.661-1.2-3.328-1.8-4.989-0.094-0.261-0.194-0.528-0.294-0.789-0.050-0.139-0.15-0.222-0.3-0.222-0.355-0.006-0.711-0.011-1.067-0.006-0.122 0-0.183 0.089-0.156 0.205zM13.467 13.222c0.095 0.65 0.422 1.156 1 1.478 0.55 0.306 1.15 0.344 1.761 0.255 0.706-0.105 1.328-0.406 1.878-0.861 0.022-0.017 0.044-0.033 0.078-0.056 0.028 0.178 0.050 0.344 0.083 0.511 0.028 0.145 0.117 0.239 0.25 0.245 0.255 0.005 0.505 0.005 0.761 0 0.128-0.006 0.211-0.089 0.222-0.217 0.006-0.044 0.006-0.089 0.006-0.128v-4.933c0-0.2-0.011-0.4-0.039-0.6-0.089-0.6-0.344-1.094-0.883-1.411-0.311-0.183-0.656-0.278-1.011-0.328-0.167-0.022-0.333-0.039-0.506-0.061h-0.556c-0.044 0.005-0.089 0.016-0.139 0.016-0.456 0.022-0.906 0.078-1.344 0.194-0.283 0.072-0.556 0.178-0.833 0.272-0.167 0.056-0.25 0.178-0.244 0.361 0.005 0.156-0.006 0.311 0 0.461 0.005 0.228 0.1 0.289 0.317 0.228 0.361-0.094 0.728-0.194 1.094-0.267 0.572-0.105 1.15-0.15 1.728-0.067 0.3 0.044 0.583 0.133 0.783 0.389 0.172 0.222 0.233 0.489 0.245 0.761 0.017 0.383 0.011 0.772 0.017 1.156 0 0.022-0.005 0.039-0.011 0.067-0.022 0-0.044 0-0.061-0.005-0.489-0.117-0.983-0.2-1.489-0.228-0.528-0.028-1.050 0.006-1.55 0.178-0.6 0.211-1.083 0.572-1.367 1.156-0.228 0.461-0.256 0.944-0.189 1.433zM5.483 7.717v9.739c0 0.044 0 0.094 0.006 0.139 0.011 0.139 0.094 0.228 0.228 0.233 0.328 0.006 0.656 0.006 0.984 0 0.139 0 0.222-0.094 0.228-0.228 0.006-0.044 0.006-0.094 0.006-0.139v-3.372c0.050 0.039 0.078 0.067 0.105 0.089 0.833 0.694 1.789 0.922 2.839 0.717 0.95-0.189 1.605-0.772 2.039-1.622 0.322-0.644 0.461-1.339 0.483-2.056 0.028-0.794-0.056-1.578-0.378-2.317-0.394-0.911-1.050-1.517-2.039-1.717-0.15-0.033-0.306-0.045-0.456-0.067h-0.389c-0.067 0.011-0.133 0.016-0.2 0.028-0.65 0.078-1.239 0.322-1.766 0.705-0.111 0.078-0.217 0.167-0.328 0.25-0.005-0.028-0.017-0.044-0.022-0.067-0.022-0.128-0.039-0.256-0.061-0.383-0.033-0.217-0.139-0.306-0.355-0.311h-0.539c-0.328-0.006-0.383 0.056-0.383 0.378zM27.422 20.611c-0.15-0.039-0.283 0-0.422 0.056-2.439 1.022-4.972 1.678-7.6 1.989-0.806 0.094-1.617 0.156-2.428 0.178-1.478 0.039-2.956-0.044-4.422-0.239-0.989-0.133-1.972-0.317-2.944-0.55-2.056-0.495-4.039-1.206-5.928-2.156-0.489-0.244-0.967-0.517-1.45-0.778-0.211-0.117-0.345-0.083-0.456 0.117v0.094c0.067 0.089 0.122 0.189 0.206 0.267 2 1.789 4.255 3.139 6.778 4.050 1.217 0.439 2.467 0.761 3.739 0.972 0.778 0.128 1.556 0.211 2.345 0.25 0.167 0.006 0.333 0.011 0.5 0.022 0.039 0 0.078 0.011 0.117 0.017h0.983c0.039-0.005 0.078-0.017 0.117-0.017 0.828-0.022 1.656-0.1 2.478-0.222 1.189-0.178 2.355-0.45 3.494-0.817 1.645-0.533 3.206-1.244 4.633-2.228 0.156-0.106 0.317-0.211 0.444-0.345 0.239-0.244 0.128-0.578-0.183-0.661zM30.222 19.072c-0.044-0.233-0.222-0.322-0.422-0.389-0.317-0.106-0.644-0.156-0.978-0.183-0.611-0.050-1.222-0.022-1.822 0.089-0.667 0.122-1.3 0.339-1.861 0.728-0.067 0.044-0.133 0.1-0.172 0.167-0.033 0.050-0.039 0.128-0.028 0.189 0.017 0.072 0.095 0.089 0.167 0.083 0.033 0 0.067 0 0.1-0.006l1.083-0.117c0.533-0.050 1.067-0.083 1.6-0.044 0.228 0.017 0.45 0.067 0.667 0.122 0.239 0.061 0.344 0.244 0.355 0.483 0.017 0.372-0.067 0.728-0.161 1.083-0.194 0.717-0.461 1.411-0.739 2.1-0.017 0.044-0.039 0.094-0.044 0.139-0.022 0.139 0.056 0.222 0.189 0.194 0.078-0.017 0.167-0.061 0.222-0.117 0.206-0.2 0.417-0.4 0.589-0.622 0.595-0.767 0.944-1.645 1.15-2.589 0.039-0.167 0.067-0.339 0.094-0.505 0.011-0.261 0.011-0.533 0.011-0.806z"/>
                          </svg>
                          </button>
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                            onclick="window.location.href='./invoice/index.php';"
                          >
                          <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="#7e3af2" stroke-width="2" d="M3,12 L6,12 C6.5,14.5 9.27272727,17 12,17 C14.7272727,17 17.5,14.5 18,12 L21,12 M12,17 L12,20 M7.5,15.5 L5.5,17.5 M16.5,15.5 L18.5,17.5"/>
                          </svg>
                          
                          </button>
                        </div>
                      </td>
                    </tr>
                    <tr class="text-gray-700 dark:text-gray-400">
                      <td class="px-4 py-3">
                        <div class="flex items-center text-sm">
                          <div>
                            <p class="font-semibold">Kshitij Gavhane</p>
                            <p class="text-xs text-gray-600 dark:text-gray-400">
                              10x Developer
                            </p>
                          </div>
                        </div>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        &#8377; 46200.00
                      </td>
                      <td class="px-4 py-3 text-xs">
                        <span
                          class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                        >
                          paid by Cash
                        </span>
                      </td>
                      <td class="px-4 py-3 text-sm">
                        6/10/2022
                      </td>
                      <td class="px-4 py-3">
                        <div class="flex items-center space-x-4 text-sm">
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Edit" disabled
                            onclick="window.location.href='modals.php';"
                          >
                          <svg width="32px" height="32px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.928 12.989c0.006-0.656 0-1.306 0-1.961v-1.961c0-0.072 0.022-0.111 0.078-0.15 0.639-0.444 1.339-0.672 2.122-0.617 0.694 0.050 1.261 0.389 1.561 1.206 0.183 0.494 0.228 1.011 0.228 1.539 0 0.483-0.039 0.961-0.189 1.422-0.317 0.989-1.039 1.372-1.983 1.328-0.65-0.028-1.217-0.278-1.744-0.65-0.050-0.044-0.078-0.089-0.072-0.156zM15.533 13.8c0.255 0.1 0.516 0.111 0.783 0.083 0.645-0.067 1.217-0.317 1.739-0.694 0.050-0.033 0.072-0.072 0.072-0.139-0.006-0.217 0-0.439 0-0.655 0-0.222-0.006-0.444 0-0.667 0-0.078-0.022-0.111-0.1-0.122-0.389-0.050-0.772-0.122-1.161-0.161-0.389-0.033-0.778-0.017-1.156 0.105-0.372 0.122-0.65 0.345-0.761 0.728-0.089 0.3-0.089 0.6 0.005 0.9 0.089 0.306 0.289 0.511 0.578 0.622zM32 6.222v19.556c0 1.472-1.194 2.667-2.667 2.667h-26.667c-1.472 0-2.667-1.194-2.667-2.667v-19.556c0-1.472 1.194-2.667 2.667-2.667h26.667c1.472 0 2.667 1.194 2.667 2.667zM20.472 7.55c0.022 0.095 0.050 0.189 0.089 0.283 0.917 2.256 1.828 4.517 2.75 6.772 0.078 0.194 0.094 0.356 0.011 0.55-0.156 0.344-0.272 0.7-0.433 1.039-0.145 0.306-0.372 0.528-0.706 0.622-0.233 0.061-0.472 0.072-0.717 0.050-0.117-0.011-0.233-0.039-0.35-0.044-0.156-0.011-0.233 0.061-0.239 0.222-0.006 0.156-0.006 0.311 0 0.461 0.005 0.255 0.089 0.372 0.344 0.417 0.261 0.044 0.522 0.089 0.789 0.094 0.794 0.017 1.428-0.3 1.839-0.995 0.161-0.272 0.311-0.561 0.428-0.855 1.1-2.783 2.194-5.572 3.289-8.361 0.033-0.083 0.061-0.167 0.072-0.256 0.022-0.133-0.039-0.2-0.172-0.205-0.311-0.005-0.617 0-0.928 0-0.172 0-0.294 0.078-0.355 0.239-0.022 0.061-0.050 0.128-0.072 0.189l-1.617 4.65c-0.117 0.339-0.233 0.672-0.361 1.033-0.022-0.050-0.033-0.078-0.044-0.105-0.6-1.661-1.2-3.328-1.8-4.989-0.094-0.261-0.194-0.528-0.294-0.789-0.050-0.139-0.15-0.222-0.3-0.222-0.355-0.006-0.711-0.011-1.067-0.006-0.122 0-0.183 0.089-0.156 0.205zM13.467 13.222c0.095 0.65 0.422 1.156 1 1.478 0.55 0.306 1.15 0.344 1.761 0.255 0.706-0.105 1.328-0.406 1.878-0.861 0.022-0.017 0.044-0.033 0.078-0.056 0.028 0.178 0.050 0.344 0.083 0.511 0.028 0.145 0.117 0.239 0.25 0.245 0.255 0.005 0.505 0.005 0.761 0 0.128-0.006 0.211-0.089 0.222-0.217 0.006-0.044 0.006-0.089 0.006-0.128v-4.933c0-0.2-0.011-0.4-0.039-0.6-0.089-0.6-0.344-1.094-0.883-1.411-0.311-0.183-0.656-0.278-1.011-0.328-0.167-0.022-0.333-0.039-0.506-0.061h-0.556c-0.044 0.005-0.089 0.016-0.139 0.016-0.456 0.022-0.906 0.078-1.344 0.194-0.283 0.072-0.556 0.178-0.833 0.272-0.167 0.056-0.25 0.178-0.244 0.361 0.005 0.156-0.006 0.311 0 0.461 0.005 0.228 0.1 0.289 0.317 0.228 0.361-0.094 0.728-0.194 1.094-0.267 0.572-0.105 1.15-0.15 1.728-0.067 0.3 0.044 0.583 0.133 0.783 0.389 0.172 0.222 0.233 0.489 0.245 0.761 0.017 0.383 0.011 0.772 0.017 1.156 0 0.022-0.005 0.039-0.011 0.067-0.022 0-0.044 0-0.061-0.005-0.489-0.117-0.983-0.2-1.489-0.228-0.528-0.028-1.050 0.006-1.55 0.178-0.6 0.211-1.083 0.572-1.367 1.156-0.228 0.461-0.256 0.944-0.189 1.433zM5.483 7.717v9.739c0 0.044 0 0.094 0.006 0.139 0.011 0.139 0.094 0.228 0.228 0.233 0.328 0.006 0.656 0.006 0.984 0 0.139 0 0.222-0.094 0.228-0.228 0.006-0.044 0.006-0.094 0.006-0.139v-3.372c0.050 0.039 0.078 0.067 0.105 0.089 0.833 0.694 1.789 0.922 2.839 0.717 0.95-0.189 1.605-0.772 2.039-1.622 0.322-0.644 0.461-1.339 0.483-2.056 0.028-0.794-0.056-1.578-0.378-2.317-0.394-0.911-1.050-1.517-2.039-1.717-0.15-0.033-0.306-0.045-0.456-0.067h-0.389c-0.067 0.011-0.133 0.016-0.2 0.028-0.65 0.078-1.239 0.322-1.766 0.705-0.111 0.078-0.217 0.167-0.328 0.25-0.005-0.028-0.017-0.044-0.022-0.067-0.022-0.128-0.039-0.256-0.061-0.383-0.033-0.217-0.139-0.306-0.355-0.311h-0.539c-0.328-0.006-0.383 0.056-0.383 0.378zM27.422 20.611c-0.15-0.039-0.283 0-0.422 0.056-2.439 1.022-4.972 1.678-7.6 1.989-0.806 0.094-1.617 0.156-2.428 0.178-1.478 0.039-2.956-0.044-4.422-0.239-0.989-0.133-1.972-0.317-2.944-0.55-2.056-0.495-4.039-1.206-5.928-2.156-0.489-0.244-0.967-0.517-1.45-0.778-0.211-0.117-0.345-0.083-0.456 0.117v0.094c0.067 0.089 0.122 0.189 0.206 0.267 2 1.789 4.255 3.139 6.778 4.050 1.217 0.439 2.467 0.761 3.739 0.972 0.778 0.128 1.556 0.211 2.345 0.25 0.167 0.006 0.333 0.011 0.5 0.022 0.039 0 0.078 0.011 0.117 0.017h0.983c0.039-0.005 0.078-0.017 0.117-0.017 0.828-0.022 1.656-0.1 2.478-0.222 1.189-0.178 2.355-0.45 3.494-0.817 1.645-0.533 3.206-1.244 4.633-2.228 0.156-0.106 0.317-0.211 0.444-0.345 0.239-0.244 0.128-0.578-0.183-0.661zM30.222 19.072c-0.044-0.233-0.222-0.322-0.422-0.389-0.317-0.106-0.644-0.156-0.978-0.183-0.611-0.050-1.222-0.022-1.822 0.089-0.667 0.122-1.3 0.339-1.861 0.728-0.067 0.044-0.133 0.1-0.172 0.167-0.033 0.050-0.039 0.128-0.028 0.189 0.017 0.072 0.095 0.089 0.167 0.083 0.033 0 0.067 0 0.1-0.006l1.083-0.117c0.533-0.050 1.067-0.083 1.6-0.044 0.228 0.017 0.45 0.067 0.667 0.122 0.239 0.061 0.344 0.244 0.355 0.483 0.017 0.372-0.067 0.728-0.161 1.083-0.194 0.717-0.461 1.411-0.739 2.1-0.017 0.044-0.039 0.094-0.044 0.139-0.022 0.139 0.056 0.222 0.189 0.194 0.078-0.017 0.167-0.061 0.222-0.117 0.206-0.2 0.417-0.4 0.589-0.622 0.595-0.767 0.944-1.645 1.15-2.589 0.039-0.167 0.067-0.339 0.094-0.505 0.011-0.261 0.011-0.533 0.011-0.806z"/>
                          </svg>
                          </button>
                          <button
                            class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                            aria-label="Delete"
                            onclick="window.location.href='./invoice/recipt.html';"
                          >
                          <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path fill="none" stroke="#7e3af2" stroke-width="2" d="M3,12 L6,12 C6.5,14.5 9.27272727,17 12,17 C14.7272727,17 17.5,14.5 18,12 L21,12 M12,17 L12,20 M7.5,15.5 L5.5,17.5 M16.5,15.5 L18.5,17.5"/>
                          </svg>
                          
                          </button>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div
                class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
              >
                <span class="flex items-center col-span-3">
                  Showing 21-30 of 100
                </span>
                <span class="col-span-2"></span>
                <!-- Pagination -->
                <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                  <nav aria-label="Table navigation">
                    <ul class="inline-flex items-center">
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Previous"
                        >
                          <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          1
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          2
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          3
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          4
                        </button>
                      </li>
                      <li>
                        <span class="px-3 py-1">...</span>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          8
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                        >
                          9
                        </button>
                      </li>
                      <li>
                        <button
                          class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                          aria-label="Next"
                        >
                          <svg
                            class="w-4 h-4 fill-current"
                            aria-hidden="true"
                            viewBox="0 0 20 20"
                          >
                            <path
                              d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                              clip-rule="evenodd"
                              fill-rule="evenodd"
                            ></path>
                          </svg>
                        </button>
                      </li>
                    </ul>
                  </nav>
                </span>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
  </body>
</html>
