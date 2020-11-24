<template>
    <div class="antialiased text-gray-900 font-sans">
        <Header />
        <body class="mb-10 mt-20">
            <router-view />
            <Alert />
        </body>
        <Footer />
    </div>
</template>

<script>
import Alert from "./../components/Alert";

import Header from "./../layouts/Header";
import Footer from "./../layouts/Footer";
export default {
    name: "app",
    components: {
        Header,
        Footer,
        Alert
    }
};
</script>
