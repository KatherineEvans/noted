<script>
import AppLayout from "@/Layouts/AppLayout.vue";

export default {
    components: { AppLayout },
    data: function () {
        return {};
    },
};
</script>

<template>
    <AppLayout>
        <div class="container mx-auto px-4 flex-grow">
            <div id="about">About</div>
            <div id="applications">Applications</div>
            <div id="interviews">Interviews</div>
        </div>
    </AppLayout>
</template>
