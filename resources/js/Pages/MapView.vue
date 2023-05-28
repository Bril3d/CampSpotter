<template>
    <Head title="Camps Map" />
    <div>
        <TheHeader />
        <div class="flex justify-between flex-col md:flex-row h-screen">
            <div class="h-full md:h-1/2 py-16 px-10">
                <span
                class="block font-medium text-gray-200 text-2xl sm:text-3xl md:text-4xl lg:text-6xl"
                >
                This Map Represent All Tunisian Camps
            </span>
            </div>
            <iframe
                src="https://www.google.com/maps/d/embed?mid=1FkNccwMwcX5JnqnN8t2nK1Rc2t5ohSM&ehbc=2E312F"
                class="h-full md:w-1/2"
            ></iframe>
        </div>
    </div>
</template>

<script>
import TheHeader from "@/Components/TheHeader.vue";

export default { components: { TheHeader } };
</script>

<style scoped></style>
