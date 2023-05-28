<template>
<!-- Features -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
  <!-- Grid -->
  <div class="grid items-center lg:grid-cols-12 gap-6 lg:gap-12">
    <div class="lg:col-span-4">
      <!-- Stats -->
      <div class="lg:pr-6 xl:pr-12">
        <p class="mt-2 sm:mt-3 text-gray-500">Find Your Way Through Us!</p>
      </div>
      <!-- End Stats -->
    </div>
    <!-- End Col -->

    <div class="lg:col-span-8 relative lg:before:absolute lg:before:top-0 lg:before:-left-12 lg:before:w-px lg:before:h-full lg:before:bg-gray-200 lg:before:dark:bg-gray-700">
      <div class="grid gap-6 grid-cols-2 md:grid-cols-4 lg:grid-cols-3 sm:gap-8">
        <!-- Stats -->
        <div>
          <p class="text-3xl font-semibold text-blue-500">+9</p>
          <p class="mt-1 text-gray-500">Users</p>
        </div>
        <!-- End Stats -->

        <!-- Stats -->
        <div>
          <p class="text-3xl font-semibold text-blue-500">+9</p>
          <p class="mt-1 text-gray-500">Clubs</p>
        </div>
        <!-- End Stats -->

        <!-- Stats -->
        <div>
          <p class="text-3xl font-semibold text-blue-500">+9</p>
          <p class="mt-1 text-gray-500">Camping Centers</p>
        </div>
        <!-- End Stats -->
      </div>
    </div>
    <!-- End Col -->
  </div>
  <!-- End Grid -->
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