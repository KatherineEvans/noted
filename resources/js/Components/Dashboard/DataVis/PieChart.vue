<script>
import { defineComponent } from "vue";
import { Pie } from "vue-chartjs";
import { Chart, registerables } from "chart.js";

Chart.register(...registerables);

export default defineComponent({
    components: {
        PieChart: Pie,
    },
    data: function () {
        return {
            data: {
                labels: ["LinkedIn", "Otta", "Indeed"],
                datasets: [
                    {
                        label: "Applied to",
                        data: [30, 7, 14],
                        backgroundColor: ["rgb(6,95,70)", "rgb(22,163,74)", "rgb(74,222,128)"],
                        hoverOffset: 4,
                    },
                ],
            },
        };
    },
    props: {},
    mounted() {
        this.renderChart(this.data);
    },
});
</script>

<template>
    <div><pie-chart style="max-height: 300px" :data="data"></pie-chart></div>
</template>
