<script>
import NavBar from "../components/navbar/Nav.vue";
import Footer from "../components/footer/Footer.vue";
export default {
    components: { NavBar, Footer },
    data: function () {
        return {};
    },
};
</script>

<template>
    <div class="flex flex-col h-screen justify-between">
        <NavBar />

        <Footer />
    </div>
</template>
