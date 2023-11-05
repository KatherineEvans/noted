<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Applications from "@/Components/Applications/Applications.vue";
import Interviews from "@/Components/Interviews/Interviews.vue";

export default {
    components: { AppLayout, Applications, Interviews },
    props: ["interviews", "jobApplications"],
    data: function () {
        return {};
    },
    mounted() {
        console.log(this.interviews, this.jobApplications);
    },
};
</script>

<template>
    <AppLayout>
        <div class="container mx-auto px-4 flex-grow divide-y">
            <div class="py-16" id="about">About</div>
            <div class="py-16" id="dashboard">Dashboard</div>
            <div class="py-16" id="interviews">
                <Interviews></Interviews>
            </div>
            <div class="py-16" id="applications">
                <Applications :applications="jobApplications"></Applications>
            </div>
        </div>
    </AppLayout>
</template>
