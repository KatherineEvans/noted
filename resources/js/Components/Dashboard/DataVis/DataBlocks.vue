<script setup>
import { ArrowDownIcon, ArrowUpIcon } from "@heroicons/vue/20/solid";

const stats = [
    { name: "Total Applications", stat: "25", previousStat: "15", change: "60%", changeType: "increase" },
    {
        name: "Avg. Initial Interview Rate",
        stat: "34.16%",
        previousStat: "27.14%",
        change: "7.02%",
        changeType: "increase",
    },
    { name: "Avg. Second Round Rate", stat: "24.57%", previousStat: "28.62%", change: "4.05%", changeType: "decrease" },
];
</script>
<template>
    <div>
        <dl class="mt-5 grid grid-cols-1 overflow-hidden rounded-lg bg-white gap-y-4">
            <div v-for="item in stats" :key="item.name" class="px-4 py-5 sm:p-6 rounded-lg border">
                <dt class="text-base font-normal text-gray-900">{{ item.name }}</dt>
                <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                    <div class="flex items-baseline text-2xl font-semibold text-purple-800">
                        {{ item.stat }}
                        <span class="ml-2 text-sm font-medium text-gray-500">from {{ item.previousStat }}</span>
                    </div>

                    <div
                        :class="[
                            item.changeType === 'increase'
                                ? 'bg-green-100 text-green-800'
                                : 'bg-gray-100 text-gray-800',
                            'inline-flex items-baseline rounded-full px-2.5 py-0.5 text-sm font-medium md:mt-2 lg:mt-0',
                        ]"
                    >
                        <ArrowUpIcon
                            v-if="item.changeType === 'increase'"
                            class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-green-500"
                            aria-hidden="true"
                        />
                        <ArrowDownIcon
                            v-else
                            class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-gray-500"
                            aria-hidden="true"
                        />
                        <span class="sr-only">{{ item.changeType === "increase" ? "Increased" : "Decreased" }} by</span>
                        {{ item.change }}
                    </div>
                </dd>
            </div>
        </dl>
    </div>
</template>
