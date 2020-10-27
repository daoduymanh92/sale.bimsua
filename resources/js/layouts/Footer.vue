<template>
    <!-- footer -->
    <footer class="shadow-2xl bg-white">
        <nav id="footer" class="">
            <!-- start container -->
            <div class="container mx-auto pt-8 pb-4">
                <p class="text-center">This is footer</p>
                <!-- end container -->
            </div>
        </nav>
    </footer>
    <!-- end footer -->
</template>

<script>
import Repository from "../repositories/RepositoryFactory";
const PostRepository = Repository.get("posts");

import { mapState } from "vuex";

export default {
    name: "Posts",
    components: {},
    computed: {},
    data() {
        return {};
    },
    created() {
        this.getPosts();
    },
    methods: {
        getPosts: async function() {
            let data = this.$store.state.post.variable1;
            this.$store.dispatch("post/fetchVariable1", { self: this });
        }
    }
};
</script>
<style scoped></style>
