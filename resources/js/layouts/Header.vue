<template>
    <div
        class="bg-white sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3 shadow-xl fixed w-full z-10 top-0"
    >
        <div class="flex items-center justify-between px-4 py-3 sm:p-0">
            <div>
                <!-- <img
                    class="h-8"
                    src="https://tailwindui.com/img/tailwindui-logo.svg"
                    alt="Workcation"
                /> -->
                <p class="text-3xl font-black">AnAn</p>
            </div>
            <div class="sm:hidden">
                <button
                    @click="isOpen = !isOpen"
                    type="button"
                    class="block text-gray-500 hover:text-white focus:text-white focus:outline-none"
                >
                    <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                        <path
                            v-if="isOpen"
                            fill-rule="evenodd"
                            d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z"
                        />
                        <path
                            v-if="!isOpen"
                            fill-rule="evenodd"
                            d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z"
                        />
                    </svg>
                </button>
            </div>
        </div>
        <nav
            :class="isOpen ? 'block' : 'hidden'"
            class="px-2 pt-2 pb-4 sm:flex sm:p-0"
        >
            <a
                href="order"
                class="block px-2 py-1 text-black font-semibold rounded hover:bg-gray-800"
                >Tạo đơn</a
            >
            <a
                href="orders"
                class="mt-1 block px-2 py-1 text-black font-semibold rounded hover:bg-gray-800 sm:mt-0 sm:ml-2"
                >Danh sách</a
            >
            <a
                href="tickets"
                class="mt-1 block px-2 py-1 text-black font-semibold rounded hover:bg-gray-800 sm:mt-0 sm:ml-2"
                >Tư vấn</a
            >
        </nav>
    </div>
</template>

<script>
// import Repository from "../repositories/RepositoryFactory";
// const PostRepository = Repository.get("posts");

import { mapState } from "vuex";

export default {
    name: "Posts",
    components: {},
    computed: {},
    data() {
        return {
            isOpen: false
        };
    },
    created() {},
    methods: {}
};
</script>
<style scoped></style>
