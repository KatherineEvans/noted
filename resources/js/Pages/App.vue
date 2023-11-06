<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import Applications from "@/Components/Applications/Applications.vue";
import Interviews from "@/Components/Interviews/Interviews.vue";
import Welcome from "@/Components/Navbar/Welcome.vue";
import Dashboard from "@/Components/Dashboard/Dashboard.vue";

export default {
    components: { AppLayout, Applications, Interviews, Welcome, Dashboard },
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
        <Welcome></Welcome>
        <div class="container mx-auto px-4 flex-grow divide-y">
            <div class="py-12" id="dashboard">
                <Dashboard></Dashboard>
            </div>
            <div class="py-12" id="interviews">
                <Interviews :interviews="interviews"></Interviews>
            </div>
            <div class="py-12" id="applications">
                <Applications :applications="jobApplications"></Applications>
            </div>
        </div>
    </AppLayout>
</template>
