<script setup>
import { ChevronDownIcon } from "@heroicons/vue/20/solid";
import { formatCurrency } from "@/composables/formatCurrency";
import { formatDate } from "@/composables/formatDate";

const { currencyFormatter } = formatCurrency();
const { dateFormatter } = formatDate();

const props = defineProps(["applications"]);

const headers = [
    { id: 1, title: "Role" },
    { id: 2, title: "Company" },
    { id: 3, title: "Contact" },
    { id: 4, title: "Date Applied" },
    { id: 5, title: "Status" },
];

const statuses = { 1: "Applied", 2: "Interviewing", 3: "Offer", 4: "Rejected", 5: "No Response" };
const locations = { 1: "Remote", 2: "Hybrid", 3: "In Office" };
</script>
<template>
    <div>
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto mb-3">
                <h1 class="text-2xl font-semibold leading-6 text-gray-900">Job Applications</h1>
                <p class="mt-2 text-sm text-gray-700">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet, velit dapibus interdum
                    mattis, dui ante tempor erat, sit amet tempus ex felis sed lorem. Nam dictum blandit eleifend.
                </p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button
                    type="button"
                    class="block rounded-md bg-green-800 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-800"
                >
                    Add Application
                </button>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th
                                    v-for="header in headers"
                                    scope="col"
                                    class="py-3.5 text-left text-sm font-semibold text-gray-900"
                                >
                                    <a href="#" class="group inline-flex">
                                        {{ header.title }}
                                        <span
                                            class="invisible ml-2 flex-none rounded text-gray-400 group-hover:visible group-focus:visible"
                                        >
                                            <ChevronDownIcon
                                                class="invisible ml-2 h-5 w-5 flex-none rounded text-gray-400 group-hover:visible group-focus:visible"
                                                aria-hidden="true"
                                            />
                                        </span>
                                    </a>
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-0">
                                    <span class="sr-only">View/Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            <tr v-for="application in applications" :key="application.email">
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">
                                    <div class="font-medium text-gray-900">{{ application.role }}</div>
                                    <div class="mt-1 truncate text-gray-500">
                                        {{ currencyFormatter(application.projected_salary) }}
                                    </div>
                                    <div class="mt-1 truncate text-gray-500">
                                        {{ locations[application.location_type] }}
                                    </div>
                                </td>
                                <td
                                    class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 content-start flex flex-col"
                                >
                                    <a target="_blank" :href="application.website" class="font-medium text-gray-900">
                                        {{ application.company }}
                                    </a>
                                    <div class="mt-1 truncate text-gray-500">{{ application.location }}</div>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    <span v-if="application.contacts.length > 0">
                                        <div class="font-medium text-gray-900">{{ application.contacts[0].name }}</div>
                                        <div class="mt-1 truncate text-gray-500">
                                            {{ application.contacts[0].role }}
                                        </div>
                                        <div class="mt-1 truncate text-gray-500">
                                            {{ application.contacts[0].email }}
                                        </div>
                                    </span>
                                    <span v-else>
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            fill="none"
                                            viewBox="0 0 24 24"
                                            stroke-width="1.5"
                                            stroke="currentColor"
                                            class="w-6 h-6"
                                        >
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15" />
                                        </svg>
                                    </span>
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ dateFormatter(application.date_applied) }}
                                </td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                    {{ statuses[application.status] }}
                                </td>
                                <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm sm:pr-0">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">
                                        Edit
                                        <span class="sr-only">
                                            , {{ application.role }} at {{ application.company }}
                                        </span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <button
            type="button"
            class="block rounded-md bg-gray-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600 max-w-sm mx-auto mt-8"
        >
            View More Applications
        </button>
    </div>
</template>
