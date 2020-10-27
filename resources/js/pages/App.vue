<template>
    <div class="antialiased text-gray-900">
        <Header />
        <body class="mb-10 mt-20">
            <router-view />
        </body>
        <Footer />
    </div>
</template>

<script>
import Navbar from "./../components/Navbar";
import Header from "./../layouts/Header";
import Footer from "./../layouts/Footer";
export default {
    name: "app",
    components: {
        Navbar,
        Header,
        Footer
    }
};
</script>
