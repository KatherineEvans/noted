<script setup>
import { Menu, MenuButton, MenuItem, MenuItems } from "@headlessui/vue";
import { EllipsisHorizontalIcon } from "@heroicons/vue/20/solid";
import { formatCurrency } from "@/composables/formatCurrency";
import { formatDate } from "@/composables/formatDate";

const { currencyFormatter } = formatCurrency();
const { dateTimeFormatter } = formatDate();

const props = defineProps(["interviews"]);

const types = {
    1: "phone-volume",
    2: "laptop",
    3: "building",
};
</script>
<template>
    <div class="flex flex-col">
        <div class="sm:flex-auto mb-3">
            <h1 class="text-2xl font-semibold leading-6 text-gray-900">Interviews</h1>
            <p class="mt-2 text-sm text-gray-700">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet, velit dapibus interdum mattis,
                dui ante tempor erat, sit amet tempus ex felis sed lorem. Nam dictum blandit eleifend.
            </p>
        </div>
        <ul role="list" class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-2 xl:gap-x-10 mt-10">
            <li
                v-for="interview in interviews"
                :key="interview.id"
                class="overflow-hidden rounded-xl border border-gray-200"
            >
                <div class="flex items-center gap-x-4 border-b border-gray-900/5 bg-gray-50 px-4 py-6">
                    <font-awesome-icon
                        class="h-6 w-6 flex-none rounded-lg bg-white object-cover ring-1 ring-purple-900/10 p-3 text-purple-800"
                        :icon="['fas', types[interview.type]]"
                    />
                    <div>
                        <div class="text-lg font-bold leading-6 text-gray-900">
                            {{ interview.job_application.role }}
                        </div>
                        <div class="text-base font-medium leading-6 text-gray-900 italic">
                            at {{ interview.job_application.company }}
                        </div>
                    </div>
                    <Menu as="div" class="relative ml-auto">
                        <MenuButton class="-m-2.5 block p-2.5 text-gray-400 hover:text-gray-500">
                            <span class="sr-only">Open options</span>
                            <EllipsisHorizontalIcon class="h-5 w-5" aria-hidden="true" />
                        </MenuButton>
                        <transition
                            enter-active-class="transition ease-out duration-100"
                            enter-from-class="transform opacity-0 scale-95"
                            enter-to-class="transform opacity-100 scale-100"
                            leave-active-class="transition ease-in duration-75"
                            leave-from-class="transform opacity-100 scale-100"
                            leave-to-class="transform opacity-0 scale-95"
                        >
                            <MenuItems
                                class="absolute right-0 z-10 mt-0.5 w-32 origin-top-right rounded-md bg-white py-2 shadow-lg ring-1 ring-gray-900/5 focus:outline-none"
                            >
                                <MenuItem v-slot="{ active }">
                                    <a
                                        href="#"
                                        :class="[
                                            active ? 'bg-gray-50' : '',
                                            'block px-3 py-1 text-sm leading-6 text-gray-900',
                                        ]"
                                    >
                                        View
                                        <span class="sr-only">, {{ interview.job_application.role }}</span>
                                    </a>
                                </MenuItem>
                                <MenuItem v-slot="{ active }">
                                    <a
                                        href="#"
                                        :class="[
                                            active ? 'bg-gray-50' : '',
                                            'block px-3 py-1 text-sm leading-6 text-gray-900',
                                        ]"
                                    >
                                        Edit
                                        <span class="sr-only">, {{ interview.job_application.role }}</span>
                                    </a>
                                </MenuItem>
                            </MenuItems>
                        </transition>
                    </Menu>
                </div>
                <dl class="-my-3 divide-y divide-gray-100 px-4 py-4 text-sm leading-6">
                    <div class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Time:</dt>
                        <dd class="text-gray-700">
                            <time :datetime="interview.date_interviewed">
                                {{ dateTimeFormatter(interview.date_interviewed) }}
                            </time>
                        </dd>
                    </div>
                    <div v-if="interview.contacts.length" class="flex justify-between gap-x-4 py-3">
                        <dt class="text-gray-500">Contact:</dt>
                        <dd class="flex flex-col items-end gap-x-2">
                            <div class="font-medium text-gray-900">{{ interview.contacts[0].name }}</div>
                            <div class="font-medium text-gray-900">
                                {{ interview.contacts[0].email }}
                            </div>
                        </dd>
                    </div>
                </dl>
            </li>
        </ul>
        <button
            type="button"
            class="block rounded-md bg-gray-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 max-w-sm mx-auto mt-8"
        >
            View More Interviews
        </button>
    </div>
</template>
