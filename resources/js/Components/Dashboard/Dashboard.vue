<script>
import { defineComponent } from "vue";
import PieChart from "@/Components/Dashboard/DataVis/PieChart.vue";
import DataBlocks from "@/Components/Dashboard/DataVis/DataBlocks.vue";

export default defineComponent({
    components: {
        PieChart,
        DataBlocks,
    },
    data: function () {
        return {};
    },
    props: {},
    mounted() {},
});
</script>

<template>
    <div>
        <h1 class="text-2xl font-semibold leading-6 text-gray-900">Highlights</h1>
        <p class="mt-2 text-sm text-gray-700">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc aliquet, velit dapibus interdum mattis, dui
            ante tempor erat, sit amet tempus ex felis sed lorem. Nam dictum blandit eleifend.
        </p>
    </div>
    <div class="mt-10 grid grid-cols-1 md:grid-cols-2">
        <div>
            <div>
                <DataBlocks></DataBlocks>
            </div>
        </div>
        <!-- <div>TEST</div> -->
        <div class="m-auto"><PieChart></PieChart></div>
    </div>
</template>
