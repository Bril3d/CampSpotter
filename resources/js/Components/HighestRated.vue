<template>
<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    
  <div class="relative p-6 md:p-16">
    <!-- Grid -->
    <div class="relative z-10 lg:grid lg:grid-cols-12 lg:gap-16 lg:items-center">
      <div class="mb-10 lg:mb-0 lg:col-span-6 lg:col-start-8 lg:order-2">
        <h2 class="text-2xl text-gray-800 font-bold sm:text-3xl dark:text-gray-200">
          Highest Rated Camps
        </h2>

        <!-- Tab Navs -->
        <nav class="grid gap-4 mt-5 md:mt-10" aria-label="Tabs" role="tablist">
          <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700 active" id="tabs-with-card-item-1" data-hs-tab="#tabs-with-card-1" aria-controls="tabs-with-card-1" role="tab">
            <span class="flex">
              <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
              </svg>
              <span class="grow ml-6">
                <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Ghabet El Bondek</span>
                <span class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200">This spot is located in Beni Khiar, Nabel. If you want to camp in just one place in this country, this forest might be one of your best options.</span>
              </span>
            </span>
          </button>

          <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700" id="tabs-with-card-item-2" data-hs-tab="#tabs-with-card-2" aria-controls="tabs-with-card-2" role="tab">
            <span class="flex">
              <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
              </svg>
              <span class="grow ml-6">
                <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">La Crique de Robinson 
</span>
                <span class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200">La Crique de Robinson is located in Nabel, and is a popular attractions in Tunisia, especially during summer time. Do yourself a favor and camp there.</span>
              </span>
            </span>
          </button>

          <button type="button" class="hs-tab-active:bg-white hs-tab-active:shadow-md hs-tab-active:hover:border-transparent text-left hover:bg-gray-200 p-4 md:p-5 rounded-xl dark:hs-tab-active:bg-slate-900 dark:hover:bg-gray-700" id="tabs-with-card-item-3" data-hs-tab="#tabs-with-card-3" aria-controls="tabs-with-card-3" role="tab">
            <span class="flex">
              <svg class="flex-shrink-0 mt-2 h-6 w-6 md:w-7 md:h-7 hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M1.5 1.5A.5.5 0 0 0 1 2v4.8a2.5 2.5 0 0 0 2.5 2.5h9.793l-3.347 3.346a.5.5 0 0 0 .708.708l4.2-4.2a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 8.3H3.5A1.5 1.5 0 0 1 2 6.8V2a.5.5 0 0 0-.5-.5z"/>
              </svg>
              <span class="grow ml-6">
                <span class="block text-lg font-semibold hs-tab-active:text-blue-600 text-gray-800 dark:hs-tab-active:text-blue-500 dark:text-gray-200">Cape Serrat
</span>
                <span class="block mt-1 text-gray-800 dark:hs-tab-active:text-gray-200 dark:text-gray-200">Cape Serrat is truly one of Tunisia’s hidden gems; not many know that you can easily pick up a tent and go camp there. It’s probably the most gorgeous part of the Bizerte coastline.

</span>
              </span>
            </span>
          </button>
        </nav>
        <!-- End Tab Navs -->
      </div>
      <!-- End Col -->

      <div class="lg:col-span-6">
        <div class="relative">
          <!-- Tab Content -->
          <div>
            <div id="tabs-with-card-1" role="tabpanel" aria-labelledby="tabs-with-card-item-1">
              <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]" src="../../../public/images/Ghabet-Bondek.jpg" alt="Ghabet Bondek">
            </div>

            <div id="tabs-with-card-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-2">
              <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]" src="../../../public/images/La-Crique-de-Robinson.jpg" alt="La-Crique-de-Robinson">

            </div>

            <div id="tabs-with-card-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-card-item-3">
              <img class="shadow-xl shadow-gray-200 rounded-xl dark:shadow-gray-900/[.2]" src="../../../public/images/Cape-Serrat.jpg" alt="Cape-Serrat">
            </div>
          </div>
          <!-- End Tab Content -->

          <!-- SVG Element -->
          <div class="hidden absolute top-0 right-0 translate-x-20 md:block lg:translate-x-20">
            <svg class="w-16 h-auto text-orange-500" width="121" height="135" viewBox="0 0 121 135" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M5 16.4754C11.7688 27.4499 21.2452 57.3224 5 89.0164" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
              <path d="M33.6761 112.104C44.6984 98.1239 74.2618 57.6776 83.4821 5" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
              <path d="M50.5525 130C68.2064 127.495 110.731 117.541 116 78.0874" stroke="currentColor" stroke-width="10" stroke-linecap="round"/>
            </svg>
          </div>
          <!-- End SVG Element -->
        </div>
      </div>
      <!-- End Col -->
    </div>
    <!-- End Grid -->

    <!-- Background Color -->
    <div class="absolute inset-0 grid grid-cols-12 w-full h-full">
      <div class="col-span-full lg:col-span-7 lg:col-start-6 bg-gray-100 w-full h-5/6 rounded-xl sm:h-3/4 lg:h-full dark:bg-white/[.075]"></div>
    </div>
    <!-- End Background Color -->
  </div>
</div>
<!-- End Features -->
</template>

<script>
    export default {
        props:{
          stats:Array
        }
    }
</script>

<style scoped>

</style>