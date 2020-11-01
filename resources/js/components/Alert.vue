<template>
    <!-- Pin to bottom right corner -->
    <div class="absolute bottom-0 right-0 bg-gray-700" v-show="type != null">
        <div
            class="bg-blue-100 border border-blue-400 text-blue-700 px-4 py-3 rounded relative"
            role="alert"
            v-if="type"
        >
            <strong class="font-bold">Thành công! </strong>
            <span class="block sm:inline"></span>
        </div>
        <div
            class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative"
            role="alert"
            v-else
        >
            <strong class="font-bold">Holy smokes! {{ type }} {{ age }}</strong>
            <span class="block sm:inline">Có lỗi xảy ra.</span>
        </div>
    </div>
</template>
<script>
import EventBus from "./../event-bus";
export default {
    name: "Alert",

    data() {
        return {
            type: null,
            age: 12
        };
    },
    created() {
        EventBus.$on("SHOW_ALERT", this.resetAge);
    },
    methods: {
        resetAge($event) {
            this.type = $event;
        }
    }
};
</script>
