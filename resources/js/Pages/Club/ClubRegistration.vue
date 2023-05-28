<template>
    <Head title="Club Registration" />
    <TheHeader />
    <div class="h-full">
        <div
            class="dark:bg-slate-900 bg-gray-100 flex h-full items-center py-16"
        >
            <main class="w-full max-w-md mx-auto p-6">
                <div
                    class="mt-7 bg-white border border-gray-200 rounded-xl shadow-sm dark:bg-gray-800 dark:border-gray-700"
                >
                    <div class="p-4 sm:p-7">
                        <div class="text-center">
                            <h1
                                class="block text-2xl font-bold text-gray-800 dark:text-white"
                            >
                                Club Registration
                            </h1>
                        </div>

                        <div class="mt-5">
                            <!-- Form -->
                            <form @submit.prevent="submit">
                                <div class="grid gap-y-4">
                                    <!-- Form Group -->
                                    <div>
                                        <label
                                            for="email"
                                            class="block text-sm mb-2 dark:text-white"
                                            >Name</label
                                        >
                                        <div class="relative">
                                            <input
                                                v-model="form.name"
                                                type="text"
                                                id="name"
                                                name="name"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                                required
                                                aria-describedby="name-error"
                                            />
                                            <div
                                                v-if="form.errors.name"
                                                class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3"
                                            >
                                                <svg
                                                    class="h-5 w-5 text-red-500"
                                                    width="16"
                                                    height="16"
                                                    fill="currentColor"
                                                    viewBox="0 0 16 16"
                                                    aria-hidden="true"
                                                >
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.name"
                                        />
                                    </div>
                                    <div>
                                        <label
                                            for="email"
                                            class="block text-sm mb-2 dark:text-white"
                                            >Email address</label
                                        >
                                        <div class="relative">
                                            <input
                                                v-model="form.email"
                                                type="email"
                                                id="email"
                                                name="email"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                                required
                                                aria-describedby="email-error"
                                            />
                                            <div
                                                v-if="form.errors.email"
                                                class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3"
                                            >
                                                <svg
                                                    class="h-5 w-5 text-red-500"
                                                    width="16"
                                                    height="16"
                                                    fill="currentColor"
                                                    viewBox="0 0 16 16"
                                                    aria-hidden="true"
                                                >
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.email"
                                        />
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <label
                                            for="description"
                                            class="block text-sm mb-2 dark:text-white"
                                            >Description</label
                                        >
                                        <div class="relative">
                                            <textarea
                                                name="description"
                                                id="description"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                                cols="30"
                                                rows="10"
                                                v-model="form.description"
                                            ></textarea>
                                            <div
                                            v-if="form.errors.description"
                                                class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3"
                                            >
                                                <svg

                                                    class="h-5 w-5 text-red-500"
                                                    width="16"
                                                    height="16"
                                                    fill="currentColor"
                                                    viewBox="0 0 16 16"
                                                    aria-hidden="true"
                                                >
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <InputError
                                            class="mt-2"
                                            :message="form.errors.description"
                                        />
                                    </div>
                                    <!-- End Form Group -->

                                    <!-- Form Group -->
                                    <div>
                                        <label
                                            for="phone"
                                            class="block text-sm mb-2 dark:text-white"
                                            >Phone Number</label
                                        >
                                        <div class="relative">
                                            <input
                                                type="tel"
                                                id="phone"
                                                name="phone"
                                                v-model="form.phone"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                                required
                                                aria-describedby="phone"
                                            />
                                            <div
                                            v-if="form.errors.phone"
                                                class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3"
                                            >
                                                <svg
                                                    class="h-5 w-5 text-red-500"
                                                    width="16"
                                                    height="16"
                                                    fill="currentColor"
                                                    viewBox="0 0 16 16"
                                                    aria-hidden="true"
                                                >
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <InputError :message="form.errors.phone" />
                                    </div>
                                    <div>
                                        <label
                                            for="localisation"
                                            class="block text-sm mb-2 dark:text-white"
                                            >Localisation</label
                                        >
                                        <div class="relative">
                                            <input
                                                type="text"
                                                id="localisation"
                                                name="localisation"
                                                v-model="form.localisation"
                                                class="py-3 px-4 block w-full border-gray-200 rounded-md text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400"
                                                required
                                                aria-describedby="localisation"
                                            />
                                            <div
                                            v-if="form.errors.localisation"
                                                class="absolute inset-y-0 right-0 flex items-center pointer-events-none pr-3"
                                            >
                                                <svg
                                                    class="h-5 w-5 text-red-500"
                                                    width="16"
                                                    height="16"
                                                    fill="currentColor"
                                                    viewBox="0 0 16 16"
                                                    aria-hidden="true"
                                                >
                                                    <path
                                                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"
                                                    />
                                                </svg>
                                            </div>
                                        </div>
                                        <InputError :message="form.errors.localisation" />
                                    </div>
                                    <!-- End Form Group -->

                                  

                                    <button
                                        type="submit"
                                        class="py-3 px-4 inline-flex justify-center items-center gap-2 rounded-md border border-transparent font-semibold bg-blue-500 text-white hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition-all text-sm dark:focus:ring-offset-gray-800"
                                    >
                                        Sign up
                                    </button>
                                </div>
                            </form>
                            <!-- End Form -->
                        </div>
                    </div>
                </div>
            </main>
        </div>
        </div>
</template>

<script setup>
import { Head, Link, useForm } from "@inertiajs/vue3";
import TheHeader from "@/Components/TheHeader.vue";
import InputError from "@/Components/InputError.vue";

const form = useForm({
    name: null,
    description: null,
    phone: null,
    localisation: null,
    email: null,
});

const submit = () => {
    form.post(route("club.store"));
};
components:{

}
</script>

<style scoped></style>
